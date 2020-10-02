<?php
  include('../verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Loja Otakinho - Sistema NF</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/images/favicon.png" rel="icon">
  <link href="../assets/images/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/css/main.css" rel="stylesheet">
  <link href="../assets/css/responsive.css" rel="stylesheet">
  <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v2.2.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    .page-home {
      height: 100vh !important;
    }

    .drop-down ul {
      background-color: rgba(20, 20, 26, 0.9) !important;
    }

    .drop-down ul li a {
      color: white !important;
      transition: .3s;
    }

    .drop-down ul li a:hover {
      color: #1acc8d !important;
    }

    #hero {
      background: url("../assets/images/bgAnime2.jpg") fixed;
      background-repeat: no-repeat;
      background-size: 100% 110%;
      width: 100%;
      min-height: 100vh;
      position: relative;
      padding: 120px 0 0 0;
    }

    @media (max-width: 1000px) {
      #hero {
      background-size: 110% 110%;
      }
    }

    @media (max-width: 800px) {
      #hero {
      background-size: 120% 100%;
      }
    }

    @media (max-width: 650px) {
      #hero {
      background-size: 125% 100%;
      }
    }

    @media (max-width: 500px) {
      #hero {
      background-size: 130% 100%;
      }
    }

    @media (max-width: 400px) {
      #hero {
      background-size: 140% 100%;
      }
    }

    @media (max-width: 300px) {
      #hero {
      background-size: 150% 100%;
      }
    }
  </style>
</head>

<body class="page-home">
  <div class="page-home-container">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
      <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.php"><span>Loja Otakinho</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.php">Vendas</a></li>
            <li class="drop-down"><a href="#">Opções</a>
              <ul>
                <li><a href="page-view-nf.php">Notas Emitidas</a></li>
                <li><a href="page-view-products.php">Ver Produtos</a></li>
                <li><a href="page-add-product.php">Cadastrar Produtos</a></li>
              </ul>
            </li>
            <li><a href="../logout.php">Logout &nbsp;<i class="solid fa fa-sign-out"></i></a></li>

          </ul>
        </nav><!-- .nav-menu -->

      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

      <div class="container">
        <div class="row">
          <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
            <div data-aos="zoom-out">
              <h1>Vamos lá <span><?php echo $_SESSION['name']; ?></span> <i class="fa fa-heart-o"></i></h1>
              <h2>Inicie uma venda e obtenha a nota fiscal!</h2>
              <div class="text-center text-lg-left">
                <a href="page-date-nf.php" class="btn-get-started scrollto">Iniciar Venda</a>
              </div>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
            <img src="../assets/images/db2.png" class="img-fluid animated" alt="Animação de Dragon Ball">
          </div>
        </div>
      </div>

    </section><!-- End Hero -->

  </div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>