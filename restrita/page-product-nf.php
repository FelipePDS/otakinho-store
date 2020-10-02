<?php
  include('../verifica_login.php');
  include('last_nf.php');

  if(!$_SESSION['validate-date']) {
    header ('location: page-date-nf.php');
  }
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

    .add-field {
        position: absolute;
        top: 0rem;
        right: 6rem;

        font-size: .85rem;

        color: #1acc8d;

        cursor: pointer;

        transition: ease-in-out .3s;
    }

    .add-field:hover {
        color: #34e5a6;
    }

    .remove-field {
        display: none;

        position: absolute;
        top: 0rem;
        right: 6rem;

        font-size: .85rem;

        color: #696d70;

        cursor: pointer;

        transition: ease-in-out .3s;
    }

    .remove-field:hover {
        color: #767a7e;
    }

    @-webkit-keyframes right-left {
      0% {
        transform: translateX(0px);
      }
      100% {
        transform: translateX(5px);
      }
    }

    @keyframes right-left {
      0% {
        transform: translateX(0px);
      }
      100% {
        transform: translateX(5px);
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
            <li><a href="#" style="opacity: 50%;">Voltar &nbsp;<i class="solid fa fa-arrow-circle-left"></i></a></li>
            <li class="drop-down"><a href="#" style="opacity: 50%;">Opções</a>
              <ul>
                <li><a href="#" style="opacity: 50%;">Notas Emitidas</a></li>
                <li><a href="#" style="opacity: 50%;">Ver Produtos</a></li>
                <li><a href="#" style="opacity: 50%;">Cadastrar Produtos</a></li>
              </ul>
            </li>
            <li><a href="#" style="opacity: 50%;">Logout &nbsp;<i class="solid fa fa-sign-out"></i></a></li>

          </ul>
        </nav><!-- .nav-menu -->

      </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

      <div class="card text-white bg-dark mb-3" data-aos="zoom-in" style="padding: 2rem;">
          <div class="card-header bg-dark text-white" style="padding-top: 0px !important;">Quais produtos?</div>
          <div class="card-body" style="width: 100%; display: flex; align-items: center !important; justify-content: center !important; padding: 0px !important;">

            <form method="post" action="page-insert-item-nf.php?nf='<?php echo $lastNF; ?>'" enctype="multipart/form-data" class="form-horizontal was-validated" id='formAction'>

                <div class="form-row align-items-center" style="display: flex; align-items: center !important; justify-content: center !important; margin-bottom: 1.8rem;">
                  <div class="form-group row" style="margin: 0px !important;">
                    <label for="validationCustom01" class="col-2 col-form-label" style="width: 5rem; padding-right: 0px; padding-left: 0px; color: #606468 !important; text-align: right;">NF</label>
                    <div class="col-10">
                      <input name="nf" class="form-control text-white" type="text" id="validationCustom01" value="<?php echo $lastNF; ?>" style="background-color: #3a4147; color: #606468 !important; border-color: #2c3135 !important;" required aria-describedby="validatedInputGroupPrepend">
                    </div>
                  </div>
                </div>
                
                <div class="products">
                    <div class="form-row product-field" style="display: flex; align-items: center !important; justify-content: center !important; margin-bottom: .6rem; position: relative !important;">
                        <div class="col-md-4 mb-3" style="padding-left: 0px !important;">
                        <label for="validationDefaultUsername" style="color: #606468">Produto</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend2" style="background-color: #32373b !important; border-color: #2c3135 !important; color: #6a6e72;"><i class="fa fa-gift"></i></span>
                            </div>
                            <select class="form-control custom-select" name="optionProduct[]" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2"  style="background-color: #3a4147; color: #606468 !important; border-color: #2c3135 !important;" required>
                                <option value="">Selecione um item da lista</option>
                                <?php
                                    $queryProducts = "SELECT * FROM products";
                                    foreach ($conexao -> query($queryProducts) as $product) {
                                ?>
                                        <option value="<?php echo $product['idProduct'];?>"><?php echo $product['name'];?></option>
                            
                                <?php 
                                    }
                                ?>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-4 mb-3" style="padding-right: 0px !important;">
                          <label for="validationDefault02" style="color: #606468">Quantidade</label>
                          <input type="number" name="amountProduct[]" class="form-control" id="validationDefault02" placeholder="Quantidade" value="Otto" style="background-color: #3a4147; color: #606468 !important; border-color: #2c3135 !important;" required>
                        </div>

                        <div class="add-field">
                            Mais <i class="fa fa-cart-plus"></i>
                        </div>

                        <div class="remove-field">
                            <i class="fa fa-times"></i>
                        </div>
                    </div>
                </div>

                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2" style="margin: 0px !important; background-color: #1acc8d; border-color: none !important; font-size: 1.3rem;">Adicionar <i class="animated-button fa fa-cart-arrow-down"></i></button>
                  </div>

              </form>

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

  <script>
      const buttonAddField = document.querySelector('.add-field');
      
      buttonAddField.addEventListener('click', () => {
        const newFieldProducts = document.querySelector(".product-field").cloneNode(true);

        //remove property origin field
        newFieldProducts.querySelector('input').value = '';
        newFieldProducts.querySelector('.add-field').style.display = 'none';

        //add property clone field
        const buttonRemoveField = newFieldProducts.querySelector('.remove-field');
        buttonRemoveField.style.display = 'inline';

        buttonRemoveField.addEventListener('click', () => {
            newFieldProducts.animate([
                { transform: 'translateY(0px)' },
                { transform: 'translateY(-10px)' },
                { opacity: '0' },
                { transform: 'translateY(-210px)' }, 
                { opacity: '0' }
                ], {
                    duration: 400
            })

            setTimeout(function() {
                document.querySelector('.products').removeChild(newFieldProducts);
            }, 400);
        })

        document.querySelector('.products').appendChild(newFieldProducts);

        //ANIMATIONS ADD FIELD
        newFieldProducts.animate([
            { opacity: '0' },
            { transform: 'translateY(-210px)' }, 
            { opacity: '0' },
            { transform: 'translateY(-10px)' },
            { transform: 'translateY(0px)' }
            ], {
                duration: 400
            })
        });
  </script>

</body>
