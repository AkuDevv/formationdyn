<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'formationsite';

    $connection = mysqli_connect($host, $username, $password, $dbname);
    if ($connection == false) {
      die('Erreur de connexion!');
    } else {
      $select = "SELECT count(*) from users";
      $result = mysqli_query($connection, $select);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
          $users = $row[0];
        }
      } else {
        echo "<p>Erreur!</p>";
      }
    }

    if ($connection == false) {
      die('Erreur de connexion!');
    } else {
      $select_ = "SELECT count(*) from formations";
      $result_ = mysqli_query($connection, $select_);
      if (mysqli_num_rows($result_) > 0) {
        while ($row = mysqli_fetch_array($result_)) {
          $formationscount = $row[0];
        }
      } else {
        echo "<p>Erreur!</p>";
      }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Formations - Ibtikarcom</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo__.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
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

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:agenceibtikarcom@gmail.com">formation@ibtikarcom.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+212-700-252-045</span></i>
      </div>
      <div class="social-links d-none d-md-flex">
        <a href="https://www.facebook.com/Ibtikarcom.platform" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/ibtikarcom/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/international-innovation-agency/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="w-25 h-25">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="https://ibtikarcom.com/"><img src="assets/img/logo_.png" alt="Ibtikarcom" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">Qui somme nous</a></li>
          <li><a class="nav-link scrollto" href="#why-us">Pourquoi nous</a></li>
          <li><a class="nav-link scrollto" href="#team">Nos formations</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Galerie</a></li>
          <li><a class="nav-link scrollto" href="#clients">Partenaires</a></li>
          <li class="dropdown"><a href="#"><span>Ibtikarcom</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://ibtikarcom.com/">Notre site</a></li>
              <li><a href="https://event.ibtikarcom.com/">Evenements</a></li>
              <li><a href="#">Entreprenariat</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/formation2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Formations d'<span>Ibtikarcom</span></h2>
                <p class="animate__animated animate__fadeInUp">Nous offrons les meilleurs formations en nouvelles technologies</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Explorer</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/formation1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Formations d'<span>Ibtikarcom</span></h2>
                <p class="animate__animated animate__fadeInUp">
                  <?php
                  $host = 'localhost';
                  $username = 'root';
                  $password = '';
                  $dbname = 'formationsite';

                  $connection = mysqli_connect($host, $username, $password, $dbname);
                  if ($connection == false) {
                    die('Erreur de connexion!');
                  } else {
                    $select = "SELECT * from Offres";
                    $result = mysqli_query($connection, $select);
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_array($result)) {
                        echo "$row[1]";
                      }
                    } else {
                      echo "<p>Erreur!</p>";
                    }
                  }
                  ?>
                </p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Explorer</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon ri-arrow-left-line" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon ri-arrow-right-line" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>Notre blog</h2>
            <h3>Des informations utiles pour nous bien savoir</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ibtikarcom spécialisée en communication digitale et production audiovisuelle en innovation est au service de la performance digitale de ses clients et les accompagne de la réflexion au déploiement et à promouvoir :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Leur image</li>
              <li><i class="ri-check-double-line"></i> Leurs innovations</li>
              <li><i class="ri-check-double-line"></i> Différents produits / services</li>
            </ul>
            <p class="fst-italic">
              L’innovation et la créativité sont au cœur de l’ADN d’Ibtikarcom.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About List Section ======= -->
    <section id="about-list" class="about-list">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Objectif #1</h4>
              <p>Proposer des solutions innovantes adaptées avec le projet</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Objectif #2</h4>
              <p>Accompagner le porteur de l’idée jusqu’à la réalisation</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/about-list-img.jpg");'></div>
        </div>

      </div>
    </section>

    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2 class="mt-4">nous</h2>
          <h3> <span> Pourquoi</span></h3>
          <p>Quelques avantages pour nous choisir</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up">
              <span>01</span>
              <h4>Multiples Choix</h4>
              <p>Nous offrons des choix différents pour satisfaire vos besoins</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <span>02</span>
              <h4>Formateurs Experts</h4>
              <p>Des formateurs haut niveau vous accompagnent du A à Z</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <span>03</span>
              <h4>Technologies Modernes</h4>
              <p>Des nouvelles technologies pour vous bien intégrer au monde professionnelle</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About List Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container position-relative">

        <div class="text-center title">
          <h3>Nos Chiffres</h3>
        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $users;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>BÉNÉFICIAIRES</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
            <p>FORMATEURS</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $formationscount;?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>FORMATIONS</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
            <p>ANS D'EXPERIENCE</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2 class="mt-4">formations</h2>
          <h3> <span> Nos</span></h3>
          <p>Voici une liste des formations que nous offrons</p>
        </div>

        <div class="row d-flex justify-content-center">

          <?php
          $host = 'localhost';
          $username = 'root';
          $password = '';
          $dbname = 'formationsite';

          $connection = mysqli_connect($host, $username, $password, $dbname);
          if ($connection == false) {
            die('Erreur de connection!');
          } else {
            $select = "SELECT * from formations";
            $result = mysqli_query($connection, $select);
            if (mysqli_num_rows($result) > 0) {
              $a = 0;
              $_SESSION['count'] = $a;
              while ($row = mysqli_fetch_array($result)) {
                $a++;
                echo "
                <div class='col-lg-4 col-md-3 d-flex align-items-stretch'>
            <div class='member' data-aos='fade-up'>
              <div class='member-img'>
                <img src='" . $row[2] . "' class='img-fluid' alt=''>
                <div class='social'>
                  <a href='formation.php?form_id=" . $row[0] . "' title='Explorer'><i class='bi bi-bookmark-plus'></i></a>
                </div>
              </div>
              <div class='member-info'>
                <h3>" . $row[1] . "</h3>
                <span>
                  " . substr($row[4], 0, 300) . "..." . "
                </span>
              </div>
            </div>
          </div>
                ";
              }
            } else {
              echo "Pas de données!";
            }
          }
          mysqli_close($connection);
          ?>
        </div>

      </div>
    </section>
    <!-- End Team Section -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Galerie</span>
          <h3><span>Galerie</span></h3>
          <p class="mt-5">Atelier Entrepreneurial pour les étudiants de l'école ESMC</p>
        </div>

        <div class="row portfolio-container">

          <div class='col-lg-6 col-md-6 portfolio-item filter-app'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/Atelier Entrepreneurial pour les étudiants de l'école ESMC/WhatsApp Image 2022-05-20 at 17.05.15.jpeg" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: Atelier Entrepreneurial pour les étudiants de l'école ESMC</h4>
              </div>
            </div>
          </div>

          <div class='col-lg-6 col-md-6 portfolio-item filter-app'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/Atelier Entrepreneurial pour les étudiants de l'école ESMC/WhatsApp Image 2022-05-20 at 22.03.31.jpeg" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: Atelier Entrepreneurial pour les étudiants de l'école ESMC</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="section-title">
          <p class="mt-5">ENSAM</p>
        </div>

        <div class="row portfolio-container">
          <div class='col-lg-4 col-md-6 portfolio-item filter-app'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/ENSAM/_DSC2193.JPG" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: ENSAM</h4>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-app'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/ENSAM/_DSC7620.JPG" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: ENSAM</h4>
              </div>
            </div>
          </div>

          <div class='col-lg-4 col-md-6 portfolio-item filter-app'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/ENSAM/_DSC7634.JPG" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: ENSAM</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="section-title">
          <p class="mt-5">Comment Vendre et Commercialiser mon Projet - en partenariat avec l'Université UH2C dans le cadre de la 4ème promotion du programme SALEEM</p>
        </div>

        <div class="row portfolio-container d-flex align-items-center">
          <div class='col-lg-12 col-md-6 portfolio-item filter-app d-flex justify-content-center'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/UH2C/Comment Vendre et Commercialiser mon Projet/WhatsApp Image 2022-07-22 at 19.14.59.jpeg" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: Comment Vendre et Commercialiser mon Projet</h4>
              </div>
            </div>
          </div>

          <div class='col-lg-9 col-md-6 portfolio-item filter-app'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/UH2C/Comment Vendre et Commercialiser mon Projet/img.png" class='img-fluid w-100' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: Comment Vendre et Commercialiser mon Projet</h4>
              </div>
            </div>
          </div>

          <div class='col-lg-3 col-md-6 portfolio-item filter-app '>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/UH2C/Comment Vendre et Commercialiser mon Projet/WhatsApp Image 2022-07-22 at 19.15.00.jpeg" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: Comment Vendre et Commercialiser mon Projet</h4>
              </div>
            </div>
          </div>
        </div>

        <div class="section-title">
          <p class="mt-5">Marketing Opérationnel et Stratégique - en partenariat avec l'Université UH2C dans le cadre de la 4ème promotion du programme SALEEM</p>
        </div>

        <div class="row portfolio-container d-flex align-items-center">
          <div class='col-lg-12 col-md-6 portfolio-item filter-app d-flex justify-content-center'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/UH2C/Marketing Opérationnel et Stratégique/290380670_453136766817330_8649861949523534726_n.jpeg" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: Marketing Opérationnel et Stratégique</h4>
              </div>
            </div>
          </div>

        </div>

        <div class="section-title">
          <p class="mt-5">Sensibilisation & Culture Entrepreneurial - en partenariat avec l'Université UH2C dans le cadre de la 4ème promotion du programme SALEEM</p>
        </div>

        <div class="row portfolio-container d-flex align-items-center">

          <div class='col-lg-6 col-md-6 portfolio-item filter-app d-flex justify-content-center'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/UH2C/Sensibilisation & Culture Entrepreneurial/287792031_446772984120375_7783887530039244665_n.jpeg" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: Sensibilisation & Culture Entrepreneurial</h4>
              </div>
            </div>
          </div>

          <div class='col-lg-6 col-md-6 portfolio-item filter-app d-flex justify-content-center'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/UH2C/Sensibilisation & Culture Entrepreneurial/288772583_446772944120379_3452990325299294719_n.jpeg" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: Sensibilisation & Culture Entrepreneurial</h4>
              </div>
            </div>
          </div>

          <div class='col-lg-12 col-md-6 portfolio-item filter-app d-flex justify-content-center'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/UH2C/Sensibilisation & Culture Entrepreneurial/Capture d’écran 2022-07-27 à 14.46.46.png" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: Sensibilisation & Culture Entrepreneurial</h4>
              </div>
            </div>
          </div>

          <div class='col-lg-6 col-md-6 portfolio-item filter-app d-flex justify-content-center'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/extra1.jpeg" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: Sensibilisation & Culture Entrepreneurial</h4>
              </div>
            </div>
          </div>

          <div class='col-lg-6 col-md-6 portfolio-item filter-app d-flex justify-content-center'>
            <div class='portfolio-wrap'>
              <img src="assets/img/Gallery/Formations/extra2.jpeg" class='img-fluid' alt=''>
              <div class='portfolio-info'>
                <h4>Formation: Sensibilisation & Culture Entrepreneurial</h4>
              </div>
            </div>
          </div>

        </div>

      </div>
      <div class="row portfolio-container d-flex justify-content-center">
        <div class='col-lg-4 col-md-6 portfolio-item filter-app d-flex justify-content-center'>
          <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/CeEgyMeqUOL/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/reel/CeEgyMeqUOL/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/reel/CeEgyMeqUOL/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Agence Ibtikarcom (@ibtikarcom.platform)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>        </div>
        <div class='col-lg-4 col-md-6 portfolio-item filter-app d-flex justify-content-center'>
          <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/tv/CUNhbyHKCdO/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/tv/CUNhbyHKCdO/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/tv/CUNhbyHKCdO/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Agence Ibtikarcom (@ibtikarcom.platform)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>        </div>
      </div>
      </section>
  <!-- End Team Section -->

    <!-- ======= Partenaires Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="section-title">
          <span>Partenaires</span>
          <h3><span>Partenaires</span></h3>
        </div>
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/Partenaires/ymc.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/Partenaires/imvl.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/Partenaires/innovatel.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/Partenaires/UHIIC.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/Partenaires/ensam.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/Partenaires/esmc.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/Partenaires/cemfa.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/Partenaires/ama.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <span>Contact</span>
          <h3><span>Contact</span></h3>
          <p class="mt-5">Des information pour nous contacter</p>
        </div>
      </div>

      <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.6803232919864!2d-7.658428990093336!3d33.54009837500855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x59e0129521644421!2zMzPCsDMyJzI0LjQiTiA3wrAzOSczMS4wIlc!5e0!3m2!1sfr!2sma!4v1658235646346!5m2!1sfr!2sma" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="info-wrap mt-5">
          <div class="row">
            <div class="col-lg-4 info">
              <i class="ri-map-pin-line"></i>
              <h4>Localisation :</h4>
              <p>47, Rue Aït Ba Amrane 3ème étage - Casablanca Maroc</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="ri-mail-line"></i>
              <h4>Email :</h4>
              <p>formation@ibtikarcom.com</p>
            </div>

            <div class="col-lg-4 info mt-4 mt-lg-0">
              <i class="ri-phone-line"></i>
              <h4>Tel :</h4>
              <p>+212-700-252-045</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <!--<h3>Ibtikarcom</h3>-->
              <a href="https://ibtikarcom.com/"><img src="assets/img/logo-white.png" alt="Ibtikarcom" class="img-fluid mb-4"></a>
              <p>
                47, Rue Aït Ba Amrane 3ème étage - Casablanca Maroc<br><br>
                <strong>Phone:</strong> +212-700-252-045<br>
                <strong>Email:</strong> agenceibtikarcom@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/Ibtikarcom.platform" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/ibtikarcom/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/company/international-innovation-agency/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Liens Utils</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Terms of service</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">Design & Edition</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Production Audio-visuelle</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Evénementiel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Location de matériel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Formation, conseil et stratégie</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Agence</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="">A propos de L'agence</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Equipe</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Projets</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="">FAQs</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>