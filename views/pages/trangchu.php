  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>CDB TECH xin chào</h1>
      <h2>Cảm ơn vì đã ghé thăm, hãy xem qua thông tin của CDB TECH</h2>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row about-container">

          <div class="col-lg-8 content order-lg-1 order-2">
            <h2 class="title">Đôi nét về CDB TECH</h2>
            <p>
              Tiền thân là một đội ngũ làm việc và hoạt động trong lĩnh vực CNTT bao gồm các dịch vụ và vị trí tương ứng như: IT Support, quản trị và vận hành hệ thông máy chủ,
              mạng, thiết kế lập trình Website, thiết kế đồ họa, in ấn. Sau nhiều năm làm việc và cống hiến đội ngũ đã phát triển thêm các đồng đội mới, các lĩnh vực mới. Năm 2022 
              là bước ngoặt khi đội ngũ CDB thành lập nên công ty CDB TECH và hoạt động trong lĩnh vực dịch vụ CNTT cho đến ngày nay.
              CDB TECH tập hợp các bạn trẻ năng lực chuyên môn cao, năng động, luôn chủ động cập nhập công nghệ mới, giải pháp mới nhằm phục vụ khách hàng tôt hơn mỗi ngày, đồng thời
               đảm bảo an toàn bảo mật thông tin.
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Triết lý kinh doanh</a></h4>
              <p class="description">1. Cung cấp dịch vụ về CNTT cho khách hàng.<br>
                2. Hợp tác, liên kết với các nhãn hàng, thương hiệu và giải pháp để đáp ứng nhu cầu kịp thời.<br>
                3. Hỗ trợ kịp thời, nhanh chóng, xử lý triệt để.<br>
                4. Nâng cấp đội ngũ, phát triển năng lực nhân sự.
                </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Tầm nhìn</a></h4>
              <p class="description">Phát huy thế mạnh của công ty trong lĩnh vực dịch vụ IT support, Quản trị máy chủ, Quản trị hệ thống mạng, dịch vụ thiết kế website ...</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Nhiệm vụ</a></h4>
              <p class="description">
              1. Tuân thủ nghiêm ngặt quy trình dịch vụ, bảo đảm an toàn bảo mật thông tin, bảo mật được đưa lên hàng đầu.<br>
              2. Đào tạo đội ngũ, tham gia nâng cấp năng lực chuyên nghành của các nhân sự các cấp quản lý đến nhân viên.<br>
              3. Tổ chức hướng dẫn, đào tạo kiến thức căn bản dành cho nhân viên tại khách hàng.<br>
              4. Xây dựng môi trường, văn hóa lành mạnh, năng động.
              </p>
            </div>

          </div>

          <div class="col-lg-4 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Dịch vụ</h3>
          <p class="section-description">CDB TECH cung cấp những dịch vụ liên quan đến lĩnh vực CNTT</p>
        </div>
        <?php include "./models/list_services.php"; ?>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Liên hệ tư vấn</h3>
            <p class="cta-text"> Hãy liên hệ với CDB TECH nếu bạn quan tâm đến dịch vụ hoặc thắc mắc liên quan. Chúng tôi luôn sẵn sàng tư vấn, hỗ trợ.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="https://zalo.me/0967968734">Liên hệ tư vấn</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Dự án, công việc, giải pháp</h3>
          <p class="section-description">Hãy xem qua các dự án, công việc và giải pháp mà CDB TECH đã thực hiện</p>
        </div>

      <?php include "./models/job_category.php"; ?>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

         <?php include "./models/job_list.php"; ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
</br>
    <!-- ======= Team Section ======= -->
    <section id="partner">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Đối tác, khách hàng</h3>
          <p class="section-description">Những quan tâm, ủng hộ từ khách hàng là động lực to lớn khiến CDB TECH ngày càng hoàn thiện hơn trong các dịch vụ</p>
        </div>
        <div class="row">
          <?php include "./models/customers.php"; ?>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Liên hệ</h3>
          <p class="section-description">Tìm CDB TECH trên google map</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15677.63270003314!2d106.6419325!3d10.7800171!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fef2eae672d%3A0x3fec418649016804!2zQ8O0bmcgdHkgVE5ISCBE4buLY2ggVuG7pSBDw7RuZyBOZ2jhu4cgQ0RCIFRlY2g!5e0!3m2!1svi!2s!4v1686639632141!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      <div class="container mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>Số 8 đường Cao Văn Ngọc<br>Quận Tân Phú, thành phố Hồ Chí Minh</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>info@cdb-tech.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>0967 968 734</p>
              </div>
            </div>

            <div class="social-links">
              <a href="https://www.fb.com/cdbtech/" class="facebook"><i class="bi bi-facebook"></i></a> fb.com/cdbtech
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Quý danh" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Địa chỉ Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Tiêu đề" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Lời nhắn" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Gửi lời nhắn</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->