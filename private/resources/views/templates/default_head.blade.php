<?php
/**
 * Created by PhpStorm.
 * User: rio
 * Date: 01/10/2017
 * Time: 01:28
 */
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sistem Informasi Kepegawaian</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
<!-- Font Awesome -->
{{--<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/font-awesome.min.css') }}">--}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"> --}}
<link rel="stylesheet" href="{{ asset('assets/font-awesome/style/font-awesome.min.css') }}">
<!-- Ionicons -->
{{--<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/ionicons.min.css') }}">--}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> --}}

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/admin.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/_all-skins.min.css') }}">
{{--Marquee--}}
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/marquee.css') }}">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{ asset('assets/bootstrap/plugins/datepicker/datepicker3.css') }}">
{{--file-input-custom.js--}}
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/file-input-custom.css') }}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

{{--Custom--}}
@yield('css')