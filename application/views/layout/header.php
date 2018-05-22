<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\bootstrap\css\bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\Admin.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
  </head>

  <body>
    <header class="main-header">

      <nav class="navbar navbar-static-top">
        <div class="container-wrapper">
          <?= anchor('login/signin','Tribe Registration',['class'=>'navbar-brand']) ?>
        </div>
        <!-- /.container-fluid -->
      </nav>

      <nav class="nav navbar menu">
        <div class="container-wrapper">
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">

          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>

    </header>
