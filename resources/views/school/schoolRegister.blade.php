@extends('layouts.landingMaster')

@section('title')
    Registration
@endsection

@section('content')

<div class="color-line"></div>
<div class="back-link">
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
</div>
<div class="register-container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h3>School Registration</h3>
                <small>Full suported AngularJS WebApp/Admin template with very clean and aesthetic style prepared for your next app. </small>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                        <form action="#" id="loginForm">
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label>School Name</label>
                                <input type="" value="" id="" class="form-control" name="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>UDISE_CODE</label>
                                <input type="text" value="" id="" class="form-control" name="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>DDO_CODE</label>
                                <input type="text" value="" id="" class="form-control" name="">
                            </div>
                            
                            <div class="form-group col-lg-6">
                                <label>DDO_GEG. NUMBER</label>
                                <input type="" value="" id="" class="form-control" name="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>PIN CODE</label>
                                <input type="" value="" id="" class="form-control" name="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address (<small>official</small>)</label>
                                <input type="" value="" id="" class="form-control" name="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>TELEPHONE NUMBER (<small>official</small>)</label>
                                <input type="" value="" id="" class="form-control" name="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>DIVISION</label>
                                <select id="select-district" class="form-control js-divisions" name="" onChange="getdistricts(this);">
                                    @foreach($divisions as $key => $division)
                                        <option value="{{ $key}}" >{{ strtoupper($division)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>DIVISION</label>
                                <select id="districts" class="form-control js-divisions" name="" onChange="getZones(this);">
                                    
                                </select>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>SCHOOL FULL ADDRESS </label>
                                <input type="" value="" id="" class="form-control" name="">
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success">Register</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <strong>{{config('app.name')}}</strong> - AngularJS Responsive WebApp <br/> {{Carbon\Carbon::now('Y')}} Copyright Company Name
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script type="text/javascript">
    //  Trigger change event on page load
    $(document).ready(function(){
        $('#select-district').trigger('change');

    });

    // function getdistricts(ds){
    //     var key=$(ds).val();
    //     alert(key);
    //         $.ajax({
    //             type: "POST",
    //             data: { _token: $('meta[name="csrf-token"]').attr('content') },
    //             url : "{{ route('districts') }}/"+key,
               
    //             success : function(data){
    //                 alert('success');
    //             }
    //             //});
    //         });
    // }                    
   // var key=$(ds).val();
   // var APP_URL = $('meta[name="_base_url"]').attr('content');
   // alert(APP_URL)
    // $.ajax({
    //     type: "POST",
    //     data: { _token: $('meta[name="csrf-token"]').attr('content')},
    //     //url: APP_URL + '/get/districts',
    //     url: "{{ route('districts')}}/"+key,
    //     success : function(data){
    //         console.log(data);
    //         // $('#districts').empty();
    //         // $('<option value="">Select Area</option>').appendTo('#location');
    //         //  $.each(data, function (key,value) {
    //         //     console.log(key,value);
    //         //     $('<option value="'+key+'"> '+ value+' </option>').appendTo('#location');
                
    //         // });

    //     }          
    // });
// }
    
</script>
@endpush