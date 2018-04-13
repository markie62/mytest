
<!-- 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php //echo site_url(); ?>public/assets/tinymce/tinymce.min.js"></script> -->
 


                          

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<div class="content-wrapper">
   <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="<?php echo site_url("admin"); ?>" >Admin</a>
         </li>
         <li class="breadcrumb-item active">Manage Website Images</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
         <div class="col-lg-3 col-md-3 d-none d-md-block text-left">
            <div class="card mb-3">
               <div class="card-header text-center">Navigation</div>
               <div class="card-body"  style="height: 100%;">
                  <ul class="sidenav">
                     <li>
                        <a href="" data-toggle="modal" data-target="#exampleModalCenter"> Upload Images</a>
                        <!--    <ul class="sidenav">
                           <li>Mannequin</li>
                           <li>Bust &amp; Torso</li>
                           <li>Head</li>
                           <li>Hands</li>
                           <li>Legs</li>
                           </ul> -->
                     </li>
                     <!--  <li>Paper Machine</li>
                        <li>Accessories
                           <ul class="sidenav">
                              <li>Shoulder Attachment</li>
                              <li>Hands Attachment</li>
                              <li>Hips Attachment</li>
                              <li>Base</li>
                              <li>Double Effect</li>
                              <li>Screw</li>
                           </ul>
                        
                        </li> -->
                  </ul>
               </div>
            </div>
       


         </div>
         <div class="col-lg-9 col-md-9 col-sm-12">
            <?php $this->load->view($subpage); ?>
         </div>
      </div>
      <!--  end row -->
   </div>
</div>


       
    <?php 

                        


    echo form_open_multipart('admin/do_upload');?>
   <!--       <form  action="<?php// echo site_url('admin/do_upload');?>"  method="POST"> -->
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">UPLOAD IMAGE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body text-left"> 
                      <div class="row">
                      <div class="col-lg-4">
                         

                          <!-- <input type="file" name="image_filename"  /> -->
                          <div class="upimg">
                            <img id="blah" src="" alt="your image" />
                          </div>
                      <!--                    
                           <?php //echo "<input type='file' name='userfile' id='blah' size='20' onchange='changeEventHandler(event);' />"; ?>  -->
                           
                           <?php echo "<input  type='file' name='userfile' id='blah' size='20' onchange='readURL(this);' />"; ?> 



                          <!-- <input type='file' onchange="readURL(this);" /> -->




                        </div>
                        <div class="col-lg-8">
                         <div class="col-lg-12">
                          <label>Model name</label>
                            <input type="text" name="image_name" placeholder="model name">
                         </div>
                         <div class="col-lg-12">
                          <label>Reference number</label>
                          <input type="text" name="image_ref" placeholder="image_ref">
                         </div>
                         <div class="col-lg-12">
                            <label>Category</label>
                            <input type="text" name="category" placeholder="category">
                          </div>

                       <div class="col-lg-12">
                        <label>Image account:  </label>
                      <select name="image_account">
                        <option value="---">- - -</option>
                        <option value="cofrad">Cofrad</option>
                        <option value="manex-france">Manex-France</option>
                        <option value="manex-usa">Manex-USA</option>
                        <option value="stockman">Stockman</option>
                      </select>
                    </div>
                    

              </div>

                        <div class="col-lg-12">
                          <!-- <input type="text" name="image_description" placeholder="description"> -->
                         <label><h5>Description: </h5></label>

                        <textarea class="image_description" name="image_description" id="image_description">
                                  
                               

                            </textarea>
                             



                      </div>








                       
                         


                      </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button submit" class="btn btn-primary">Upload</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- modal -->
             </form>



<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


