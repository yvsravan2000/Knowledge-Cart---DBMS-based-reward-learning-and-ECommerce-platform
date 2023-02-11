<?php

define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','knowledge_cart');
define('COUNT',6);
$dbc=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die('error connecting with database');

?>