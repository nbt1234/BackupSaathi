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
            <li class="breadcrumb-item active">Add User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
 
  <div class="row">
    <div class="col-12">
      <div class="card">  
        <div class="modal-body">                  
          <form id="add_new_user_form" action="<?php echo e(url('admin/insert-users')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
            <div class="card-body">                            
                  <div class="form user_img">
                      <div class="containers">      
                            <div class="imageWrapper">
                                <img class="image show_cat_icon" src="">
                            </div>
                      </div>
                          <div class="col-md-12" style="text-align: center;">
                                <button class="file-upload">            
                                    <input type="file" name="user_avatar" class="cat-file-input" value="">Choose File
                                </button>
                              </div>
                            </div>
                            <div class="col-md-12 row">
                            <div class="form-group col-md-6">
                              <label for="first_name">First Name</label>                                
                              <input type="text" name="firstname" class="form-control firstname" placeholder="Enter First Name" value="<?php echo e(old('firstname')); ?>">
                            </div>
                            
                            
                            <div class="form-group col-md-6">
                            <label for="last_name">Last Name</label>
                              <input type="text" name="lastname" class="form-control lastname" placeholder="Enter Last Name" value="<?php echo e(old('lastname')); ?>">
                              </div>
                            <div class="form-group col-md-6">
                              
                              <label for="Email">Email</label>

                              
                              <input type="text" name="email" class="form-control email" placeholder="Enter Email" value="<?php echo e(old('email')); ?>">
                              </div>
                            <div class="form-group col-md-6">
                              <label for="">Phone Number</label>
                                
                                <input type="text" name="phone" class="form-control phone" placeholder="Enter phone" value="<?php echo e(old('phone')); ?>">
                                </div>
                            <div class="form-group col-md-6">
                            <label for="">Password</label>

                              
                              <input type="Password" name="password" placeholder="Enter Password" class="form-control password">
                              </div>
                        <div class="form-group col-md-6">
                          <label for="">Confirm Password</label>

                          
                              <input type="Password" name="confirm_password" placeholder="Enter confirm password" class="form-control confirm_password">
                        </div>
                      </div> 
                        <div class="card-footer">
                          <div></div>
                          <div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </div>
                      </div>
                    </form>
                </div>            
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<script>
  function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#con_password").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    }
    $(document).ready(function () {
       $("#con_password").keyup(checkPasswordMatch);
    });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u148312424/domains/urlsdemo.xyz/public_html/saathi/resources/views/admin/users/user-add.blade.php ENDPATH**/ ?>