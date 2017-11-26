@extends('layouts.landingMaster')

@section('title')
    dashboard
@endsection

@section('content')

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ route('dashboard')}}" class="navbar-brand">{{ trans('landingPage.app_name') }}</a>
            <div class="brand-desc">
                {{ trans('landingPage.logo_desc')}}
            </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse pull-right">

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a class="page-scroll" href="#slider">Home</a></li>
                <li><a class="page-scroll" page-scroll href="#components">Tab 1</a></li>
                <li><a class="page-scroll" page-scroll href="#features">Tab 2</a></li>
                <li><a class="page-scroll" page-scroll href="#team">Tab 3</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                        <i class="pe-7s-keypad"></i>
                    </a>

                    <div class="dropdown-menu hdropdown bigmenu animated flipInX three-hpx">

                        <form role="form" id="form_2">
                            <div class="input-group m-b">
                                <span class="input-group-addon"><i class="fa pe-7s-user"></i></span> <input type="text" placeholder="username" class="form-control" name="email" value="" required id="email">
                            </div>
                            <label for="email"></label>
                            <div class="input-group m-b">
                                <span class="input-group-addon"><i class="fa pe-7s-lock"></i></span> <input type="password" placeholder="password" class="form-control" name="password" value="" required id="password">
                            </div>
                            <label for="password"></label>
                            <!-- <div class="form-group"><label>Email</label> <input type="email" id="email" placeholder="Enter email" class="form-control" name="email" value="" equired><label for="email"></div>
                            <div class="form-group"><label>Password</label> <input type="password" id="password" placeholder="Password" class="form-control" name="password" value="" required><label for="password"></div> -->
                            <!-- <div class="input-group m-b"> -->
                            <!-- <div>     -->
                                <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Submit</strong></button>
                            <!-- </div>     -->
                            <!-- </div> -->
                            <div class="margin-tenpx-top">
                                <div><label><a href="{{ route('student.register') }}"> Register as student</a></label></div>
                                <br/>
                                <div><label><a href="{{ route('school.register') }}"> Register as School</a></label></div>
                            </div>
                        </form>    
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
         <!-- includ main image slider -->
        @include('landing.imageSlider')

<!--  <section>
    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <h4>HTML5 & CSS3</h4>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link btn btn-sm" href="#" role="button">Learn more</a></p>
        </div>
        <div class="col-md-4">
            <h4>Staggering Animations</h4>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of.</p>
            <p><a class="navy-link btn btn-sm" href="#" role="button">Learn more</a></p>
        </div>
        <div class="col-md-4">
            <h4>Unique Dashboard</h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
            <p><a class="navy-link btn btn-sm" href="#" role="button">Learn more</a></p>
        </div>
    </div>
    </div>
</section> -->
<style type="text/css">
    .bg-light .nopadding .row{
        margin-right: 10px;
        margin-left: 10px;
    }
</style>
<section id="components" class="bg-light">
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <div class="col-lg-3 nopadding">
                <div class="row">
                    <div class="hpanel">
                        <div class="panel-heading hbuilt">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            </div>
                            Notifications
                        </div>
                        <div class="panel-body">
                            <p>Lorem Ipsum available, but the majority have suffered alteration euismod. </p>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="col-lg-6 nopadding">
                <div class="row">
                    <div class="hpanel">
                        <div class="panel-heading hbuilt">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            </div>
                            Notifications and Announcements
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Collapsible Group Item #1
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <ul class="nav">
                                                <li><a href="javascript:;" >Collapsible Group Item #1</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #2</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #3</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #4</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #5</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #6</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #7</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #8</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #9</a></li>
                                                <li><a hrefjavascript:;="" >Collapsible Group Item #10</a></li>
                                                <br>
                                                <li><a href="javascript:;" >View All Notifications</a></li>
                                            </ul>    
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Collapsible Group Item #2
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <ul class="nav">
                                                <li><a href="javascript:;" >Collapsible Group Item #1</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #2</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #3</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #4</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #5</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #6</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #7</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #8</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #9</a></li>
                                                <li><a hrefjavascript:;="" >Collapsible Group Item #10</a></li>
                                                <br>
                                                <li><a href="javascript:;" >View All Notifications</a></li>
                                            </ul>    
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Collapsible Group Item #3
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <ul class="nav">
                                                <li><a href="javascript:;" >Collapsible Group Item #1</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #2</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #3</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #4</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #5</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #6</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #7</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #8</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #9</a></li>
                                                <li><a hrefjavascript:;="" >Collapsible Group Item #10</a></li>
                                                <br>
                                                <li><a href="javascript:;" >View All Notifications</a></li>
                                            </ul>    
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Collapsible Group Item #4
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <ul class="nav">
                                                <li><a href="javascript:;" >Collapsible Group Item #1</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #2</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #3</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #4</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #5</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #6</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #7</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #8</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #9</a></li>
                                                <li><a hrefjavascript:;="" >Collapsible Group Item #10</a></li>
                                                <br>
                                                <li><a href="javascript:;" >View All Notifications</a></li>
                                            </ul>    
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Collapsible Group Item #5
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <ul class="nav">
                                                <li><a href="javascript:;" >Collapsible Group Item #1</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #2</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #3</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #4</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #5</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #6</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #7</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #8</a></li>
                                                <li><a href="javascript:;" >Collapsible Group Item #9</a></li>
                                                <li><a hrefjavascript:;="" >Collapsible Group Item #10</a></li>
                                                <br>
                                                <li><a href="javascript:;" >View All Notifications</a></li>
                                            </ul>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-lg-3 nopadding">
                <div class="row">
                    <div class="hpanel">
                        <div class="panel-heading hbuilt">
                            <div class="panel-tools">
                                <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            </div>
                            Notifications
                        </div>
                        <div class="panel-body">
                            <p>Lorem Ipsum available, but the majority have suffered alteration euismod. </p>
                        </div>
                    </div>
                </div>
            </div>    
        </div>    
    </section>
