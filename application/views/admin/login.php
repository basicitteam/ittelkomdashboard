<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>IT Telkom Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="<?php echo site_url('admin/login/validasi/'); ?>">
        <h3 class="form-signin-heading">Administrator Login</h3>
        <?php echo $this->session->flashdata('msg'); ?>
        <input type="text" class="input-block-level" placeholder="Username" name="username">
        <input type="password" class="input-block-level" placeholder="Password" name="password">
        <button class="btn btn-large btn-primary" type="submit">Login</button>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

  </body>

<!-- Mirrored from twitter.github.com/bootstrap/examples/signin.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 29 Nov 2012 07:31:14 GMT -->
</html>