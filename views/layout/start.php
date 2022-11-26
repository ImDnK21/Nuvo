<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= APP_NAME ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Roboto+Condensed:ital,wght@0,400;0,700;1,400;1,700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
  <!-- CSS only -->

  <!-- CSS JQUERY -->
  <link rel="stylesheet" href="../node_modules/chosen_v1.8.7/chosen.min.css">
  <!-- CSS JQUERY -->

  <!-- SCRIPT JQUERY -->

  <!-- SCRIPT JQUERY -->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/384a6fe07a.js"></script>
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
 <!-- HOME css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <!-- HOME CSS-->

  <!-- HOME JS-->
  <link rel="stylesheet" href="https://assets.codepen.io/16327/gsap-latest-beta.min.js'">
  <link rel="stylesheet" href="https://assets.codepen.io/16327/Observer.min.js">
  <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/SplitText3.min.js">
  <!-- HOME JS-->
  
  <link rel="stylesheet" href="<?= APP_URL . 'assets/css/main.css' ?>">
  <?php if (!isset($_GET['controller'])) { ?> 
    <link rel="stylesheet" href="<?= APP_URL . 'assets/css/home.css' ?>">
  <?php } ?>
  <!-- <link rel="stylesheet" href="<?= APP_URL . 'assets/css/multiselect.css' ?>"> -->
</head>
<body class="sb-nav-fixed">
