<?php
// Test connection to database!
define('DB_SERVER', 'localhost:54881');
define('DB_USERNAME', 'azure');
define('DB_PASSWORD', '6#vWHD_$');
define('DB_DATABASE', 'localdb');
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if (!$link) {
    die('Could not connect: ' . mysqli_error($link));
}
$constant = 'constant';
echo "Connection sucessful to database  {$constant('DB_DATABASE')}";
?>