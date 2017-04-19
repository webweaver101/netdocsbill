<?php
// Define PHP constants
// This is what I am using in Coursework 2
define('DB_SERVER', 'localhost:54881'); // These values
define('DB_USERNAME', 'azure');         // are
define('DB_PASSWORD', '6#vWHD_$');      // specific to
define('DB_DATABASE', 'newnetdocs');    // this web-app instance and the database newnetdocs
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); // connection string for the MySQL database
?>