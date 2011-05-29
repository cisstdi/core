<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Winans Creative 2009, Intelligent Spark 2010, iserv.ch GmbH 2010
 * @author     Fred Bliss <fred.bliss@intelligentspark.com>
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


class ModuleIsotopeProductFilter extends ModuleIsotope
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'iso_filter_default';

	protected $blnCacheRequest = false;


	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### ISOTOPE ECOMMERCE: PRODUCT FILTERS ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = $this->Environment->script.'?do=modules&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}
		
		$this->iso_filterFields = deserialize($this->iso_filterFields);
		$this->iso_sortingFields = deserialize($this->iso_sortingFields);
		$this->iso_searchFields = deserialize($this->iso_searchFields);

		if (!$this->iso_enableLimit && !is_array($this->iso_filterFields) && !is_array($this->iso_sortingFields) && !is_array($this->iso_searchFields))
		{
			return '';
		}

		if ($this->iso_filterTpl)
		{
			$this->strTemplate = $this->iso_filterTpl;
		}

		return parent::generate();
	}


	protected function compile()
	{
		$this->blnCacheRequest = $this->Input->post('FORM_SUBMIT') == 'iso_filter_'.$this->id ? true : false;

		$this->generateFilters();
		$this->generateSorting();
		$this->generateLimit();
		
		$strFilterUrl = preg_replace('/&?isorc=[0-9]+&?/', '', $this->Environment->request);

		// Cache request in the database and redirect to the unique requestcache ID
		if ($this->blnCacheRequest)
		{
			$time = time();
			$varFilter = is_array($GLOBALS['ISO_FILTERS']) ? serialize($GLOBALS['ISO_FILTERS']) : null;
			$varSorting = is_array($GLOBALS['ISO_SORTING']) ? serialize($GLOBALS['ISO_SORTING']) : null;
			$varLimit = is_array($GLOBALS['ISO_LIMIT']) ? serialize($GLOBALS['ISO_LIMIT']) : null;

			$intCacheId = $this->Database->prepare("SELECT id FROM tl_iso_requestcache WHERE store_id={$this->Isotope->Config->store_id} AND filters" . ($varFilter ? '=' : ' IS ') . "? AND sorting" . ($varSorting ? '=' : ' IS ') . "? AND limits" . ($varLimit ? '=' : ' IS ') . "?")
										 ->execute($varFilter, $varSorting, $varLimit)
										 ->id;

			if ($intCacheId)
			{
				$this->Database->query("UPDATE tl_iso_requestcache SET tstamp=$time WHERE id=$intCacheId");
			}
			else
			{
				$intCacheId = $this->Database->prepare("INSERT INTO tl_iso_requestcache (tstamp,store_id,filters,sorting,limits) VALUES ($time, {$this->Isotope->Config->store_id}, ?, ?, ?)")
											 ->execute($varFilter, $varSorting, $varLimit)
											 ->insertId;
			}

			
			$this->redirect($strFilterUrl . (strpos($strFilterUrl, '?')===false ? '?' : '&') . 'isorc=' . $intCacheId);
		}
		
		// Search does not affect request cache
		$this->generateSearch();

		$this->Template->id = $this->id;
		$this->Template->formId = 'iso_filter_' . $this->id;
		$this->Template->actionFilter = ampersand($strFilterUrl);
		$this->Template->actionSearch = ampersand(preg_replace('/&?keywords=[^&]+&?/', '', $this->Environment->request));
		$this->Template->actionClear = ampersand(preg_replace('/\?.*/', '', $this->Environment->request));
		$this->Template->clearLabel = $GLOBALS['TL_LANG']['MSC']['clearFiltersLabel'];
	}
	
	
	protected function generateSearch()
	{
		$this->Template->hasSearch = false;
		
		if (is_array($this->iso_searchFields) && count($this->iso_searchFields))
		{
			if ($this->Input->get('keywords') != '' && $this->Input->get('keywords') != $GLOBALS['TL_LANG']['MSC']['defaultSearchText'])
			{
				$arrKeywords = trimsplit(' ', $this->Input->get('keywords'));
				
				foreach( $arrKeywords as $keyword )
				{
					foreach( $this->iso_searchFields as $field )
					{
						$GLOBALS['ISO_FILTERS'][$this->id][] = array
						(
							'group'		=> ('keyword: '.$keyword),
							'operator'	=> 'search',
							'attribute'	=> $field,
							'value'		=> $keyword,
						);
					}
				}
			}

			$this->Template->hasSearch = true;
			$this->Template->keywordsLabel = $GLOBALS['TL_LANG']['MSC']['searchTermsLabel'];
			$this->Template->keywords = $this->Input->get('keywords');
			$this->Template->searchLabel = $GLOBALS['TL_LANG']['MSC']['searchLabel'];
			$this->Template->defaultSearchText = $GLOBALS['TL_LANG']['MSC']['defaultSearchText'];
		}
	}
	
	
	protected function generateFilters()
	{
		$this->Template->hasFilters = false;

		if (is_array($this->iso_filterFields) && count($this->iso_filterFields))
		{
			$arrFilters = array();
			$arrCategories = $this->findCategories($this->iso_category_scope);
			$arrInput = $this->Input->post('filter');
			
			foreach( $this->iso_filterFields as $strField )
			{
				$arrValues = $this->Database->execute("SELECT DISTINCT $strField FROM tl_iso_products WHERE id IN (SELECT pid FROM tl_iso_product_categories WHERE page_id IN (" . implode(',', $arrCategories) . ")) AND published='1' AND $strField!=''")
											->fetchEach($strField);

				if ($this->blnCacheRequest && in_array($arrInput[$strField], $arrValues))
				{
					$GLOBALS['ISO_FILTERS'][$this->id][$strField] = array
					(
						'operator'		=> '==',
						'attribute'		=> $strField,
						'value'			=> $arrInput[$strField],
					);
				}

				// Request cache contains wrong value, delete it!
				elseif (is_array($GLOBALS['ISO_FILTERS'][$this->id]) && !in_array($GLOBALS['ISO_FILTERS'][$this->id][$strField]['value'], $arrValues))
				{
					$this->blnCacheRequest = true;
					unset($GLOBALS['ISO_FILTERS'][$this->id][$strField]);

					$this->Database->prepare("DELETE FROM tl_iso_requestcache WHERE id=?")->execute($this->Input->get('isorc'));
				}

				// No need to generate options if we reload anyway
				elseif (!$this->blnCacheRequest)
				{
					if (!count($arrValues))
					{
						continue;
					}

					$arrData = $GLOBALS['TL_DCA']['tl_iso_products']['fields'][$strField];
	
					if (is_array($GLOBALS['ISO_ATTR'][$arrData['inputType']]['callback']) && count($GLOBALS['ISO_ATTR'][$arrData['inputType']]['callback']))
					{
						foreach( $GLOBALS['ISO_ATTR'][$arrData['inputType']]['callback'] as $callback )
						{
							$this->import($callback[0]);
							$arrData = $this->{$callback[0]}->{$callback[1]}($strField, $arrData, $this);
						}
					}

					// Use the default routine to initialize options data
					$arrWidget = $this->prepareForWidget($arrData, $strField);

					$arrOptions = $arrWidget['options'];
					foreach( $arrWidget['options'] as $k => $option )
					{
						if (!in_array($option['value'], $arrValues))
						{
							unset($arrOptions[$k]);
							continue;
						}

						$arrOptions[$k]['default'] = $option['value'] == $GLOBALS['ISO_FILTERS'][$this->id][$strField]['value'] ? '1' : '';
					}

					$arrFilters[$strField] = array
					(
						'label'		=> $arrWidget['label'],
						'options'	=> $arrOptions,
					);
				}
			}

			if (count($arrFilters))
			{
				$this->Template->hasFilters = true;
				$this->Template->filterOptions = $arrFilters;
			}
		}
	}
	
	
	protected function generateSorting()
	{
		$this->Template->hasSorting = false;

		if (is_array($this->iso_sortingFields) && count($this->iso_sortingFields))
		{
			$arrOptions = array();

			// Cache new request value
			// @todo should support multiple sorting fields
			list($sortingField, $sortingDirection) = explode(':', $this->Input->post('sorting'));
			
			if ($this->blnCacheRequest && in_array($sortingField, $this->iso_sortingFields))
			{
				$GLOBALS['ISO_SORTING'][$this->id][$sortingField] = array(($sortingDirection=='DESC' ? SORT_DESC : SORT_ASC), SORT_REGULAR);
			}
			
			// Request cache contains wrong value, delete it!
			elseif (is_array($GLOBALS['ISO_SORTING'][$this->id]) && array_diff(array_keys($GLOBALS['ISO_SORTING'][$this->id]), $this->iso_sortingFields))
			{
				$this->blnCacheRequest = true;
				unset($GLOBALS['ISO_SORTING'][$this->id]);
				
				$this->Database->prepare("DELETE FROM tl_iso_requestcache WHERE id=?")->execute($this->Input->get('isorc'));
			}
			
			// No need to generate options if we reload anyway
			elseif (!$this->blnCacheRequest)
			{
				foreach( $this->iso_sortingFields as $field )
				{
				
					// @todo this must be dynamic
					switch( $field )
					{
						case 'price':
							$asc = $GLOBALS['TL_LANG']['MSC']['low_to_high'];
							$desc = $GLOBALS['TL_LANG']['MSC']['high_to_low'];
							break;
		
						case 'datetime':
							$asc = $GLOBALS['TL_LANG']['MSC']['old_to_new'];
							$desc = $GLOBALS['TL_LANG']['MSC']['new_to_old'];
							break;
		
						case 'name':
						default:
							$asc = $GLOBALS['TL_LANG']['MSC']['a_to_z'];
							$desc = $GLOBALS['TL_LANG']['MSC']['z_to_a'];
							break;
					}

				
					$arrOptions[] = array
					(
						'label'		=> ($this->Isotope->formatLabel('tl_iso_products', $field) . ' ' . $asc),
						'value'		=> $field.':ASC',
						'default'	=> ((is_array($GLOBALS['ISO_SORTING'][$this->id]) && $GLOBALS['ISO_SORTING'][$this->id][$field][0] == SORT_ASC) ? '1' : ''),
					);
					
					$arrOptions[] = array
					(
						'label'		=> ($this->Isotope->formatLabel('tl_iso_products', $field) . ' ' . $desc),
						'value'		=> $field.':DESC',
						'default'	=> ((is_array($GLOBALS['ISO_SORTING'][$this->id]) && $GLOBALS['ISO_SORTING'][$this->id][$field][0] == SORT_DESC) ? '1' : ''),
					);
				}
			}

			$this->Template->hasSorting = true;
			$this->Template->sortingLabel = $GLOBALS['TL_LANG']['MSC']['orderByLabel'];
			$this->Template->sortingOptions = $arrOptions;
		}
	}
	
	
	protected function generateLimit()
	{
		$this->Template->hasLimit = false;
		if ($this->iso_enableLimit)
		{
			$arrOptions = array();
			$arrLimit = array_map('intval', trimsplit(',', $this->iso_perPage));
			$intLimit = $GLOBALS['ISO_LIMIT'][$this->id] ? $GLOBALS['ISO_LIMIT'][$this->id] : $arrLimit[0];
			$arrLimit = array_unique($arrLimit);
			sort($arrLimit);

			// Cache new request value
			if ($this->blnCacheRequest && in_array($this->Input->post('limit'), $arrLimit))
			{
				$GLOBALS['ISO_LIMIT'][$this->id] = (int)$this->Input->post('limit');
			}
			
			// Request cache contains wrong value, delete it!
			elseif ($GLOBALS['ISO_LIMIT'][$this->id] && !in_array($GLOBALS['ISO_LIMIT'][$this->id], $arrLimit))
			{
				$this->blnCacheRequest = true;
				$GLOBALS['ISO_LIMIT'][$this->id] = $intLimit;
				
				$this->Database->prepare("DELETE FROM tl_iso_requestcache WHERE id=?")->execute($this->Input->get('isorc'));
			}
			
			// No need to generate options if we reload anyway
			elseif (!$this->blnCacheRequest)
			{
				foreach( $arrLimit as $limit )
				{
					$arrOptions[] = array
					(
						'label'		=> $limit,
						'value'		=> $limit,
						'default'	=> ($intLimit == $limit ? '1' : ''),
					);
				}

				$this->Template->hasLimit = true;
				$this->Template->limitLabel = $GLOBALS['TL_LANG']['MSC']['perPageLabel'];
				$this->Template->limitOptions = $arrOptions;
			}
		}
	}
}

