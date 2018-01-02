<?php
/**
 * Created by PhpStorm.
 * User: rio
 * Date: 01/10/2017
 * Time: 02:22
 */
?>
@extends('pages.template')
@section('content')
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3>&nbsp;</h3>
            <ol class="breadcrumb">
                <li><a href="{{ route('pemohon') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Acara</li>
            </ol>
        </section>
        <!-- /.Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="col-12">
                <h3 class="box-title">Daftar Acara

                    <div class="pull-right">
                        <div class="input-group input-group-sm" style="width: 300px;">
                            <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </h3>
            </div>
            <div class="box box-primary">
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody><tr>
                                <th>ID</th>
                                <th>Event</th>
                                <th>&nbsp;</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <dt>Acara Maulid Nabi</dt>
                                    <cite  >Monas, 19 Desember 2017, Pukul 06.00 Sampai Selesai, MUI, GNPF-MUI, Ormas Islam se-Indonesia</cite>
                                </td>
                                <td class="text-middle"><a class="btn btn-primary btn-xs" title="View" href="{{ route("pemeriksa-periksa") }}"><i class="fa fa-eye"></i>&nbsp;Periksa</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <dt>Acara Maulid Nabi</dt>
                                    <dd>Monas, 19 Desember 2017, Pukul 06.00 Sampai Selesai, MUI, GNPF-MUI, Ormas Islam se-Indonesia</dd>
                                </td>
                                <td class="text-middle"><a class="btn btn-primary btn-xs" title="View" href="{{ route('pemeriksa-periksa') }}"><i class="fa fa-eye"></i>&nbsp;Periksa</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <dt>Acara Maulid Nabi</dt>
                                    <dd>Monas, 19 Desember 2017, Pukul 06.00 Sampai Selesai, MUI, GNPF-MUI, Ormas Islam se-Indonesia</dd>
                                </td>
                                <td class="text-middle"><a class="btn btn-primary btn-xs" title="View" href="{{ route('pemeriksa-periksa') }}"><i class="fa fa-eye"></i>&nbsp;Periksa</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <dt>Acara Maulid Nabi</dt>
                                    <dd>Monas, 19 Desember 2017, Pukul 06.00 Sampai Selesai, MUI, GNPF-MUI, Ormas Islam se-Indonesia</dd>
                                </td>
                                <td class="text-middle"><a class="btn btn-primary btn-xs" title="View" href="{{ route('pemeriksa-periksa') }}"><i class="fa fa-eye"></i>&nbsp;Periksa</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <dt>Acara Maulid Nabi</dt>
                                    <dd>Monas, 19 Desember 2017, Pukul 06.00 Sampai Selesai, MUI, GNPF-MUI, Ormas Islam se-Indonesia</dd>
                                </td>
                                <td class="text-middle"><a class="btn btn-primary btn-xs" title="View" href="{{ route('pemeriksa-periksa') }}"><i class="fa fa-eye"></i>&nbsp;Periksa</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
                {{--<div class="box-footer">--}}
                {{--</div>--}}
                <!-- /.box-footer -->
            </div>
            <div class="center-block" style="display:table">
                <ul class="pagination pagination-sm no-margin">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.Main content -->
    </div>
    <!-- /.container -->
@endsection
