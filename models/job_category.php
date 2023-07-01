<?php 
    $dbclass = new dbclass();
    $job_categorys = $dbclass->get_rs("SELECT * FROM job_category");
?>
<div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Toàn bộ</li>
              <?php 
                while($job_category = $job_categorys->fetch_assoc())
                {
                ?>
                <li data-filter="<?php echo ".".$job_category['autoid'];?>"><?php echo $job_category['title'];?></li>
              <?php
                }
              ?>
            </ul>
          </div>
        </div>