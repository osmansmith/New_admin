<?php if(session::getValue('perfil')){}else{header("location:".URL."index/login");}?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVA | <?php if(session::getValue('perfil') == 0){echo 'Vendedor';}else{ echo 'Administrador';}?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL;?>public/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo URL;?>public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URL?>public/assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo URL?>public/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo URL?>public/assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo URL?>public/assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>