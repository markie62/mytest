
<!-- <script type="text/javascript" src="<?php //echo site_url("public/assets/tinymce/tinymce.min.js"); ?>"></script> -->


   

<!-- Custom styles for this template-->
<link href="<?php echo base_url(); ?>public/assets/css/landing-page-custom.min.css" rel="stylesheet">


<div class="card mb-3">
<div class="card-header">ALL WEBSITE IMAGES</div>
<div class="card-body">
<div class="text-left">
   <a  class="btn" data-toggle="portfilter" data-target="all">All</a>
   <a  class="btn" data-toggle="portfilter" data-target="cofrad">Cofrad</a>
   <a  class="btn" data-toggle="portfilter" data-target="manex-france">Manex France</a>
   <a  class="btn" data-toggle="portfilter" data-target="manex-usa">Manex Usa</a>
   <a  class="btn" data-toggle="portfilter" data-target="stockman">Stockman</a>
</div>

<div class="img_holder">
<div class="row">

<?php 
   //$this->load->helper('directory'); //load directory helper
   //$dir = "public/assets/img/site_images/cofrad/display_mannequins/fiber_glass/sample/";
   $result = $this->image_table->get_image_desc();
   //$map = directory_map($result)
   
            foreach($result as $row){
   
               // echo  $row->category;
   
               ?>               
<div class="col-sm-4 col-md-3 col-lg-2" data-tag='<?php echo "$row->image_account"; ?>'>
   <div class="cfrdigs">  
      <a href="" data-toggle="modal" data-target="#<?php echo "$row->image_filename";?>">
      <img class="cofrad-imgs" alt="<?php echo "$row->image_name";?>" title="<?php echo "$row->image_name";?>" id="<?php echo "$row->image_num";?>" src="<?php echo base_url()."$row->image_path$row->image_filename";?>">
      </a>
   </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="<?php echo "$row->image_filename";?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo "$row->image_path";?>" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Manage Website Images</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
                     <div class="text-center"><strong class="text-center"><h5>Details</h5></strong></div>
            <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="cfrdgsmodalimg">
                     <img class="cofrad-imgs" alt="<?php echo "$row->image_name";?>" title="<?php echo "$row->image_name";?>" id="<?php echo "$row->image_num";?>" src="<?php echo base_url()."$row->image_path$row->image_filename";?>">
                  </div>
               </div>
               <div class="col-lg-8 col-md-6 col-sm-6">
                  <div class="content text-left">
                     <br>
                     <form method="post">
                        <div class="row">
                           <div class="col-lg-6 ">
                              <input type="hidden" name="image_num" value="<?php echo "$row->image_num";?>"> 
                              <input type="hidden" name="image_path" value="<?php echo "$row->image_path";?>"> 
                              <input type="hidden" name="image_filename" value="<?php echo "$row->image_filename";?>"> 
                              <label>Model Name</label>
                              <br>
                              <input type="text" name="image_name" value="<?php echo "$row->image_name";?>" placeholder="<?php echo "$row->image_name";?>">
                           <!-- </div>
                           <div class="col-lg-6" style="padding-left: 30px;"> -->
                              <label>Reference: </label>
                              <input type="text" name="image_ref" value="<?php echo "$row->image_ref";?>" placeholder="<?php echo "$row->image_ref";?>"> <br>
                              <label>Category: </label>
                              <label><?php echo "$row->category";?></label> <br>
                              <label>Image Filename: </label>
                              <label><?php echo "$row->image_filename";?></label> <br>
                              <label>Displayed in: </label>
                              <label><?php echo "$row->image_account";?></label>

                           </div>
                           <br>
                           
                        </div>
                  </div>
               </div>

                        <div class="col-lg-12">
                             
                              <!-- <input type="text" name="image_description" placeholder="<?php //echo "$row->image_description";?>"> -->
                             
                              <label><h5>Description: </h5></label>
                               
                              <textarea class="image_description" name="image_description" id="image_description">
                                  
                                 <?php echo "$row->image_description";?>

                                 </textarea>
                             
 

                           </div>


            </div>
         </div>
         <div class="modal-footer">
         <button type="submit button" formaction="<?php echo site_url("admin/delete_selected_image");?>"  class="btn btn-danger">Delete</button>
         <button type="submit button" formaction="<?php echo site_url("admin/update_selected_img");?>"  class="btn btn-success">Edit</button>
        
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
         </div>
         </form>
      </div>
   </div>
</div>
<!-- Modal -->
<?php    


   }?>  <!-- endforeach -->





 
   