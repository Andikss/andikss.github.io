<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Andika Dwi Saputra</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/logotitle.png" rel="icon">
  <link href="assets/img/logotitle.png" rel="A">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> 
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <div class="spinner-container">
    <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
      <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
      <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
      <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
      <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
    </svg>
  </div>

  <script>
    window.addEventListener('load', function() {
      document.body.classList.remove('preload');
      const spinnerContainer = document.querySelector('.spinner-container');
      spinnerContainer.style.display = 'none';
    });
  </script>

  <div class="loading-bar"></div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.querySelectorAll("a");

      links.forEach(function(link) {
        link.addEventListener("click", function(event) {
          event.preventDefault(); 

          var loadingBar = document.querySelector(".loading-bar");
          loadingBar.style.width = "0%"; 

          loadingBar.style.display = "block";
          loadingBar.style.opacity = 1;

          var loadingProgress = 0;

          var animateLoadingBar = function () {
            loadingProgress += 5;
            loadingBar.style.width = loadingProgress + "%";

            if (loadingProgress < 15) {
              requestAnimationFrame(animateLoadingBar);
            } else if (loadingProgress < 100) {
              if (loadingProgress === 15) {
                setTimeout(function () {
                  requestAnimationFrame(animateLoadingBar);
                }, 1000); 
              } else {
                loadingProgress += 1;
                requestAnimationFrame(animateLoadingBar);
              }
            } else {
              loadingBar.style.opacity = 0;

              setTimeout(function () {
                loadingBar.style.display = "none";
              }, 500);

              window.location.href = link.href;
            }
          };

          animateLoadingBar();
        });
      });
    });
  </script>
  
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/wajah.jpeg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Andika Dwi Saputra</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="mailto:andika.dwi.saputra.7925@gmail.com" class="gmail"><i class="bx bxl-gmail"></i></a>
          <a href="https://youtube.com/@andikadwisaputra2932" class="youtube"><i class="bx bxl-youtube"></i></a>
          <a href="https://wa.me/qr/Q5BPJDQQIUBLH1" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
          <a href="https://instagram.com/andikads__?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Andika DS</h1>
      <p>I'm <span class="typed" data-typed-items=" Student, Web Developer, Future Programer, Hard Worker"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>About Me</h2>
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right" style="margin-top: 40px;">
              <img src="assets/img/img 6.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>Hardest Worker in the Room</h3>
              <p class="fst-italic">
                 <!-- "Tidak ada rahasia untuk sukses. Ini adalah hasil dari persiapan, kerja keras, dan belajar dari kegagalan." - Colin Powell -->
                 <!-- "The expert in anything was once a beginner." - Helen Hayes -->
                 "The only person you are destined to become is the person you decide to be." <br>
                   - Ralph Waldo Emerson
                </p></br>
              <div class="row">
                <div class="col-lg-5">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>Andika Dwi Saputra</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>School:</strong> <span>SMKN 1 Punggelan</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 857-4369-9909</span></li>
                  </ul>
                </div>
                <div class="col-lg-7">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>Punggelan, Banjarnegara</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Birth Date:</strong> <span>July 9th, 2005</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>andika.dwi.saputra.7925@gmail.com</span></li>
                  </ul>
                </div>
              </div>
              <!-- <p>Saya Andika Dwi Saputra, hal yang berkaitan dengan programing adalah sesuatu yang menarik minat saya. Membangun kerja sama tim dan berpikir kritis adalah hal yang selalu saya utamakan. Dengan keuletan yang tertanam dalam diri saya, saya selalu bekerja keras untuk mencapai masa depan yang saya impikan.</p> -->
              <p style="text-align: justify;">Hey there, I'm Andika Dwi Saputra, and I'm all about the vibes of programming. It's like a never-ending adventure where I get to create awesome things using lines of code. Working together as a team and thinking critically are the foundations I live by. With an unwavering perseverance, I give my all to turn my dreams into a reality. Programming keeps me in my element, and I'm always up for the challenge, pushing boundaries and seeking innovative solutions. So, let's kick back, code, and make the future as cool as can be!</p>
            </div>
          </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">
        <div class="section-title">
          <h2>Resume</h2>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>SD N 1 Punggelan</h4>
              <h5>2010-2017</h5>
            </div>
            <div class="resume-item">
              <h4>SMPN 1 Wanadadi</h4>
              <h5>2017-2020</h5>
            </div>
            <div class="resume-item">
              <h4>SMKN 1 Punggelan</h4>
              <h5>2020-now</h5>
            </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Hobby</h3>
              <div class="resume-item">
                <h4>Web Development</h4>
                <h5>PHP Laravel, Bootstrap, ReactJS</h5>
              </div>
              <div class="resume-item">
                <h4>Music</h4>
                <h5>Guitar, Vocal</h5>
              </div>
              <div class="resume-item">
                <h4>Fitness</h4>
                <h5>Gym, Jogging</h5>
              </div>
              <div class="resume-item">
                <h4>Games</h4>
                <h5>Mobile Legends</h5>
              </div>
              <h3 class="resume-title">Programming Language</h3>
              <div class="resume-item">
                <ul>
                  <li>PHP</li>
                  <li>C#</li>
                  <li>HTML</li>
                  <li>CSS</li>
                  <li>C++</li>
                  <li>JavaScript</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Soft Skill</h3>
            <div class="resume-item pb-0">
              <ul>
                <li>Time Management</li>
                <li>Easy Adaption</li>
                <li>Teamwork</li>
                <li>Diligence & Perseverance</li>
                <li>Critical Thinking</li>
              </ul>
            </div>

            <h3 class="resume-title">Hard Skill</h3>
            <div class="resume-item">
              <h4>Web Developer</h4>
              <h5>PHP Laravel, Bootsrap, ReactJS</h5>
            </div>
            <div class="resume-item">
              <h4>English</h4>
              <h5>TOEIC Test 800 points</h5>
            </div>
            <div class="resume-item">
              <h4>Basic Networking</h4>
              <h5>Mikrotik, Router, SSL, etc</h5>
            </div>
            <div class="resume-item">
              <h4>Internet of Things</h4>
              <h5>Arduino IDE</h5>
            </div>
            <div class="resume-item">
              <h4>Database Server</h4>
              <h5>XAMMP, MySql, Ubuntu MySql</h5>
            </div>
            <div class="resume-item">
              <h4>Microsoft Office</h4>
              <h5>Microsoft Word, Excel, Powerpoint</h5>
            </div>
            <div class="resume-item">
              <h4>Unity 2021</h4>
              <h5>AR C#</h5>
            </div>
            <h3 class="resume-title">Framework</h3>
            <div class="resume-item">
              <ul>
                <li>Laravel (PHP)</li>
                <li>.NET Framework (C#, Dekstop)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Discover my portfolio, a testament to the fusion of creativity and pioneering solutions.</p>
        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-arduino">Absensi Otomatis</li>
              <li data-filter=".filter-ar">AR</li>
              <li data-filter=".filter-certificate">Certificate</li>
              <li data-filter=".filter-web">Web Dev's</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 portfolio-item filter-arduino">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/arduino 1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/arduino 1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Projek Arduino Absensi Otomatis menggunakan sensor RFID"><i class="bx bx-plus"></i></a>
                <a href="/iot" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-ar">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/ar 1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/ar 1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Projek Augmented Reality menggunakan Unity"><i class="bx bx-plus"></i></a>
                <a href="/ar" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-arduino">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/arduino 2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/arduino 2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Projek Arduino Absensi Otomatis menggunakan sensor RFID"><i class="bx bx-plus"></i></a>
                <a href="/iot" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-arduino">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/arduino 3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/arduino 3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Projek Arduino Absensi Otomatis menggunakan sensor RFID"><i class="bx bx-plus"></i></a>
                <a href="/iot" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-ar">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/ar 2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/ar 2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Projek Augmented Reality menggunakan Unity"><i class="bx bx-plus"></i></a>
                <a href="/ar" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-ar">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/ar 3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/ar 3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Projek Augmented Reality menggunakan Unity"><i class="bx bx-plus"></i></a>
                <a href="/ar" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-certificate">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/toeic.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/toeic.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Toeic Test certificate"><i class="bx bx-plus"></i></a>
                <a href="/toeic" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/web 1.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/web 1.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="The Attendance Web App that automatically recaps employee's attendance data from the ZKTECO Proface X TI presence machine."><i class="bx bx-plus"></i></a>
                <a href="/web" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/web 2.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/web 2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web Apps for managing the coorporation (on Progress)"><i class="bx bx-plus"></i></a>
                <a href="/web" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/web 3.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/web 3.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Easytask is a web application that has been developed to manage the tasks of Akastra's employees. (as a co-dev)"><i class="bx bx-plus"></i></a>
                <a href="/web" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/web 4.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/web 4.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="My own profile web"><i class="bx bx-plus"></i></a>
                <a href="/web" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
        </div>
        <div class="row" data-aos="fade-in">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <a href="https://www.google.com/maps/place/Akastra+Toyota/data=!4m7!3m6!1s0x2e69f6cfd03048a1:0x4466de73e8f6a0e5!8m2!3d-6.2105017!4d106.7831171!16s%2Fg%2F1tf2p0tr!19sChIJoUgw0M_2aS4R5aD26HPeZkQ?authuser=0&hl=id&rclk=1">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Jalan Raya Kebayoran Lama, Jl. Palmerah Barat VII No.26, RT.1/RW.2, Sukabumi Utara, Kebonjeruk, Jakarta 11540</p>
                </a>
              </div>
              <div class="email">
                <a href="mailto:andika.dwi.saputra.7925@gmail.com">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>andika.dwi.saputra.7925@gmail.com</p>
                </a>
              </div>
              <div class="phone">
                <a href="https://wa.me/qr/Q5BPJDQQIUBLH1">
                  <i class="bi bi-whatsapp"></i>
                  <h4>WhatsApp:</h4>
                  <p>+62 857-4369-9909</p>
                </a>
              </div> 
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4041341124453!2d106.78032362419944!3d-6.2103091608298575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6cfd03048a1%3A0x4466de73e8f6a0e5!2sAkastra%20Toyota!5e0!3m2!1sid!2sid!4v1688981799677!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main>

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; AndikaDS
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

  <script>
    function shuffleArray(array) {
      for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
      }
      return array;
    }

    const portfolioContainer = document.querySelector('.portfolio-container');
    const portfolioItems = Array.from(portfolioContainer.getElementsByClassName('portfolio-item'));
    const shuffledItems = shuffleArray(portfolioItems);
  
    portfolioItems.forEach((item) => {
      item.remove();
    });
  
    shuffledItems.forEach((item) => {
      portfolioContainer.appendChild(item);
    });
  </script>
</body>

</html>
