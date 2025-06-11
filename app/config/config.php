<?php
// app/config/config.php

/**
 * Configuration Settings
 *
 * This file contains the configuration settings for the application.
 * Using constants makes these values globally accessible and prevents them
 * from being changed during runtime.
 */

// --- Database Configuration ---
// These settings are used by the Database class to connect to your database.
define('DB_HOST', 'localhost');
define('DB_USER', 'root'); // Your database username
define('DB_PASS', '');     // Your database password
define('DB_NAME', 'enroll'); // Your database name

// --- Application Configuration ---
// APPROOT: The absolute path to the 'app' directory.
// Example: C:\xampp\htdocs\your-project\app
define('APPROOT', dirname(dirname(__FILE__)));

// URLROOT: The root URL of your site.
// This is useful for creating absolute links in your views and controllers.
// Example: http://localhost/your-project
define('URLROOT', 'http://localhost/your-mvc-project');

// SITENAME: The name of your site.
define('SITENAME', 'Ecosys Training Center');
