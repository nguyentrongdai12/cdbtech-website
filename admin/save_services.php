<?php
    include_once("../controllers/dbclass.php");
    if (isset($_POST['icon'])) {
        if (!isset($_POST['autoid_old']))
        {
            $icon = $_POST['icon'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $sql = "INSERT INTO services (icon, title, description) VALUES ( '".$icon."' , N'".$title."' , N'".$description."' )";
            $dbclass = new dbclass();
            if ($dbclass->query($sql)) {
                header("Location: index.php?pages=services_all");   
            }
            else {
                echo "<h1>Đã xảy ra lỗi trong quá trình thêm dịch vụ, vui lòng thử lại ! <a href='index.php?page=services_all'>Trở về</a></h1>";
            }
        }
    }
?>