<?php 
    include_once("../controllers/dbclass.php");
    if (isset($_COOKIE["login"]))
    {        
        if (isset($_GET['pages'])) {
            $page = $_GET['pages'].".php";
            include "header.php";
            include "sidebar.php"; 
            include "topbar.php";
            include $page;
            include "footer.php";
        }
        else 
        {
            include "header.php";
            include "sidebar.php"; 
            include "topbar.php";
            include "dashboard.php";
            include "footer.php";
        }        
    }     
    else {
        header("Location: login.php");
    }
    
?>