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
            <a href="{{ route('pemeriksa') }}" class="btn btn-sm btn-primary"><i class="fa fa-backward fa-fw"></i>&nbsp; Daftar Araca</a>
            <ol class="breadcrumb">
                <li><a href="{{ route('pemeriksa') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Acara</li>
            </ol>
        </section>
        <!-- /.Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <h3 class="box-title">Data Detail Acara</h3>
            <div class="box box-primary">
                <form>
                    <div class="box-body">
                        <legend><h2>Data Acara</h2></legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"><label for="namaPertunjukan">Nama Pertunjukan :</label>
                                    <input class="form-control" name="namaPertunjukan" id="namaPertunjukan" readonly value="Maulid Akbar 2049">
                                </div>
                                <div class="form-group"><label for="jenisPertunjukan">Jenis Pertunjukan :</label>
                                    <input class="form-control" name="jenisPertunjukan" id="jenisPertunjukan" readonly value="Tablig Akbar">
                                </div>
                                <div class="form-group"><label for="namaArtis">Nama Artis/Olahragawan :</label>
                                    <input class="form-control" name="namaArtis" id="namaArtis" readonly value="Ustad Abdul Somad">
                                </div>
                                <div class="form-group"><label for="kewarganegaran">Kewarganegaraan :</label>
                                    <input class="form-control" name="kewarganegaran" id="kewarganegaran" readonly value="WNI">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label for="nomorPassport">Nomor Passport :</label>
                                    <input class="form-control" name="nomorPassport" id="nomorPassport" readonly value="123456789">
                                </div>
                                <div class="form-group"><label for="tempatPertunjukan">Tempat Pertunjukan :</label>
                                    <input class="form-control" name="tempatPertunjukan" id="tempatPertunjukan" readonly value="Masjid Istiqlal">
                                </div>
                                <div class="form-group"><label for="tanggalPertunjukan">Tanggal Pertunjukan :</label>
                                    <div class="input-group col-xs-3">
                                        <input class="form-control" id="tanggalPertunjukan" type="text" readonly value="17/06/2017">
                                    </div>
                                </div>
                                <div class="form-group"><label for="waktuPertunjukan">Waktu Pertunjukan :</label>
                                    <input class="form-control" name="waktuPertunjukan" id="waktuPertunjukan" readonly value="Malam Jum'at">
                                </div>
                            </div>
                        </div>
                        <legend><h2>Data Administratif</h2></legend>
                        <table class="table table-responsive no-border">
                            <tbody>
                            <tr>
                                <td width="15px">1.</td>
                                <td>Permohonan Pertunjukan Artis Asing 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div type="button" class="btn btn-primary btn-md btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                            <div id="radioBtn" class="btn-group pull-right">
                                                <span class="btn btn-primary btn-md " data-toggle="estado" data-value="Y">Terima</span>
                                                <span class="btn btn-default btn-md " data-toggle="estado" data-value="N">Tolak</span>
                                            </div>
                                            <input type="hidden" name="estado" id="estado">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">2.</td>
                                <td>Kontrak Kerja 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div type="button" class="btn btn-primary btn-md btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                            <div id="radioBtn" class="btn-group pull-right">
                                                <span class="btn btn-primary btn-md " data-toggle="estado" data-value="Y">Terima</span>
                                                <span class="btn btn-default btn-md " data-toggle="estado" data-value="N">Tolak</span>
                                            </div>
                                            <input type="hidden" name="estado" id="estado">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">3.</td>
                                <td>Profil Perusahaan/ITUP Impresariat 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div type="button" class="btn btn-primary btn-md btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                            <div id="radioBtn" class="btn-group pull-right">
                                                <span class="btn btn-primary btn-md " data-toggle="estado" data-value="Y">Terima</span>
                                                <span class="btn btn-default btn-md " data-toggle="estado" data-value="N">Tolak</span>
                                            </div>
                                            <input type="hidden" name="estado" id="estado">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">4.</td>
                                <td>Proposal Pertunjukan 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div type="button" class="btn btn-primary btn-md btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                            <div id="radioBtn" class="btn-group pull-right">
                                                <span class="btn btn-primary btn-md " data-toggle="estado" data-value="Y">Terima</span>
                                                <span class="btn btn-default btn-md " data-toggle="estado" data-value="N">Tolak</span>
                                            </div>
                                            <input type="hidden" name="estado" id="estado">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">5.</td>
                                <td>izin Tempat Pertunjukan 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div type="button" class="btn btn-primary btn-md btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                            <div id="radioBtn" class="btn-group pull-right">
                                                <span class="btn btn-primary btn-md " data-toggle="estado" data-value="Y">Terima</span>
                                                <span class="btn btn-default btn-md " data-toggle="estado" data-value="N">Tolak</span>
                                            </div>
                                            <input type="hidden" name="estado" id="estado">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">6.</td>
                                <td>Fotokopi Passport Artis + VISA 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div type="button" class="btn btn-primary btn-md btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                            <div id="radioBtn" class="btn-group pull-right">
                                                <span class="btn btn-primary btn-md " data-toggle="estado" data-value="Y">Terima</span>
                                                <span class="btn btn-default btn-md " data-toggle="estado" data-value="N">Tolak</span>
                                            </div>
                                            <input type="hidden" name="estado" id="estado">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">7.</td>
                                <td>Curriculum Vitae + Foto Artis 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div type="button" class="btn btn-primary btn-md btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                            <div id="radioBtn" class="btn-group pull-right">
                                                <span class="btn btn-primary btn-md " data-toggle="estado" data-value="Y">Terima</span>
                                                <span class="btn btn-default btn-md " data-toggle="estado" data-value="N">Tolak</span>
                                            </div>
                                            <input type="hidden" name="estado" id="estado">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">8.</td>
                                <td>RPTKA (Rencara Penempatan Tenaga Kerja Asing)/TA 01 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div type="button" class="btn btn-primary btn-md btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                            <div id="radioBtn" class="btn-group pull-right">
                                                <span class="btn btn-primary btn-md " data-toggle="estado" data-value="Y">Terima</span>
                                                <span class="btn btn-default btn-md " data-toggle="estado" data-value="N">Tolak</span>
                                            </div>
                                            <input type="hidden" name="estado" id="estado">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">9.</td>
                                <td>STM (Surat Tanda Melapor) oleh Mabes POLRI 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div type="button" class="btn btn-primary btn-md btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                            <div id="radioBtn" class="btn-group pull-right">
                                                <span class="btn btn-primary btn-md " data-toggle="estado" data-value="Y">Terima</span>
                                                <span class="btn btn-default btn-md " data-toggle="estado" data-value="N">Tolak</span>
                                            </div>
                                            <input type="hidden" name="estado" id="estado">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">10.</td>
                                <td>IMTA (Izin Menggunakan Tenaga Kerja Asing 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div type="button" class="btn btn-primary btn-md btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                            <div id="radioBtn" class="btn-group pull-right">
                                                <span class="btn btn-primary btn-md " data-toggle="estado" data-value="Y">Terima</span>
                                                <span class="btn btn-default btn-md " data-toggle="estado" data-value="N">Tolak</span>
                                            </div>
                                            <input type="hidden" name="estado" id="estado">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">11.</td>
                                <td>DPKK (Dana Pengembangan Ketrampilan &amp; Keahlian 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="">
                                        </div>
                                        <div class="col-md-3">
                                            <div type="button" class="btn btn-primary btn-md btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                            <div id="radioBtn" class="btn-group pull-right">
                                                <span class="btn btn-default btn-md " data-toggle="estado" data-value="Y">Terima</span>
                                                <span class="btn btn-primary btn-md " data-toggle="estado" data-value="N">Tolak</span>
                                            </div>
                                            <input type="hidden" name="estado" id="estado">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">12.</td>
                                <td>Izin Keramaian dari Mabes POLRI 
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input class="form-control" name="" readonly="true">
                                        </div>
                                        <div class="col-md-3">
                                            <div type="button" class="btn btn-primary btn-md btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                            <div id="radioBtn" class="btn-group pull-right">
                                                <span class="btn btn-primary btn-primary btn-selected " data-toggle="estado" data-value="Y">Terima</span>
                                                <span class="btn btn-default btn-md " data-toggle="estado" data-value="N">Tolak</span>
                                            </div>
                                            <input type="hidden" name="estado" id="estado">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    {{--</div>--}}
                </form>
            </div>
            <button class="btn btn-sm btn-primary btn-block"><i class="fa fa-save"></i> Save</button>
            <!-- /.box -->
        </section>
        <!-- /.Main content -->
    </div>
    <!-- /.container -->
@endsection
