<?php        
// SITE_ROOT contains the full path to the tshirtshop folder
define("SITE_ROOT", dirname(dirname(__FILE__)));

// Application directories
define('PRESENTATION_DIR', SITE_ROOT . '/presentation/');
define('BUSINESS_DIR', SITE_ROOT . '/business/');

// Settings needed to configure the Smarty template engine
define("SMARTY_DIR", SITE_ROOT."/libs/smarty/");
define("TEMPLATE_DIR", PRESENTATION_DIR ."templates");
define("COMPILE_DIR", PRESENTATION_DIR ."templates_c");
define("CONFIG_DIR", SITE_ROOT."/include/configs");

// These should be true while developing the web site
define('IS_WARNING_FATAL', true);
define('DEBUGGING', true);

// The error types to be reported
define('ERROR_TYPES', E_ALL);

// Settings about mailing the error messages to admin
define('SEND_ERROR_MAIL', false);
define('ADMIN_ERROR_MAIL', 'Administrator@example.com');
define('SENDMAIL_FROM', 'Errors@example.com');
ini_set('sendmail_from', SENDMAIL_FROM);

// By default we don't log errors to a file
define('LOG_ERRORS', false);
//define('LOG_ERRORS_FILE', 'c:\\tshirtshop\\errors_log.txt'); // Windows
 define('LOG_ERRORS_FILE', '/home/sso/www/tshirtshop/log/errors.log'); // Linux
/* Generic error message to be displayed instead of debug info
   (when DEBUGGING is false) */
define('SITE_GENERIC_ERROR_MESSAGE', '<h1>TShirtShop Error!</h1>');

// Database connectivity setup
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'tshirtshopadmin');
define('DB_PASSWORD', 'tshirtshopadmin');
define('DB_DATABASE', 'tshirtshop');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);

// Server HTTP port (can omit if the default 80 is used)
define('HTTP_SERVER_PORT', '80');
/* Name of the virtual directory the site runs in, for example:
  '/tshirtshop/' if the site runs at http://www.example.com/tshirtshop/
  '/' if the site runas at http://www.example.com */
define('VIRTUAL_LOCATION', '/');

// Configure product lists display options
define('SHORT_PRODUCT_DESCRIPTION_LENGTH', 150);
define('PRODUCTS_PER_PAGE',4);

?> 