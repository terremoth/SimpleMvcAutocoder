<?php
/* Application Configuration File for the entire MVC Framework */

/* General Application's Configurations */

// The Entire Application/Software Name
define('APP_NAME', 'autocoder');

// The Entire Application/Software language
define('APP_LANG', 'pt-br');

//Page Charset
define('APP_CHARSET', 'utf-8');

// The Entire Application/Software Name
define('APP_HOME', 'autocoder');

// Timezone
date_default_timezone_set('America/Sao_Paulo');

// Application Base Path 
define('BASE_PATH', dirname(__FILE__));

// Home URL 
define('HOME_URI', 'http://localhost/autocoder');

// Upload directory path
define('UPLOAD_PATH', BASE_PATH . '/view/uploads');

// 404 Page for not found files
define('PAGE_404', BASE_PATH . '/system/404.php');

// 405 Page for Forbidden Areas
define('PAGE_405', BASE_PATH . '/system/405.php');

// Debug mode, in case of application development
define('DEBUG', true);

/* Database Configuration */

// DataBase Management System Driver, default is mysql
define('DB_DRIVER', 'mysql'); // see: http://php.net/manual/pt_BR/pdo.drivers.php 

// Hostname
define('DB_HOSTNAME', 'localhost');

// Name
define('DB_NAME', 'autocoder');

// User
define('DB_USER', 'root');

// Password
define('DB_PASSWORD', '');

// Charset
define('DB_CHARSET', 'utf8');

function dd($var) {
    var_dump($var);
    die();
}