<?php
  include_once "views/layouts/head.php";
  include_once('views/layouts/header.php');
  if (empty( $_GET['pages'] ) )
  {
    $pages = "views/pages/trangchu.php";
  }
  else {    
    $pages = "views/pages/" .$_GET['pages'] .".php";  
  }

  include_once($pages);
  include_once('views/layouts/footer.php');
?>