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
      <!-- Page level plugin CSS-->
      <!-- <link href="<?php //echo base_url(); ?>public/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"> -->
     
     <!-- Custom styles for this template-->
      <link href="<?php echo base_url(); ?>public/assets/css/dash/sb-admin.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>public/assets/css/dash-admin.css" rel="stylesheet">
     


     
      <script src="//cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>public/assets/ckeditor/ckeditor.js"></script>
     


   </head>
   <body class="sidenav-toggled">

    <div class="fixed-nav sticky-footer bg-dark" id="page-top">
      <!-- Navigation side nav-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
         <a class="navbar-brand" href="<?php echo base_url("admin"); ?>">Admin Magicline</a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                  <a class="nav-link" href="<?php echo base_url("admin"); ?>"><i class="fa fa-fw fa-dashboard"></i>
                  <span class="nav-link-text">Dashboard</span>
                  </a>
               </li>

               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Websites">
                  <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseWebsites" data-parent="#exampleAccordion">
                  <i class="fa fa-fw fa-archive"></i>
                  <span class="nav-link-text">Websites</span>
                  </a>
                  <ul class="sidenav-second-level collapse" id="collapseWebsites">
                     <li><a href="<?php echo base_url("admin/admin_view_manex_france")?>">Manex-France</a></li>
                     <li><a href="<?php echo base_url("admin/admin_view_manex_usa")?>">Manex-Usa</a></li>
                     <li><a href="<?php echo base_url("admin/admin_view_cofrad")?>">Cofrad</a></li>
                     <li><a href="<?php echo base_url("admin/admin_view_stockman")?>">Stockman</a></li>
                  </ul>
               </li>
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Website Images">
                  <a class="nav-link" href="<?php echo site_url("admin/manage_site"); ?>">
                  <i class="fa fa-fw fa-tasks"></i>
                  <span class="nav-link-text">Manage Website Images</span>
                  </a>
                  
               </li>
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Manage Users">
                  <a class="nav-link" href="<?php echo site_url("admin/manage_accounts"); ?>">
                     <i class="fa fa-fw fa-table"></i>
                  <span class="nav-link-text">Manage Users</span>
                  </a>
               </li>
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logout">
                  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                     <i class="fa fa-fw fa-sign-out"></i>
                  <span class="nav-link-text">Logout</span>
                  </a>
               </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
               <li class="nav-item">
                  <a class="nav-link text-center" id="sidenavToggle1r">
                  <i class="fa fa-fw fa-angle-down"></i>
                  </a>
               </li>
            </ul>

            <!-- end side nav -->
            <ul class="navbar-nav ml-auto">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-fw fa-envelope"></i>
                  <span class="d-lg-none">Messages
                  <span class="badge badge-pill badge-primary">12 New</span>
                  </span>
                  <span class="indicator text-primary d-none d-lg-block">
                  <i class="fa fa-fw fa-circle"></i>
                  </span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                     <h6 class="dropdown-header">New Messages:</h6>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">
                        <strong>David Miller</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small"> LOREM LOREM LOREM LOREM LOREM LOREM LOREM</div>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">
                        <strong>John Doe</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">

                          SOON....

                        </div>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item small" href="#">View all messages</a>
                  </div>
               </li>

               <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0 mr-lg-2" method="POST" action="<?php echo base_url("admin/search_view")?>">
                     <div class="input-group">
                        <input class="form-control" name="image_name" type="text" placeholder="Search images">
                        <span class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="submit" value="Submit">
                        <i class="fa fa-search"></i>
                        </button>
                        </span>
                     </div>
                  </form>
               </li>
               
   
               <li>
               <ul class="navbar-nav" >
               <li class="nav-item">
                  <a class="nav-link text-center" id="sidenavToggler">
                     Navigation
                  <i class="fa fa-fw fa-bars"></i> 
                  </a>
               </li>
            </ul>
            </li>



           </ul>
         </div>
      </nav>
    </div>

      <div class="" style="padding-top: 56px;">
      <center>

         <?php $this->load->view($page); ?>



           <script type="text/javascript">
                  CKEDITOR.replaceAll( 'image_description' );
                  
           </script>





      </center>
      <div class="" style="padding-top: 56px;">
         
     <footer class="sticky-footer">
         <div class="container">
            <div class="text-center">
               <small>Copyright © Your Website 2018</small>
            </div>
         </div>
      </footer>   
      <!-- scroll top -->
         <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="<?php echo site_url("welcome/logout"); ?>">Logout</a>
               </div>
            </div>
         </div>
      </div>


 </div>



      <!-- Core plugin JavaScript-->
      <!-- <script src="<?php //echo base_url(); ?>public/vendor/jquery-easing/jquery.easing.min.js"></script> -->

      <!-- Custom scripts for this page-->
      <!-- <script src="<?php //echo base_url(); ?>public/assets/js/dash/sb-admin-charts.min.js"></script> -->
      
      <!-- Page level plugin JavaScript-->
      <!-- <script src="vendor/datatables/jquery.dataTables.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.js"></script> -->

     

      <!-- plugin -->
      <!-- <script type="text/javascript" src="/asset/plugin/ckeditor.js"></script> -->
      <!-- <script type="text/javascript" src="/asset/plugin/ckfinder.js"></script> -->
      <!-- ckeditor -->
      <!-- <script src="//cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script> -->
     
      
      <!-- Bootstrap core JavaScript-->
      <script src="<?php echo base_url(); ?>public/vendor/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="<?php echo base_url(); ?>public/assets/js/dash/sb-admin.min.js"></script>
      <script src="<?php echo base_url(); ?>public/assets/js/custom.js"></script>


                                                  
  

  

   </body>


</html>