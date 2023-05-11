<?php $__env->startSection('title','About Us'); ?>
<?php $__env->startSection('content'); ?>

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit About Us</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit About Us</li>
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
               <form id="airline_form_update" action="<?php echo e(route('update.about_us')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="about_us_id" value="<?php echo e($data->id); ?>">
                        <div class="card-body">      

                            <div class="form-group blog_img">                      

                            <div class="form-group">
                                <label for="Inputtitle">Description</label>                                
                                    <textarea col="8" rows="5" type="text" name="description" class="form-control" value=""><?php echo e($data->message); ?></textarea>  
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u148312424/domains/urlsdemo.xyz/public_html/saathi/resources/views/admin/about_us/edit-about-us.blade.php ENDPATH**/ ?>