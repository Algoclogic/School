@extends('layouts.landingMaster')

@section('title')
    Registration
@endsection

@section('content')
<div class="color-line"></div>
<div class="back-link">
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
</div>
<div class="container animate-panel">

    <div class="row">
        <div class="col-lg-12">
            <div class="hpanel hgreen">
                <!-- <div class="panel-heading">
                    <div class="text-center m-b-md">
                	<h3>School Registration</h3>
                	<small>Full suported AngularJS WebApp/Admin template with very clean and aesthetic style prepared for your next app. </small>
            	</div>
                </div> -->
                <div class="panel-body">

                    <form name="simpleForm" novalidate id="simpleForm" action="#" method="post">

                        <div class="text-center m-b-md" id="wizardControl">

                            <a class="btn btn-primary" href="#step1" data-toggle="tab">{{ trans('schoolLang.step_1') }}</a>
                            <a class="btn btn-default" href="#step2" data-toggle="tab">{{ trans('schoolLang.step_2') }}</a>
                            <a class="btn btn-default" href="#step3" data-toggle="tab">{{ trans('schoolLang.step_3') }}</a>
                            <a class="btn btn-default" href="#step4" data-toggle="tab">{{ trans('schoolLang.step_4') }}</a>
                        </div>

                        <div class="tab-content">
	                        @include('school.steps.step1')

	                        @include('school.steps.step2')

	                        @include('school.steps.step3')
	                        
	                        @include('school.steps.step4')

	                        

	                        

	                        
                    </form>

                    <div class="m-t-md">

                        <p>
                            This is an example of a wizard form which can be easy adjusted. Since each step is a tab, and each clik to next tab is a function you can easily add validation or any other functionality.
                        </p>

                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <strong>{{config('app.name')}}</strong> - {{ trans('schoolLang.school_name') }} <br/> {{Carbon\Carbon::now('Y')}} 
        </div>
    </div>

</div>

@endsection

@push('scripts')
<script>

    $(".selectize").select2();

    $(function(){

        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            $('a[data-toggle="tab"]').removeClass('btn-primary');
            $('a[data-toggle="tab"]').addClass('btn-default');
            $(this).removeClass('btn-default');
            $(this).addClass('btn-primary');
        })

        $('.next').click(function(){
            var nextId = $(this).parents('.tab-pane').next().attr("id");
            $('a[href="#'+nextId+'"]').tab('show');
        })

        $('.prev').click(function(){
            var prevId = $(this).parents('.tab-pane').prev().attr("id");
            $('a[href="#'+prevId+'"]').tab('show');
        })

        $('.submitWizard').click(function(){

            var approve = $(".approveCheck").is(':checked');
            if(approve) {
                // Got to step 1
                $('[href="#step1"]').tab('show');

                // Serialize data to post method
                var datastring = $("#simpleForm").serialize();

                // Show notification
                // swal({
                //     title: "Thank you!",
                //     text: "You approved our example form!",
                //     type: "success"
                // });
            	toastr.info('Info - This is a custom Homer info notification');
//            Example code for post form
//            $.ajax({
//                type: "POST",
//                url: "your_link.php",
//                data: datastring,
//                success: function(data) {
//                    // Notification
//                }
//            });
            } else {
            	toastr.error('Error - This is a Homer error notification');

                // Show notification
                // swal({
                //     title: "Error!",
                //     text: "You have to approve form checkbox.",
                //     type: "error"
                // });
            }
        });
    });
    toastr.options = {
	  "closeButton": true,
	  "debug": false,
	  "newestOnTop": false,
	  "progressBar": false,
	  "positionClass": "toast-top-center",
	  "preventDuplicates": false,
	  "onclick": null,
	  "showDuration": "300",
	  "hideDuration": "1000",
	  "timeOut": "5000",
	  "extendedTimeOut": "1000",
	  "showEasing": "swing",
	  "hideEasing": "linear",
	  "showMethod": "fadeIn",
	  "hideMethod": "fadeOut"
	} 
</script>
@endpush