<?php $__env->startSection('content'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Add City</h1>
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
         <a href="<?php echo e(url('admin/add-city-view/')); ?>"><button type="button" class="btn btn-default" data-toggle="modal" >Add City</button></a>
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
                                <td>
                                <?php if($city['status'] == 1): ?>
                                  <a class="text-success" onclick="confirm_box_status(0,<?php echo e($city['id']); ?>,'admin/city-status',this,'status')"><strong>Active</strong></a>
                                  
                                  <?php else: ?>
                                   <a class="text-danger" onclick="confirm_box_status(1,<?php echo e($city['id']); ?>,'admin/city-status',this,'status')"><strong>Inactive</strong></a>
                                  
                                  <?php endif; ?>
                                </td> 
                                <td>
                                <a class="btn btn-primary" href="<?php echo e(url('admin/edit-city/'.$city['id'])); ?>"><i class="fa fa-edit"></i></a>
                                  <a class="btn btn-danger show_confirm" data-id = "<?php echo e($city['id']); ?>" ><i class="fa fa-trash"></i></a>
                                
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    
<script type="text/javascript">
 //-----------------------record delete popup--------------//
     $('.show_confirm').click(function(event) {
          var id = $(this).data("id");
          var token = $("meta[name='csrf-token']").attr("content");
          
              Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {
                $.ajax({
                    type: 'post',
                    url: "<?php echo e(url('admin/destroy')); ?>",
                    data: {
                      "id": id,
                      "_token": token,
                    },
                    // dataType: 'json',
                    success: function (response) {
                      if(response['status'] == 'success'){
                  Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                  ).then((result) => {
                   location.reload();
                  })
                }else{
                  Swal.fire(
                  'Not Deleted!',
                  'Your Data Not deleted.',
                  'failed').then((result) => {
                   location.reload();
                  })
              }
            }
          })
        }
      });
    });
    //--------------------status change -------//
     function confirm_box_status(status, id, url, _this, msg) {
        if (confirm("Do you really want to change status ?")) {
            let curr_status = $(_this).children().text();
            $(_this).children().text('Waiting...')
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "<?php echo e(url('admin/city-status/')); ?>",
                type: "POST",
                data: {
                    status: status,
                    id: id,
                },
                success: $.proxy(function(res) {
                    // alert(res->st)
                    console.log(res)
                    if (res) {

                        if (status == 1) {
                            $(_this).parent().html('<a class="text-success" onclick="confirm_box_status(\'0\',' + id + ',\'' + url + '\',this,\'' + msg + '\')"><strong>Active</strong></a>');
                        }
                        if (status == 0) {
                            $(_this).parent().html('<a class="text-danger" onclick="confirm_box_status(\'1\',' + id + ',\'' + url + '\',this,\'' + msg + '\')"><strong>Inactive</strong></a>');
                        }
                        toastr_success(msg + ' status has changed successfully')
                    } else if (res == 'error') {
                        toastr_danger('Error occured in changing status')
                        $(_this).children().text(curr_status)
                    }
                }, this)
            });
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u148312424/domains/urlsdemo.xyz/public_html/saathi/resources/views/admin/citylist/cityview.blade.php ENDPATH**/ ?>