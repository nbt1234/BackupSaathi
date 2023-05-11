@extends('admin/index')
@section('content')
<style>
  input {
    width: unset;
}
.form-check{
  display:flex;
  align-items:center;
}
</style>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add City</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit City</li>
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
           
          <form id="add_new_city_form" action="{{route('add.city')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">      

                            <div class="form-group blog_img">
                                <div class="containers">      
                                    <div class="imageWrapper">
                                        <img class="image show_cat_icon" src="">
                                    </div>
                                </div>
                                <div class="col-md-12" style="text-align: center;">
                                <button class="file-upload">            
                                    <input type="file" name="city_image" class="cat-file-input" value="">Choose File
                                </button>
                                    
                                </div>
                                   
                            </div>                      

                            <div class="form-group">
                                <label for="Inputtitle">City Name</label>                                
                                    <input type="text" name="city_name" class="form-control title" placeholder="Enter Title">  
                                   
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="radio" name="city_status" id="blog_status_active" class="form-check-input blog_status_active" value="1">
                                    <label class="form-check-label" for="blog_status_active">Active</label>
                                </div>  
                                <div class="form-check">
                                    <input type="radio" name="city_status" id="city_status_inactive" class="form-check-input blog_status_inactive" value="0">
                                    <label class="form-check-label" for="city_status_inactive">Inactive</label>
                                </div> 
                            </div>
                                                          

                        </div> 

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary citysubmit">Submit</button>
                        </div>
                    </form>
                    

                </div> 
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
    </div>

@endsection