</div>

<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2><span class="text-success">Many features to </span>discover with Homer</h2>
                <p>
                    Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes.
                </p>
            </div>
        </div>
        <div class="row m-t-lg">
            <div class="col-md-4 col-md-offset-2">
                <strong>Donec sed odio dui.</strong>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
                <a class="btn btn-success btn-sm">Learn more</a>
            </div>
            <div class="col-md-4">
                <strong>Lorem Ipsum as their.</strong>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
                <a class="btn btn-success btn-sm">Learn more</a>
            </div>
        </div>
        <div class="row m-t-lg">
            <div class="col-md-4 col-md-offset-2">
                <strong>Donec sed odio dui.</strong>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
                <a class="btn btn-success btn-sm">Learn more</a>
            </div>
            <div class="col-md-4">
                <strong>Lorem Ipsum as their.</strong>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
                <a class="btn btn-success btn-sm">Learn more</a>
            </div>
        </div>
    </div>
</section>

<section id="features2" class="bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2><span class="text-success">Special icons </span>for your app</h2>
                <p>Lorem Ipsum available, but the majority have suffered alteration euismod. </p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
                <h4 class="m-t-lg"><i class="pe-7s-airplay text-success icon-big"></i></h4>
                <strong>Lorem Ipsum available</strong>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
            <div class="col-md-3">
                <h4 class="m-t-lg"><i class="pe-7s-science text-success icon-big"></i></h4>
                <strong>Lorem Ipsum available</strong>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
            <div class="col-md-3">
                <h4 class="m-t-lg"><i class="pe-7s-display1 text-success icon-big"></i></h4>
                <strong>Lorem Ipsum available</strong>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
            <div class="col-md-3">
                <h4 class="m-t-lg"><i class="pe-7s-cloud-upload text-success icon-big"></i></h4>
                <strong>Lorem Ipsum available</strong>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
                <h4 class="m-t-lg"><i class="pe-7s-global text-success icon-big"></i></h4>
                <strong>Lorem Ipsum available</strong>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
            <div class="col-md-3">
                <h4 class="m-t-lg"><i class="pe-7s-battery text-success icon-big"></i></h4>
                <strong>Lorem Ipsum available</strong>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
            <div class="col-md-3">
                <h4 class="m-t-lg"><i class="pe-7s-users text-success icon-big"></i></h4>
                <strong>Lorem Ipsum available</strong>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
            <div class="col-md-3">
                <h4 class="m-t-lg"><i class="pe-7s-ticket text-success icon-big"></i></h4>
                <strong>Lorem Ipsum available</strong>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
            </div>
        </div>
    </div>
</section>

<section id="team">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <h2><span class="text-success">Our team </span>support you</h2>
                <p>
                    Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes.
                </p>
            </div>
        </div>

        <div class="row m-t-lg text-center">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="images/a2.jpg" class="img-circle img-small" alt="">
                    <h4><span>User</span> name</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus. </p>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="images/a5.jpg" class="img-circle" alt="">
                    <h4><span>User</span> name</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="images/a3.jpg" class="img-circle img-small" alt="">
                    <h4><span>User</span> name</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>

                </div>
            </div>
        </div>
        <div class="row m-t-lg text-center">
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="images/a7.jpg" class="img-circle img-small" alt="">
                    <h4><span>User</span> name</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus. </p>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="images/a8.jpg" class="img-circle" alt="">
                    <h4><span>User</span> name</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                    <img src="images/a9.jpg" class="img-circle img-small" alt="">
                    <h4><span>User</span> name</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>

                </div>
            </div>
        </div>

    </div>
