<?php $__env->startSection('title','privacy policy'); ?>
<?php $__env->startSection('content'); ?>

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">privacy policy</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">privacy policy</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
 


  <div class="row">
    <div class="col-12">
      <div class="card">              
        <div class="card-body">
            <table id="allblogslisting" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>policy</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody> 
                                      
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$about->policy) )); ?></td>
                            <td>
                            <a href="<?php echo e(url('admin/saathi-privacy-policy-edit/'.$about->id)); ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                               
                            </td>                  
                        </tr>                                
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
                <tfoot>
                    <tr>
                        <th>S.no</th>
                        <th>policy</th>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u148312424/domains/urlsdemo.xyz/public_html/saathi/resources/views/admin/saathi-privacy-policy/policy-index.blade.php ENDPATH**/ ?>