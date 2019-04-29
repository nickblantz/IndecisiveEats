<?php
$restricted_level = 3;
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/BIT4444Project/Resources/lib/session_controller.php');
?>
<!doctype html>
<html lang="en">
 <head>
  <?php
  generate_head('Restaurant Stats');
  ?>
 </head>
 <body>
  <main id="main-container" class="container-fluid">
   <div id="main-container-row" class="row h-100">
    <div class="col-md-2 col-sm-1 d-none d-sm-block side-panel"></div>
	<div id="content" class="col-md-8 col-sm-10 col-12">
	 <br />
	 <div class="row justify-content-center">
	 <figure class="col-12 col-md-10 figure m-3">
	  <h3>Search Appearances</h3>
      <svg width="100%" height="100">
	   
	  </svg>
     </figure>
	 <figure class="col-12 col-md-10 figure m-3">
	  <h3>Researches</h3>
      <svg width="100%" height="100">
	   
	  </svg>
     </figure>
	 </div>
	 <br /><br />
	</div>
    <div class="col-md-2 col-sm-1 d-none d-sm-block side-panel"></div>
   </div>
  </main>
  <header id="header-container" class="container-fluid"> <?php generate_header('Restaurant Stats'); ?></header>
  <footer id="footer-container" class="container-fluid"> <?php generate_footer(); ?></footer>
 </body>
</html>