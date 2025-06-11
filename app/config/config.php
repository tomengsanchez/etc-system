<?php
  // DB Params
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '123456');
  define('DB_NAME', 'ecosys_db');

  // App Root - dynamically gets the absolute path to the app folder
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root
  define('URLROOT', 'http://localhost/etc-system');
  // Site Name
  define('SITENAME', 'Ecosys Training Center');

  // Load Helpers using the APPROOT constant for a reliable path
  require_once APPROOT . '/helpers/session_helper.php';
  // I am assuming url_helper.php is also in the helpers directory
  // If it's not, you may need to adjust or remove this line.
  if (file_exists(APPROOT . '/helpers/url_helper.php')) {
    require_once APPROOT . '/helpers/url_helper.php';
  }


  // Generate CSRF token for the session
  generate_csrf_token();

  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once APPROOT . '/core/' . $className . '.php';
  });
