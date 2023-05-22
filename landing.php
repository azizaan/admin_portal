<?php
if (isset($_COOKIE['aan_session_id'])) {
  header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CodeTech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="landing.php">CodeTech</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="getstarted scrollto" href="#pricing">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Best Solutions For Your coding buddy</h1>
          <h2>We are team of talented designers for teaching you making websites with Bootstrap and Laravel</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#pricing" class="btn-get-started scrollto">Get Started</a>

          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/html.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/css.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/javascript.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/php.jpeg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/boostrap.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/Laravel.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Kami adalah platform kursus coding yang didedikasikan untuk memberikan pendidikan berkualitas di dunia pemrograman dan pengembangan web. Di CODETECH, Misi kami adalah memberdayakan individu untuk menguasai keterampilan pengkodean dengan percaya diri dan menjadi inovator di era digital yang berkembang pesat.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Kami percaya bahwa keterampilan coding adalah kunci untuk menghadapi tantangan teknologi di masa depan. Dalam era di mana teknologi mempengaruhi hampir setiap aspek kehidupan kita, memahami dasar-dasar pemrograman dan memiliki kemampuan untuk mengembangkan aplikasi dan situs web adalah hal yang sangat berharga.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>What makes us different?</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Expert Mentor<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Tim kami terdiri dari para profesional yang berpengalaman dalam bidang pemrograman. Mereka adalah praktisi industri yang berkomitmen untuk berbagi pengetahuan mereka dengan Anda.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>Latest Curriculum<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Kami selalu memperbarui kurikulum kami sesuai dengan perkembangan terbaru dalam industri teknologi. Kami bekerja sama dengan profesional industri untuk memastikan bahwa kursus kami mencakup teknologi dan alat terbaru yang diminati oleh perusahaan dan pasar kerja.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>Project Based Learning<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Kami percaya bahwa belajar dengan proyek nyata adalah cara terbaik untuk memperdalam pemahaman Anda tentang pemrograman. Oleh karena itu, kami mengintegrasikan proyek praktis ke dalam kursus kami. Anda akan memiliki kesempatan untuk menerapkan pengetahuan yang telah Anda pelajari dalam proyek-proyek yang menantang, mulai dari pembuatan aplikasi web sederhana hingga pengembangan solusi berbasis data yang kompleks.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->



    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Services</h2>
          <p>Berikut ada 2 pilihan bootcamp yang direkomendasikan sama CODETECH </p>
        </div>
        <div class="row">
          <div class="col-xl-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Intensive Coding Program</a></h4>
              <p>Program intensif selama 12 minggu untuk belajar pemrograman, pengembangan web, pengembangan aplikasi seluler, dan praktik terbaik dalam industri.</p>
            </div>
          </div>
          <div class="col-xl-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Specialized Coding Tracks</a></h4>
              <p>Jalur khusus yang disesuaikan dengan minat dan tujuan karir, seperti pengembangan web, pengembangan aplikasi seluler, analisis data, kecerdasan buatan, atau keamanan cyber.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Kami bangga menjadi bagian dari perjalanan Anda dalam menguasai keterampilan coding. Mari bergabung dengan CODETECH dan mulai mengeksplorasi potensi Anda dalam dunia pemrograman!
              Jika Anda memiliki pertanyaan atau ingin mempelajari lebih lanjut tentang kursus kami, jangan ragu untuk menghubungi tim kami. Kami siap membantu Anda!
            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="register.php">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Berkolaborasi dengan Tim Ahli coding.
            Kami adalah Tim yang Passionate tentang coding.
            Berpengalaman dan Berdedikasi dalam Mengajar coding.
            Kami Membantu Anda Mengembangkan Potensi Anda.
            Bergabunglah dengan Tim Kami dan Tingkatkan Keahlian coding Anda.
            Misi Kami adalah Membantu Anda Menjadi Pengembang Profesional.
            Kami Berkomitmen untuk Memberikan Pembelajaran Berkualitas Tinggi.
            Tim Kami Terdiri dari Para Ahli Industri Teknologi.
            Kami Bangga Menjadi Bagian dari Perjalanan coding Anda.
            Saatnya Menggabungkan Kreativitas dan Keterampilan coding Bersama Kami.
          </p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/blank.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abdillah Aziz Putra Susan</h4>
                <span>Chief Executive Officer</span>
                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                <div class="social">
                  <a href="https://www.facebook.com/abdillah.aziz.3154?mibextid=ZbWKwL"><i class="ri-facebook-fill"></i></a>
                  <a href="https://instagram.com/abdillah.aziz.3154?igshid=MzNlNGNkZWQ4Mg=="><i class="ri-instagram-fill"></i></a>
                  <a href="https://www.linkedin.com/in/abdillah-aan-841499250"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/blank.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abdillah Aziz Putra Susan</h4>
                <span>Project Admin</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href="https://www.facebook.com/abdillah.aziz.3154?mibextid=ZbWKwL"><i class="ri-facebook-fill"></i></a>
                  <a href="https://instagram.com/abdillah.aziz.3154?igshid=MzNlNGNkZWQ4Mg=="><i class="ri-instagram-fill"></i></a>
                  <a href="https://www.linkedin.com/in/abdillah-aan-841499250"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/blank.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abdillah Aziz Putra Susan</h4>
                <span>Front-end Developer</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href="https://www.facebook.com/abdillah.aziz.3154?mibextid=ZbWKwL"><i class="ri-facebook-fill"></i></a>
                  <a href="https://instagram.com/abdillah.aziz.3154?igshid=MzNlNGNkZWQ4Mg=="><i class="ri-instagram-fill"></i></a>
                  <a href="https://www.linkedin.com/in/abdillah-aan-841499250"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/blank.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abdillah Aziz Putra Susan</h4>
                <span>Backend Developer</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href="https://www.facebook.com/abdillah.aziz.3154?mibextid=ZbWKwL"><i class="ri-facebook-fill"></i></a>
                  <a href="https://instagram.com/abdillah.aziz.3154?igshid=MzNlNGNkZWQ4Mg=="><i class="ri-instagram-fill"></i></a>
                  <a href="https://www.linkedin.com/in/abdillah-aan-841499250"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Harga</h2>
          <p>Kami menawarkan beragam paket harga yang fleksibel untuk memenuhi kebutuhan Anda. Mulai dari paket reguler hingga paket premium, <br> pilihlah yang sesuai dengan tujuan dan anggaran Anda.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Akses video tutorial dasar </li>
                <li><i class="bx bx-check"></i> Bisa memilih 1 bidang saja</li>
                <li><i class="bx bx-check"></i> Project hanya buatan mentor semata</li>
                <li class="na"><i class="bx bx-x"></i> <span>Akses video khusus tips awal masuk perusahaan</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Zoom meeting dengan para mentor</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Tidak akan disalurkan pada perusahaan terkait</span></li>
              </ul>
              <a href="register.php" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Akses video tutorial dasar </li>
                <li><i class="bx bx-check"></i> Dapat memilih 3 bidang</li>
                <li><i class="bx bx-check"></i> Project hanya buatan mentor semata</li>
                <li><i class="bx bx-check"></i> Zoom meeting dengan para mentor</li>
                <li class="na"><i class="bx bx-x"></i> <span>Akses video khusus tips awal masuk perusahaan</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Tidak akan disalurkan pada perusahaan terkait</span></li>
              </ul>
              <a href="register.php" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Akses video tutorial dasar</li>
                <li><i class="bx bx-check"></i> Dapat memilih bidang apapun yang ada dalam CODETECH </li>
                <li><i class="bx bx-check"></i> Project real dari perusahaan terkait</li>
                <li><i class="bx bx-check"></i> Zoom meeting dengan para mentor</li>
                <li><i class="bx bx-check"></i> Akses video khusus tips awal masuk perusahaan</li>
                <li><i class="bx bx-check"></i> Dapat disalurkan pada perusahaan terkait</li>
              </ul>
              <a href="register.php" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->


    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>PERTANYAAN YANG SERING DIAJUKAN</h2>
          <p>Di bawah ini merupakan kumpulan dari beberapa pertanyaan yang sering diajukan oleh para mahasiswa terkait proses dan mekanisme yang diajarkan oleh team CODETECH.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Apa keuntungan dari mengikuti bootcamp ini? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                Mengikuti bootcamp kami akan memberikan Anda akses ke materi pembelajaran terstruktur, mentorship langsung dari para ahli industri, proyek praktis, serta kesempatan untuk membangun jaringan profesional yang luas.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apakah saya membutuhkan pengalaman sebelumnya di bidang ini? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                Tidak, Anda tidak perlu memiliki pengalaman sebelumnya di bidang ini. Bootcamp kami dirancang untuk semua tingkat pengalaman, baik bagi pemula yang ingin memulai karir baru maupun bagi mereka yang ingin meningkatkan keterampilan yang sudah dimiliki.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Apakah sertifikat akan diberikan setelah menyelesaikan bootcamp? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                Ya, setelah menyelesaikan bootcamp dengan sukses, Anda akan menerima sertifikat resmi yang dapat digunakan untuk memvalidasi keterampilan yang Anda peroleh selama program bootcamp.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Bagaimana jika saya memiliki pertanyaan atau kesulitan selama bootcamp? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                Tim kami akan selalu siap membantu Anda sepanjang bootcamp. Anda akan memiliki akses ke forum diskusi online, sesi tanya jawab dengan mentor, dan dukungan teknis yang dapat membantu Anda mengatasi pertanyaan atau kesulitan yang mungkin Anda hadapi.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Bagaimana proses penerimaan peserta bootcamp ini? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                Proses penerimaan peserta bootcamp kami melibatkan pendaftaran online, penilaian profil calon peserta, dan dalam beberapa kasus, wawancara seleksi. Kami mencari peserta yang memiliki motivasi tinggi, ketertarikan yang kuat dalam bidang ini, dan komitmen untuk mengikuti program secara penuh.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>CODETECH</h3>
            <p>
              jL hahay 01 <br>
              Malang ,  923649<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 8214 3618 116<br>
              <strong>Email:</strong> abdillahaziz56@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Temukan kami di media sosial dan tetap terhubung dengan komunitas kami. Ikuti kami untuk mendapatkan pembaruan terbaru, tips, saran, dan wawasan menarik seputar industri ini.</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/abdillah.aziz.3154?mibextid=ZbWKwL" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://instagram.com/abdillah.aziz.3154?igshid=MzNlNGNkZWQ4Mg==" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/in/abdillah-aan-841499250" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Codetech</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">Azizaan</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>