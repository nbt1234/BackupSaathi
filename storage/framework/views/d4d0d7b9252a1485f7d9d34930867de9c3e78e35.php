
<?php $__env->startSection('content'); ?>


<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <!-- <h1 class="m-0">Add Subadmin</h1> -->
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">View Subadmin</li>
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
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit User </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <!-- 
          <form id="quickForm">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <div class="form-group mb-0">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                </div>
              </div>
            </div>           
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form> 
          -->
          
          <form id="update_subadmin_form" action="<?php echo e(url('admin/update-subadmin')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="card-body">
              <div class="form-group">
                  <label for="Inputusername">Username</label>
                    <input type="text" name="username" class="form-control" id="Inputusername" value="<?php echo e($subadmin->username); ?>" placeholder="Enter Username">
                </div>					    
              <div class="form-group">
                <label for="InputEmail">Email address</label>
                <input type="email" name="email" class="form-control" id="InputEmail" value="<?php echo e($subadmin->email); ?>" placeholder="Enter email">
              </div>
              <div class="form-group">
                  <label for="InputPhoneNumber">Phone Number</label>
                    <input type="text" name="phoneNumber" class="form-control" id="InputPhoneNumber" value="<?php echo e($subadmin->mobile); ?>" placeholder="Enter PhoneNumber">
              </div>
              <div class="form-group">
                <label for="InputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
              </div>       
              <div class="form-group">
                <label for="InputImage">Password</label>
                <input type="file" name="image" class="form-control" id="InputImage">
              </div>            
            </div>                
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
				  </form>
        </div>
        <!-- /.card -->
        </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-6">

      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\interviewapple\resources\views/admin/edit_subadmin.blade.php ENDPATH**/ ?>