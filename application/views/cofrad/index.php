 <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title><?php echo $title;?></title>
      <!-- Bootstrap core CSS-->
      <link href="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="<?php echo base_url(); ?>public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="<?php echo base_url(); ?>public/assets/css/landing-page-custom.min.css" rel="stylesheet">
   </head>

<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
</style>

   <body class="cofrad">


    <?php


     if(!$this->session->userdata("user") OR $this->session->userdata("user")->acc == "admin"){
            $this->load->view($snav); 
             
        }




     ?>






      <div class="sticky-top">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
               <a class="navbar-brand" href="<?php echo site_url("cofrad");?>">Cofrad</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarText">

               <ul class="navbar-nav mr-auto mt-2 mt-lg-0" aria-labelledby="navbarDropdownMenuLink">

                  
   <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Fiber Glass</a>
      <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
         <a class="dropdown-item" href="">Mannequin</a>
         <a class="dropdown-item" href="">Bust &amp; Torso</a>
         <a class="dropdown-item" href="">Head</a>
         <a class="dropdown-item" href="">Hands</a>
         <a class="dropdown-item" href="">Legs</a>
      </div>
   </li>
   
   <li class="nav-item">
      <a class="nav-link" href="">Paper Mache</a>
   </li>

   <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Accessories
      </a>
      <div class="dropdown-menu " aria-labelledby="dropdownMenuLink">
         <a class="dropdown-item" href="#">Shoulder Attachment</a>
         <a class="dropdown-item" href="#">Hands Attachment</a>
         <a class="dropdown-item" href="#">Himps Attachment</a>
         <a class="dropdown-item" href="#">Base</a>
         <a class="dropdown-item" href="#">Double Effect</a>
         <a class="dropdown-item" href="#">Screw</a>
      </div>
   </li>







<div class="dropdown">

<!-- 
   <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Custom Product
   </button>
 -->
 <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Custom Product</a>
   <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
     
      <!-- <li class="dropdown-divider"></li> -->
      <li class="dropdown-submenu">
         <a  class="dropdown-item" tabindex="-1">Bust</a>
         <ul class="dropdown-menu">
            <li class=" dropdown-item"><a class="" tabindex="-1" href="#">Male</a></li>
            <li class=" dropdown-item"><a tabindex="-1" href="#">Female</a></li>
            <li class=" dropdown-item"><a tabindex="-1" href="#">Child</a></li>
            
         </ul>
      </li>  
      <li class="dropdown-submenu">
         <a  class="dropdown-item" tabindex="-1">Torso</a>
         <ul class="dropdown-menu">
            <li class=" dropdown-item"><a tabindex="-1" href="#">Male</a></li>
            <li class=" dropdown-item"><a tabindex="-1" href="#">Female</a></li>
            <li class=" dropdown-item"><a tabindex="-1" href="#">Child</a></li>
         </ul>
      </li>
      <li class="dropdown-submenu">
         <a  class="dropdown-item" tabindex="-1">Leg</a>
         <ul class="dropdown-menu">
            <li class=" dropdown-item"><a tabindex="-1" href="#">Male</a></li>
            <li class=" dropdown-item"><a tabindex="-1" href="#">Female</a></li>
            <li class=" dropdown-item"><a tabindex="-1" href="#">Child</a></li>
         </ul>
      </li>
      <li class="dropdown-submenu">
               <a  class="dropdown-item" tabindex="-1">Base</a>
               <ul class="dropdown-menu">
                  <li class=" dropdown-item"><a tabindex="-1" href="#">Male</a></li>
                  <li class=" dropdown-item"><a tabindex="-1" href="#">Female</a></li>
                  <li class=" dropdown-item"><a tabindex="-1" href="#">Child</a></li>
               </ul>
            </li>
      <li class="dropdown-submenu">
         <a  class="dropdown-item" tabindex="-1">Necklace</a>
         <ul class="dropdown-menu">
            <li class=" dropdown-item"><a tabindex="-1" href="#">Male</a></li>
            <li class=" dropdown-item"><a tabindex="-1" href="#">Female</a></li>
            <li class=" dropdown-item"><a tabindex="-1" href="#">Child</a></li>
         </ul>
      </li>


   </ul>
