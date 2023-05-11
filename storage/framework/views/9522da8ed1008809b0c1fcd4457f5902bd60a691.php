<?php $__env->startSection('content'); ?>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Update User</li>
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
                    <form id="update_user_form" action="<?php echo e(route('update.user')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">                            
                        <div class="form-group user_img">
                                <div class="containers">      
                                    <div class="imageWrapper">
                                        <img class="image" src="<?php echo e(URL::asset('/admin-assets/img/profile_img/')); ?>/<?php echo e($user_data['user_avatar']); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo e($user_data['id']); ?>">
                                <label for="Inputfirst_name">First Name</label>                                
                                    <input type="text" name="firstname" class="form-control firstname" value="<?php echo e($user_data['first_name']); ?>">
                                     
                            </div>

                            <div class="form-group">
                                <label for="Inputlast_name">Last Name</label>                                
                                    <input type="text" name="lastname" class="form-control lastname" value="<?php echo e($user_data['last_name']); ?>">
                                     
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control email" value="<?php echo e($user_data['email']); ?>" disabled>
                               
                            </div>  

                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone" class="form-control phone" value="<?php echo e($user_data['phone']); ?>" disabled>
                             </div>

                            <div class="form-group">
                            <label for="">Password</label>
                            <input type="Password" name="password" class="form-control password" id="password">
                        </div>
                        <div class="form-group">
                          <label for="">Confirm Password</label>
                          <input type="Password" name="con_password" class="form-control con_password" id="con_password">
                          <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch"></div>
                      </div>
                            
                                                 

                        </div> 

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
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
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u148312424/domains/urlsdemo.xyz/public_html/saathi/resources/views/admin/users/user-edit.blade.php ENDPATH**/ ?>