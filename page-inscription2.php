<?php
    session_start()
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Loja Otakinho - cadastro</title>

  <link href="assets/images/favicon.png" rel="icon">
  <link href="assets/images/favicon.png" rel="apple-touch-icon">

  <link rel="stylesheet" href="assets/css/styleLogin.css" media="screen" type="text/css" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  <script src="assets/script/scripts.js" defer></script>
  <script src="assets/script/errorLogin.js" defer></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <html lang="en-US">
  <head>

    <meta charset="utf-8">

    <title>Login</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

  </head>

  <body id="page-login" class="page-login">

    <div class="mascara">

      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top d-flex align-items-center header-transparent">

            <div class="logo mr-auto">
              <h1 class="text-light"><a href="index.html"><span>Loja Otakinho</span></a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html#about">Sobre</a></li>
                <li><a href="page-login2.php">Login</a></li>

              </ul>
            </nav><!-- .nav-menu -->

        </header><!-- End Header -->


        <div id="container" class="container container-inscription">

          <?php if (isset($_SESSION['user_existing'])): ?>
              <div class="error notification is-danger">
                  <p>O usuário <?php echo $_SESSION['email'] ?> já existe! Informe outro e tente novamente.</p>
                  <img src="assets/images/icons/times-solid.svg" alt="close-icon">
              </div>
          <?php 
              endif;
          ?>

          <div id="login">

            <form action="cadastrar.php" method="POST">

              <fieldset class="clearfix">

                <p><span class="fontawesome-heart"></span><input name="name" type="text" placeholder="nome : )" onBlur="if(this.placeholder == '') this.placeholder = 'nome : )'" onFocus="if(this.placeholder == 'nome : )') this.placeholder = ''" maxlength="300" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-user"></span><input name="email" type="email" placeholder="@email.com" onBlur="if(this.placeholder == '') this.placeholder = '@email.com'" onFocus="if(this.placeholder == '@email.com') this.placeholder = ''" maxlength="300" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p class="password-container"><span class="fontawesome-lock"></span><input class="password" name="passwordUser" type="password"  placeholder="Password" onBlur="if(this.placeholder == '') this.placeholder = 'Password'" onFocus="if(this.placeholder == 'Password') this.placeholder = ''" maxlength="32" required> <img class="view-password" src="assets/images/icons/sharingan.png" alt="visualizar a senha" title="visualizar senha"> </p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><input type="submit" value="ENVIAR"></p>

                <?php if (isset($_SESSION['user_existing'])): ?>
                  <script>
                    document.querySelectorAll('p input')[0].value = '<?php echo $_SESSION["name"]; ?>';
                    document.querySelectorAll('p input')[1].value = '<?php echo $_SESSION["email"]; ?>';
                    document.querySelectorAll('p input')[2].value = '<?php echo $_SESSION["passwordUser"]; ?>';
                  </script>
                <?php
                  endif;
                  unset($_SESSION['user_existing']);
                ?>

              </fieldset>

            </form>

            <p><a href="page-login2.php">Login</a><span class="fontawesome-arrow-right"></span></p>

          </div> <!-- end login -->

        </div>

    </div>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

  </body>
</html>

</body>

</html>