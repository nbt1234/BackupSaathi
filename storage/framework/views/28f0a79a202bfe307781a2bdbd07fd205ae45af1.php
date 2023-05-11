
<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Add Subadmin</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Add Subadmin</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">  	
  	   
      
    <div class="row">
          <div class="col-12">
            <div class="card">  
              <div class="card-header">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Add New SubAdmin</button>
              </div>            
              <div class="card-body"> 
                <table id="subadminlisting" class="table table-bordered table-striped">
        					<thead>
        					  <tr>
        					    <th>S.no</th>
        					    <th>Username</th>
        					    <th>Email</th>
        					    <th>Mobile</th>
                      <th>Status</th>
                      <th>Accessiblity</th>        					    
        					    <th>Action</th>
        					  </tr>
        					</thead>
                  <tbody>   
                  
                      <?php $__currentLoopData = $subadmin_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subadmin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <tr>
                          <td><?php echo e($loop->iteration); ?></td>
                          <td><?php echo e($subadmin->username); ?></td>
                          <td><?php echo e($subadmin->email); ?></td>
                          <td><?php echo e($subadmin->mobile); ?></td>                          
                          <td><?php echo e(ucfirst($subadmin->status)); ?></td>
                          <td>Change</td>
                          <td><a href="" class="admin_edit_subadmin" userid="<?php echo e($subadmin->id); ?>" username="<?php echo e($subadmin->username); ?>" useremail="<?php echo e($subadmin->email); ?>" userphone="<?php echo e($subadmin->mobile); ?>" userstatus="<?php echo e($subadmin->status); ?>">Edit</a></td>
                        </tr>							
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                	<tfoot>
                		<tr>
                  		<th>S.no</th>
        					    <th>Username</th>
        					    <th>Email</th>
        					    <th>Mobile</th>
                      <th>Status</th>
                      <th>Accessiblity</th>
        					    <th>Action</th>
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
    <!-- <?php $__currentLoopData = $subadmin_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	dd($item);
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Sub Admin</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
      				<form id="add_new_subadmin_form" action="<?php echo e(url('admin/insert-subadmin')); ?>" method="post">
      					<?php echo csrf_field(); ?>
      					<div class="card-body">
      						<div class="form-group">
      					    	<label for="Inputusername">Username</label>
      					        <input type="text" name="username" class="form-control subadmin_name" id="Inputusername" placeholder="Enter Username">
      					    </div>					    
      						<div class="form-group">
      							<label for="InputEmail">Email address</label>
      							<input type="email" name="email" class="form-control subadmin_email" id="InputEmail" placeholder="Enter email">
      						</div>
                  <div class="form-group">
      					    	<label for="InputPhoneNumber">Phone Number</label>
      					        <input type="text" name="phoneNumber" class="form-control subadmin_mobile" id="InputPhoneNumber" placeholder="Enter PhoneNumber">
      					  </div>
      						<div class="form-group">
      							<label for="InputPassword">Password</label>
      							<input type="password" name="password" class="form-control subadmin_password" id="InputPassword" placeholder="Password">
      						</div>
                  <div class="form-group">
                      <div class="form-check">
                          <input type="radio" name="subadmin_status" id="subadmin_status_active" class="form-check-input subadmin_status_active" value="active">
                          <label class="form-check-label" for="subadmin_status_active">Active</label>
                      </div>  
                      <div class="form-check">
                      <input type="radio" name="subadmin_status" id="subadmin_status_inactive" class="form-check-input subadmin_status_inactive" value="inactive">
                          <label class="form-check-label" for="subadmin_status_inactive">Inactive</label>
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



  </div>
</section>
<!-- /. Main content -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mypanel\resources\views/admin/subadmin/subadmin-list.blade.php ENDPATH**/ ?>