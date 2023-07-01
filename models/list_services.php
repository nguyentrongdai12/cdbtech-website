<?php 
    $dbclass = new dbclass();
    $services = $dbclass->get_rs("SELECT icon, title, description, link FROM services");
?>
<div class="row">
        <?php
            while($service = $services->fetch_assoc())
            {

            ?>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                        <div class="icon"><a href=""><i class="<?php echo $service['icon']; ?>"></i></a></div>
                        <h4 class="title"><a href="<?php echo $service['link']; ?>"><?php echo $service['title']; ?></a></h4>
                        <p class="description"><?php echo $service['description']; ?></p>
                        </div>
                    </div>
            <?php
            }
                ?>
        </div>