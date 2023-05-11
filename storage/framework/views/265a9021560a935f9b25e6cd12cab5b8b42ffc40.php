<?php $__env->startSection('content'); ?>

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Blog</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">All Blogs</li>
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
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Add Blog</button>
          </div>             
        <div class="card-body">
            <table id="allblogslisting" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Image</th>               
                    <th>Title</th>
                    <th>Content</th>
                    <th>Status</th>                
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody> 
                    <?php
                        $count = 1;
                    ?>                    
                    <?php $__currentLoopData = $blogs_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($count++); ?></td>
                            <td><img src="<?php echo e(URL::asset('/admin-assets/img/blog_img/')); ?>/<?php echo e($blog->image); ?>" alt="" height="60" width="60"></td>
                            <td><?php echo e($blog->title); ?></td>  
                            <!-- <td><?php echo $blog->content; ?></td>  -->
                            <td><?php echo e(strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$blog->content) )); ?></td>   
                            <td><?php echo e($blog->status); ?></td> 
                            <td>
                                <a href="" class="edit_blog admin_edit_blog" blog_id="<?php echo e($blog->id); ?>" blog_title="<?php echo e($blog->title); ?>" blog_content="<?php echo e($blog->content); ?>" blog_icon_path="<?php echo e(asset('/admin-assets/img/blog_img')); ?>" blog_icon="<?php echo e($blog->image); ?>" blog_status="<?php echo e($blog->status); ?>">Edit</a>
                            </td>                  
                        </tr>                                
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
                <tfoot>
                    <tr>
                        <th>S.no</th>
                        <th>Image</th>               
                        <th>Title</th>
                        <th>Content</th>
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
                    <h4 class="modal-title">Add New Blog</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  
                    <form id="add_new_blog_form" action="<?php echo e(url('admin/insert-blog')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">      

                            <div class="form-group blog_img">
                                <div class="containers">      
                                    <div class="imageWrapper">
                                        <img class="image show_cat_icon" src="">
                                    </div>
                                </div>
                                <button class="file-upload">            
                                    <input type="file" name="blog_icon" class="cat-file-input" value="">Choose File
                                </button>
                            </div>                      

                            <div class="form-group">
                                <label for="Inputtitle">Title</label>                                
                                    <input type="text" name="title" class="form-control title" placeholder="Enter Title">  
                            </div>

                            <div class="form-group">
                                <label for="Inputcontent">Content</label>   
                                <!-- <textarea name="content" class="form-control content" id="content"></textarea> -->
                                <textarea name="content" class="form-control content" id="content">  </textarea>
                            </div>  

                            <div class="form-group">
                                <div class="form-check">
                                    <input type="radio" name="blog_status" id="blog_status_active" class="form-check-input blog_status_active" value="active">
                                    <label class="form-check-label" for="blog_status_active">Active</label>
                                </div>  
                                <div class="form-check">
                                    <input type="radio" name="blog_status" id="blog_status_inactive" class="form-check-input blog_status_inactive" value="inactive">
                                    <label class="form-check-label" for="blog_status_inactive">Inactive</label>
                                </div> 
                            </div>
                                                          

                        </div> 

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary blogsubmit">Submit</button>
                        </div>
                    </form>
                    

                </div>            
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u148312424/domains/urlsdemo.xyz/public_html/saathi/resources/views/admin/blogs/index.blade.php ENDPATH**/ ?>