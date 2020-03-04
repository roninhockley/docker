<?php 

require("init.php");
$user = new User();
//$photo = new Photo();
//var_dump($_POST);
//die ("this is data from the server YAYYYYY");
if (isset($_POST['image_name'])) {
	//die ("this is true after check to isset for POST image_name");
	$user->ajax_save_user_image($_POST['image_name'], $_POST['user_id']);
}

if (isset($_POST['photo_id'])) {
	//die ("this is true after check to isset for POST image_name");
	//$user->ajax_save_user_image($_POST['image_name'], $_POST['user_id']);
	Photo::display_sidebar_data($_POST['photo_id']);
}
	//echo $_POST['photo_id'];
	//$msg = 
	//die ("this is data from the server YAYYYYY");

//$value =$_POST['photo_id'];
//


?>