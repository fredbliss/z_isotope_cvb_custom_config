<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2016 Intelligent Spark
 *
 * @package    Isotope Custom Step "Delivery Date"
 * @link       http://isotopeecommerce.org
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Table tl_iso_product_collection
 */

$GLOBALS['TL_DCA']['tl_iso_product_collection']['palettes']['default'] = '{status_legend},order_status,po_number,delivery_date,date_paid,date_shipped;{details_legend},details,notes_customer,notes;{email_legend:hide},email_data;{billing_address_legend:hide},billing_address_data;{shipping_address_legend:hide},shipping_address_data';
