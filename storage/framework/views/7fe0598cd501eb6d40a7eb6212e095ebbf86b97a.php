<?php $__env->startSection('content'); ?>
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit privacy policy</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit privacy policy</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">  
          <div class="modal-body">
           
          <form action="<?php echo e(route('saathi.privacy.policy.update')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">      
                            <input type="hidden" name="policy_id" value="<?php echo e($data->id); ?>">
                            
                            <textarea col="8" rows="5" type="text" id="editor" name="policy" class="form-control" value=""> <?php echo e($data->policy); ?></textarea>
                           
                                
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

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u148312424/domains/urlsdemo.xyz/public_html/saathi/resources/views/admin/saathi-privacy-policy/saathi-privacy-policy-edit.blade.php ENDPATH**/ ?>