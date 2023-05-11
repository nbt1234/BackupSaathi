@extends('admin/index')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">All Users Traveller</h1>
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
{{-- dd($blogs_list) --}}
<!-- <div class="row"> -->
  <div class="col-12 w-auto table-fixed">
    <div class="card">
     <div class="card-header">
      </div>
     <div class="card-body">

      <div class="">
      <table id="example" class="table table-striped table-bordered nowrap table-responsive" style="width:100%">
        <thead>
            <tr>
              <th>S.no</th>
              <th>User Name</th>
              <th>Departure City</th>
              <th>layover city</th>
              <th>arrival city</th>
              <th>airline name</th>
              <th>departure date</th>
              <th>departure time</th>
              <th>flexible time</th>
              <th>departure start date</th>
              <th>departure end date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           
            @foreach($travel_data as $travel)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{$travel['username']['first_name']}} {{$travel['username']['last_name']}}</td>
              <td>{{$travel['departure_city']}}</td>
              <td>{{$travel['layover_city']}}</td>
              <td>{{$travel['arrival_city']}}</td>
              <td>{{$travel['airline_name']}}</td>
              <td>{{$travel['departure_date']}}</td>
              <td>{{$travel['departure_time']}}</td>
              <td>@if($travel['flexible_time'] == 0)
                    No
                  @else
                    Yes
                  @endif
            </td>
              <td>{{$travel['departure_start_date']}}</td>
              <td>{{$travel['departure_end_date']}}</td>
              
              <td>
                <a class="btn btn-success travellers_details" onclick="" data-id="{{$travel['id']}}" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-eye"></i></a>
                <a class="btn btn-danger show_confirm" data-id ="{{$travel['id']}}"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
    </table>
    </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Traveller List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="table1" class="table-striped">
          <thead>
            <tr>
              <th style="padding: 10px;">S.no</th>
              <th style="padding: 10px;">Profile Image</th>
              <th style="padding: 10px;">First Name</th>
              <th style="padding: 10px;">Last Name</th>
              <th style="padding: 10px;">Age</th>
              <th style="padding: 10px;">Gender</th>
              <th style="padding: 10px;">Language Spoken</th>
              <th style="padding: 10px;">special Needs</th>
              <th style="padding: 10px;">Relationship</th>
            </tr>
          </thead>
          <tbody class="showData">
          </tbody>
        </table>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
<!-- </div> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    
<script type="text/javascript">
 //-----------------------delete record--------------//
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
                    url: "{{url('admin/trevel-destroy')}}",
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

  $(document).ready(function() {
    $('.travellers_details').click(function(e) {
      e.preventDefault();
      var id = $(this).attr('data-id');
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        type: "POST",
        url: "{{ url('admin/show-travellor') }}",
        data: {
          'id': id
        },
        success: function(response) {
          if (response['status'] == 'success') {
            let students = response['data'];
            // using forEach
            students.forEach(myFunction);

            function myFunction(item, index, arr) {

              // adding strings to the array elements
              arr[index] = "<tr><td>"+ `${index+1}` + "</td>" + " <td>"+ `<img src="https://urlsdemo.xyz/saathi/admin-assets/img/profile_img/${item.profile_image}" alt="" width="70px" height="50px">` + "</td>" + "<td>"+ `${item.first_name}` + "</td>" + "<td>" + `${item.last_name}` + "</td>" + "<td>" + `${item.age}` + "</td>" + "<td>" + `${item.gender}` + "</td>" + "<td>" + `${item.language_spoken}` + "</td>" + "<td>" + `${item.special_needs}` + "</td>" + "<td>" + `${item.relationship}` + "</td></tr>";
            }
           $('.showData').html(students);
          } else {
            alert('data not found');
          }
        }
      });
    });
  });
</script>

@endsection