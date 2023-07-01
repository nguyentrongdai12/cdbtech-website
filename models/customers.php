<?php
    $dbclass = new dbclass();
    $customers = $dbclass->get_rs("SELECT * FROM customer");
    while($customer = $customers->fetch_assoc())
    {
?>
        <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img class="picimg" src="<?php echo $customer['image']; ?>" alt=""></div>
              <h4><?php echo $customer['name']; ?></h4>
              <span><?php echo $customer['description']; ?></span>
            </div>
          </div>
          <?php } ?>