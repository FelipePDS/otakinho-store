<?php
    include('../verifica_login.php');
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Loja Otakinho - cadastro</title>

  <link href="../assets/images/favicon.png" rel="icon">
  <link href="../assets/images/favicon.png" rel="apple-touch-icon">

  <link rel="stylesheet" href="../assets/css/styleLogin.css" media="screen" type="text/css" />
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
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">

  <script src="../assets/script/scripts.js" defer></script>
  <script src="../assets/script/errorLogin.js" defer></script>

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <style>
    .mascara {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .mascara h1 {
        margin-bottom: 1.5rem;
    }

    #myProgress {
        position: relative;

        width: 40%;
        height: 2rem;

        background-color: #84eec9;

        margin-top: 4rem;
        border-radius: .3rem;
    }
    
    #myBar {
        display: flex;
        align-items: center;
        justify-content: center;

        position: absolute;
        width: 1%;
        height: 100%;
        background-color: #2be4a2;

        border-radius: .3rem;
    }

    #label {
        text-align: center;
        line-height: 30px;
        color: white;
    }
  </style>

</head>

<body>

  <html lang="pt-br">
  <head>

    <meta charset="utf-8">

    <title>Loja Otakinho</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

    <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->

  </head>

  <body id="page-login" class="page-login" onload="move()">

    <div class="mascara">

        <div data-aos="zoom-out">
            <h1>Venda Bem Sucedida <span><?php echo $_SESSION['name']; ?></span>!</h1>
            <img src="../assets/images/sucess-nf.gif" alt="Animação de tela de carregamento Dragon Ball" style="border-radius: 50%;">
        </div>

        <div id="myProgress">
            <div id="myBar">
                <div id="label">1%</div>
            </div>
        </div>

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
        setTimeout( function() {
            window.location = 'index.php';
        }, 5000);

        //barra de progresso
        function move() {
            var elem = document.getElementById("myBar");
            var width = 1;
            var id = setInterval(frame, 50);
            function frame() {
                if (width >= 100) {
                    clearInterval(id);
                } else {
                    width++;
                    elem.style.width = width + '%';
                    document.getElementById("label").innerHTML = width * 1 + '%';
                }
            }
        }
    </script>

  </body>
</html>

</body>

</html>