
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
 

 <div class="card-body">
    <table>
        <tr>
            <th> <h2>Who is Travelling</h2> </th>
        </tr>
    </table>
    <form id="add_new_travel_form" action="<?php echo e(route('add.travel')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="user_id" class="form-control title" value="22">

    <table id="alltravellisting" class="table table-straped">
        <thead>
          <tr>
            <th>Traveller no</th>
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
            <tbody class="add">
            <tr class="tr">
            <td>1</td>
            <td>
                <input type="text" name="first_name[]" class="form-control title" placeholder="Enter First Name">
            </td>
            <td>
                <input type="text" name="last_name[]" class="form-control title" placeholder="Enter Last Name">  

            </td>
            <td>
                <input type="text" name="age[]" class="form-control title" placeholder="Enter Age">  

            </td>
            <td>
                <select name="gender[]" class="form-control title">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </td>
            <td>
                <input type="text" name="language_spoken[]" class="form-control title" placeholder="enter language spoken">  

            </td>
            <td>
                <input type="text" name="special_needs[]" class="form-control title" placeholder="Enter Special Needs">  

            </td>
            <td>
                <input type="text" name="relationship[]" class="form-control title" placeholder="Enter Relationship">  

            </td>
            <td>
                <button type="button" id="traveladdmore" class="traveladdmore btn btn-primary">Add</button>
            </td>
        </tr>
    </tbody>
</table>
<table>
    <tr>
        <th> <h2>Please tell us about your travel details.</h2> </th>
    </tr>
</table>
<table>
    <table id="alltravellisting" class="table table-straped">
        <thead>
          <tr>
            <th>Departure City/Airport</th>
            <th>Layover City/Airport</th>               
            <th>Arrival City/Airport</th>
            <th>Airline</th>                
            <th>Departure Date</th>                
            <th>Departure Time</th>                
            <th>Departure Start Date</th>                
            <th>Departure End Date</th>                
          </tr>
        </thead>
        <tr>
            <td>
                <input type="text" name="departure_city" class="form-control title" placeholder="Enter Departure City">
            </td>
            <td>
                <input type="text" name="layover_city" class="form-control title" placeholder="Enter Layover City">  
            </td>
            <td>
                <input type="text" name="arrival_city" class="form-control title" placeholder="Enter Arrival City">
            </td>
            <td>
                <input type="text" name="airline_name" class="form-control title" placeholder="Enter Airline Name">  
            </td>
            <td>
                <input type="text" name="departure_date" class="form-control title" placeholder="DD/MM/YYYY">  
            </td>
            <td>
                <input type="text" name="departure_time" class="form-control title" placeholder="HH/MM">  
            </td>
            <td>
                <input type="text" name="departure_start_date" class="form-control title" placeholder="DD/MM/YYYY">  
            </td>
            <td>
                <input type="text" name="departure_end_date" class="form-control title" placeholder="DD/MM/YYYY">  
            </td>
        </tr>
</table>
<table>
    <tr>
        <button type="submit" id="travel_submit" class="travel_submit btn btn-primary">Publish</button>
    </tr>
</table>
</form> 
 </div>
 <script>
    //Add Input Fields
    $(document).ready(function() {
        var max_fields = 10; //Maximum allowed input fields 
        var wrapper    = $(".add"); //Input fields wrapper
        var add_button = $(".traveladdmore"); //Add button class or ID
        var x = 1; //Initial input field is set to 1
        
        //When user click on add input button
        $(add_button).click(function(e){
            e.preventDefault();
            //Check maximum allowed input fields
            if(x < max_fields){ 
                x++; //input field increment
                 //add input field
                $(wrapper).append('<tr id="tr"><td>'+ x +'</td><td><input type="text" name="first_name[]" class="form-control title" placeholder="Enter First Name"></td><td><input type="text" name="last_name[]" class="form-control title" placeholder="Enter Last Name"></td><td><input type="text" name="age[]" class="form-control title" placeholder="Enter Age"></td><td><select name="gender[]" class="form-control title"><option value="Male">Male</option><option value="Female">Female</option></select></td><td><input type="text" name="language_spoken[]" class="form-control title" placeholder="enter language spoken"></td><td><input type="text" name="special_needs[]" class="form-control title" placeholder="Enter Special Needs"></td><td><input type="text" name="relationship[]" class="form-control title" placeholder="Enter Relationship"></td><td><a href="javascript:void(0);" class="remove_field">Remove</a></td></tr>');
            }
        });
        
        //when user click on remove button
        $(wrapper).on('click','.remove_field', function(){ 
            $(this).parents('#tr').remove(); //remove inout field
           //inout field decrement
        }); 
        
    });
    //date & time picker
    // jQuery('#datetimepicker6').datetimepicker({
    //   timepicker:false,
    //   onChangeDateTime:function(dp,$input){
    //     alert($input.val())
    //   }
    // });
    
    </script>     
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\saathi\resources\views/admin/travel-companion/add-travel.blade.php ENDPATH**/ ?>