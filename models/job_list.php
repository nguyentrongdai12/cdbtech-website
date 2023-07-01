    <?php
        $dbclass = new dbclass();
        $job_lists = $dbclass->get_rs("SELECT * FROM job_post");
        while($job_list = $job_lists->fetch_assoc())
        {            
    ?>
    <div class="col-lg-4 col-md-6 portfolio-item <?php echo $job_list['job_cate']; ?>">
        <img src="<?php echo $job_list['image']; ?>" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4><?php echo $job_list['title']; ?></h4>
            <p><?php echo $job_list['content']; ?></p>
            <a href="<?php echo $job_list['image']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $job_list['title']; ?>"><i class="bx bx-plus"></i></a>
            <a href="<?php echo $job_list['link']; ?>" class="details-link" title="Xem thêm"><i class="bx bx-link"></i></a>
        </div>
    </div>
    <?php
        } 
        ?>