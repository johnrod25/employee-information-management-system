<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .logo-box{
      display: flex; 
      align-items: center;
      flex-direction: column;
      padding: 5px;
    }
    .login-box-body{
      padding: 20px;
    border-radius: 20px;
    box-shadow: 0 4px 8px 0 #aaaaaa;
    }
    /* Full-width inputs */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 20px;
    border-radius: 5px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  input[type=text]::placeholder, input[type=password]::placeholder{
    font-style: italic;
  }
  h1{
    font-size: 25px;
  }
  .row{
    display: flex;
    justify-content: center;
  }

  /* Set a style for all buttons */
  .row .btn {
    background-color: #f20000;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;

  }
  </style>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/dist/img/sppi-logo.png" type="image/x-icon">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>SPPI</b> Employee System</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <div class="logo-box">
    <img src="<?php echo base_url(); ?>assets/dist/img/sppi-logo.png" class="img-circle" alt="User Image" width="120px">
    </div>
  
    <p class="login-box-msg">Please Login To Continue..</p>

    <?php echo form_open('Home/login'); ?>
      <div class="form-group has-feedback">
        <input type="text" name="txtusername" class="form-control" placeholder="Username/Staff Email">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="txtpassword" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <?php echo $this->session->flashdata('login_error', 1); ?>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4 pull-left">
          <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>

