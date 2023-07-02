<?php
    include_once("../controllers/dbclass.php");
    if (isset($_POST['autoid_old'])) {
        $autoid_old =  $_POST['autoid_old'];
        $autoid = $_POST['autoid'];
        $name = $_POST['name'];
        $link = $_POST['link'];
        $sql = "UPDATE menu_main SET autoid = '".$autoid."', name =  N'".$name."', link = '".$link."' WHERE autoid = '".$autoid_old."'";
        $dbclass = new dbclass();
        if ($dbclass->query($sql)) {
            header("Location: index.php?pages=menu");   
        }
        else {
            echo "<h1>Đã xảy ra lỗi trong quá trình chỉnh sửa menu, vui lòng thử lại ! <a href='index.php?page=menu'>Trở về</a></h1>";
        }

    }
    else {
        $autoid = $_POST['autoid'];
        $name = $_POST['name'];
        $link = $_POST['link'];
        $sql = "INSERT INTO menu_main (autoid, name, link) VALUES ( '".$autoid."' , N'".$name."' , '".$link."' )";
        $dbclass = new dbclass();
        if ($dbclass->query($sql)) {
            header("Location: index.php?pages=menu");   
        }
        else {
            echo "<h1>Đã xảy ra lỗi trong quá trình thêm menu, vui lòng thử lại ! <a href='index.php?page=menu'>Trở về</a></h1>";
        }
    }
    if (isset($_GET['delete']))
    {
        $sql = "DELETE FROM menu_main WHERE autoid = '".$_GET['delete']."'";
        $dbclass = new dbclass();
        if ($dbclass->query($sql)) {
            header("Location: index.php?pages=menu");   
        }
        else {
            echo "<h1>Đã xảy ra lỗi trong quá trình xóa menu, vui lòng thử lại ! <a href='index.php?page=menu'>Trở về</a></h1>";
        }
    }
?>