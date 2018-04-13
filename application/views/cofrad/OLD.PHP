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



   <body class="cofrad">
      <div class="sticky-top">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
               <a class="navbar-brand" href="">Cofrad</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav mr-auto">
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
                        <a class="nav-link" href="">Paper Machine</a>
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
                     
                  </ul>
                  <div class="navbar-text">
                     <div class="dropdown">
                        Welcome, 
                        <a class="dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User
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
                  <form "<?php echo site_url("search_keyword"); ?>" method="POST">
                     <div class="form-row">
                        <div class="col-12 col-md-9 mb-2 mb-md-0">
                           <input type="text" name="keyword" class="form-control form-control-lg" placeholder="Search image by categories or name..">
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
              
              


               <div class="card mb-3">
                <div class="card-header">MANNEQUINS</div>
                <div class="card-body">

                  <div class="text-left">

                    
                     <a  class="btn" data-toggle="portfilter" data-target="all">All</a>
                     <a  class="btn" data-toggle="portfilter" data-target="FiberGlass">Fiber Glass</a>
                     <a  class="btn" data-toggle="portfilter" data-target="PaperMachine">Paper Machine</a>
                     <a  class="btn" data-toggle="portfilter" data-target="Accessories">Accessories</a>
                  </div>
               <div class="img_holder">
            <div class="row">
               <?php 
                  $this->load->helper('directory'); //load directory helper
                  $dir = "public/assets/img/site_images/cofrad/display_mannequins/Accessories/sample";
                  $map = directory_map($dir);
               
                  foreach ($map as $k)
                  {?>
               <div class="col-sm-4 col-md-3 col-lg-2" data-tag='FiberGlass'>
                  <div class="cfrdigs">  
                     <a href="" data-toggle="modal" data-target="#<?php echo base_url($dir)."/".$k;?>">
                     <img class="cofrad-imgs" id="<?php echo $k?>" src="<?php echo base_url($dir)."/".$k;?>" title="<?php echo $k ?>" alt="<?php echo $k ?>" >
                     </a>
                  </div>
               </div>
               <!-- Modal -->
               <div class="modal fade bd-example-modal-lg" id="<?php echo base_url($dir)."/".$k;?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $k?>" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="<?php echo $k?>"><?php echo $k ?></h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-lg-4 col-md-6 col-sm-6">
                                 <div class="cfrdgsmodalimg">
                                    <img src="<?php echo base_url($dir)."/".$k;?>">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6">
                                 <div class="content text-lg-left">
                                    <strong>DESCRIPTION</strong><br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum non leo at congue. Morbi tempor ipsum et dignissim faucibus. Mauris quis consectetur nibh. Vivamus nulla dui, aliquet et pharetra sed, dignissim et neque. Suspendisse in libero tortor. Mauris facilisis leo sapien, tempus hendrerit neque dapibus et. Nunc aliquam orci a pulvinar lobortis. Praesent feugiat risus facilisis sagittis cursus. Donec quis mollis ligula. Nunc sollicitudin nisl ut erat facilisis, nec finibus nulla gravida. Donec finibus neque vel volutpat imperdiet. Mauris sed eros id lacus placerat vulputate lobortis in ipsum.
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Modal -->
               <?php }
                  ?> 


                  <?php 
                  $this->load->helper('directory'); //load directory helper
                  $dir = "public/assets/img/site_images/cofrad/display_mannequins/Fiber_Glass/sample";
                  $map = directory_map($dir);
               
                  foreach ($map as $k)
                  {?>
               <div class="col-sm-4 col-md-3 col-lg-2" data-tag='PaperMachine'>
                  <div class="cfrdigs">  
                     <a href="" data-toggle="modal" data-target="#<?php echo base_url($dir)."/".$k;?>">
                     <img class="cofrad-imgs" id="<?php echo $k?>" src="<?php echo base_url($dir)."/".$k;?>" title="<?php echo $k ?>" alt="<?php echo $k ?>" >
                     </a>
                  </div>
               </div>
               <!-- Modal -->
               <div class="modal fade bd-example-modal-lg" id="<?php echo base_url($dir)."/".$k;?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $k?>" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="<?php echo $k?>"><?php echo $k ?></h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-lg-4 col-md-6 col-sm-6">
                                 <div class="cfrdgsmodalimg">
                                    <img src="<?php echo base_url($dir)."/".$k;?>">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6">
                                 <div class="content text-lg-left">
                                    <strong>DESCRIPTION</strong><br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum non leo at congue. Morbi tempor ipsum et dignissim faucibus. Mauris quis consectetur nibh. Vivamus nulla dui, aliquet et pharetra sed, dignissim et neque. Suspendisse in libero tortor. Mauris facilisis leo sapien, tempus hendrerit neque dapibus et. Nunc aliquam orci a pulvinar lobortis. Praesent feugiat risus facilisis sagittis cursus. Donec quis mollis ligula. Nunc sollicitudin nisl ut erat facilisis, nec finibus nulla gravida. Donec finibus neque vel volutpat imperdiet. Mauris sed eros id lacus placerat vulputate lobortis in ipsum.
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Modal -->
               <?php }
                  ?> 



                    <?php 
                  $this->load->helper('directory'); //load directory helper
                  $dir = "public/assets/img/site_images/cofrad/display_mannequins/Paper_Machine/sample";
                  $map = directory_map($dir);
               
                  foreach ($map as $k)
                  {?>
               <div class="col-sm-4 col-md-3 col-lg-2" data-tag='Accessories'>
                  <div class="cfrdigs">  
                     <a href="" data-toggle="modal" data-target="#<?php echo base_url($dir)."/".$k;?>">
                     <img class="cofrad-imgs" id="<?php echo $k?>" src="<?php echo base_url($dir)."/".$k;?>" title="<?php echo $k ?>" alt="<?php echo $k ?>" >
                     </a>
                  </div>
               </div>
               <!-- Modal -->
               <div class="modal fade bd-example-modal-lg" id="<?php echo base_url($dir)."/".$k;?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $k?>" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="<?php echo $k?>"><?php echo $k ?></h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-lg-4 col-md-6 col-sm-6">
                                 <div class="cfrdgsmodalimg">
                                    <img src="<?php echo base_url($dir)."/".$k;?>">
                                 </div>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6">
                                 <div class="content text-lg-left">
                                    <strong>DESCRIPTION</strong><br>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum non leo at congue. Morbi tempor ipsum et dignissim faucibus. Mauris quis consectetur nibh. Vivamus nulla dui, aliquet et pharetra sed, dignissim et neque. Suspendisse in libero tortor. Mauris facilisis leo sapien, tempus hendrerit neque dapibus et. Nunc aliquam orci a pulvinar lobortis. Praesent feugiat risus facilisis sagittis cursus. Donec quis mollis ligula. Nunc sollicitudin nisl ut erat facilisis, nec finibus nulla gravida. Donec finibus neque vel volutpat imperdiet. Mauris sed eros id lacus placerat vulputate lobortis in ipsum.
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Modal -->
               <?php }
                  ?> 
























            </div> <!-- row -->
         </div>

         </div>
      </div>

         </div> 
      </div> <!-- row -->
         </div>
      </section>
      <!-- Footer -->






<?php $this->load->view($page); ?>




      
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