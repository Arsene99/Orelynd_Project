<?php
// APPLICATION
define('APPLICATION', 'Admin');

// HTTP
define('HTTP_SERVER', 'http://localhost/orelynd/gerant/');
define('HTTP_CATALOG', 'http://localhost/orelynd/');

// DIR
define('DIR_OPENCART', 'C:/laragon/www/orelynd/');
define('DIR_APPLICATION', DIR_OPENCART . 'gerant/');
define('DIR_EXTENSION', DIR_OPENCART . 'extension/');
define('DIR_IMAGE', DIR_OPENCART . 'image/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_CATALOG', DIR_OPENCART . 'catalog/');
define('DIR_STORAGE', 'C:/laragon/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'orelynd_db');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

define('DB_SSL_KEY', '');
define('DB_SSL_CERT', '');
define('DB_SSL_CA', '');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