</div>
            <li class="nav-item">
                  <a class="nav-link" href="">Project Inprogress</a>
               </li>



               </ul>
                  



               <div class="navbar-text">
                  <div class="dropdown">
                     Welcome, 
                     <a class="dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <?php echo "$user";?>
                     </a>
                     <div class="dropdown-menu navbar-dark bg-dark" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href=""><i class="fa fa-fw fa-envelope"></i> Messages</a>
                        <a class="dropdown-item" href="<?php echo site_url("welcome/logout"); ?>"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                     </div>
                  </div>
               </div>

               </div>
            </div>
         </nav>
      </div>

      
     

      
      <!-- Masthead -->
      <header class="masthead text-white text-center">
         <div class="overlay"></div>
         <div class="container">
            <div class="row">
               <div class="col-xl-9 mx-auto">
                  <h1 class="mb-5"></h1>
               </div>
               <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                  <form action="<?php echo site_url("cofrad/search_keyword"); ?>" method="POST">
                     <div class="form-row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                           <input type="text" name="image_name" class="form-control form-control-lg" placeholder="Search image by categories or name..">
                             <!-- <input class="form-control" name="image_name" type="text" placeholder="Search images"> -->
                        </div>
                        <div class="col-12 col-md-3">
                           <button type="submit" value="submit" name="submit" class="btn btn-block btn-lg btn-primary" data-target="#SearchSection" ><i class="fa fa-fw fa-search"></i> Find</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </header>

       

      <section class="features-icons bg-light text-center" aria-labelledby="#SearchSection" >
         <div class="container-fluid"> 
            <div class="row">
            <div class="col-lg-4 col-md-4 d-none d-md-block text-left">

               <div class="card mb-3">
                <div class="card-header text-center">Navigation</div>
                <div class="card-body"  style="height: 415px;">
            <ul class="sidenav">
               <li>Fiber Glass

                  <ul class="sidenav">
                     <li>Mannequin</li>
                     <li>Bust &amp; Torso</li>
                     <li>Head</li>
                     <li>Hands</li>
                     <li>Legs</li>
                  </ul>
               </li>
               <li>Paper Machine</li>
               <li>Accessories
                  <ul class="sidenav">
                     <li>Shoulder Attachment</li>
                     <li>Hands Attachment</li>
                     <li>Hips Attachment</li>
                     <li>Base</li>
                     <li>Double Effect</li>
                     <li>Screw</li>
                  </ul>

               </li>
            </ul>
         </div>
      </div>

            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              
              
                  <?php $this->load->view($page); ?>



         </div> 
      </div> <!-- row -->
         </div>
      </section>
      <!-- Footer -->






  



      
      <footer class="footer bg-light" aria-labelledby="#SearchSection">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 text-center text-lg-left my-auto">
                  <ul class="list-inline mb-2">
                     <li class="list-inline-item">
                        <a href="#">About</a>
                     </li>
                     <li class="list-inline-item">&sdot;</li>
                     <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                     </li>
                     <li class="list-inline-item">&sdot;</li>
                     <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                     </li>
                  </ul>
                 
               </div>
               <div class="col-lg-6 text-center text-lg-right my-auto">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item mr-3">
                        <a href="#">
                        <i class="fa fa-facebook fa-2x fa-fw"></i>
                        </a>
                     </li>
                     <li class="list-inline-item mr-3">
                        <a href="#">
                        <i class="fa fa-twitter fa-2x fa-fw"></i>
                        </a>
                     </li>
                     <li class="list-inline-item">
                        <a href="#">
                        <i class="fa fa-instagram fa-2x fa-fw"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="text-center">
          <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2018. All Rights Reserved.</p>
       </div>
      </footer>











      <!-- Bootstrap core JavaScript-->
      <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="<?php echo base_url(); ?>public/vendor/jquery-easing/jquery.easing.min.js"></script>
       <!-- custom script -->
      <script src="<?php echo base_url(); ?>public/assets/js/custom.js"></script>
   </body>
</html>