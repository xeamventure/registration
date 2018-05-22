
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tribe | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\bootstrap\css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\css\Admin.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">

    <div class="login-logo">
	<!--	<img src="" title="MarketShop" alt="Admin login"> 	-->

  </div>
  <!-- /.login-logo -->
   <p class="login-box-msg"><h3 class="text-center text-uppercase">Tribe Login</h2></p>
  <div class="login-box-body">

      <?php echo form_open("login/validatelogin") ?>

		  <div class="form-group">
        <?php if ($msg=$this->session->flashdata('message')): ?>
          <div class="<?php echo $this->session->flashdata('class') ?> text-center">
            <?php echo $msg ?>
          </div>
        <?php endif; ?>

		    <label for="email" class="sr-only"> User Name</label>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="fa fa-user fa-lg "></i></span>
          <?php echo form_input(['name'=>'uname','class'=>'form-control','placeholder'=>'User Id','value'=>set_value('uname')]) ?>
		    </div>
        <?php echo form_error('uname'); ?>
		  </div>

		  <div class="form-group">
		    <label for="password" class="sr-only">Password</label>
		    <div class="input-group">
		      <span class="input-group-addon"><i class="fa fa-lock fa-lg "></i></span>
		      <?php echo form_password(['name'=>'upass','class'=>'form-control','placeholder'=>'Password','value'=>set_value('upass')]) ?>
		    </div>
        <?php echo form_error('upass') ?>
		  </div>

		  <div class="row">
		    <div class="col-xs-3 pull-left no-padding" style="margin:0 15px 0 17px; ">
		      <input type="submit" class="btn btn-primary btn-block btn-flat" value="Login">
		    </div>
        <div class="col-xs-4 pull-right no-padding" style="margin:0 0px 0 10px; ">
          <a href="../login/newregistration">New Registration</a>
		    </div>
		  </div>

		</form>
  </div>
</div>
</body>
</html>
