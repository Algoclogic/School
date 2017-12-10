<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

        <!-- Include css files -->
        @include('links.css')

    </head>
<body class="landing-page" style="background-color: #f1f3f6">

    @yield('content')

</body>

<!-- include js file -->
@include('links.js')

@stack('scripts')


<script type="text/javascript">
    $(".js-divisions").select2();
        $(document).ready(function () {

            $('#ei-slider').eislideshow({
                easing : 'easeOutExpo',
                titleeasing : 'easeOutExpo',
                titlespeed : 1200,
                thumbMaxWidth : 120
            });

        });

</script>


<!-- App scripts -->
<script>
    $(document).ready(function () {

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
        });

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

    });
</script>

<script type="text/javascript">
$(function(){
    $("#form_2").validate({
            rules: {
                email: {
                    required: true,
                    //minlength: 3
                },
                password: {
                    required: true,
                    minlength: 5
                }

                // url: {
                //     required: true,
                //     url: true
                // },
                // number: {
                //     required: true,
                //     number: true
                // },
                // last_name: {
                //     required: true,
                //     minlength: 6
                // }
            },
            messages: {
                email: {
                    required: "Email required",
                },
                password: {
                    required: "Password required",
                    minlength: "Password is less than 5 characters"
                }
            },
            submitHandler: function(form) {
                form.submit();
            },
            errorPlacement: function(error, element) {
                $( element )
                        .closest( "form" )
                        .find( "label[for='" + element.attr( "id" ) + "']" )
                        .append( error );
            },
            errorElement: "span",
        });

    $("#form_29").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    url: true
                },
                number: {
                    required: true,
                    number: true
                },
                max: {
                    required: true,
                    maxlength: 4
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
});

</script>


</html>   