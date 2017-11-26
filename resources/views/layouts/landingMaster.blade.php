<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{ asset('template/vendor/fontawesome/css/font-awesome.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('template/vendor/metisMenu/dist/metisMenu.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('template/vendor/animate.css/animate.css') }}"  type="text/css"/>
        <link rel="stylesheet" href="{{ asset('template/vendor/bootstrap/dist/css/bootstrap.css') }}" type="text/css" />

        <!-- App styles -->
        <link rel="stylesheet" href="{{ asset('template/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}" />
        <link rel="stylesheet" href="{{ asset('template/fonts/pe-icon-7-stroke/css/helper.css') }}" />
        <link rel="stylesheet" href="{{ asset('template/styles/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/elastic.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />

        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('/css/custom.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('template/vendor/select2-3.5.2/select2.css') }}" />
        <link rel="stylesheet" href="{{ asset('template/vendor/select2-bootstrap/select2-bootstrap.css') }}" />


    </head>
<body class="landing-page">

    @yield('content')

</body>
<script src="{{ asset('/js/custom.js') }}"></script>
<script src="{{ asset('/template/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/template/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('/template/vendor/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('/template/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/template/vendor/jquery-flot/jquery.flot.js') }}"></script>
<script src="{{ asset('/template/vendor/jquery-flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('/template/vendor/jquery-flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('/template/vendor/flot.curvedlines/curvedLines.js') }}"></script>
<script src="{{ asset('/template/vendor/jquery.flot.spline/index.js') }}"></script>
<script src="{{ asset('/template/vendor/metisMenu/dist/metisMenu.min.js') }}"></script>
<script src="{{ asset('/template/vendor/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('/template/vendor/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('/template/vendor/sparkline/index.js') }}"></script>

<!-- App scripts -->
<script src="{{ asset('template/scripts/homer.js') }}"></script>
<script src="{{ asset('template/scripts/charts.js') }}"></script>
<script src="{{ asset('js/jquery.elastic.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/template/vendor/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('/template/vendor/select2-3.5.2/select2.min.js') }}"></script>

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
<!-- It can be also directive -->
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