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
  <script src="https://kit.fontawesome.com/384a6fe07a.js"></script>
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?= APP_URL . 'assets/css/main.css' ?>">
  <?php if ($_GET['controller'] == 'home' || !isset($_GET['controller'])) { ?> 
    <link rel="stylesheet" href="<?= APP_URL . 'assets/css/home.css' ?>">
  <?php } ?>
</head>
<body class="sb-nav-fixed">
