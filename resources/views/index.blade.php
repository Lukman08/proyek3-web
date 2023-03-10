<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Talkdent</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('guest/img/logo.png')}}" rel="icon">
  <link href="{{asset('guest/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('guest/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('guest/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('guest/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('guest/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('guest/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('guest/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('guest/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('guest/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.11.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo me-auto"><a href="#">Arsha</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#" class="logo me-auto"><img src="guest/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          {{-- <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
          <li><a class="nav-link scrollto" href="#services">Diagnosa</a></li>    
          <li><a class="nav-link scrollto" href="#team">Info Penyakit</a></li>
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
          <h1>Hai Sobat Talkdent, mari konsultasikan penyakit gigi anda segera!</h1>
          <h2>Jagalah kesehtan gigi anda, karena gigi merupakan salahsatu organ paling penting yang kita gunakan.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Bergabung Sekarang --></a>
            {{-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('guest/img/about.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          {{-- <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('guest/img/clients/client-1.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('guest/img/clients/client-2.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('guest/img/clients/client-3.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('guest/img/clients/client-4.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('guest/img/clients/client-5.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('guest/img/clients/client-6.png')}}" class="img-fluid" alt="">
          </div> --}}

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang</h2>
          <p>Sudahkan anda memeriksakan kondisi kesehatan pada gigi  anda secara rutin?
            Jagalah kesehatan gigi anda, karena gigi merupakan prgan penting bagi kita.
            Talkdent hadir untuk memberikan solusi bagi sobat yang ingin melakukan
            pemeriksaan penyakit gigi secara mandiri, dan dapat dilakukan dimana
            saja. Talkdent atau Sistem Pakar Diagnosa Penyakit Gigi adalah sebuah 
            aplikasi konsultasi yang dibuat untuk membantu para sobat mendiagnosa
            secara dini penyakit gigi yang anda alami dengan mandiri berdasarkan gejala yang dirasakan. Disini anda dapat melihat informasi berbagai 
            penyakit gigi yang biasa dialami dan tentunnya dapat melakukan
            diagnosa secara mandiri yang disertai dengan informasi pencegahan
            atau penangan awal berdasarkan penyakit gigi yang dialami.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>"Talkdent Dental Clinic Klinik terbaik, terbesar, terbaru, di kota Jatibarang Indramayu. 
              Terdiri dari dokter gigi dan dokter gigi spesialis berpengalaman, trampil dan profesional. 
              Layanan perawatan gigi, estetika gigi."
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Treatment bleaching untuk menghempaskan noda kekuningan dan pulihkan cerah gigi.</li>
              <li><i class="ri-check-double-line"></i> Treatment veneer untuk membuat tekstur gigi rata dan tidak bernoda.</li>
              <li><i class="ri-check-double-line"></i> Scaling akan membantu membersihkan dan mengangkat karang gigi yang sudah menumpul.</li>
              <li><i class="ri-check-double-line"></i> Implan gigi merupakan metode penanaman akar gigi buatan ke dalam rahang sebagai pondasi gigi pengganti.</li>
              <li><i class="ri-check-double-line"></i> Veneer biasanya digunakan untuk memperbaiki gigi yang berubah warna,patah,rusak,tidak sejajar,tidak rata,tidak teratur bentuknya,atau yang memiliki celah.</li>
              <li><i class="ri-check-double-line"></i> Penggunaan behel bertujuan agar gigi tumbuh ditempat yang semestinya, selain itu pemakai behel juga dapat melaraskan struktur gigi.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 d-flex align-items-stretch">
            {{-- <div class="col-lg-5 d-flex align-items-stretch"> --}}
              <div class="info">
                <div class="address mb-3">
                  {{-- <i class="bi bi-geo-alt"></i> --}}
                  <h4>Lokasi:</h4>
                  <p>Jl Raya Bulak No.14, Bulak, Kec. Jatibarang, Kabupaten Indramayu, Jawa Barat 45273</p>
                </div>
  
                {{-- <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div> --}}
  
                <div class="phone mb-3">
                  {{-- <i class="bi bi-phone"></i> --}}
                  <h4>Call:</h4>
                  <p>0812-2010-9191</p>
                </div>
  
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.362267119907!2d108.3097006153718!3d-6.475715865118641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ec78adc432d9f%3A0x6e4f0a22c19955cc!2sTalkdent%20Dental%20Clinic!5e0!3m2!1sen!2sid!4v1678236679338!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              </div>
  
            {{-- </div> --}}
          </div>
        </div>

        {{-- <h3>Hai Sobat Talkdent,</h3>
        <p align="justify"> Sudahkan anda memeriksakan kondisi kesehatan pada gigi  anda secara rutin?
            Jagalah kesehatan gigi anda, karena gigi merupakan prgan penting bagi kita.
            Talkdent hadir untuk memberikan solusi bagi sobat yang ingin melakukan
            pemeriksaan penyakit gigi secara mandiri, dan dapat dilakukan dimana
            saja. Talkdent atau Sistem Pakar Diagnosa Penyakit Gigi adalah sebuah 
            aplikasi konsultasi yang dibuat untuk membantu para sobat mendiagnosa
            secara dini penyakit gigi yang anda alami dengan mandiri berdasarkan gejala yang dirasakan. Disini anda dapat melihat informasi berbagai 
            penyakit gigi yang biasa dialami dan tentunnya dapat melakukan
            diagnosa secara mandiri yang disertai dengan informasi pencegahan
            atau penangan awal berdasarkan penyakit gigi yang dialami.</p> --}}

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{asset('')}}guest/img/about.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section>End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    {{-- <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('guest/img/skills.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">HTML <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Photoshop <i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section --> --}}

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Diagnosa</h2>
          <p>Daftar hasil diagnosa yang dilakukan pasien.</p>
        </div>

        <div class="row">
          <!-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Pulpitis</a></h4>
              <p>Pulpitis adalah inflamasi yang terjadi pada jaringan pulpa.
                Pulpitis terjadi ketika karies gigi berkembang dan 
                mengekspos pulpa, menyebabkan infeksi. Gejala awal dan dominan pada pulpitis akut adalah sakit gigi yang diinduksi
                oleh perubahan suhu, terutama minuman dingin</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Karies</a></h4>
              <p>Karies adalah penyakit pada area gigi yang rusak permanen
                dan berkembang menjadi lubang kecil. Penyebabnya 
                antara lain bakteri, ngemil, menyesap minuman manis, dan kurangnya kebersihan gigi. Mungkin tidak ada gejala. 
                Rongga yang tidak diobati dapat menyebabkan sakit gigi, onfeksi, dan tanggalnya  gigi. Penanganan berupa 
                penggunaan fluorida, tambalan, dan crown. Kasus yang 
                parah bisa memerlukan pengangkatan atau penggalian akar.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Gingivitis</a></h4>
              <p>Gingivitis adalah suatu bentuk penyakit gusi yang menyebabkan gusi meradang. Penyebabnya adalah kebersihan mulut yang buruk. Radang gusi yang tidak ditangani dapat menyebabkan gigi terlepas atau kondisi serius lainnya. Gejala termasuk gusi yang bengkak, surut, kadang-kadang lembut, atau yang mudah berdarah. Penanganan berupa pembersihan profesional serta obat kumur oral.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Periodontitis</a></h4>
              <p>Periodontitis adalah suatu infeksi gusi serius dan dapat menghancurkan tulang rahang. Periodontitis umum terjadi tetapi dapat dicegah. Penyebabnya biasanya kebersihan mulut yang buruk. Periodontitis dapat menyebabkan gigi tanggal. Periodontitis merupakan faktor risiko untuk penyakit jantung dan paru-paru. Gejala berupa bengkak, merah, dan gusi lunak.</p>
            </div>
          </div>

        </div>

        <div class="row mt-5">
  
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Stomatitis</a></h4>
                <p>Stomatitis adalah suatu kondisi yang menyebabkan pembengkakan yang menyakitkan dan luka di dalam mulut. Stomatitis dapat disebabkan oleh penyakit, infeksi, reaksi alergi, atau makanan atau bahan kimia napas berbunyiritasi. Gejala termasuk pembengkakan dan kemerahan didalam mulut atau luka menyakitkan dapat membuat individu merasa tidak nyaman saat makan. Kondisi yang mendasarinya memerlukan pengobatan. Menghindari zat yang memicu dan penggunaan obat topikal juga dapat membantu.</p>
              </div>
            </div>
  
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="">Penyakit gigi lainnya</a></h4>
                <p>Jenis penyakit yang dapat dideteksi lainnya.</p>
              </div>
            </div> -->
  
          </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section>End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    {{-- <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('guest/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{asset('guest/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('guest/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{asset('guest/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('guest/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="{{asset('guest/img/portfolio/portfolio-3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('guest/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="{{asset('guest/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('guest/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="{{asset('guest/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="{{asset('guest/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="{{asset('guest/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('guest/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="{{asset('guest/img/portfolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="{{asset('')}}guest/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="{{asset('')}}guest/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="{{asset('')}}guest/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{asset('')}}guest/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section --> --}}

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Info Penyakit Pada Gigi</h2>
          <p>Lihat beberapa informasi seputar penyakit gigi.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('guest/img/penyakit/pulpitis.png')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Pulpitis</h4>
                <!-- <span>Chief Executive Officer</span> -->
                <p>Pulpitis adalah kondisi inflamasi atau peradangan pada pulpa gigi yang merupakan jaringan lunak di dalam gigi yang mengandung saraf dan pembuluh darah.</p>
                <!-- <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div> -->
                <a href="https://www.google.com/search?q=Pulpitis&oq=Pulpitis&aqs=chrome..69i57j69i59j0i512j0i131i433i512j0i512j69i61j69i60j69i61.1007j0j7&sourceid=chrome&ie=UTF-8" target="_blank">Lihat selengkapnya.</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('guest/img/penyakit/karies.png')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Karies</h4>
                <!-- <span>Product Manager</span> -->
                <p>Karies atau kerusakan gigi adalah kondisi di mana lapisan keras luar (enamel) pada gigi mengalami pengikisan dan membusuk akibat adanya aktivitas bakteri di dalam mulut.</p>
                <!-- <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div> -->
                <a href="https://www.google.com/search?q=Karies&oq=Karies&aqs=chrome..69i57j0i433i512j0i131i433i512j0i512l7.894j0j9&sourceid=chrome&ie=UTF-8" target="_blank">Lihat selengkapnya.</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('guest/img/penyakit/gingivitis.png')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Gingivitis</h4>
                <!-- <span>CTO</span> -->
                <p>Gingivitis adalah kondisi peradangan pada gusi yang disebabkan oleh penumpukan plak pada gigi dan gusi</p>
                <!-- <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div> -->
                <a href="https://www.google.com/search?q=Gingivitis&oq=Gingivitis&aqs=chrome..69i57j0i512l9.574j0j9&sourceid=chrome&ie=UTF-8" target="_blank">Lihat selengkapnya.</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('guest/img/penyakit/periodontitis.png')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Periodontitis</h4>
                <!-- <span>Accountant</span> -->
                <p>Periodontitis adalah kondisi peradangan pada jaringan pendukung gigi yang lebih serius dibandingkan gingivitis.</p>
                <!-- <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div> -->
                <a href="https://www.google.com/search?q=Periodontitis&oq=Periodontitis&aqs=chrome..69i57j0i512l9.1519j0j9&sourceid=chrome&ie=UTF-8" target="_blank">Lihat selengkapnya.</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('guest/img/penyakit/stomatitis.png')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Stomatitis</h4>
                <!-- <span>CTO</span> -->
                <p>Stomatitis adalah kondisi inflamasi pada selaput lendir di dalam mulut yang biasanya disebabkan oleh infeksi bakteri, virus, atau jamur, atau dapat pula disebabkan oleh kondisi medis yang lebih serius.</p>
                <!-- <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div> -->
                <a href="https://www.google.com/search?q=Stomatitis&oq=Stomatitis&aqs=chrome..69i57j0i512l9.911j0j9&sourceid=chrome&ie=UTF-8" target="_blank">Lihat selengkapnya.</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{asset('guest/img/penyakit/lainnya.png')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Penyakit gigi lainnya</h4>
                <!-- <span>Accountant</span> -->
                <p>Selain penyakit gigi yang telah disebutkan seperti karies gigi, pulpitis, gingivitis, dan periodontitis, masih ada banyak penyakit gigi lainnya yang dapat mempengaruhi kesehatan gigi dan mulut.</p>
                <!-- <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div> -->
                <a href="https://www.google.com/search?q=penyakit+gigi&oq=penyakit+gigi&aqs=chrome..69i57j0i13i512l6j69i60.3295j0j9&sourceid=chrome&ie=UTF-8" target="_blank">Lihat selengkapnya.</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    {{-- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section --> --}}

    <!-- ======= Frequently Asked Questions Section ======= -->
    {{-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section --> --}}

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Talkdent</h3>
            <p>
            Jl Raya Bulak No.14, Bulak, <br>
            Kec. Jatibarang, Kabupaten Indramayu, <br>
            Jawa Barat 45273<br><br>
              <strong>Phone:</strong> 0812-2010-9191<br>
              {{-- <strong>Email:</strong> info@example.com<br> --}}
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Link</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Diagnosa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Info Penyakit</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Team</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/lukmanhkmz_/" target="_blank">Lukman Hakim</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/_ayuwyuni/" target="_blank">Sri Wahyuni</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/deafaradisa/" target="_blank">Dea Faradisa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/spptrii/" target="_blank">Siti Putri Rohayati</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Sosial Media</h4>
            <p>Kunjungi sosial media kami lainnya.</p>
            <div class="social-links mt-3">
              <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
              <a href="https://www.facebook.com/senyumsehatsumringah/" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/klinikgigi_talkdent/?hl=id" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
              <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Kelompok 5 Proyek 3</span></strong>. D4RPL3 2023
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('guest/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('guest/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('guest/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('guest/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('guest/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('guest/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('guest/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('guest/js/main.js')}}"></script>

</body>

</html>