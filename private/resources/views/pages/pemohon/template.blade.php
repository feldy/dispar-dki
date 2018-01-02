<!DOCTYPE html>
<?php
/**
 * Created by PhpStorm.
 * User: rio
 * Date: 01/10/2017
 * Time: 01:29
 */
?>
<html lang="{{ config('app.locale') }}">
<head>
    @include("templates.default_head")
</head>
<body class="hold-transition skin-blue layout-top-nav">
<!-- Site wrapper -->
<div class="wrapper">
    <header class="main-header">
        <nav class="navbar navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="{{ route("index") }}" class="navbar-brand"><b>SI</b>-Perizinan</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                        <!-- User Account Menu -->
                        <li class="dropdown us=r user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->

                                <img  src="{{asset('resources/uploads/photo-profile/pemohon.jpg')}}" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">PT DSAS</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img  src="{{asset('resources/uploads/photo-profile/pemohon.jpg')}}" class="img-circle" alt="User Image">
                                    <p>
                                        PT DSAS - Event Organizer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    @include("templates.default_footer")
</div><!-- ./wrapper -->
@include("templates.default_load_javascript")
@include("templates.default_modal_image_preview")
</body>
</html>