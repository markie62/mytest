<center>this view_accounts.php</center>
<!-- custom script -->
<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/js/custom.js"></script>
<!-- custom script -->
<div class="content-wrapper">
   <div class="container">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="<?php echo site_url("admin"); ?>" >Admin</a>
         </li>
         <li class="breadcrumb-item active">Manage Users  </li>
      </ol>
      <div style="text-align: right;">
         <h6><a href="#" data-toggle="modal" data-target="#register" data-whatever="@getbootstrap" >
            Register an account</a>
         </h6>
      </div>
      <div class="card mb-3">
         <div class="card-header">
            <i class="fa fa-table"></i> User Management
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <form action="#" method="get" style="width: 300px; float: right; padding: 5px;">
                  <div class="input-group">
                     
                     <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                     <span class="input-group-btn">
                     <button type="submit" class="btn btn-primary"> <i class="fa fa-fw fa-search"></i> </button>
                     </span>
                  </div>
               </form>
               
               <table class="table table-bordered table-list-search"  id="dataTable" width="100%" cellspacing="0">
                  
                  <thead class="thead-dark">
                     <tr>
                        <th>ID #</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Account Type</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                     <?php foreach($result as $row) {?>
                  <tbody>
                     <tr>
                        <td><?php echo $row->id;?></td>
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->acc; ?></td>
                        
                        <td> <?php $id=$row->id; ?>

                           
                          <form action="" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id;?>">



                      <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo "$id";?>">
                      Delete
                    </button>

                  <!-- Modal -->
                  <div class="modal fade" id="<?php echo "$id";?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Delete user account</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are you sure, to delete this account?. <?php echo $id;?>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button submit" formaction="<?php echo site_url("admin/delete_record");?>" class="btn btn-primary">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>






                          </form>



                        </td>
                     </tr>
                     <?php }//endforeach; ?>
                  </tbody>
               </table>
                          
            </div>
         </div>
         <div class="dataTables_info"></div>
         <div class="card-footer small text-muted"></div>
      </div>
      <!-- modals -->
      <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Register Account</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="<?php echo site_url("admin/add_account"); ?>" method="POST">
                     <label>Username:</label>
                     <input type="text" name="username" placeholder="username">
                     <label>Password:</label>
                     <input type="password" name="password" placeholder="password">
                     <label>Confirm Password:</label>
                     <input type="Password" name="Password Confirmation" placeholder="confirm">
                     <label>Email:</label>
                     <input type="email" name="email" placeholder="Email">
                     <select name="account_type">
                        <option value="admin">Admin</option>
                        <option value="manex-france">Manex France</option>
                        <option value="manex-usa">Manex Usa</option>
                        <option value="cofrad">Cofrad</option>
                        <option value="stockman">Stockman</option>
                     </select>
                     <br><br>
                     <input type="submit" name="submit" value="Submit">
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end of modal -->
   <!-- modals -->
   <div class="modal fade" id="openmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel"><?php echo $myerr ?></h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end of modal -->
</div> <!-- container -->
</div><!--   wraper -->