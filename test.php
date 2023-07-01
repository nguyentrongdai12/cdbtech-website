<?php
    require "./controllers/dbclass.php";
    $dbclass = new dbclass();
    $menus = $dbclass->get_rs("SELECT * FROM menu_main");
?>
<nav id="navbar" class="navbar">
        <ul>       
            <?php 
            if ($menus != NULL) {
                while($menu = $menus->fetch_assoc()) {
                ?>
                    <li><a class="nav-link scrollto" href="#"><?php echo $menu['name']; ?></a></li>
            <?php
                }
            }
            ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->   