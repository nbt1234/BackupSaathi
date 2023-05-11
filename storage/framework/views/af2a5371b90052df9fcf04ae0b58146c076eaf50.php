
<?php $__env->startSection('content'); ?>

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add City</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">All Cities</li>
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
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Add Cities</button>
          </div>             
        <div class="card-body">
            <table id="allblogslisting" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Image</th>               
                    <th>City Name</th>
                    <th>Status</th>                
                    <th>Action</th>
                  </tr>
                </thead>
                  <tbody> 
                        <?php
                            $count = 1;
                        ?>                    
                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($count++); ?></td>
                                <td><img src="<?php echo e(URL::asset('/admin-assets/img/city/')); ?>/<?php echo e($city['image']); ?>" alt="" height="60" width="60"></td>
                                <td><?php echo e($city['city_name']); ?></td>  
                                <td><?php echo e($city['status']); ?></td> 
                                <td>
                                    <a href="">Edit</a>
                                </td>                  
                            </tr>                                
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
                <tfoot>
                    <tr>
                        <th>S.no</th>
                        <th>Image</th>               
                        <th>City Name</th>
                        <th>Status</th>                
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
                    <h4 class="modal-title">Add New City</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  
                    <form id="add_new_city_form" action="<?php echo e(route('add.city')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">      

                            <div class="form-group blog_img">
                                <div class="containers">      
                                    <div class="imageWrapper">
                                        <img class="image show_cat_icon" src="">
                                    </div>
                                </div>
                                <button class="file-upload">            
                                    <input type="file" name="city_image" class="cat-file-input" value="">Choose File
                                </button>
                                    <?php $__errorArgs = ['city_image'];
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
                                <label for="Inputtitle">City Name</label>                                
                                    <input type="text" name="city_name" class="form-control title" placeholder="Enter Title">  
                                    <?php $__errorArgs = ['city_name'];
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
                                    <input type="radio" name="city_status" id="blog_status_active" class="form-check-input blog_status_active" value="active">
                                    <label class="form-check-label" for="blog_status_active">Active</label>
                                </div>  
                                <div class="form-check">
                                    <input type="radio" name="city_status" id="city_status_inactive" class="form-check-input blog_status_inactive" value="inactive">
                                    <label class="form-check-label" for="city_status_inactive">Inactive</label>
                                </div> 
                            </div>
                                                          

                        </div> 

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary citysubmit">Submit</button>
                        </div>
                    </form>
                    

                </div>            
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saathi\resources\views/admin/citylist/cityview.blade.php ENDPATH**/ ?>