</section>


<section id="pricing" class="bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2><span class="text-success">Best pricing </span>for your app</h2>
                <p>Lorem Ipsum available, but the majority have suffered alteration euismod. </p>
            </div>
        </div>

        <div class="row m-t-lg">
            <div class="col-lg-3">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Basic
                    </li>
                    <li class="pricing-desc">
                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                    </li>
                    <li class="pricing-price">
                        <span>$16</span>
                    </li>
                    <li>
                        Dashboards
                    </li>
                    <li>
                        Projects view
                    </li>
                    <li>
                        Contacts
                    </li>
                    <li>
                        Calendar
                    </li>
                    <li>
                        AngularJs
                    </li>
                    <li>
                        <a class="btn btn-primary btn-sm" href="#">Signup today</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3">
                <ul class="pricing-plan list-unstyled selected">
                    <li class="pricing-title">
                        Standard
                    </li>
                    <li class="pricing-desc">
                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                    </li>
                    <li class="pricing-price">
                        <span>$22</span>
                    </li>
                    <li>
                        Dashboards
                    </li>
                    <li>
                        Projects view
                    </li>
                    <li>
                        Contacts
                    </li>
                    <li>
                        Calendar
                    </li>
                    <li>
                        AngularJs
                    </li>
                    <li class="plan-action">
                        <a class="btn btn-primary btn-sm" href="#">Signup today</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Premium
                    </li>
                    <li class="pricing-desc">
                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                    </li>
                    <li class="pricing-price">
                        <span>$160</span>
                    </li>
                    <li>
                        Dashboards
                    </li>
                    <li>
                        Projects view
                    </li>
                    <li>
                        Contacts
                    </li>
                    <li>
                        Calendar
                    </li>
                    <li>
                        AngularJs
                    </li>
                    <li>
                        <a class="btn btn-primary btn-sm" href="#">Signup today</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3">
                <ul class="pricing-plan list-unstyled">
                    <li class="pricing-title">
                        Prestige
                    </li>
                    <li class="pricing-desc">
                        Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.
                    </li>
                    <li class="pricing-price">
                        <span>$260</span>
                    </li>
                    <li>
                        Dashboards
                    </li>
                    <li>
                        Projects view
                    </li>
                    <li>
                        Contacts
                    </li>
                    <li>
                        Calendar
                    </li>
                    <li>
                        AngularJs
                    </li>
                    <li>
                        <a class="btn btn-primary btn-sm" href="#">Signup today</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>
<section id="clients">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <h2><span class="text-success">Our best</span> clients</h2>
                <p>
                    Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes.
                </p>
            </div>
        </div>

        <div class="row text-center m-t-lg">
            <div class="col-md-6 col-md-offset-3">

                <div class="row">

                    <div class="col-md-6">
                        <div class="client">Company logo</div>
                    </div>
                    <div class="col-md-6">
                        <div class="client">Company logo</div>
                    </div>
                    <div class="col-md-6">
                        <div class="client">Company logo</div>
                    </div>
                    <div class="col-md-6">
                        <div class="client">Company logo</div>
                    </div>
                    <div class="col-md-6">
                        <div class="client">Company logo</div>
                    </div>
                    <div class="col-md-6">
                        <div class="client">Company logo</div>
                    </div>

                </div>


            </div>

        </div>


    </div>
</section>
<section id="contact" class="bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3">
                <h2><span class="text-success">Contact with us</span> anytime</h2>
                <p>
                    Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes.
                </p>
            </div>
        </div>

        <div class="row text-center m-t-lg">
            <div class="col-md-4 col-md-offset-3">

                <form class="form-horizontal" role="form" method="post" action="#">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="user@example.com" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Message</label>

                        <div class="col-sm-10">
                            <textarea class="form-control" rows="3" name="message"  placeholder="Your message here..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input id="submit" name="submit" type="submit" value="Send us a message" class="btn btn-success">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-3 text-left">
                <address>
                    <strong><span class="navy">Company name, Inc.</span></strong><br/>
                    601 Street name, 123<br/>
                    New York, De 34101<br/>
                    <abbr title="Phone">P:</abbr> (123) 678-8674
                </address>
                <p class="text-color">
                    Consectetur adipisicing elit. Aut eaque, totam corporis laboriosam veritatis quis ad perspiciatis, totam corporis laboriosam veritatis, consectetur adipisicing elit quos non quis ad perspiciatis, totam corporis ea,
                </p>
            </div>
        </div>


    </div>
</section>


@endsection
