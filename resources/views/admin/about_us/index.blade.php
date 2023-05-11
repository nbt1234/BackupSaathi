@extends('admin/index')
@section('title','About Us')
@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">About Us</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">About Us</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
 {{-- dd($blogs_list) --}}


  <div class="row">
    <div class="col-12">
      <div class="card">              
        <div class="card-body">
            <table id="allblogslisting" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Content</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody> 
                                      
                    @foreach($data as $about)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            {{-- <td>{!!  !!}</td>                               --}}
                            <td>{{strip_tags(preg_replace("/&#?[a-z0-9]+;/i","",$about->message) )}}</td>   
                            <td>
                            <a href="{{ url('admin/edit-about-us/'.$about->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                               
                            </td>                  
                        </tr>                                
                    @endforeach
              </tbody>
                <tfoot>
                    <tr>
                        <th>S.no</th>
                        <th>Content</th>
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

@endsection