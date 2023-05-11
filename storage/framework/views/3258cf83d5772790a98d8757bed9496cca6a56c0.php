<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/fontawesome-free/css/all.min.css')); ?>">
  
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
<!--   <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>"> -->
<!--   <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>"> -->

  <!-- TOASTR -->
  <link rel="stylesheet" href="<?php echo e(asset('/backend/plugins/toastr/toastr.min.css')); ?> ">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/jqvmap/jqvmap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/dist/css/adminlte.min.css')); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/daterangepicker/daterangepicker.css')); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/summernote/summernote-bs4.min.css')); ?>">

  <!-----Custom Style Sheet------->
  <!-- <link rel="stylesheet" href="<?php echo e(asset('backend/dist/css/admincustom.css')); ?>"> -->
  <link rel="stylesheet" href="<?php echo e(asset('/admin-assets/css/style.css')); ?>">
  <!-- <link rel="stylesheet" href="<?php echo e(asset('backend/dist/css/admin.css')); ?>"> -->

  <!-----Jquery library------>
  <script src="<?php echo e(asset('backend/plugins/jquery/jquery.min.js')); ?>"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo e(asset('backend/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>         
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo e(asset('backend/dist/img/user1-128x128.jpg')); ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo e(asset('backend/dist/img/user8-128x128.jpg')); ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo e(asset('backend/dist/img/user3-128x128.jpg')); ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <!-----User profile-------> 
      <!-- <?php echo e($user = Auth::user()); ?>

      <?php echo e(print_r($user)); ?> -->
      <!-- <?php if(Auth::check()): ?>  -->
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo e(asset('/admin-assets/img/profile_img/user_1/')); ?>/<?php echo e($user->pro_img); ?>" class="user-image img-circle elevation-2" alt="User Image">
            <!-- <span class="d-none d-md-inline">Alexander Pierce</span> -->
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-primary">
              <img src="<?php echo e(asset('/admin-assets/img/profile_img/user_1/')); ?>/<?php echo e($user->pro_img); ?>" class="img-circle elevation-2" alt="User Image">

              <p>Alexander Pierce - Web Developer</p>
            </li>         
            <!-- Menu Footer-->
            <li class="user-footer">
              <a href="<?php echo e(url('admin/profile')); ?>" class="btn btn-default btn-flat">Profile</a>
              <a href="<?php echo e(route('signout')); ?>" class="btn btn-default btn-flat float-right">Sign out</a>
            </li>
          </ul>
        </li>
      <!--  <?php else: ?>  -->
        <!-- <li>test</li>  -->
      <!--  <?php endif; ?> -->


      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->

    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('/admin-assets/img/profile_img/user_1/')); ?>/<?php echo e($user->pro_img); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <?php
        //print_r($data);
        ?>        
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>    

      <?php if(Session::has('flash-success')): ?>
        <p class="admin-toastr" onclick="toastr_success('<?php echo e(session('flash-success')); ?>')"></p>
      <?php endif; ?>
      <?php if(Session::has('flash-error')): ?>
        <p class="admin-toastr" onclick="toastr_danger('<?php echo e(session('flash-error')); ?>')"></p>
      <?php endif; ?>  

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo e('dashboard'); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'dashboard') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard (MyPanel)</p>
            </a>            
          </li> 


          <li class="nav-item">
            <a href="<?php echo e(route('all_users')); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'all_users') ? 'active' : ''); ?>">
              <i class="nav-icon fa fa-users"></i>
              <p>Users</p>
            </a>            
          </li>

          <li class="nav-item <?php echo e((Route::currentRouteName() == 'get_subadmins') ? 'menu-open' : ''); ?>">
            <a href="" class="nav-link <?php echo e((Route::currentRouteName() == 'get_subadmins') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-users"></i>              
              <p>Subadmins
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>  
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e('subadmins'); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'get_subadmins') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Subadmins</p>
                </a>
              </li>                            
            </ul>          
          </li> 

          <!-- <li class="nav-item <?php echo e((Route::currentRouteName() == 'get_vendors') ? 'menu-open' : ''); ?>">
            <a href="" class="nav-link <?php echo e((Route::currentRouteName() == 'get_vendors') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-users"></i>              
              <p>Vendors
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>  
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e('vendors'); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'get_vendors') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Vendors</p>
                </a>
              </li>                            
            </ul>          
          </li> -->

          <li class="nav-item <?php echo e((Route::currentRouteName() == 'get_parent_categories' || Route::currentRouteName() == 'get_child_categories' || Route::currentRouteName() == 'get_subchild_categories') ? 'menu-open' : ''); ?>">
            <a href="" class="nav-link <?php echo e((Route::currentRouteName() == 'get_parent_categories' || Route::currentRouteName() == 'get_child_categories' || Route::currentRouteName() == 'get_subchild_categories') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-users"></i>              
              <p>Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>  
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('get_parent_categories')); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'get_parent_categories') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Parent Category</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="<?php echo e(route('get_child_categories')); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'get_child_categories') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Child Category</p>
                </a>
              </li> 
              <li class="nav-item">
                 <a href="<?php echo e(route('get_subchild_categories')); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'get_subchild_categories') ? 'active' : ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub-Child Category</p>
                </a>
              </li>                          
            </ul>
                  
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 
  <!-- /.content-wrapper -->
  <div class="content-wrapper">

    <!-- <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

        </div>
    <?php endif; ?> -->

    <?php echo $__env->yieldContent('content'); ?>
    
  </div>


  <!-----Footer----------->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script type="text/javascript">
    var base_url = "<?php echo url('') . '/'; ?>"
    var csrf_token = "<?php echo e(csrf_token()); ?>"
</script>
<!-- jQuery -->
<!-- <script src="<?php echo e(asset('backend/plugins/jquery/jquery.min.js')); ?>"></script> -->
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('backend/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset('backend/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('backend/plugins/sparklines/sparkline.js')); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('backend/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('backend/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('backend/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('backend/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('backend/dist/js/adminlte.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo e(asset('backend/dist/js/demo.js')); ?>"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('backend/dist/js/pages/dashboard.js')); ?>"></script>

<!-- jquery-validation -->
<script src="<?php echo e(asset('backend/dist/js/jquery.validate.min.js')); ?>"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo e(asset('backend/dist/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/dist/js/dataTables.bootstrap4.min.js')); ?>"></script>
<!-- <script src="<?php echo e(asset('backend/dist/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/dist/js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/dist/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/dist/js/buttons.bootstrap4.min.js')); ?>"></script> -->

<script src="<?php echo e(asset('backend/dist/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/dist/js/buttons.bootstrap4.min.js')); ?>"></script>

<script src="<?php echo e(asset('backend/plugins/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>
<script src="<?php echo e(asset('/backend/plugins/toastr/toastr.min.js')); ?>"></script>
<script src="<?php echo e(asset('/admin-assets/js/adminjs.js')); ?>"></script>

</body>
</html><?php /**PATH /home/u148312424/domains/urlsdemo.xyz/public_html/mypanel/resources/views/admin/index.blade.php ENDPATH**/ ?>