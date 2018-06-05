<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>:.Login Apps:.</title>
 
  <link rel="icon" href="<?php echo icon()?>pc.png" type="image/x-icon" />
      <link rel="stylesheet" href="<?php echo tema()?>style_login.css">
      <link rel="stylesheet" href="<?php echo tema()?>bootstrap-sweetalert-master/dist/sweetalert.css">
  
</head>

<body>

  <div id="login-button">
  <img src="<?php echo icon()?>login.png">
  </img>
</div>
<div id="container">
  <h1>Log In</h1>
  <span class="close-btn">
    <img src="<?php echo icon()?>circle_close_delete_-128.png"></img>
  </span>

  <form id="form-login" action="<?php echo site_url('welcome/cek')?>" method="POST">
    <input type="email" name="email" placeholder="E-mail" required="">
    <input type="password" name="pass" placeholder="Password" required="">
    <input type="submit" class="orange-btn" value="Log In">
    <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
      <span id="remember">Remember me</span>
      <span id="forgotten">Forgotten password</span>
    </div>
</form>
</div>

<!-- Forgotten Password Container -->
<div id="forgotten-container">
   <h1>Forgotten</h1>
  <span class="close-btn">
    <img src="<?php echo icon()?>circle_close_delete_-128.png"></img>
  </span>

  <form action="<?php echo site_url('welcome/forgotpass')?>" method="POST">
    <input type="email" name="email" placeholder="E-mail">
    <input type="submit" class="orange-btn" value="Get new password">
</form>
</div>
  <script src='<?php echo tema()?>TweenMax.min.js'></script>
<script src='<?php echo tema()?>jquery.min.js'></script>

  

    <script  src="<?php echo tema()?>index.js"></script>
    <script  src="<?php echo tema()?>bootstrap-sweetalert-master/dist/sweetalert.min.js"></script>
<?php
if ($this->session->flashdata('error')):
  ?>
<script>
swal("Error Login!", "Please Check Your Email Or Password!", "error")</script>
<?php endif;?>
<?php
if ($this->session->flashdata('notlogin')):
  ?>
<script>
swal("You do not have access!", "Please login first!", "error")</script>
<?php endif;?>

<?php
if ($this->session->flashdata('timeout')):
  ?>
<script>
swal("Session Timeout!", "Please login first!", "error")</script>
<?php endif;?>
</body>

</html>
