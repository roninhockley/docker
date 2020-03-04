<?php
ob_start();
defined('DS') ? null : define ('DS', DIRECTORY_SEPARATOR);
#defined('SITE_ROOT') ? null : define ('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'gallery');
defined('SITE_ROOT') ? null : define ('SITE_ROOT', DS . 'var' . DS . 'www' . DS . 'gallery');
defined('INCLUDES_PATH') ? null : define ('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');

require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("db_object.php");
require_once("user.php");
#require_once("/var/www/gallery/admin/includes/photo.php");
require_once(INCLUDES_PATH."/photo.php");
require_once("session.php");
require_once("comment.php");
require_once("paginate.php");

?>