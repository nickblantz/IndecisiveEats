<?php
$restricted_level = 1;
$page_name = 'Delete Confirmation';
require_once('../Resources/lib/session_controller.php');

if (isset($_POST['confirm']) && $_POST['confirm'] === "true") {
	User::delete_account();
	header('location: ' . redirect_prefix('index.php'));
} elseif (isset($_POST['confirm']) && $_POST['confirm'] === "false") {
	header('location: ' . redirect_prefix('Account\Settings.php'));
}
?>
<!doctype html>
<html lang="en">
 <head>
  <?php generate_head($page_name); ?>
 </head>
 <body>
  <?php generate_main_beginning(); ?>
   <form method="POST">
	<div class="col-8 col-md-6 col-lg-4 mx-auto">
	 <h4>You are about to delete your account. Do you wish to continue?</h4>
	 <div class="row">
	  <div class="col-6">
	   <button class="btn btn-primary" name="confirm" value="true">Continue</button>
	  </div>
	  <div class="col-6 justify-right">
       <button class="btn btn-secondary" name="confirm" value="false">Cancel</button>
	  </div>
	 </div>
	</div>
   </form>
  <?php generate_main_end(); ?>
  <?php generate_header($page_name); ?>
  <?php generate_footer(); ?>
 </body>
</html>