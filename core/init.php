<?php
define('BASE_URL', 'http://localhost/Newcomplex');

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

define('SITE_ROOT','E:' .DS .'xampp' .DS .'htdocs' .DS.'NewBuilding');

require_once("functions.php");
require_once("classes/User.php");
require_once("database/connection.php");
require_once("classes/Sessions.php");
require_once("classes/Photo.php");
require_once("classes/Members.php");
?>