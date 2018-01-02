<?php
/**
 * Created by PhpStorm.
 * User: rio
 * Date: 01/10/2017
 * Time: 01:27
 */
?>
<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SI</b>K</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SI</b> KEPEGAWAIAN</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu navbar-left">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <span class="hidden-xs">
                        <div class="marquee" style="height: 50px;">
                            <p>PEMBERITAHUAN 1: Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            <p>PEMBERITAHUAN 2: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                        </div>
                    </span>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        Ahlan wa sahlan
    <?php
       /* $pp_url = "media/images/photo-profile/photo_profile.png";
        $jabatan = null; $nama = null;
        $pegawai = auth()->user()->pegawai();
        if ($pegawai) {
            $jabatan = $pegawai->nama_jabatan;
            $nama = strtoupper($pegawai->nama_pegawai);

            //checking photo profile
            $image_profile_pic_url = 'resources/uploads/photo-profile/'.$pegawai->id.".jpg";
            $file = file_exists($image_profile_pic_url);
            if ($file) {
                $pp_url = $image_profile_pic_url;
            }
        }*/
    ?>
        {{--<!-- Sidebar user panel -->--}}
        {{--<div class="user-panel">--}}
            {{--<div class="pull-left image">--}}
                {{--<img src="{{ asset('media/images/photo-profile/photo_profile.png') }}" class="img-circle" alt="User Image">--}}
                {{--<img src="{{ asset($pp_url) }}"  class="img-circle" alt="User Image">--}}
            {{--</div>--}}
            {{--<div class="pull-left info">--}}
                {{--<p>{{ ($nama)?$nama:(strtoupper(auth()->user()->nama_pegawai)) }}</p>--}}
                {{--<small>{{ ($jabatan)?$jabatan:""  }}</small>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- sidebar menu: : style can be found in sidebar.less -->--}}
        {{--<ul class="sidebar-menu">--}}
            {{--<li class="header">MAIN NAVIGATION</li>--}}
            {{--@if(\Illuminate\Support\Facades\Auth::user()->role == "USER")--}}
                {{--<li class="treeview active">--}}
                    {{--<a href="#">--}}
                        {{--<i class="fa fa-user"></i> <span>Informasi Data Pegawai</span>--}}
                        {{--<span class="pull-right-container">--}}
                      {{--<i class="fa fa-angle-left pull-right"></i>--}}
                    {{--</span>--}}
                    {{--</a>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--<li class="active">--}}
                            {{--<a href=""><i class="fa fa-circle-o"></i>--}}
                                {{--Data Pegawai--}}
                                {{--<span class="pull-right-container">--}}
                              {{--<i class="fa fa-angle-left pull-right"></i>--}}
                            {{--</span>--}}
                            {{--</a>--}}
                            {{--<ul class="treeview-menu"><li><a href="{{ route("user.informasi.profilpribadi") }}"><i class="fa fa-circle-o"></i> Profil Pribadi</a></li></ul>--}}
                            {{--<ul class="treeview-menu"><li><a href="{{ route("user.informasi.profilkeluarga") }}"><i class="fa fa-circle-o"></i> Data Keluarga</a></li></ul>--}}
                            {{--<ul class="treeview-menu"><li><a href="{{ route("user.informasi.profilpegawai") }}"><i class="fa fa-circle-o"></i> Profil Pegawai</a></li></ul>--}}
                            {{--<ul class="treeview-menu"><li><a href="{{ route("user.informasi.profilpendidikan") }}"><i class="fa fa-circle-o"></i> Pendidikan</a></li></ul>--}}
                            {{--<ul class="treeview-menu"><li><a href="{{ route("user.informasi.riwayatjabatan") }}"><i class="fa fa-circle-o"></i> Riwayat Jabatan</a></li></ul>--}}
                            {{--<ul class="treeview-menu"><li><a href="{{ route("user.informasi.riwayatpangkat") }}"><i class="fa fa-circle-o"></i> Riwayat Pangkat</a></li></ul>--}}
                            {{--<ul class="treeview-menu"><li><a href="{{ route("user.informasi.riwayatpendidikandanpelatihan") }}"><i class="fa fa-circle-o"></i> Riwayat Pendidikan <br> &emsp;&nbsp;&nbsp; dan Pelatihan</a></li></ul>--}}
                            {{--<ul class="treeview-menu"><li><a href="{{ route("user.informasi.riwayatpenghargaan") }}"><i class="fa fa-circle-o"></i> Riwayat Penghargaan</a></li></ul>--}}
                            {{--<ul class="treeview-menu"><li><a href="{{ route("user.informasi.riwayatskpdandp3") }}"><i class="fa fa-circle-o"></i> Riwayat SKP dan DP3</a></li></ul>--}}
                            {{--<ul class="treeview-menu"><li><a href="{{ route("user.informasi.hukumandisiplin") }}"><i class="fa fa-circle-o"></i> Hukuman Disiplin</a></li></ul>--}}

                        {{--</li>--}}
                        {{--<li><a href="{{ route("user.informasi.usulankepegawaian") }}"><i class="fa fa-circle-o"></i> Usulan Kepegawaian</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--@elseif(\Illuminate\Support\Facades\Auth::user()->role == "ADMIN")--}}
                {{--<li class="treeview active">--}}
                    {{--<a href="#">--}}
                        {{--<i class="fa fa-user-secret"></i> <span>Administrator</span>--}}
                        {{--<span class="pull-right-container">--}}
                      {{--<i class="fa fa-angle-left pull-right"></i>--}}
                    {{--</span>--}}
                    {{--</a>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--<li><a href="{{ route("admin.inputdatawalpegawai") }}"><i class="fa fa-circle-o"></i>Input Data Awal Pegawai</a></li>--}}
                    {{--</ul>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--<li><a href="{{ route("admin.profilpegawai") }}"><i class="fa fa-circle-o"></i>Profil Pegawai</a></li>--}}
                    {{--</ul>--}}
                    {{--<ul class="treeview-menu">--}}
                        {{--<li><a href="{{ route("admin.duk") }}"><i class="fa fa-circle-o"></i>DUK</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--@endif--}}
            {{--<li class="treeview active">--}}
                {{--<a>--}}
                {{--<a href="{{ route('logout') }}">--}}
                    {{--<form action="{{ route('logout') }}" method="post">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<button type="submit" class="btn btn-block btn-danger"><i class="fa fa-sign-out"></i> Logout</button>--}}
                    {{--</form>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @yield('content')
</div>
<!-- /.content-wrapper -->