<?php

/**
 * Isotope eCommerce for Contao Open Source CMS
 *
 * Copyright (C) 2016 Intelligent Spark
 *
 * @package Isotope Custom Step "Delivery Date"
 * @link       http://isotopeecommerce.org
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

$GLOBALS['ISO_HOOKS']['getOrderNotificationTokens'][] = ['\IntelligentSpark\CustomTokens_CVB','getTokens'];

$GLOBALS['ISO_CHECKOUTSTEP'] = array
(
    'address'   => array('\Isotope\CheckoutStep\BillingAddress', '\Isotope\CheckoutStep\ShippingAddress'),
    'shipping'  => array('\Isotope\CheckoutStep\ShippingMethod'),
    'payment'   => array('\Isotope\CheckoutStep\PaymentMethod'),
    'review'    => array(
        '\Isotope\CheckoutStep\OrderConditionsOnTop',
        '\Isotope\CheckoutStep\OrderInfo',
        '\Isotope\CheckoutStep\OrderConditionsBeforeProducts',
        '\Isotope\CheckoutStep\OrderProducts',
        '\IntelligentSpark\CheckoutStep\DeliveryDate',
        '\IntelligentSpark\CheckoutStep\OrderNotes',
        '\Isotope\CheckoutStep\OrderConditionsAfterProducts')
);