@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nama_pegawai') ? ' has-error' : '' }}">
                            <label for="nama_pegawai" class="col-md-4 control-label">Nama Pegawai</label>

                            <div class="col-md-6">
                                <input id="nama_pegawai" type="text" class="form-control" name="nama_pegawai" value="{{ old('nama_pegawai') }}" required autofocus>

                                @if ($errors->has('nama_pegawai'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_pegawai') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nrk') ? ' has-error' : '' }}">
                            <label for="nrk" class="col-md-4 control-label">NRK</label>

                            <div class="col-md-6">
                                <input id="nrk" class="form-control" name="nrk" value="{{ old('nrk') }}" required>

                                @if ($errors->has('nrk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nrk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
