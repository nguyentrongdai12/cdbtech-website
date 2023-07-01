<?php 
    include_once("../controllers/dbclass.php");
    if (isset($_COOKIE["login"]))
    {        
        include "header.php";
        include "sidebar.php"; 
        include "topbar.php";
        include "dashboard.php";
        include "footer.php";
    }
    else {
        header("Location: login.php");
    }
    
?>