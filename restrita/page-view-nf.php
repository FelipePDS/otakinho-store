<?php
    include('../verifica_login.php');
    include('../conecta.php');
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
      background-position: center;
      
      min-height: 100vh !important;

      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
    }

    .card {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;

      padding-top: 2.5rem;
      padding-bottom: 2.5rem;
    }

    .col-auto {
      width: 100%;

      margin-top: 1rem;

      display: flex;
      align-items: center;
      justify-content: center;
    }

    .nf {
        border: white 1px solid;
        border-radius: 1rem;
        position: relative;
    }

    .tables-nf {
        margin-top: 2rem !important;
    }

    .card-header+.tables-nf {
        margin-top: 1px !important;
        padding-top: none;
        border: none;
    }

    .nf-container {
        width: 96.5%;
        display: flex;
        align-items: left;
        justify-content: left;
        flex-direction: column;

        margin-left: .7rem;
        margin-top: 1rem;

        color: rgb(193, 209, 201);
    }

    .nf-container p {
        margin-bottom: .5rem !important;
    }

    .nf-container .row-nf {
        display: flex;
        justify-content: space-between;
    }

    .btn-primary {
      border-color: transparent !important;
    }

    .btn:hover {
      background-color: #34e5a6 !important;
    }

    .animated-button {
      -webkit-animation: right-left 1s ease-in-out infinite alternate-reverse both;
      animation: right-left 1s ease-in-out infinite alternate-reverse both;
    }

    .btn-sucess:hover {
        background-color: #34e5a6 !important;
    }

    .btn-danger:hover {
        background-color: #d64755 !important;
    }

    @-webkit-keyframes right-left {
      0% {
        transform: translateX(0px);
      }
      100% {
        transform: translateX(4px);
      }
    }

    @keyframes right-left {
      0% {
        transform: translateX(0px);
      }
      100% {
        transform: translateX(4px);
      }
    }

    .animated-button2 {
        -webkit-animation: top-bottom 1.5s ease-in-out infinite alternate-reverse both;
        animation: top-bottom 1.5s ease-in-out infinite alternate-reverse both;
      }
  
      @-webkit-keyframes top-bottom {
        0% {
          transform: translateY(-2px);
        }
        100% {
          transform: translateY(2px);
        }
      }
  
      @keyframes top-bottom {
        0% {
          transform: translateY(-2px);
        }
        100% {
          transform: translateY(2px);
        }
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

    @media (max-width: 420px) {
      #hero {
        background-size: 140% 100%;
      }

      .card {
        overflow-x: scroll !important;
        width: 100% !important;
        flex-direction: unset;
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
            <li><a href="index.php">Voltar &nbsp;<i class="solid fa fa-arrow-circle-left"></i></a></li>
            <li class="drop-down active"><a href="#">Opções</a>
              <ul>
                <li><a href="#">Notas Emitidas</a></li>
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
    <section id="hero" style="display: flex; flex-direction: column;">

        <img src="../assets/images/moneyAnime2.gif" data-aos="zoom-in" alt="Gif da tsunade com dinheiro" style="z-index: 2; border-radius: 50%; margin-bottom: 1.3rem !important;">
      <div class="card text-white bg-dark mb-3" data-aos="zoom-in" style="padding: 2rem;">
          <div class="card-header bg-dark text-white" style="padding-top: 0px !important;"><b>Notas Emitidas</b></div>

          <?php
            $queryNF = "SELECT * FROM nf";

            foreach($conexao -> query($queryNF) as $NF) {
                $nf = $NF['nf'];
                $queryCodAttendant = "SELECT codAttendants FROM itemsnf WHERE codNF = '$nf'";
                $queryCodAttendant = $conexao -> query($queryCodAttendant);
                $attendantResult = $queryCodAttendant -> fetch_assoc();
                $codAttendant = $attendantResult['codAttendants'];

                $queryAttendant = "SELECT name FROM users WHERE id = '$codAttendant'";
                $queryAttendant = $conexao -> query($queryAttendant);
                $queryAttendantResult = $queryAttendant -> fetch_assoc();
                $nameAttendant = $queryAttendantResult['name'];

          ?>
                <div class="tables-nf">
                    <div class="nf">
                        <div class="nf-container">
                            <div class="row-nf">
                                <p>NF: <?php echo $nf; ?></p>
                                <p>Total: <?php echo $NF['valueTotal']; ?></p>
                            </div>
                            <div class="row-nf">
                                <p>Data: <?php echo $NF['dateNF']; ?></p>
                                <p>Atendente: <?php echo $nameAttendant; ?></p>
                            </div>
                        </div>
                        <div class="card-body" style="width: 100%; display: flex; align-items: center !important; justify-content: center !important; padding: 0px !important;">

                        <table class="table table-striped table-dark" style="opacity: 90%;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Produto</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">Quantidade</th>
                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>

                                    <?php 
                                        $queryItems = "SELECT * FROM itemsnf WHERE codNF = '$nf'";
                                        foreach($conexao -> query($queryItems) as $item) {
                                            $codProduct = $item['codProduct'];
                                    ?>
                                        <tr>
                                                <th scope="row"><?php echo $codProduct; ?></th>

                                                <?php
                                                    $queryProducts = "SELECT * FROM products WHERE idProduct = '$codProduct'";
                                                    foreach($conexao -> query($queryProducts) as $product) {
                                                ?>
                                                    <td><?php echo $product['name']; ?></td>
                                                    <td><?php echo $product['price']; ?></td>
                                                <?php
                                                    }
                                                ?>
                                                <td><?php echo $item['amount']; ?></td>
                                                <td><?php echo $item['subtotal']; ?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>

                            </tbody>
                        </table>  
                    </div>
                </div>
            <?php
              }
            ?>

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
