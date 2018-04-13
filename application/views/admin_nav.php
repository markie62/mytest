
<link href="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style type="text/css">
   .adnav{
   position: fixed;
   z-index: 99999;
   float: right;
   top: 150px;
   font-size: 20px;
   right: 0px;
   margin-right: 5px;
   }


.adnav a{
	color:#666;
}
   
.minnav{
	position: relative;
    display: inline-block;
    /*border-bottom: 1px dotted black;*/
}
.adnav i {
    font-size: 25px;
}
.minnav .tooltiptext{
	visibility: hidden;
    width: 200px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: -5px;
    right: 105%; 
}

.minnav:hover .tooltiptext{
	visibility: visible;
}



.minnav .tooltiptext::after {
     content: " ";
    position: absolute;
    top: 50%;
    left: 100%; /* To the right of the tooltip */
    margin-top: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent transparent black;
}

.menu .tooltiptext1::after {
     content: " ";
    position: absolute;
    top: 50%;
    left: 100%; /* To the right of the tooltip */
    margin-top: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent transparent black;
}
.menu:hover .tooltiptext1{
	visibility: visible;
}
.menu .tooltiptext1{
	visibility: hidden;
    width: 200px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: -5px;
    right: 105%; 
}
.menu{
	position: relative;
    display: inline-block;
    /*border-bottom: 1px dotted black;*/
}

/* .menu .dropdown .dropdown-menu .dropdown-menu-left{
    display: block; 
  opacity:0;
-webkit-transition: all 2s ease-in;
-moz-transition: all 2s ease-in;
-ms-transition: all 2s ease-in;
-o-transition: all 2s ease-in;
transition: all 2s ease-in;
}*/


/*.dropdown-menu {
    display: block;
    opacity: 1;
}*/



</style>

<script type="text/javascript">
	
// $(document).ready(function(){
//     $("span").mouseover(function(){
//         $("span").hide();
//     });
//     $("span").mouseout(function(){
//         $("span").show();
//     });
// });
	
</script>


<div class="adnav">
<div class="card mb-3">
 

<!-- <a class="nav-link" href="<?php //echo base_url("admin"); ?>"><i class="fa fa-fw fa-home"></i>
<span class="link-text">Admin</span>
</a>
<a class="nav-link" href="<?php //echo base_url("admin/admin_view_manex_usa"); ?>"><i class="fa fa-fw fa-external-link"></i>
<span class="link-text">Manex-USA</span>
</a>
<a class="nav-link" href="<?php //echo base_url("admin/admin_view_manex_france"); ?>"><i class="fa fa-fw fa-external-link"></i>
<span class="link-text">Manex France</span>
</a>
<a class="nav-link" href="<?php //echo base_url("admin/admin_view_stockman"); ?>"><i class="fa fa-fw fa-external-link"></i>
<span class="link-text">Stockman</span>
</a> -->


<div class="minnav">
<a href="<?php echo base_url("admin"); ?>"><i class="fa fa-fw fa-home"></i>
<span class="tooltiptext">Admin Dashboard</span>
</a>
</div>

<div class="menu">
	<a class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
	<i class="fa fa-fw fa-external-link"></i>
	<span class="tooltiptext1">Visit Other Site</span>
 	</a>



<div class="dropdown-menu dropdown-menu-left">
    <a class="dropdown-item"  href="<?php echo site_url("admin/admin_view_manex_france");?>">Manex-France</a>
    <a class="dropdown-item"  href="<?php echo site_url("admin/admin_view_manex_usa");?>">Manex-USA</a>
    <a class="dropdown-item"  href="<?php echo site_url("admin/admin_view_stockman");?>">Stockman</a>
    
 
  </div>

</div>



<div class="">
  <a href="#"><i class="fa fa-fw fa-envelope"></i></a>
  
</div>



  </div>
</div>
