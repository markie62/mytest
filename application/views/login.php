<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!-- Include the above in your HEAD tag -->
      <link href="<?php echo base_url(); ?>/public/assets/css/login.css" rel="stylesheet">

</head>
<body>




<div id="login-button">
  <img src="<?php echo base_url(); ?>/public/assets/img/login-icon.png"></img>
</div>


<div id="container">
  <h1>Welcome</h1>
  <span class="close-btn">
   <img class="x-btn" src="<?php echo base_url(); ?>/public/assets/img/close-icon.png"></img>
  </span>

   <form action="<?php echo site_url("welcome"); ?>" method="POST">

    <div class="form-group">

    
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">

    

    <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
      <span id="remember">Remember me</span>
    </div>
 	<br>


    <center>
    <input  class="mybtnlogin" type="submit" value="submit" name="submit">

    </center>

  </div>



</form>
</div>


	
<script>

    $('#login-button').click(function(){
  $('#login-button').fadeOut("slow",function(){
    $("#container").fadeIn();
    TweenMax.from("#container", .4, { scale: 0, ease:Sine.easeInOut});
    TweenMax.to("#container", .4, { scale: 1, ease:Sine.easeInOut});
  });
});

$(".close-btn").click(function(){
  TweenMax.from("#container", .4, { scale: 1, ease:Sine.easeInOut});
  TweenMax.to("#container", .4, { left:"0px", scale: 0, ease:Sine.easeInOut});
  $("#container, #forgotten-container").fadeOut(800, function(){
    $("#login-button").fadeIn(800);
  });
});

</script>






</div>








</body>
</html>