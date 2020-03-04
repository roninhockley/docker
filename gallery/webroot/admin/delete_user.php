<?php include("includes/init.php"); ?>
<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

    if(empty($_GET['id'])) {
        redirect("users.php");
    }

    $user = User::find_by_id($_GET['id']);

    if ($user) {
        $session->message("User {$user->username} was successfully deleted.");
        $user->delete_user_and_user_photo();
        redirect("users.php");
    } else {
        redirect("users.php");
    }


?>       