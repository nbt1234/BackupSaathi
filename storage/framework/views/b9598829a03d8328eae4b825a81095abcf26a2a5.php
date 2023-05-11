<?php $__env->startSection('content'); ?>
<style>
  input {
    width: unset;
}
.form-check{
  display:flex;
  align-items:center;
}
</style>

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit Airline</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Airline</li>
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
           
               <form id="airline_form_update" action="<?php echo e(route('update.airlines')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id" value="<?php echo e($airlines_data[0]['id']); ?>">
                        <div class="card-body">      

                            <div class="form-group blog_img">
                                <div class="containers">      
                                    <div class="imageWrapper">
                                        <img class="image show_cat_icon" src="<?php echo e(URL::asset('/admin-assets/img/airline/')); ?>/<?php echo e($airlines_data[0]['image']); ?>">
                                    </div>
                                </div>
                                <div class="col-md-12" style="text-align: center;">
                                <button class="file-upload">            
                                    <input type="file" name="airline_image" class="cat-file-input" value="">Choose File
                                </button>
                                </div>
                                    <?php $__errorArgs = ['airline_image'];
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
                                <label for="Inputtitle">Airline Name</label>                                
                                    <input type="text" name="airline_name" class="form-control title" value="<?php echo e($airlines_data[0]['airlines_name']); ?>">  
                                    
                            </div>
                            <div class="form-group">
                              <?php if($airlines_data[0]['status'] == 1): ?>
                                <div class="form-check">
                                    <input type="radio" name="airline_status"  value="1" checked>
                                    <label class="form-check-label" for="blog_status_active">Active</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="airline_status" value="0">
                                    <label class="form-check-label" for="city_status_inactive">Inactive</label>
                                </div>  
                              <?php else: ?>
                              <div class="form-check">
                                    <input type="radio" name="airline_status" value="1">
                                    <label class="form-check-label" for="blog_status_active">Active</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="airline_status"  value="0" checked>
                                    <label class="form-check-label" for="airline_status_inactive">Inactive</label>
                                </div>
                              <?php endif; ?> 
                            </div>
                                                          

                        </div> 

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    

                </div> 
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u148312424/domains/urlsdemo.xyz/public_html/saathi/resources/views/admin/airlines/edit-airline.blade.php ENDPATH**/ ?>