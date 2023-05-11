<?php $__env->startSection('content'); ?>

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">All Users</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  


  <div class="row">
    <div class="col-12">
      <div class="card">  
         <div class="card-header">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Add User</button>
          </div>             
        <div class="card-body">
          <table id="parentcategorylisting" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>S.no</th>
                <th>First Name</th>               
                <th>last Name</th>
                <th>Email</th>
                <th>Country</th>
                <th>Status</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>                     
              <?php $__currentLoopData = $users_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($user->first_name); ?></td>
                  <td><?php echo e($user->last_name); ?></td>  
                  <td><?php echo e($user->email); ?></td>  
                  <td><?php echo e($user->country); ?></td>  
                  <td><?php echo e($user->status); ?></td>                  
                  <td>
                      <a href="" class="edit_user admin_edit_users" user_id="<?php echo e($user->id); ?>" first_name="<?php echo e($user->first_name); ?>" last_name="<?php echo e($user->last_name); ?>" email="<?php echo e($user->email); ?>" country="<?php echo e($user->country); ?>"  user_status="<?php echo e($user->status); ?>">Edit</a>
                      
                  </td>
                </tr>             
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
              <tfoot>
                  <tr>
                    <th>S.no</th>
              <th>First Name</th>               
              <th>last Name</th>
              <th>Email</th>
              <th>Country</th>
              <th>Status</th>
              <th>Edit</th>
                  </tr>
              </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  
                    <form id="add_new_user_form" action="<?php echo e(url('admin/insert-users')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">                            

                            <div class="form-group">
                                <label for="Inputfirst_name">First Name</label>                                
                                    <input type="text" name="firstname" class="form-control firstname" placeholder="Enter First Name">  
                            </div>

                            <div class="form-group">
                                <label for="Inputlast_name">Last Name</label>                                
                                    <input type="text" name="lastname" class="form-control lastname" placeholder="Enter Last Name">  
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control email" placeholder="Enter Email">
                            </div>  

                            <div class="form-group">
                                <label for="">Select Country</label>
                                <select class="form-control country" name="country" id="country">
                                    <option value="">Select Country</option>   
                                    <option value="uk">Uk</option>
                                <option value="india">India</option>
                                <option value="pakistan">Pakistan</option>                                 
                                </select>
                            </div>

                            <div class="form-group">
                            <label for="">Password</label>
                            <input type="Password" name="password" placeholder="Enter Password" class="form-control password">
                        </div>
                            
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="radio" name="user_status" id="user_status_active" class="form-check-input user_status_active" value="active">
                                    <label class="form-check-label" for="user_status_active">Active</label>
                                </div>  
                                <div class="form-check">
                                <input type="radio" name="user_status" id="user_status_inactive" class="form-check-input user_status_inactive" value="inactive">
                                    <label class="form-check-label" for="user_status_inactive">Inactive</label>
                                </div> 
                            </div>                               

                        </div> 

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    

                </div>            
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\myofficerlist\resources\views/admin/users/index.blade.php ENDPATH**/ ?>