<?php

/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2009-2012 Isotope eCommerce Workgroup
 *
 * @package    Isotope
 * @link       http://www.isotopeecommerce.com
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 */

namespace Isotope\Model;

/**
 * Isotope\Model\RequestCache represents an Isotope request cache model
 *
 * @copyright  Isotope eCommerce Workgroup 2009-2012
 * @author     Andreas Schempp <andreas.schempp@terminal42.ch>
 */
class RequestCache extends \Model
{

    /**
     * Name of the current table
     * @var string
     */
    protected static $strTable = 'tl_iso_requestcache';

    /**
     * Find cache by ID and store
     * @param   int
     * @param   int
     * @return  RequestCache|null
     */
    public static function findByIdAndStore($intId, $intStore, array $arrOptions=array())
    {
        return static::findOneBy(array('id=?', 'store_id=?'), array($intId, $intStore), $arrOptions);
    }

    /**
     * Delete a cache by ID
     * @param   int
     */
    public static function deleteById($intId)
    {
        return (\Database::getInstance()->prepare("DELETE FROM " . static::$strTable . " WHERE id=?")->execute($intId)->affectedRows > 0);
    }

    /**
     * Purge the request cache
     */
    public static function purge()
    {
        \Database::getInstance()->query("TRUNCATE " . static::$strTable);
    }
}
