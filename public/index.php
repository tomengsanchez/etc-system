<?php

// This is the single entry point for the entire application.

// Use the __DIR__ magic constant to get the directory of the current file (public/)
// Then, navigate to the app directory to create a robust, absolute path.
require_once __DIR__ . '/../app/core/App.php';
require_once __DIR__ . '/../app/core/Controller.php';
require_once __DIR__ . '/../app/core/Database.php';


// Bootstrap the application by instantiating the App class.
// This will trigger the router logic in the App class constructor.
$app = new App;
