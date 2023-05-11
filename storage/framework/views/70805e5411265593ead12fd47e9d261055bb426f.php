
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
            <a href="<?php echo e(route('add.travel.view')); ?>"><button type="button" class="btn btn-default">Add Travel</button></a>
          </div>             
        <div class="card-body">
            <table id="alltravellisting" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.no</th>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saathi\resources\views/admin/travel-companion/all-travel-comp.blade.php ENDPATH**/ ?>