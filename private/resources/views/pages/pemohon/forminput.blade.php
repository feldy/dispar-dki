<?php
/**
 * Created by PhpStorm.
 * User: rio
 * Date: 01/10/2017
 * Time: 02:22
 */
?>

@extends('pages.pemohon.template')
@section('content')
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="{{ route('pemohon') }}" class="btn btn-sm btn-primary"><i class="fa fa-backward fa-fw"></i>&nbsp; Daftar Permohonan</a>
            <ol class="breadcrumb">
                <li><a href="{{ route('pemohon') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Permohonan</li>
            </ol>
        </section>
        <!-- /.Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <h3 class="box-title">Input Permohonan Baru</h3>
            <div class="box box-primary">
                <form>
                    <div class="box-body">
                        <legend><h2>Data Acara</h2></legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"><label for="namaPertunjukan">Nama Pertunjukan :</label>
                                    <input class="form-control" name="namaPertunjukan" id="namaPertunjukan">
                                </div>
                                <div class="form-group"><label for="jenisPertunjukan">Jenis Pertunjukan :</label>
                                    <input class="form-control" name="jenisPertunjukan" id="jenisPertunjukan" >
                                </div>
                                <div class="form-group"><label for="namaArtis">Nama Artis/Olahragawan :</label>
                                    <input class="form-control" name="namaArtis" id="namaArtis" >
                                </div>
                                <div class="form-group"><label for="kewarganegaran">Kewarganegaraan :</label>
                                    <input class="form-control" name="kewarganegaran" id="kewarganegaran" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label for="nomorPassport">Nomor Passport :</label>
                                    <input class="form-control" name="nomorPassport" id="nomorPassport" >
                                </div>
                                <div class="form-group"><label for="tempatPertunjukan">Tempat Pertunjukan :</label>
                                    <input class="form-control" name="tempatPertunjukan" id="tempatPertunjukan" >
                                </div>
                                <div class="form-group">
                                    <label for="tanggalPertunjukan">Tanggal Pertunjukan :</label>
                                    <div class="input-group date col-md-7">
                                        <input class="form-control pull-right"
                                               id="tanggalPertunjukan" type="text">
                                            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="kewarganegaran">Waktu Pertunjukan :</label>
                                    <input class="form-control" name="kewarganegaran" id="kewarganegaran" >
                                </div>
                            </div>
                        </div>
                        <legend><h2>Data Administratif</h2></legend>
                        <table class="table table-responsive table-hover no-border">
                            <tbody>
                            <tr>
                                <td width="15px">1.</td>
                                <td >
                                    Permohonan Pertunjukan Artis Asing
                                </td>
                                <td class="text-right" width="140">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs" title="Clear"><em class="fa fa-trash"></em></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">2.</td>
                                <td >Kontrak Kerja</td>
                                <td class="text-right" width="140">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs" title="Clear"><em class="fa fa-trash"></em></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">3.</td>
                                <td >Profil Perusahaan/ITUP Impresariat </td>
                                <td class="text-right" width="140">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs" title="Clear"><em class="fa fa-trash"></em></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">4.</td>
                                <td >Proposal Pertunjukan</td>
                                <td class="text-right" width="140">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs" title="Clear"><em class="fa fa-trash"></em></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">5.</td>
                                <td >izin Tempat Pertunjukan</td>
                                <td class="text-right" width="140">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs" title="Clear"><em class="fa fa-trash"></em></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">6.</td>
                                <td >Fotokopi Passport Artis + VISA</td>
                                <td class="text-right" width="140">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs" title="Clear"><em class="fa fa-trash"></em></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">7.</td>
                                <td >Curriculum Vitae + Foto Artis</td>
                                <td class="text-right" width="140">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs" title="Clear"><em class="fa fa-trash"></em></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">8.</td>
                                <td >RPTKA (Rencara Penempatan Tenaga Kerja Asing)/TA 01</td>
                                <td class="text-right" width="140">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs" title="Clear"><em class="fa fa-trash"></em></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">9.</td>
                                <td >STM (Surat Tanda Melapor) oleh Mabes POLRI</td>
                                <td class="text-right" width="140">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs" title="Clear"><em class="fa fa-trash"></em></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">10.</td>
                                <td >IMTA (Izin Menggunakan Tenaga Kerja Asing)</td>
                                <td class="text-right" width="140">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs" title="Clear"><em class="fa fa-trash"></em></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">11.</td>
                                <td >DPKK (Dana Pengembangan Ketrampilan &amp; Keahlian)</td>
                                <td class="text-right" width="140">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs" title="Clear"><em class="fa fa-trash"></em></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">12.</td>
                                <td >Izin Keramaian dari Mabes POLRI</td>
                                <td class="text-right" width="140">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs" title="Clear"><em class="fa fa-trash"></em></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    {{--<div class="box-footer">--}}
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
