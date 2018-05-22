<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\css\Admin.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
  </head>

  <body>
    <header class="main-header">

      <nav class="navbar navbar-static-top">
        <div class="container-wrapper">
          <a href="javascript:void(0)" class="navbar-brand">Tribe Registration</a>
          <?= anchor('login/logout','Logout',['class'=>'navbar-brand pull-right']) ?>
        </div>
        <!-- /.container-fluid -->
      </nav>

      <nav class="nav navbar menu">
        <div class="container-wrapper">
          <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Application for Validity <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="../user/basicdetails">Basic Details</a></li>
                  <li><a href="../user/fatherdetails">Father Details</a></li>
                  <li><a href="../user/relativesdetails">Relatives Details</a></li>
                  <li><a href="../user/paternalrelativesdetails">Paternal Relatives Details</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>

    </header>
