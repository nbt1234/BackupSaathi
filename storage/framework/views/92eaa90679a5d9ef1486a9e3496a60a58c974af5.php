
<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Add Parent Category</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">All Parent Category</li>
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
          <div class="col-12">
            <div class="card">              
              <div class="card-body">               
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Add New Category</button>
                <table id="parentcategorylisting" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>S.no</th>
              <th>Category name</th>
              <th>slug</th>
              <th>icon</th>
              <th>status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>                     
              <?php $__currentLoopData = $parent_category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($parent_category->cat_name); ?></td>
                  <td><?php echo e($parent_category->cat_slug); ?></td>
                  <td><?php echo e($parent_category->cat_icon); ?></td>
                  <td><?php echo e(ucfirst($parent_category->cat_status)); ?></td>
                  <td><a href="" class="edit_parentcat" cat_id="<?php echo e($parent_category->id); ?>">Edit</a></td>
                </tr>             
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
                    <tfoot>
                      <tr>
                        <th>S.no</th>
                        <th>Category name</th>
                        <th>slug</th>
                        <th>icon</th>
                        <th>status</th>
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
    


    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Parent Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
        <form id="add_new_parentcat_form" action="<?php echo e(url('admin/insert-parentcat')); ?>" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="card-body">
            <div class="form-group">
                <label for="Inputparentcat_name">Parent-Category Name</label>
                  <input type="text" name="parent_cat_name" class="form-control" id="Inputparentcat_name" placeholder="Enter Category Name">
              </div>              
            <div class="form-group">
              <label for="Inputparentcat_icon">Category Icon</label>
              <input type="file" name="parent_cat_icon" class="form-control" id="Inputparentcat_icon" >
            </div>            
            <div class="form-group">
              <label for="">Status</label>
              <input type="radio" name="cat_status" class="form-control" value="Active"> Active
              <input type="radio" name="cat_status" class="form-control" value="Pending"> Pending
            </div>    
            <!-- <div class="form-group">
              <label for="InputPassword">Image</label>
              <input type="file" name="image" class="form-control" id="image" placeholder="">
            </div>                 -->
          </div>                
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
            </div>            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



  </div>
</section>
<!-- /. Main content -->
<script>
  $(function () {
    // $.validator.setDefaults({
    //   submitHandler: function () {
    //     alert( "Form successful submitted!" );
    //   }
    // });
    $('#add_new_parentcat_form').validate({
      rules: {

        parent_cat_name: {
          required: true,
          // minlength: 5         
        },
        parent_cat_icon:{
          required: true          
        },
        cat_status: {
          required :true
        }
        
      },
      messages: {
        parent_cat_name: {
          required: "Please enter Category"          
        },
        parent_cat_icon: {
          required: "Please choose a category image."          
        },
        cat_status: {
          required: "Please Select Status."          
        }
        
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });

  $(function () {
      $("#parentcategorylisting").DataTable({
        "responsive": true, 
        "lengthChange": false, 
        "autoWidth": false,
        //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#parentcategorylisting_wrapper .col-md-6:eq(0)');
      
  });

</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nagesh_new\resources\views/admin/parent-category-list.blade.php ENDPATH**/ ?>