@extends('admin/index')
@section('content')
<link rel="stylesheet" href="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <style type="text/css">
        .dropdown-toggle{
            height: 40px;
            width: 400px !important;
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Travel</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    {{-- dd($blogs_list) --}}

    <div class="card-body">
        <form id="add_new_travel_form" action="{{ route('add.travel') }}" method="post" enctype="multipart/form-data">

            @csrf
            <input type="hidden" name="user_id" class="form-control title" value ="{{$users}}">
            <div class="travelling_table_data">
                <div class="add col-md-12 row">
                    <div class="col-md-12 row">
                        <h5>Traveller details :-1</h5>
                    </div>
                    <div class="form-group col-md-4">
                     <label for="ProfileImage">Profile Image</label>
                     <input type="file" name="traveller[0][profile_img]" class="form-control title">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="FirstName">First Name</label>
                        <input type="text" name="traveller[0][first_name]" class="form-control title"
                            placeholder="Enter First Name" autocomplete="off">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="LastName">Last Name</label>
                        <input type="text" name="traveller[0][last_name]" class="form-control title"
                            placeholder="Enter Last Name" autocomplete="off">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Age">Age</label>
                        <input type="text" name="traveller[0][age]" class="form-control title" placeholder="Enter Age" autocomplete="off">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Gender">Gender</label>
                        <select name="traveller[0][gender]" class="form-control title">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="Language_spoken">Language Spoken :</label><br>
                    <select class="selectpicker" id="multiselect" multiple data-live-search="true" name="traveller[0][language_spoken]">
                    {{$languages = DB::table('languages')->get();}}
                    @foreach ($languages as $language)
                    <option value="{{$language->name}}">{{$language->name}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="AnySpecialNeeds">Any Special Needs</label>
                        <input type="text" name="traveller[0][special_needs]" class="form-control title"
                                placeholder="Enter Special Needs" autocomplete="off">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Relationshiptoyou">Relationship to you</label>
                        <input type="text" name="traveller[0][relationship]" class="form-control title"
                                placeholder="Enter Relationship" autocomplete="off">
                    </div>
                    <div class="form-group col-md-4">                     
                        <button type="button" id="traveladdmore" class="traveladdmore btn btn-primary" style="    margin-top: 30px;">Add</button>
                    </div>
                </div>
                   
                   
                <div class="travelling_table_heding mt-4 mb-5">
                    <h2>Travel details</h2>
                </div>

                <div class="col-md-12 row">
            
                <div id="map"></div>
                <div class="form-group col-md-4">
                    <label for="DepartureCity">Departure City</label>
                    <input type="text"  name="departure_city" id="searchInputsa" class="form-control title" placeholder="Enter Departure City">
                </div>

                <div id="maps"></div>
                <div class="form-group col-md-4">
                    <label for="LayoverCity">Layover City</label>
                    <input type="text"  name="layover_city" id="searchInputs" class="form-control title" placeholder="Enter Layover City">
                </div>

                <div id="mapas"></div>
                <div class="form-group col-md-4">
                    <label for="ArrivalCity">Arrival City</label>
                    <input type="text"  name="arrival_city" id="searchInputss" class="form-control title" placeholder="Enter Arrival City">
                </div>
            
                <div class="form-group col-md-4">
                    <label for="Airline">Airline</label>
                    <select name="airline_name" id="airlines_name" class="form-control">
                        <option value="">Select AirLines Name</option>
                        @foreach ($airlines as $airline)
                            <option value="{{ $airline->airlines_name }}">{{ $airline->airlines_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="flexibletime">flexible time</label>
                    <select name="flexible_time" id="flexible_time" class="form-control title">
                        <option value="0">FALSE</option>
                        <option value="1">TRUE</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                </div>

                <div class="col-md-12 row">      
                    <div class="form-group col-md-4" id="departuredate">
                        <label for="DepartureDate">Departure Date</label>
                        <input type="text" name="departure_date" class="date_picker" placeholder="YYYY-MM-DD"
                            autocomplete="off">
                    </div>

                    <div class="show-input form-group col-md-4"  id="departuretime">
                        <label for="DepartureTime">Departure Time</label>
                        <input type="text" name="departure_time" placeholder="Click To See The Watch"  autocomplete="off">
                    </div>

                    <div class="form-group col-md-4">
                    </div>
                </div>
                <div class="col-md-12 row">
                    <div class="form-group col-md-4" id="departurestartdate">
                        <label for="Departurestartdate">Departure Start Date</label>
                        <input type="text" name="departure_start_date" class="date_picker" placeholder="YYYY-MM-DD"
                            autocomplete="off">
                    </div>

                    <div class="form-group col-md-4" id="departureenddate">
                        <label for="Departureenddate">Departure End Date</label>
                        <input type="text" name="departure_end_date" class="date_picker" placeholder="YYYY-MM-DD"
                                autocomplete="off">

                    </div>

                <div class="form-group col-md-4">
                </div>
                </div>
         </div>     
            <button type="submit" id="travel_submit" class="travel_submit btn btn-primary">Publish</button>
         
    </div>
    </form>
</div>
   {{-- <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script> --}}
    <script src="https://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#multiselect').selectpicker();
    });
</script>
<script>
        $("input[name=departure_time]").clockpicker({       
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        default: 'now',
        donetext: "Select",
        init: function() { 
                console.log("colorpicker initiated");
            },
            beforeShow: function() {
                console.log("before show");
            },
            afterShow: function() {
                console.log("after show");
            },
            beforeHide: function() {
                console.log("before hide");
            },
            afterHide: function() {
                console.log("after hide");
            },
            beforeHourSelect: function() {
                console.log("before hour selected");
            },
            afterHourSelect: function() {
                console.log("after hour selected");
            },
            beforeDone: function() {
                console.log("before done");
            },
            afterDone: function() {
                console.log("after done");
            }
        });

</script>
<script>
        //Add Input Fields
        $(document).ready(function() {

            $("#add_new_travel_form").validate({

                rules: {
                    "traveller[0][first_name]":
                    {
                     required: true,
                    },
                    "traveller[0][last_name]":
                    {
                     required: true,
                    },
                    "traveller[0][age]":
                    {
                        required: true,
                    },
                    "traveller[0][gender]":
                    {
                        required: true,
                    },
                    departure_city:{
                        required: true, 
                    },
                    layover_city:{
                        required: true, 
                    },
                    arrival_city:{
                        required: true, 
                    },
                    airline_name:{
                        required: true, 
                    },
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

            var max_fields = 5; //Maximum allowed input fields
            var wrapper = $(".add"); //Input fields wrapper
            var add_button = $(".traveladdmore"); //Add button class or ID
            var x = 1; //Initial input field is set to 1

            //When user click on add input button
            $(add_button).click(function(e) {
                e.preventDefault();
                //Check maximum allowed input fields
                if (x < max_fields) {
                    x++; //input field increment
                    //add input field
                    $(wrapper).append('<div id="div" class="add col-md-12 row mt-5"><div class="col-md-12 row"><h5>Traveller details :-'+ x +'</h5></div><div class="form-group col-md-4">   <label for="ProfileImage">Profile Image</label><input type="file" name="traveller['+ x +'][profile_img]" class="form-control title"></div><div class="form-group col-md-4"><label for="FirstName">First Name</label><input type="text" name="traveller['+ x +'][first_name]" class="form-control title"placeholder="Enter First Name"  autocomplete="off"></div><div class="form-group col-md-4"><label for="LastName">Last Name</label><input type="text" name="traveller['+ x +'][last_name]" class="form-control title"placeholder="Enter Last Name" autocomplete="off"></div><div class="form-group col-md-4"><label for="Age">Age</label><input type="text" name="traveller['+ x +'][age]" class="form-control title" placeholder="Enter Age" autocomplete="off"></div><div class="form-group col-md-4"><label for="Gender">Gender</label><select name="traveller['+ x +'][gender]" class="form-control title"><option value="Male">Male</option><option value="Female">Female</option></select></div><div class="form-group col-md-4"><label for="Language_spoken">Language Spoken :</label><select class="selectpicker"="multiselect" multiple data-live-search="true" name="traveller['+ x +'][language_spoken]">{{$languages = DB::table('languages')->get();}}@foreach ($languages as $language)<option value="{{$language->name}}">{{$language->name}}</option>@endforeach</select></div><div class="form-group col-md-4"><label for="AnySpecialNeeds">Any Special Needs</label><input type="text" name="traveller['+ x +'][special_needs]" class="form-control title"placeholder="Enter Special Needs" autocomplete="off"></div><div class="form-group col-md-4"><label for="Relationshiptoyou">Relationship to you</label><input type="text" name="traveller['+ x +'][relationship]" class="form-control title"placeholder="Enter Relationship" autocomplete="off"></div><div class="form-group col-md-4"><a href="javascript:void(0);" class="remove_field">Remove</a></div></div>'
                        );
                }
            });

            //when user click on remove button
            $(wrapper).on('click', '.remove_field', function() {
                $(this).parents('#div').remove(); //remove inout field
                x--;
                //inout field decrement
            });

        });
        //----------date & time picker--------------//
        $(function() {
            $(".date_picker").datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });

        //------flexible time  on change---------//
            $('#departurestartdate').hide();
            $('#departureenddate').hide();
            $('#flexible_time').change(function (e) { 
            e.preventDefault();
            
            var selectedText = $(this).val();
            if (selectedText == "1") {
            $('#departuredate').hide();
            $('#departuretime').hide();
            $('#departurestartdate').show();
            $('#departureenddate').show();
            }else{
            $('#departuredate').show();
            $('#departuretime').show();
            $('#departurestartdate').hide();
            $('#departureenddate').hide();
         }
            
        });
  
    </script>
    {{-----------------------google map api ----------------}}
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyCu4gJ6U-kk3H6w_rN7r9wZFJytZdp23SQ&amp;callback=initMap" async="" defer=""></script>
    <script src="https://maps.googleapis.com/maps/api/geocode/json?address=india%c2+UK**&components=country:UK**&sensor=false"></script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -33.8688,
                    lng: 151.2195
                },
                zoom: 13
            });

            var maps = new google.maps.Map(document.getElementById('maps'), {
                center: {
                    lat: -33.8688,
                    lng: 151.2195
                },
                zoom: 13
            });
            
            var mapas = new google.maps.Map(document.getElementById('mapas'), {
                center: {
                    lat: -33.8688,
                    lng: 151.2195
                },
                zoom: 13
            });

            var input1 = document.getElementById('searchInputsa');
            var input2 = document.getElementById('searchInputs');
            var input3 = document.getElementById('searchInputss');

            var input = document.getElementById('searchTextField32');

            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input1, input);
            maps.controls[google.maps.ControlPosition.TOP_LEFT].push(input2, input);
            mapas.controls[google.maps.ControlPosition.TOP_LEFT].push(input3, input);
    
            var autocompletes = new google.maps.places.Autocomplete(input1, input);
            var autocomplete = new google.maps.places.Autocomplete(input2, input);
            var autocomplet = new google.maps.places.Autocomplete(input3, input);
            
            autocomplete.bindTo('bounds', map);
    
            {{-- autocomplete.setComponentRestrictions({
                'country': ['in']
            });
            autocompletes.setComponentRestrictions({
                'country': ['in']
            }); --}}
    
            var infowindow = new google.maps.InfoWindow();
            var marker = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29)
            });
    
            autocomplete.addListener('place_changed', function() {
                infowindow.close();
                marker.setVisible(false);
                var place = autocomplete.getPlace();
                document.getElementById('city2').value = place.name;
                document.getElementById('cityLat').value = place.geometry.location.lat();
                document.getElementById('cityLng').value = place.geometry.location.lng();
    
                document.getElementById('city3').value = place.name;
                document.getElementById('cityLat4').value = place.geometry.location.lat();
                document.getElementById('cityLng5').value = place.geometry.location.lng();
    
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }
    
                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }
                marker.setIcon(({
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(35, 35)
                }));
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);
    
                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }
    
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
                infowindow.open(map, marker);
    
                // Location details
                for (var i = 0; i < place.address_components.length; i++) {
                    if (place.address_components[i].types[0] == 'postal_code') {
                        document.getElementById('postal_code').innerHTML = place.address_components[i].long_name;
                    }
                    if (place.address_components[i].types[0] == 'country') {
                        document.getElementById('country').innerHTML = place.address_components[i].long_name;
                    }
                }
                document.getElementById('location').innerHTML = place.formatted_address;
                document.getElementById('lat').innerHTML = place.geometry.location.lat();
                document.getElementById('lon').innerHTML = place.geometry.location.lng();
            });
        }

       
    </script> 
@endsection
