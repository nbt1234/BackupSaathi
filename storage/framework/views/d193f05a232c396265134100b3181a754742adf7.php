
<?php $__env->startSection('content'); ?>

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Travel</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">All Travel</li>
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
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Add Travel</button>
          </div>             
        <div class="card-body">
            <table id="alltravellisting" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Image</th>               
                    <th>First Name</th>
                    <th>Last Name</th>                
                    <th>Age</th>                
                    <th>Gender</th>                
                    <th>Language Spoken</th>                
                    <th>Any Special Needs</th>                
                    <th>Relationship to you</th>                
                    <th>Action</th>
                  </tr>
                </thead>
                  <tbody> 
                       
              </tbody>
                <tfoot>
                    <tr>
                    <th>S.no</th>
                    <th>Image</th>               
                    <th>First Name</th>
                    <th>Last Name</th>                
                    <th>Age</th>                
                    <th>Gender</th>                
                    <th>Language Spoken</th>                
                    <th>Any Special Needs</th>                
                    <th>Relationship to you</th>                
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

    <div class="blog_modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New travel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  
                    <form id="add_new_travel_form" action="<?php echo e(route('add.travel')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="full_body">      

                            <div class="form-group travel_img">
                                <div class="containers">      
                                    <div class="imageWrapper">
                                        <img class="image show_cat_icon" src="">
                                    </div>
                                </div>
                                <button class="file-upload">            
                                    <input type="file" name="travel_image[]" class="cat-file-input" value="">Choose File
                                </button>
                                    <?php $__errorArgs = ['travel_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-valid-error"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>                      

                            <div class="form-group">
                                <label for="Inputtitle">First Name</label>                                
                                    <input type="text" name="first_name[]" class="form-control title" placeholder="Enter First Name">  
                                    <?php $__errorArgs = ['First_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-valid-error"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label for="Inputtitle">Last Name</label>                                
                                    <input type="text" name="last_name[]" class="form-control title" placeholder="Enter Last Name">  
                                    <?php $__errorArgs = ['Last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-valid-error"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="Inputtitle">Age</label>                                
                                        <input type="text" name="age[]" class="form-control title" placeholder="Enter Age">  
                                        <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-valid-error"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <label for="Inputtitle">Gender</label>                                
                                    <select name="gender[]" class="form-control title">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select> 
                                        <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="form-valid-error"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Inputtitle">Language Spoken</label>                                
                                    <input type="text" name="language_spoken[]" class="form-control title" placeholder="enter language spoken">  
                                    <?php $__errorArgs = ['language_spoken'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-valid-error"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label for="Inputtitle">Any Special Needs</label>                                
                                    <input type="text" name="special_needs[]" class="form-control title" placeholder="Enter Special Needs">  
                                    <?php $__errorArgs = ['special_needs'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-valid-error"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label for="Inputtitle">Relationship to you</label>                                
                                    <input type="text" name="relationship[]" class="form-control title" placeholder="Enter Relationship">  
                                    <?php $__errorArgs = ['relationship'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="form-valid-error"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="radio" name="travel_status" id="travel_status_active" class="form-check-input blog_status_active" value="active">
                                    <label class="form-check-label" for="travel_status_active">Active</label>
                                </div>  
                                <div class="form-check">
                                    <input type="radio" name="travel_status" id="travel_status_inactive" class="form-check-input blog_status_inactive" value="inactive">
                                    <label class="form-check-label" for="travel_status_inactive">Inactive</label>
                                </div> 
                            </div>
                                                          

                        </div> 
                        <div class="row">
                            <div class="card-footer">
                                <button type="button" id="traveladdmore" class="traveladdmore btn btn-primary">Add More</button>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary travelsubmit">Submit</button>
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
        //Add Input Fields
        $(document).ready(function() {
            var max_fields = 10; //Maximum allowed input fields 
            var wrapper    = $(".full_body"); //Input fields wrapper
            var add_button = $(".traveladdmore"); //Add button class or ID
            var x = 1; //Initial input field is set to 1
            
            //When user click on add input button
            $(add_button).click(function(e){
                e.preventDefault();
                //Check maximum allowed input fields
                if(x < max_fields){ 
                    x++; //input field increment
                     //add input field
                    $(wrapper).append('<div class="form-group travel_img"><div class="containers"><div class="imageWrapper"><img class="image show_cat_icon" src=""></div></div><button class="file-upload"><input type="file" name="travel_image[]" class="cat-file-input" value="">Choose File</button></div><div class="form-group"><label for="Inputtitle">First Name</label><input type="text" name="first_name[]" class="form-control title" placeholder="Enter First Name"></div><div class="form-group"><label for="Inputtitle">Last Name</label><input type="text" name="last_name[]" class="form-control title" placeholder="Enter Last Name"></div><div class="row"><div class="form-group"><label for="Inputtitle">Age</label><input type="text" name="age[]" class="form-control title" placeholder="Enter Age"></div><div class="form-group"><label for="Inputtitle">Gender</label><select name="gender[]" class="form-control title"><option value="Male">Male</option><option value="Female">Female</option></select></div></div><div class="form-group"><label for="Inputtitle">Language Spoken</label><input type="text" name="language_spoken[]" class="form-control title" placeholder="enter language spoken"></div><div class="form-group"><label for="Inputtitle">Any Special Needs</label><input type="text" name="special_needs[]" class="form-control title" placeholder="Enter Special Needs"></div><div class="form-group"><label for="Inputtitle">Relationship to you</label><input type="text" name="relationship[]" class="form-control title" placeholder="Enter Relationship"></div><div class="form-group"><div class="form-check"><input type="radio" name="travel_status" id="travel_status_active" class="form-check-input blog_status_active" value="active"><label class="form-check-label" for="travel_status_active">Active</label></div>  <div class="form-check"><input type="radio" name="travel_status" id="travel_status_inactive" class="form-check-input blog_status_inactive" value="inactive"><label class="form-check-label" for="travel_status_inactive">Inactive</label></div></div>');
                }
            });
        });
    </script>        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saathi\resources\views/admin/travel-companion/add-travel-comp.blade.php ENDPATH**/ ?>