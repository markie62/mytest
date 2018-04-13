




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
               //$this->load->helper('directory'); //load directory helper
               //$dir = "public/assets/img/site_images/cofrad/display_mannequins/fiber_glass/sample/";
               $result = $this->image_table->get_image_desc();
               //$map = directory_map($result)

                			foreach($result as $row){
             
                				// echo  $row->category;
                           if($row->image_account == "cofrad"){
                				?>               
            <div class="col-sm-4 col-md-3 col-lg-2" data-tag='<?php echo "$row->category"; ?>'>
               <div class="cfrdigs">  
                  <a href="" data-toggle="modal" data-target="#<?php echo "$row->image_num";?>">
                  	<img class="cofrad-imgs" alt="<?php echo "$row->image_name";?>" title="<?php echo "$row->image_name";?>" id="id" src="<?php echo base_url()."$row->image_path$row->image_filename";?>">
                  </a>
               </div>
            </div>
           

             <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="<?php echo "$row->image_num";?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo "$row->image_path";?>" aria-hidden="true">
               <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h5 class="modal-title"><?php echo "$row->image_name";?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                     <div class="modal-body">
                        <div class="row">
                           <div class="col-lg-4 col-md-6 col-sm-6">
                              <div class="cfrdgsmodalimg">
                                <img class="cofrad-imgs" alt="<?php echo "$row->image_name";?>" title="<?php echo "$row->image_name";?>" id="<?php echo "$row->image_num";?>" src="<?php echo base_url()."$row->image_path$row->image_filename";?>">
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6">

                              <div class="col-lg-12">
                                 <div class="text-left">
                                 <label><strong>Reference Number: </strong></label><br>
                                 <label>  <?php echo "$row->image_ref";?></label>
                              </div>
                              </div>

                              <div class="col-lg-12">
                                 <div class="text-left">
                                 <label><strong>Category: </strong></label><br>
                                 <label>  <?php echo "$row->category";?></label>
                              </div>
                              </div>

                                 <div class="col-lg-12">
                                    <div class="content text-lg-left">
                                       <strong>DESCRIPTION</strong><br>
                                       <?php echo "$row->image_description";?>
                                    </div>
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




            <?php 

         }

               }?>  <!-- endforeach -->


            </div>
         </div>

      </div>
   </div>