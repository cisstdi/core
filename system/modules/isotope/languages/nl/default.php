<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
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
 * @copyright  Isotope eCommerce Workgroup 2009-2012
 * @author     Paul Kegel <paul@artified.nl>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

$GLOBALS['TL_LANG']['ERR']['systemColumn'] = '\'%s\' is gereserveerd voor gebruik in het systeem. Kies alstublieft een andere naam.';
$GLOBALS['TL_LANG']['ERR']['missingButtonTemplate'] = 'U moet een template selecteren voor button "%s".';
$GLOBALS['TL_LANG']['ERR']['order_conditions'] = 'U moet de voorwaarden selecteren om door te gaan';
$GLOBALS['TL_LANG']['ERR']['noStoreConfigurationSet'] = 'Er is geen Winkelinstellingen beschikbaar!';
$GLOBALS['TL_LANG']['ERR']['noDefaultStoreConfiguration'] = 'Maak een standaard winkelinstellingen aan.';
$GLOBALS['TL_LANG']['ERR']['productNameMissing'] = '<geen productnaam gevonden>';
$GLOBALS['TL_LANG']['ERR']['noSubProducts'] = 'geen sub-producten gevonden';
$GLOBALS['TL_LANG']['ERR']['emptyOrderHistory'] = 'U heeft nog geen bestellingen geplaatst';
$GLOBALS['TL_LANG']['ERR']['orderNotFound'] = 'De gevraagde bestelling is niet gevonden';
$GLOBALS['TL_LANG']['ERR']['missingCurrencyFormat'] = 'Huidige munteenheid niet gevonden';
$GLOBALS['TL_LANG']['ERR']['searchNotEnabled'] = 'Zoekfunctionaliteit is niet ingeschakeld';
$GLOBALS['TL_LANG']['ERR']['isoLoginRequired'] = 'U moet zijn ingelogd om af te kunnen rekenen';
$GLOBALS['TL_LANG']['ERR']['mandatoryOption'] = 'Selecteer een optie alstublieft';
$GLOBALS['TL_LANG']['ERR']['noAddressData'] = 'Adresinformatie is noodzakelijk om btw te kunnen berekenen!';
$GLOBALS['TL_LANG']['ERR']['variantDuplicate'] = 'Een variant met deze attributen is al beschikbaar. Selecteer een andere combinatie alstublieft.';
$GLOBALS['TL_LANG']['ERR']['breadcrumbEmpty'] = 'The gefilterde categorie is leeg, alle producten worden nu getoond.';
$GLOBALS['TL_LANG']['ERR']['discount'] = 'Voer hele getallen of decimalen ondertekend met + of - en eventueel met een percentage.';
$GLOBALS['TL_LANG']['ERR']['surcharge'] = 'Voer alstublieft een hele getallen of optioneel decimalen met een percentage';
$GLOBALS['TL_LANG']['ERR']['orderFailed'] = 'Afrekenen mislukt, probeer opnieuw of kies een andere wijze van betaling. Onze excuses voor het ongemak.';
$GLOBALS['TL_LANG']['ERR']['specifyBillingAddress'] = 'Er is geen factuur adres gevonden, voer alstublieft een factuuradres in.';
$GLOBALS['TL_LANG']['ERR']['cc_num'] = 'Voer een geldig creditcard nummer in.';
$GLOBALS['TL_LANG']['ERR']['cc_type'] = 'Selecteer een type creditcard alstublieft.';
$GLOBALS['TL_LANG']['ERR']['cc_exp'] = 'Voer alstublieft de creditcard verloopdatum in het formaat mm/jj.';
$GLOBALS['TL_LANG']['ERR']['cc_ccv'] = 'Voer uw creditcard verificatiecode nummer in (3 of 4 cijfers op de voorkant of achterkant van de kaart).';
$GLOBALS['TL_LANG']['ERR']['cc_match'] = 'Uw creditcard nummer komt niet overeen met het geselecteerde creditcard type.';
$GLOBALS['TL_LANG']['ERR']['addressDoesNotExist'] = 'Dit adres is niet gevonden in uw adressen.';
$GLOBALS['TL_LANG']['ERR']['noAddressBookEntries'] = 'U heeft nog geen adressen in uw adresboek.';
$GLOBALS['TL_LANG']['ERR']['cartMinSubtotal'] = 'Het minimale bestelbedrag is %s. Voeg nog iets toe aan uw winkelwagen voordat u gaat afrekenen.';
$GLOBALS['TL_LANG']['MSC']['editLanguage'] = 'Bewerken';
$GLOBALS['TL_LANG']['MSC']['deleteLanguage'] = 'Verwijderen';
$GLOBALS['TL_LANG']['MSC']['defaultLanguage'] = 'Terugval taal';
$GLOBALS['TL_LANG']['MSC']['editingLanguage'] = 'Let op! U bewerkt data die gekoppeld is aan een bepaalde taal!';
$GLOBALS['TL_LANG']['MSC']['deleteLanguageConfirm'] = 'Weet u zeker dat u deze taal wil verwijderen? Dit kan niet ongedaan worden gemaakt!';
$GLOBALS['TL_LANG']['MSC']['undefinedLanguage'] = 'niet toegewezen';
$GLOBALS['TL_LANG']['MSC']['copyFallback'] = 'Kopie reservepagina';
$GLOBALS['TL_LANG']['MSC']['noSurcharges'] = 'Er zijn geen toeslagen gevonden.';
$GLOBALS['TL_LANG']['MSC']['ajaxLoadingMessage'] = 'Laden...';
$GLOBALS['TL_LANG']['MSC']['orderDetailsHeadline'] = 'Ordernummer %s / %s';
$GLOBALS['TL_LANG']['MSC']['payment_processing'] = 'Uw betaling wordt voltooid, een moment geduld alstublieft...';
$GLOBALS['TL_LANG']['MSC']['authorizedotnet_process_failed'] = 'Uw betaling kon niet worden voltooid. <br /><br /> Oorzaak: %s';
$GLOBALS['TL_LANG']['MSC']['mmNoUploads'] = 'Geen bestanden geüpload.';
$GLOBALS['TL_LANG']['MSC']['mmUpload'] = 'Nieuw bestand uploaden';
$GLOBALS['TL_LANG']['MSC']['quantity'] = 'Aantal';
$GLOBALS['TL_LANG']['MSC']['order_conditions'] = 'Ik ga akkoord met de voorwaarden';
$GLOBALS['TL_LANG']['MSC']['defaultSearchText'] = 'zoek producten';
$GLOBALS['TL_LANG']['MSC']['blankSelectOptionLabel'] = '-';
$GLOBALS['TL_LANG']['MSC']['emptySelectOptionLabel'] = 'Selecteren...';
$GLOBALS['TL_LANG']['MSC']['downloadsLabel'] = 'Uw te downloaden producten';
$GLOBALS['TL_LANG']['MSC']['priceRangeLabel'] = '<span class="from">Van</span> %s';
$GLOBALS['TL_LANG']['MSC']['detailLabel'] = 'Bekijk details';
$GLOBALS['TL_LANG']['MSC']['searchTextBoxLabel'] = 'Zoekterm:';
$GLOBALS['TL_LANG']['MSC']['searchFieldsLabel'] = 'Zoekvelden:';
$GLOBALS['TL_LANG']['MSC']['perPageLabel'] = 'Producten per pagina';
$GLOBALS['TL_LANG']['MSC']['searchTermsLabel'] = 'Keywords';
$GLOBALS['TL_LANG']['MSC']['submitLabel'] = 'Filter';
$GLOBALS['TL_LANG']['MSC']['clearFiltersLabel'] = 'Leeg filter';
$GLOBALS['TL_LANG']['MSC']['buttonLabel']['update'] = 'Verversen';
$GLOBALS['TL_LANG']['MSC']['buttonLabel']['add_to_cart'] = 'In Winkelwagen';
$GLOBALS['TL_LANG']['MSC']['pagerSectionTitleLabel'] = 'Pagina:';
$GLOBALS['TL_LANG']['MSC']['orderByLabel'] = 'Sorteren op:';
$GLOBALS['TL_LANG']['MSC']['buttonActionString']['add_to_cart'] = 'Voeg product %s toe aan uw winkelwagen';
$GLOBALS['TL_LANG']['MSC']['noProducts'] = 'Geen producten gevonden';
$GLOBALS['TL_LANG']['MSC']['invalidProductInformation'] = 'Sorry, de product informatie die u gevraagd heeft is niet in onze winkel aanwezig. Heeft u hierover vragen, neem dan contact met ons op.';
$GLOBALS['TL_LANG']['MSC']['productOptionsLabel'] = 'Opties';
$GLOBALS['TL_LANG']['MSC']['previousStep'] = 'Terug';
$GLOBALS['TL_LANG']['MSC']['nextStep'] = 'Verder';
$GLOBALS['TL_LANG']['MSC']['confirmOrder'] = 'Bestellen';
$GLOBALS['TL_LANG']['MSC']['noCategoriesAssociated'] = 'Er zijn categorieën geassocieerd met dit product.';
$GLOBALS['TL_LANG']['MSC']['labelPerPage'] = 'Per Pagina';
$GLOBALS['TL_LANG']['MSC']['labelSortBy'] = 'Sorteren';
$GLOBALS['TL_LANG']['MSC']['labelSubmit'] = 'Verstuur';
$GLOBALS['TL_LANG']['MSC']['labelProductVariants'] = 'Kies';
$GLOBALS['TL_LANG']['MSC']['removeProductLinkText'] = 'Verwijderen';
$GLOBALS['TL_LANG']['MSC']['noItemsInCart'] = 'Er bevinden zich geen producten in uw winkelwagen';
$GLOBALS['TL_LANG']['MSC']['removeProductLinkTitle'] = 'Verwijder %s uit uw winkelwagen';
$GLOBALS['TL_LANG']['MSC']['subTotalLabel'] = 'Subtotaal bestelling:';
$GLOBALS['TL_LANG']['MSC']['shippingLabel'] = 'Verzending';
$GLOBALS['TL_LANG']['MSC']['paymentLabel'] = 'Wijze van betaling';
$GLOBALS['TL_LANG']['MSC']['taxLabel'] = '%s Belasting:';
$GLOBALS['TL_LANG']['MSC']['grandTotalLabel'] = 'Totaal bestelling:';
$GLOBALS['TL_LANG']['MSC']['shippingOptionsLabel'] = 'Geselecteerde verzendmethoden:';
$GLOBALS['TL_LANG']['MSC']['noVariants'] = 'Geen productvarianten gevonden.';
$GLOBALS['TL_LANG']['MSC']['generateSubproducts'] = 'Genereer subproducten';
$GLOBALS['TL_LANG']['MSC']['selectItemPrompt'] = '(selecteren)';
$GLOBALS['TL_LANG']['MSC']['actualPrice'] = 'Huidige prijs';
$GLOBALS['TL_LANG']['MSC']['noPaymentModules'] = 'Momenteel zijn er geen betalings opties beschikbaar';
$GLOBALS['TL_LANG']['MSC']['noShippingModules'] = 'Momenteel zijn er geen verzend opties beschikbaar.';
$GLOBALS['TL_LANG']['MSC']['noOrderEmails'] = 'Geen bestel e-mails gevonden.';
$GLOBALS['TL_LANG']['MSC']['noOrders'] = 'Geen orders gevonden.';
$GLOBALS['TL_LANG']['ISO']['couponsInputLabel'] = 'Kortingscode';
$GLOBALS['TL_LANG']['ISO']['couponsHeadline'] = 'Gebruik kortingscode';
$GLOBALS['TL_LANG']['ISO']['couponsSubmitLabel'] = 'Toepassen';
$GLOBALS['TL_LANG']['MSC']['cartBT'] = 'Winkelwagen';
$GLOBALS['TL_LANG']['MSC']['checkoutBT'] = 'Ga verder met afrekenen';
$GLOBALS['TL_LANG']['MSC']['continueShoppingBT'] = 'Verder winkelen';
$GLOBALS['TL_LANG']['MSC']['updateCartBT'] = 'Winkelwagen bijwerken';
$GLOBALS['TL_LANG']['MSC']['orderStatusHeadline'] = 'Status van de bestelling: %s';
$GLOBALS['TL_LANG']['MSC']['checkboutStepBack'] = 'Ga terug naar stap "%s"';
$GLOBALS['TL_LANG']['MSC']['createNewAddressLabel'] = 'Maak een nieuw adres aan';
$GLOBALS['TL_LANG']['MSC']['useBillingAddress'] = 'Gebruik het factuur-adres';
$GLOBALS['TL_LANG']['MSC']['useCustomerAddress'] = 'Gebruik het standaard klant-adres';
$GLOBALS['TL_LANG']['MSC']['differentShippingAddress'] = 'Ander aflever adres';
$GLOBALS['TL_LANG']['MSC']['addressBookLabel'] = 'Adres';
$GLOBALS['TL_LANG']['MSC']['editAddressLabel'] = 'Wijzigen';
$GLOBALS['TL_LANG']['MSC']['deleteAddressLabel'] = 'Verwijderen';
$GLOBALS['TL_LANG']['MSC']['iso_invoice_title'] = 'Factuur';
$GLOBALS['TL_LANG']['MSC']['iso_order_status'] = 'Status';
$GLOBALS['TL_LANG']['MSC']['iso_order_date'] = 'Bestel datum';
$GLOBALS['TL_LANG']['MSC']['iso_billing_address_header'] = 'Factuur adres';
$GLOBALS['TL_LANG']['MSC']['iso_shipping_address_header'] = 'Aflever adres';
$GLOBALS['TL_LANG']['MSC']['iso_tax_header'] = 'Belasting';
$GLOBALS['TL_LANG']['MSC']['iso_subtotal_header'] = 'subtotaal';
$GLOBALS['TL_LANG']['MSC']['iso_order_shipping_header'] = 'Verzend & administratie';
$GLOBALS['TL_LANG']['MSC']['iso_order_grand_total_header'] = 'Totaal';
$GLOBALS['TL_LANG']['MSC']['iso_order_items'] = 'Artikelen';
$GLOBALS['TL_LANG']['MSC']['iso_order_sku'] = 'Voorraad eenheid';
$GLOBALS['TL_LANG']['MSC']['iso_quantity_header'] = 'Aantal';
$GLOBALS['TL_LANG']['MSC']['iso_price_header'] = 'Prijs';
$GLOBALS['TL_LANG']['MSC']['iso_sku_header'] = 'Artikelnr.';
$GLOBALS['TL_LANG']['MSC']['iso_product_name_header'] = 'Productnaam';
$GLOBALS['TL_LANG']['MSC']['iso_card_name_title'] = 'Naam op creditcard';
$GLOBALS['TL_LANG']['ORDER']['pending'] = 'In behandeling';
$GLOBALS['TL_LANG']['ORDER']['processing'] = 'Wordt verwerkt';
$GLOBALS['TL_LANG']['ORDER']['complete'] = 'Afgehandeld';
$GLOBALS['TL_LANG']['ORDER']['on_hold'] = 'Wachtend';
$GLOBALS['TL_LANG']['ORDER']['cancelled'] = 'Geanuleerd';
$GLOBALS['TL_LANG']['MSC']['low_to_high'] = 'laag - hoog';
$GLOBALS['TL_LANG']['MSC']['high_to_low'] = 'hoog - laag';
$GLOBALS['TL_LANG']['MSC']['a_to_z'] = 'A - Z';
$GLOBALS['TL_LANG']['MSC']['z_to_a'] = 'Z - A';
$GLOBALS['TL_LANG']['MSC']['old_to_new'] = 'oud - nieuw';
$GLOBALS['TL_LANG']['MSC']['new_to_old'] = 'nieuw - oud';
$GLOBALS['ISO_LANG']['MSC']['useDefault'] = 'Gebruik standaard waarde';
$GLOBALS['TL_LANG']['ISO']['productSingle'] = '1 Product';
$GLOBALS['TL_LANG']['ISO']['productMultiple'] = '%s producten';
$GLOBALS['TL_LANG']['ISO']['shipping_address_message'] = 'Voer uw gegevens voor het verzend-adres in of kies een bestaand adres.';
$GLOBALS['TL_LANG']['ISO']['billing_address_message'] = 'Voer uw gegevens voor het factuur-adres in of kies een bestaand adres.';
$GLOBALS['TL_LANG']['ISO']['billing_address_guest_message'] = 'Geef uw facturatie gegevens';
$GLOBALS['TL_LANG']['ISO']['customer_address_message'] = 'Voer uw klant informatie in of kies een bestaand adres.';
$GLOBALS['TL_LANG']['ISO']['customer_address_guest_message'] = 'Voer uw klant-gegevens in';
$GLOBALS['TL_LANG']['ISO']['shipping_method_message'] = 'Kies een verzendmethode.';
$GLOBALS['TL_LANG']['ISO']['shipping_method_missing'] = 'Kies aub een verzendmethode.';
$GLOBALS['TL_LANG']['ISO']['payment_method_message'] = 'Kies een wijze van betaling.';
$GLOBALS['TL_LANG']['ISO']['payment_method_missing'] = 'Kies aub een wijze van betaling.';
$GLOBALS['TL_LANG']['ISO']['order_review_message'] = 'Controleer en bevestig uw bestelling';
$GLOBALS['TL_LANG']['ISO']['checkout_address'] = 'Adres';
$GLOBALS['TL_LANG']['ISO']['checkout_shipping'] = 'Verzending';
$GLOBALS['TL_LANG']['ISO']['checkout_payment'] = 'Betaling';
$GLOBALS['TL_LANG']['ISO']['checkout_review'] = 'Controleren';
$GLOBALS['TL_LANG']['ISO']['billing_address'] = 'Factuuradres';
$GLOBALS['TL_LANG']['ISO']['shipping_address'] = 'Afleveradres';
$GLOBALS['TL_LANG']['ISO']['billing_shipping_address'] = 'Factuur- & afleveradres';
$GLOBALS['TL_LANG']['ISO']['customer_address'] = 'Klant-adres';
$GLOBALS['TL_LANG']['ISO']['shipping_method'] = 'Verzendmethode';
$GLOBALS['TL_LANG']['ISO']['payment_method'] = 'Wijze van betaling';
$GLOBALS['TL_LANG']['ISO']['order_conditions'] = 'Leveringsvoorwaarden';
$GLOBALS['TL_LANG']['ISO']['order_review'] = 'Bestelling controleren';
$GLOBALS['TL_LANG']['ISO']['changeCheckoutInfo'] = 'Wijzigen';
$GLOBALS['TL_LANG']['ISO']['cc_num'] = 'Creditcard nummer';
$GLOBALS['TL_LANG']['ISO']['cc_type'] = 'Creditcard type';
$GLOBALS['TL_LANG']['ISO']['cc_ccv'] = 'CCV nummer (3 of 4 cijferige code)';
$GLOBALS['TL_LANG']['ISO']['cc_exp_paypal'] = 'vervaldatum';
$GLOBALS['TL_LANG']['ISO']['cc_exp_date'] = 'verval maand/jaar';
$GLOBALS['TL_LANG']['ISO']['cc_exp_month'] = 'verval maand';
$GLOBALS['TL_LANG']['ISO']['cc_exp_year'] = 'verval jaar';
$GLOBALS['TL_LANG']['ISO']['cc_issue_number'] = 'Creditcard uitgifte nummer, 2 cijfers (verplicht voor Maestro en Solo creditcards).';
$GLOBALS['TL_LANG']['ISO']['cc_start_date'] = 'Creditcard afgiftedatum (verplicht voor Maestro en Solo creditcards).';
$GLOBALS['TL_LANG']['MSC']['pay_with_cc'][0] = 'Betaling wordt verwerkt';
$GLOBALS['TL_LANG']['MSC']['pay_with_cc'][1] = 'Geef de benodigde informatie om uw betaling te verwerken.';
$GLOBALS['TL_LANG']['MSC']['pay_with_cc'][2] = 'Nu betalen';
$GLOBALS['TL_LANG']['MSC']['pay_with_redirect'][0] = 'Betaling wordt verwerkt';
$GLOBALS['TL_LANG']['MSC']['pay_with_redirect'][1] = 'U wordt nu naar de website van de betalingsaanbieder doorgestuurd. Indien u niet automatisch wordt doorgestuurd, druk dan op de "Nu betalen" knop.';
$GLOBALS['TL_LANG']['MSC']['pay_with_redirect'][2] = 'Nu betalen';
$GLOBALS['TL_LANG']['MSC']['backendPaymentEPay'] = 'Gebruik het volgende adres om het ePay admin paneel te bereiken';
$GLOBALS['TL_LANG']['ISO']['backendPaymentNotFound'] = 'Betaal-module niet gevonden!';
$GLOBALS['TL_LANG']['ISO']['backendShippingNotFound'] = 'Verzend-module niet gevonden!';
$GLOBALS['TL_LANG']['ISO']['backendPaymentNoInfo'] = 'Deze betaal-module bevat geen nadere informatie.';
$GLOBALS['TL_LANG']['ISO']['backendShippingNoInfo'] = 'Deze verzend-module bevat geen nadere informatie.';
$GLOBALS['ISO_LANG']['SHIP']['flat'][0] = 'Verzending volgens standaard tarief';
$GLOBALS['ISO_LANG']['SHIP']['weight_total'][0] = 'Verzending volgens tariet gebaseerd op het gewicht';
$GLOBALS['ISO_LANG']['SHIP']['order_total'][0] = 'Verzending volgens tarief gebaseerd op het totaal bedrag';
$GLOBALS['ISO_LANG']['SHIP']['collection'][0] = 'Afhalen';
$GLOBALS['ISO_LANG']['SHIP']['ups'][0] = 'UPS Actuele Tarieven en Verzendservice';
$GLOBALS['ISO_LANG']['SHIP']['usps'][0] = 'USPS Actuele Tarieven en Verzendservice';
$GLOBALS['ISO_LANG']['PAY']['cash'][0] = 'Contant';
$GLOBALS['ISO_LANG']['PAY']['cash'][1] = 'Gebruik dit voor alle off line verwerkte betalingen.';
$GLOBALS['ISO_LANG']['PAY']['paypal'][0] = 'PayPal Standard Checkout';
$GLOBALS['ISO_LANG']['PAY']['paypal'][1] = 'Deze PayPal module ondersteunt IPN (Instant Payment Notifications).';
$GLOBALS['ISO_LANG']['PAY']['paypalpayflowpro'][0] = 'PayPal Payflow Pro';
$GLOBALS['ISO_LANG']['PAY']['paypalpayflowpro'][1] = 'De PayPal PayFlow module is een volledige creditcard gateway, een robuste oplossing voor de meeste e-commerce websites.';
$GLOBALS['ISO_LANG']['PAY']['postfinance'][0] = 'Postfinance';
$GLOBALS['ISO_LANG']['PAY']['postfinance'][1] = 'Betaal portal voor het Swiss Post betalings systeem dat verschillende type kaarten ondersteunt. De webshop krijgt direkt een melding van succesvolle transacties.';
$GLOBALS['ISO_LANG']['PAY']['authorizedotnet'][0] = 'Authorize.net';
$GLOBALS['ISO_LANG']['PAY']['authorizedotnet'][1] = 'Een Authorize.net betaal portal.';
$GLOBALS['ISO_LANG']['PAY']['cybersource'][0] = 'Cybersource';
$GLOBALS['ISO_LANG']['PAY']['cybersource'][1] = 'Voor Cybersource gebruikers. Gebruikt de "Simple Order API" methode.';
$GLOBALS['ISO_LANG']['GAL']['default'][0] = 'Default gallery (Lightbox/Mediabox)';
$GLOBALS['ISO_LANG']['GAL']['default'][1] = '<p>Gebruikt lightbox/mediabox voor volledige afbeeldingen. Zorg dat de juiste moo_ template in de page layout aanwezig is.</p><p>U kunt een "rel" attribuut opgeven om naar een target te linking door gebruik van een pipe (bv. "tl_files/video.mov|lightbox[400 300]"). Indien geen "rel" attribuut is gegeven wordt de link in een nieuw venster vertoond.</p>';
$GLOBALS['ISO_LANG']['GAL']['inline'][0] = 'Inline foto album';
$GLOBALS['ISO_LANG']['GAL']['inline'][1] = '<p>klikken op de album afbeelding opent het album in plaats van de hoofd-afbeelding. De hoofd afbeelding moet twee keer geüpload worden om in het album beschikbaar te komen.</p>';
$GLOBALS['ISO_LANG']['PRODUCT']['regular'][0] = 'Standaard product';
$GLOBALS['ISO_LANG']['PRODUCT']['regular'][1] = 'Een standaard product. Selecteer dit als niets anders van toepassing is.';
$GLOBALS['ISO_LANG']['CCT']['mc'] = 'MasterCard';
$GLOBALS['ISO_LANG']['CCT']['visa'] = 'Visa';
$GLOBALS['ISO_LANG']['CCT']['amex'] = 'American Express';
$GLOBALS['ISO_LANG']['CCT']['discover'] = 'Discover';
$GLOBALS['ISO_LANG']['CCT']['jcb'] = 'JCB';
$GLOBALS['ISO_LANG']['CCT']['diners'] = 'Diner\'s Club';
$GLOBALS['ISO_LANG']['CCT']['enroute'] = 'EnRoute';
$GLOBALS['ISO_LANG']['CCT']['carte_blanche'] = 'Carte Blanche';
$GLOBALS['ISO_LANG']['CCT']['jal'] = 'JAL';
$GLOBALS['ISO_LANG']['CCT']['maestro'] = 'Maestro UK';
$GLOBALS['ISO_LANG']['CCT']['delta'] = 'Delta';
$GLOBALS['ISO_LANG']['CCT']['solo'] = 'Solo';
$GLOBALS['ISO_LANG']['CCT']['visa_electron'] = 'Visa Electron';
$GLOBALS['ISO_LANG']['CCT']['dankort'] = 'Dankort';
$GLOBALS['ISO_LANG']['CCT']['laser'] = 'Laser';
$GLOBALS['ISO_LANG']['CCT']['carte_bleue'] = 'Carte Bleue';
$GLOBALS['ISO_LANG']['CCT']['carta_si'] = 'Carta Si';
$GLOBALS['ISO_LANG']['CCT']['enc_acct_num'] = 'Versleuteld rekening nummer';
$GLOBALS['ISO_LANG']['CCT']['uatp'] = 'Universal Air Travel Program';
$GLOBALS['ISO_LANG']['CCT']['maestro_intl'] = 'Maestro International';
$GLOBALS['ISO_LANG']['CCT']['ge_money_uk'] = 'GE Money UK';
$GLOBALS['ISO_LANG']['WGT']['mg'][0] = 'Milligram (mg)';
$GLOBALS['ISO_LANG']['WGT']['mg'][1] = 'Een massa gelijk aan een duizendste van een gram.';
$GLOBALS['ISO_LANG']['WGT']['g'][0] = 'Gram (g)';
$GLOBALS['ISO_LANG']['WGT']['g'][1] = 'Een metrische waarde gelijk aan een duizendste kilogram.';
$GLOBALS['ISO_LANG']['WGT']['kg'][0] = 'Kilogram (kg)';
$GLOBALS['ISO_LANG']['WGT']['kg'][1] = 'Een kilogram is gelijk aan 1.000 gram of 2,2 "pounds"; de massa van een liter water.';
$GLOBALS['ISO_LANG']['WGT']['t'][0] = 'Ton (t)';
$GLOBALS['ISO_LANG']['WGT']['t'][1] = 'Een massa gelijk aan 1.000 kilogram of 2.204,6 "pounds".';
$GLOBALS['ISO_LANG']['WGT']['ct'][0] = 'Karaat (ct)';
$GLOBALS['ISO_LANG']['WGT']['ct'][1] = 'Een massa aanduiding gebruikt bij juwelen. Een karaat is gelijk aan 1/5 gram (200 mg). De karaat met een "K" is een maat voor de zuiverheid van een goud-legering.';
$GLOBALS['ISO_LANG']['WGT']['oz'][0] = 'Ounce (oz)';
$GLOBALS['ISO_LANG']['WGT']['oz'][1] = '1/16 pound of 28,35 gram.';
$GLOBALS['ISO_LANG']['WGT']['lb'][0] = 'Pound (lb)';
$GLOBALS['ISO_LANG']['WGT']['lb'][1] = '16 ounces';
$GLOBALS['ISO_LANG']['WGT']['st'][0] = 'Stone (st)';
$GLOBALS['ISO_LANG']['WGT']['st'][1] = 'Een Britse massa aanduiding, gelijk aan 14 pounds.';
$GLOBALS['ISO_LANG']['WGT']['grain'][0] = 'Grain';
$GLOBALS['ISO_LANG']['WGT']['grain'][1] = '1/7000 pound; ook wel een "troy grain" of 64,799 milligram.';
$GLOBALS['ISO_LANG']['ATTR']['text'][0] = 'Tekst veld';
$GLOBALS['ISO_LANG']['ATTR']['text'][1] = 'Een invoerveld van één regel voor korte tot middellange tekst.';
$GLOBALS['ISO_LANG']['ATTR']['textarea'][0] = 'Tekst blok';
$GLOBALS['ISO_LANG']['ATTR']['textarea'][1] = 'Een invoerveld van meerdere regels voor midellange tot lange tekst.';
$GLOBALS['ISO_LANG']['ATTR']['select'][0] = 'Selectie menu';
$GLOBALS['ISO_LANG']['ATTR']['select'][1] = 'Een één- of meer-regelig drop-down menu.<br /><i>Dit veld is geschikt voor product varianten.</i>';
$GLOBALS['ISO_LANG']['ATTR']['radio'][0] = 'Keuzetoets menu';
$GLOBALS['ISO_LANG']['ATTR']['radio'][1] = 'Een lijst met meerdere opties waarvan er één gekozen kan worden.<br /><i>Dit type veld is geschikt voor product varianten.</i>';
$GLOBALS['ISO_LANG']['ATTR']['checkbox'][0] = 'Aanvink menu';
$GLOBALS['ISO_LANG']['ATTR']['checkbox'][1] = 'Een lijst met meerdere opties die geselecteerd kunnen worden.';
$GLOBALS['ISO_LANG']['ATTR']['mediaManager'][0] = 'Media beheer';
$GLOBALS['ISO_LANG']['ATTR']['mediaManager'][1] = 'Upload afbeeldingen en andere bestanden in het Isotope eCommerce file systeem. Uitvoer wordt verzorgd door de IsotopeGallery class.';
$GLOBALS['ISO_LANG']['ATTR']['conditionalselect'][0] = 'Conditioneel Keuze Menu';
$GLOBALS['ISO_LANG']['ATTR']['conditionalselect'][1] = 'Laat select-opties zien gebaseerd op een ander select menu.';
$GLOBALS['ISO_LANG']['CUR']['AED'] = 'AED - VAE-dirham';
$GLOBALS['ISO_LANG']['CUR']['AFN'] = 'AFN - Afghani';
$GLOBALS['ISO_LANG']['CUR']['ALL'] = 'ALL - Lek';
$GLOBALS['ISO_LANG']['CUR']['AMD'] = 'AMD - Dram';
$GLOBALS['ISO_LANG']['CUR']['ANG'] = 'ANG - Nederlands-Antilliaanse Gulden';
$GLOBALS['ISO_LANG']['CUR']['AOA'] = 'AOA - Kwanza';
$GLOBALS['ISO_LANG']['CUR']['ARS'] = 'ARS - Argentijnse Peso';
$GLOBALS['ISO_LANG']['CUR']['AUD'] = 'AUD - Australische Dollar';
$GLOBALS['ISO_LANG']['CUR']['AWG'] = 'AWG - Arubaanse Gulden';
$GLOBALS['ISO_LANG']['CUR']['AZN'] = 'AZN - Azerbeidzjaanse Manat';
$GLOBALS['ISO_LANG']['CUR']['BAM'] = 'BAM - Bosnische Convertibele Mark';
$GLOBALS['ISO_LANG']['CUR']['BBD'] = 'BBD - Barbadosdollar';
$GLOBALS['ISO_LANG']['CUR']['BDT'] = 'BDT - Taka';
$GLOBALS['ISO_LANG']['CUR']['BGN'] = 'BGN - Lev';
$GLOBALS['ISO_LANG']['CUR']['BHD'] = 'BHD - Bahreindinar';
$GLOBALS['ISO_LANG']['CUR']['BIF'] = 'BIF - Burundese frank';
$GLOBALS['ISO_LANG']['CUR']['BMD'] = 'BMD - Bermudadollar';
$GLOBALS['ISO_LANG']['CUR']['BND'] = 'BND - Bruneidollar';
$GLOBALS['ISO_LANG']['CUR']['BOB'] = 'BOB - Boliviano';
$GLOBALS['ISO_LANG']['CUR']['BRL'] = 'BRL - Real';
$GLOBALS['ISO_LANG']['CUR']['BSD'] = 'BSD - Bahamadollar';
$GLOBALS['ISO_LANG']['CUR']['BTN'] = 'BTN - Ngultrum';
$GLOBALS['ISO_LANG']['CUR']['BWP'] = 'BWP - Pula';
$GLOBALS['ISO_LANG']['CUR']['BYR'] = 'BYR - Belarussische Roebel';
$GLOBALS['ISO_LANG']['CUR']['BZD'] = 'BZD - Belizedollar';
$GLOBALS['ISO_LANG']['CUR']['CAD'] = 'CAD - Canadese Dollar';
$GLOBALS['ISO_LANG']['CUR']['CDZ'] = 'CDZ - Nieuw Zaïre';
$GLOBALS['ISO_LANG']['CUR']['CHF'] = 'CHF - Zwitserse Frank';
$GLOBALS['ISO_LANG']['CUR']['CLF'] = 'CLF - Chileense Unidad de Fomento';
$GLOBALS['ISO_LANG']['CUR']['CLP'] = 'CLP - Chileense Peso';
$GLOBALS['ISO_LANG']['CUR']['CNY'] = 'CNY - Renminbi Yuan';
$GLOBALS['ISO_LANG']['CUR']['COP'] = 'COP - Colombiaanse Peso';
$GLOBALS['ISO_LANG']['CUR']['CRC'] = 'CRC - Costa Ricaanse Colón';
$GLOBALS['ISO_LANG']['CUR']['CUP'] = 'CUP - Cubaanse Peso';
$GLOBALS['ISO_LANG']['CUR']['CVE'] = 'CVE - Kaapverdische Escudo';
$GLOBALS['ISO_LANG']['CUR']['CZK'] = 'CZK - Tsjechische Kroon';
$GLOBALS['ISO_LANG']['CUR']['DJF'] = 'DJF - Djiboutifrank';
$GLOBALS['ISO_LANG']['CUR']['DKK'] = 'DKK - Deense Kroon';
$GLOBALS['ISO_LANG']['CUR']['DOP'] = 'DOP - Dominicaanse Peso';
$GLOBALS['ISO_LANG']['CUR']['DZD'] = 'DZD - Algerijnse Dinar';
$GLOBALS['ISO_LANG']['CUR']['EEK'] = 'EEK - Estlandse Kroon';
$GLOBALS['ISO_LANG']['CUR']['EGP'] = 'EGP - Egyptisch Pond';
$GLOBALS['ISO_LANG']['CUR']['ERN'] = 'ERN - Nakfa';
$GLOBALS['ISO_LANG']['CUR']['ETB'] = 'ETB - Birr';
$GLOBALS['ISO_LANG']['CUR']['EUR'] = 'EUR - Euro';
$GLOBALS['ISO_LANG']['CUR']['FJD'] = 'FJD - Fijidollar';
$GLOBALS['ISO_LANG']['CUR']['FKP'] = 'FKP - Pond van de Falklandeilanden';
$GLOBALS['ISO_LANG']['CUR']['GBP'] = 'GBP - Pond Sterling';
$GLOBALS['ISO_LANG']['CUR']['GEL'] = 'GEL - Lari';
$GLOBALS['ISO_LANG']['CUR']['GHS'] = 'GHS - Ghana Cedi';
$GLOBALS['ISO_LANG']['CUR']['GIP'] = 'GIP - Gibraltarees Pond';
$GLOBALS['ISO_LANG']['CUR']['GMD'] = 'GMD - Dalasi';
$GLOBALS['ISO_LANG']['CUR']['GNS'] = 'GNS - Syli (ook bekend als Guinea Franc)';
$GLOBALS['ISO_LANG']['CUR']['GTQ'] = 'GTQ - Quetzal';
$GLOBALS['ISO_LANG']['CUR']['GYD'] = 'GYD - Guyanadollar';
$GLOBALS['ISO_LANG']['CUR']['HKD'] = 'HKD - Hongkongdollar';
$GLOBALS['ISO_LANG']['CUR']['HNL'] = 'HNL - Lempira';
$GLOBALS['ISO_LANG']['CUR']['HRD'] = 'HRD - Kroatische Dinar';
$GLOBALS['ISO_LANG']['CUR']['HRK'] = 'HRK - Kroatische Kuna';
$GLOBALS['ISO_LANG']['CUR']['HTG'] = 'HTG - Gourde';
$GLOBALS['ISO_LANG']['CUR']['HUF'] = 'HUF - Forint';
$GLOBALS['ISO_LANG']['CUR']['IDR'] = 'IDR - Indonesische Rupiah';
$GLOBALS['ISO_LANG']['CUR']['ILS'] = 'ILS - Sjekel';
$GLOBALS['ISO_LANG']['CUR']['INR'] = 'INR - Indiase Roepie';
$GLOBALS['ISO_LANG']['CUR']['IQD'] = 'IQD - Iraakse Dinar';
$GLOBALS['ISO_LANG']['CUR']['IRR'] = 'IRR - Iraanse Rial';
$GLOBALS['ISO_LANG']['CUR']['ISK'] = 'ISK - Ijslandse Kroon';
$GLOBALS['ISO_LANG']['CUR']['JMD'] = 'JMD - Jamaicandollar';
$GLOBALS['ISO_LANG']['CUR']['JOD'] = 'JOD - Jordaanse Dinar';
$GLOBALS['ISO_LANG']['CUR']['JPY'] = 'JPY - Yen';
$GLOBALS['ISO_LANG']['CUR']['KES'] = 'KES - Keniaanse Shilling';
$GLOBALS['ISO_LANG']['CUR']['KGS'] = 'KGS - Som';
$GLOBALS['ISO_LANG']['CUR']['KHR'] = 'KHR - Riel';
$GLOBALS['ISO_LANG']['CUR']['KMF'] = 'KMF - Comorenfrank';
$GLOBALS['ISO_LANG']['CUR']['KPW'] = 'KPW - Noord-Koreaanse Won';
$GLOBALS['ISO_LANG']['CUR']['KRW'] = 'KRW - Zuid-Koreaanse Won';
$GLOBALS['ISO_LANG']['CUR']['KWD'] = 'KWD - Koeweitse Dinar';
$GLOBALS['ISO_LANG']['CUR']['KYD'] = 'KYD - Dollar van de Caymaneilanden';
$GLOBALS['ISO_LANG']['CUR']['KZT'] = 'KZT - Tenge';
$GLOBALS['ISO_LANG']['CUR']['LAK'] = 'LAK - Kip';
$GLOBALS['ISO_LANG']['CUR']['LBP'] = 'LBP - Libanees Pond';
$GLOBALS['ISO_LANG']['CUR']['LKR'] = 'LKR - Srilankaanse Roepie';
$GLOBALS['ISO_LANG']['CUR']['LRD'] = 'LRD - Liberiaanse Dollar';
$GLOBALS['ISO_LANG']['CUR']['LSL'] = 'LSL - Loti';
$GLOBALS['ISO_LANG']['CUR']['LSM'] = 'LSM - Maloti';
$GLOBALS['ISO_LANG']['CUR']['LTL'] = 'LTL - Litas';
$GLOBALS['ISO_LANG']['CUR']['LVL'] = 'LVL - Lats';
$GLOBALS['ISO_LANG']['CUR']['LYD'] = 'LYD - Libische Dinar';
$GLOBALS['ISO_LANG']['CUR']['MAD'] = 'MAD - Marokkaanse Dirham';
$GLOBALS['ISO_LANG']['CUR']['MDL'] = 'MDL - Moldavische Leu';
$GLOBALS['ISO_LANG']['CUR']['MGA'] = 'MGA - Ariary';
$GLOBALS['ISO_LANG']['CUR']['MKD'] = 'MKD - Denar';
$GLOBALS['ISO_LANG']['CUR']['MMK'] = 'MMK - Kyat';
$GLOBALS['ISO_LANG']['CUR']['MNT'] = 'MNT - Tugrik';
$GLOBALS['ISO_LANG']['CUR']['MOP'] = 'MOP - Pataca';
$GLOBALS['ISO_LANG']['CUR']['MRO'] = 'MRO - Ouguiya';
$GLOBALS['ISO_LANG']['CUR']['MUR'] = 'MUR - Mauritiaanse Roepie';
$GLOBALS['ISO_LANG']['CUR']['MVR'] = 'MVR - Rufiyaa';
$GLOBALS['ISO_LANG']['CUR']['MWK'] = 'MWK - Malawische Kwacha';
$GLOBALS['ISO_LANG']['CUR']['MYR'] = 'MYR - Ringgit';
$GLOBALS['ISO_LANG']['CUR']['MZN'] = 'MZN - Metical';
$GLOBALS['ISO_LANG']['CUR']['NAD'] = 'NAD - Namibische Dollar';
$GLOBALS['ISO_LANG']['CUR']['NGN'] = 'NGN - Naira';
$GLOBALS['ISO_LANG']['CUR']['NIC'] = 'NIC - Cordoba Oro';
$GLOBALS['ISO_LANG']['CUR']['NOK'] = 'NOK - Noorse Kroon';
$GLOBALS['ISO_LANG']['CUR']['NPR'] = 'NPR - Nepalese Roepie';
$GLOBALS['ISO_LANG']['CUR']['NZD'] = 'NZD - Nieuw-Zeelandse Dollar';
$GLOBALS['ISO_LANG']['CUR']['OMR'] = 'OMR - Omaanse Rial';
$GLOBALS['ISO_LANG']['CUR']['PAB'] = 'PAB - Balboa';
$GLOBALS['ISO_LANG']['CUR']['PEN'] = 'PEN - Nuevo Sol';
$GLOBALS['ISO_LANG']['CUR']['PGK'] = 'PGK - Kina';
$GLOBALS['ISO_LANG']['CUR']['PHP'] = 'PHP - Filipijnse Peso';
$GLOBALS['ISO_LANG']['CUR']['PKR'] = 'PKR - Pakistaanse Roepie';
$GLOBALS['ISO_LANG']['CUR']['PLN'] = 'PLN - Zloty';
$GLOBALS['ISO_LANG']['CUR']['PYG'] = 'PYG - Guarani';
$GLOBALS['ISO_LANG']['CUR']['QAR'] = 'QAR - Qatarese Rial';
$GLOBALS['ISO_LANG']['CUR']['RON'] = 'RON - Roemeense Leu';
$GLOBALS['ISO_LANG']['CUR']['RSD'] = 'RSD - Servische Dinar';
$GLOBALS['ISO_LANG']['CUR']['RUB'] = 'RUB - Russische Roebel';
$GLOBALS['ISO_LANG']['CUR']['RWF'] = 'RWF - Rwandese Frank';
$GLOBALS['ISO_LANG']['CUR']['SAR'] = 'SAR - Saudische Rial';
$GLOBALS['ISO_LANG']['CUR']['SBD'] = 'SBD - Salomonseilandse Dollar';
$GLOBALS['ISO_LANG']['CUR']['SCR'] = 'SCR - Seychelse Roepie';
$GLOBALS['ISO_LANG']['CUR']['SDG'] = 'SDG - Sudanees Pond';
$GLOBALS['ISO_LANG']['CUR']['SEK'] = 'SEK - Zweedse Kroon';
$GLOBALS['ISO_LANG']['CUR']['SGD'] = 'SGD - Singaporedollar';
$GLOBALS['ISO_LANG']['CUR']['SHP'] = 'SHP - Sint-Heleens Pond';
$GLOBALS['ISO_LANG']['CUR']['SLL'] = 'SLL - Leone';
$GLOBALS['ISO_LANG']['CUR']['SOS'] = 'SOS - Somalische Shilling';
$GLOBALS['ISO_LANG']['CUR']['SRD'] = 'SRD - Surinaamse Dollar';
$GLOBALS['ISO_LANG']['CUR']['STD'] = 'STD - Dobra';
$GLOBALS['ISO_LANG']['CUR']['SYP'] = 'SYP - Syrisch Pond';
$GLOBALS['ISO_LANG']['CUR']['SZL'] = 'SZL - Lilangeni';
$GLOBALS['ISO_LANG']['CUR']['THB'] = 'THB - Baht';
$GLOBALS['ISO_LANG']['CUR']['TJS'] = 'TJS - Somoni';
$GLOBALS['ISO_LANG']['CUR']['TMT'] = 'TMT - Turkmeense Manat';
$GLOBALS['ISO_LANG']['CUR']['TND'] = 'TND - Tunesische Dinar';
$GLOBALS['ISO_LANG']['CUR']['TOP'] = 'TOP - Pa\'anga';
$GLOBALS['ISO_LANG']['CUR']['TPE'] = 'TPE - Timoriaanse Escudo';
$GLOBALS['ISO_LANG']['CUR']['TRY'] = 'TRY - Turkse Lire';
$GLOBALS['ISO_LANG']['CUR']['TTD'] = 'TTD - Trinidad en Tobago Dollar';
$GLOBALS['ISO_LANG']['CUR']['TWD'] = 'TWD - nieuwe Taiwan Dollar';
$GLOBALS['ISO_LANG']['CUR']['TZS'] = 'TZS - Tansaniaanse Shilling';
$GLOBALS['ISO_LANG']['CUR']['UAH'] = 'UAH - Hryvna';
$GLOBALS['ISO_LANG']['CUR']['UGX'] = 'UGX - Ugandese Shilling';
$GLOBALS['ISO_LANG']['CUR']['USD'] = 'USD - US-Dollar';
$GLOBALS['ISO_LANG']['CUR']['UYU'] = 'UYU - Uruguayaanse Peso';
$GLOBALS['ISO_LANG']['CUR']['UZS'] = 'UZS - Som';
$GLOBALS['ISO_LANG']['CUR']['VEF'] = 'VEF - Bolivar Fuerte';
$GLOBALS['ISO_LANG']['CUR']['VND'] = 'VND - Dong';
$GLOBALS['ISO_LANG']['CUR']['VUV'] = 'VUV - Vatu';
$GLOBALS['ISO_LANG']['CUR']['WST'] = 'WST - Tala';
$GLOBALS['ISO_LANG']['CUR']['YER'] = 'YER - Jemenitische Rial';
$GLOBALS['ISO_LANG']['CUR']['ZAR'] = 'ZAR - Rand';
$GLOBALS['ISO_LANG']['CUR']['ZMK'] = 'ZMK - Zambiaanse Kwacha';
$GLOBALS['ISO_LANG']['CUR']['ZWL'] = 'ZWL - Zimbabwaanse Dollar';
$GLOBALS['ISO_LANG']['CUR_SYMBOL']['USD'] = '$';
$GLOBALS['ISO_LANG']['CUR_SYMBOL']['EUR'] = '€';
$GLOBALS['ISO_LANG']['CUR_SYMBOL']['GBP'] = '£';
$GLOBALS['ISO_LANG']['CUR_SYMBOL']['JPY'] = '¥';

