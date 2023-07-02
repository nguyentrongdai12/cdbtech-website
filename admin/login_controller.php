<?php
    include_once("../controllers/dbclass.php");
    if (isset($_POST["email"]))
    {
        $email = $_POST['email'];
        $password = MD5($_POST['password']);

        $dbclass = new dbclass();
        $rslogins = $dbclass->get_rs("SELECT * FROM users WHERE acc = '".$email."' AND pwd = '".MD5($password)."'");
        //echo "SELECT * FROM users WHERE acc = '".$email."' AND pwd = '".MD5($password)."'";
        if (mysqli_num_rows($rslogins) > 0)
        {
            setcookie("login", $email, time()+288000, "/","", 0);
            header("Location: index.php");           
        } 
        else {
            header("Location: login.php");
        }
    }
    if (isset($_GET["status"]) == "logout") {
        setcookie( "login", "", time()- 60, "/","", 0);
        header("Location: login.php");
    }
?>