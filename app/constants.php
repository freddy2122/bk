<?php

// Admin-configurable site constants
if (!defined('DEFAULT_SITE_LANGUAGE')) define('DEFAULT_SITE_LANGUAGE', 'fr');
if (!defined('ALLOW_WEBPAGE_LOADER')) define('ALLOW_WEBPAGE_LOADER', false);

if (!defined('SITE_NAME')) define('SITE_NAME', 'Hypo Finanz');
if (!defined('WEBSITE_CREATED_DATE')) define('WEBSITE_CREATED_DATE', '2011');
if (!defined('SITE_ADDRESS')) define('SITE_ADDRESS', 'Barutherstr 28, 14959 Trebbin.');

if (!defined('SITE_EMAIL')) define('SITE_EMAIL', 'test@jemlopay.email');
if (!defined('SITE_PHONE')) define('SITE_PHONE', '+49 15 124 819 457');
if (!defined('SITE_WHATSAPP')) define('SITE_WHATSAPP', '+49 15 124 819 457');
if (!defined('SITE_PHONE_2')) define('SITE_PHONE_2', '');

if (!defined('WEBMASTER_NAME')) define('WEBMASTER_NAME', 'Karl Heinz');
if (!defined('AUTHOR_NAME')) define('AUTHOR_NAME', 'Karl Heinz');
if (!defined('TEAG')) define('TEAG', '2%');

if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
if (!defined('PAGE_SAMPLE_DIR')) define('PAGE_SAMPLE_DIR', dirname(__DIR__) . '/resources/views/elements/');
if (!defined('TESTIMONIALS_DIR')) define('TESTIMONIALS_DIR', PAGE_SAMPLE_DIR . 'testimonials/');
if (!defined('PARTNERS_ASSETS_DIR')) define('PARTNERS_ASSETS_DIR', dirname(__DIR__) . '/public/assets/images/partners/');
if (!defined('SITE_WWW')) define('SITE_WWW', !empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null);
