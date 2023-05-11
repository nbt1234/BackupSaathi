<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Saathi</title>
<!-- Google Font: Source Sans Pro -->
<link rel="icon" type="image/png" href="<?php echo e(asset('/public/backend/logo.PNG')); ?>"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/plugins/fontawesome-free/css/all.min.css')); ?>">

  <!-- datepicker cdn -->
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css">
    <!--ends datepicker cdn -->
  
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

 
<style type="text/css">
.dt-buttons{
  float: right;
  margin-top: -70px;
}
input{
  height:32px;
  width:100%;
}
body{
  margin:20px auto;
/*   display:flex;
  justify-content:center; */
}
.show-input{
  width:300px;
  padding:10px;
}
h3{
  margin-top:20px;
  white-space:no-wrap;
  margin-left:10px
}
</style>

<!-----Jquery library------>
 
  <script src="<?php echo e(asset('backend/plugins/jquery/jquery.min.js')); ?>"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <?php if(Session::has('flash-success')): ?>
  <p class="admin-toastr" onclick="toastr_success('<?php echo e(session('flash-success')); ?>')"></p>
  <?php endif; ?>
  <?php if(Session::has('flash-error')): ?>
  <p class="admin-toastr" onclick="toastr_danger('<?php echo e(session('flash-error')); ?>')"></p>
  <?php endif; ?>
<div class="wrapper">

  <!-- Preloader -->
  

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
        <li class="nav-item dropdown user-menu" style="text-align: right;">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="https://urlsdemo.xyz/saathi/public/backend/58BBE2.png" class="user-image img-circle elevation-2" alt="User Image">
            <!-- <span class="d-none d-md-inline">Alexander Pierce</span> -->
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-primary">
              <img src="<?php echo e(asset('/admin-assets/img/profile_img/user_1/')); ?>/<?php echo e($user->pro_img); ?>" class="img-circle elevation-2" alt="User Image">

              <p>Admin</p>
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
          <img src="https://urlsdemo.xyz/saathi/public/backend/58BBE2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <?php
        //print_r($data);
        ?>        
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>    

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo e(route('dashboard')); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'dashboard') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>            
          </li> 


          <li class="nav-item">
            <a href="<?php echo e(route('all_users')); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'all_users') || (Route::currentRouteName() == 'user.add') || (Route::currentRouteName() == 'view.user') || (Route::currentRouteName() == 'view.travel.list.byuser')||(Route::currentRouteName() == 'add.travel.view')? 'active' : ''); ?>">
              <i class="nav-icon fa fa-users"></i>
              <p>Users </p>
            </a>            
          </li>

          <li class="nav-item">
            <a href="<?php echo e(route('all.city')); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'all.city') || (Route::currentRouteName() == 'add.city.view') || (Route::currentRouteName() == 'edit.city') ? 'active' : ''); ?>">
              <i class="nav-icon fa fa-users"></i>
              <p>Cities</p>
            </a>            
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('all.airlines')); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'all.airlines') || (Route::currentRouteName() == 'add.airlines.view') || (Route::currentRouteName() == 'edit.airlines') ? 'active' : ''); ?>">
              <i class="nav-icon fa fa-users"></i>
              <p>AirLines</p>
            </a>            
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('all.travel')); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'all.travel') ? 'active' : ''); ?>">
              <i class="nav-icon fa fa-users"></i>
              <p>Travel Companion</p>
            </a>            
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('show.about_us')); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'show.about_us') ? 'active' : ''); ?>">
              <i class="nav-icon fa fa-users"></i>
              <p>About Us</p>
            </a>            
          </li>
          <li class="nav-item">
            <a href="<?php echo e(route('policy.index')); ?>" class="nav-link <?php echo e((Route::currentRouteName() == 'policy.index') ? 'active' : ''); ?>">
              <i class="nav-icon fa fa-users"></i>
              <p>Privacy policy</p>
            </a>            
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
    
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="<?php echo e(asset('backend/dist/js/jquery.validate.min.js')); ?>"></script>
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
<!-- date picker -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//https://code.jquery.com/jquery-1.11.0.min.js"></script>


<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
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
</html><?php /**PATH /home/u148312424/domains/urlsdemo.xyz/public_html/saathi/resources/views/admin/index.blade.php ENDPATH**/ ?>