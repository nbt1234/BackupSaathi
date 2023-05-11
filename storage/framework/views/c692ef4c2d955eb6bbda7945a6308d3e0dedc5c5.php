
<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Add Subadmin</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Add Subadmin</li>
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
              	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Add New SubAdmin</button>
                <table id="subadminlisting" class="table table-bordered table-striped">
					<thead>
					  <tr>
					    <th>S.no</th>
					    <th>Username</th>
					    <th>Email</th>
					    <th>Mobile</th>
					    <th>Date</th>
					    <th>Action123333333</th>
					  </tr>
					</thead>
          <tbody>                 		
              <?php $__currentLoopData = $subadmin_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subadmin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td><?php echo e($subadmin->username); ?></td>
                  <td><?php echo e($subadmin->email); ?></td>
                  <td><?php echo e($subadmin->mobile); ?></td>
                  <td><?php echo e($subadmin->created_at); ?></td>
                  <td><a href="edit-subadmin/<?php echo e($subadmin->id); ?>">Edit</a></td>
                </tr>							
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
                  	<tfoot>
                  		<tr>
                    		<th>S.no</th>
        						    <th>Username</th>
        						    <th>Email</th>
        						    <th>Mobile</th>
        						    <th>Date</th>
        						    <th>View</th>
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
    <!-- <?php $__currentLoopData = $subadmin_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	dd($item);
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Sub Admin</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
				<form id="add_new_subadmin_form" action="<?php echo e(url('admin/insert-subadmin')); ?>" method="post">
					<?php echo csrf_field(); ?>
					<div class="card-body">
						<div class="form-group">
					    	<label for="Inputusername">Username</label>
					        <input type="text" name="username" class="form-control" id="Inputusername" placeholder="Enter Username">
					    </div>					    
						<div class="form-group">
							<label for="InputEmail">Email address</label>
							<input type="email" name="email" class="form-control" id="InputEmail" placeholder="Enter email">
						</div>
            <div class="form-group">
					    	<label for="InputPhoneNumber">Phone Number</label>
					        <input type="text" name="phoneNumber" class="form-control" id="InputPhoneNumber" placeholder="Enter PhoneNumber">
					  </div>
						<div class="form-group">
							<label for="InputPassword">Password</label>
							<input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
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
  $('#add_new_subadmin_form').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      username: {
        required: true,
        minlength: 5,
        maxlength: 15
      },
      phoneNumber: {
      	required: true,
		number: true,
		minlength: 10,
		maxlength: 10
    	}      
      // terms: {
      //   required: true
      // },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      username: {
        required: "Please enter a username",
        minlength: "Your username must be at least 5 characters long",
        maxlength: "Your username should not exceed 15 characters.",
      },
      phoneNumber: {
       	required: "Please enter phone number",
      // 	minlength: "Your phone number must be at least 10 digit long",
      //   maxlength: "Your username should not exceed 15 characters.",
      }
      //terms: "Please accept our terms"
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
    $("#subadminlisting").DataTable({
      "responsive": true, 
      "lengthChange": false, 
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#subadminlisting_wrapper .col-md-6:eq(0)');
    
});
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\nagesh_new\resources\views/admin/subadmin-list.blade.php ENDPATH**/ ?>