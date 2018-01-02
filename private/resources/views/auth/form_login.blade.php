<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include("templates.default_head")
</head>
<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="#"><b>SI</b>-PERIZINAN</a>
        </div>
        <!-- User name -->

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image" style="top: -11px;">
                {{ HTML::image(asset('media/images/default/logo_new.png'), 'image', array('style' => 'width: 80px; height: 80px')) }}
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <form class="lockscreen-credentials" method="POST" action="{{ route('proseslogin') }}">
                {{ csrf_field() }}
                <div class="input-group">
                    <input id="userName" placeholder="User Name" class="form-control" name="userName" value="{{ old('userName') }}" required autofocus>
                    <input id="userPass" placeholder="Password" type="password" class="form-control" name="userPass" required>

                    <div class="input-group-btn">
                        <button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
                    </div>
                </div>
            </form>
            <!-- /.lockscreen credentials -->
        </div>
        <div class="help-block text-center">
            @if ($errors->has('nomor_pegawai'))
                <span class="help-block">
                        <strong>{{ $errors->first('nomor_pegawai') }}</strong>
                    </span>
            @endif
            @if ($errors->has('password'))
                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
            @endif
        </div>
        <div class="lockscreen-footer text-center">
            <strong>Sistem Informasi Perizinan</strong>
            <br>&copy; Copyright 2017 <a class="text-black" href="http://jakarta-tourism.go.id">Jakarta Tourism & Culture Office</a>
            <br>All rights reserved
        </div>
    </div>
    <!-- /.center -->
    @include("templates.default_load_javascript")
    </body>
</html>