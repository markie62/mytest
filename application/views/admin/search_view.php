<div class="content-wrapper">
   <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="<?php echo site_url("admin"); ?>" >Admin</a>
         </li>
         <li class="breadcrumb-item active">Searh Result</li>
      </ol>
      <div class="row">
         <div class="col-lg-3 col-md-3 d-none d-md-block text-left">
            <div class="card mb-3">
               <div class="card-header text-center">Navigation</div>
               <div class="card-body"  style="height: 100%;">
               </div>
            </div>
         </div>
         <div class="col-lg-9 col-md-9 d-none d-md-block text-left">
            <div class="card mb-3">
               <div class="card-header text-center">
                  <i class="fa fa-table"></i> Search Result
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-bordered table-list-search"  id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                           <tr>
                              <th>Image Name</th>
                              <th>Image Account</th>
                              <th>Image File Name</th>
                              <th>Category</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <?php foreach($results as $row){ ?>
                        <tbody>
                           <tr>
                              <td><?php echo $row->image_name?></td>
                              <td><?php echo $row->image_account?></td>
                              <td><?php echo $row->image_filename?></td>
                              <td><?php echo $row->category?></td>
                              <td>
                                 <form> <!-- <?php //$id=$row->image_num; ?> -->

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo "$row->image_num";?>">
                                    View/Edit
                                    </button>




<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="<?php echo "$row->image_num";?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo "$row->image_num";?>" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Manage Website Images</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="text-center">
               <strong class="text-center">
                  <h5>Details</h5>
               </strong>
            </div>
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
                              <input type="text" name="image_name" placeholder="<?php echo "$row->image_name";?>">
                              <!-- </div>
                                 <div class="col-lg-6" style="padding-left: 30px;"> -->
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
























                                    
                                 </form>
                              </td>
                           </tr>
                        <tbody>
                           <?php } ?>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>