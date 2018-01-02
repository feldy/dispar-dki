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
            <a href="{{ route('pemohon') }}" class="btn btn-sm btn-primary"><i class="fa fa-backward fa-fw"></i>&nbsp; Daftar Permohonan</a>
            <ol class="breadcrumb">
                <li><a href="{{ route('pemohon') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Permohonan</li>
            </ol>
        </section>
        <!-- /.Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <h3 class="box-title">Data Detail Permohonan <div class="label btn-xs bg-green">Accepted In Condition</div></h3>
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
                        <table class="table table-responsive table-hover no-border">
                            <tbody>
                            <tr>
                                <td width="15px">1.</td>
                                <td >
                                    Permohonan Pertunjukan Artis Asing
                                </td>
                                <td class="text-right" width="120">
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">2.</td>
                                <td >Kontrak Kerja</td>
                                <td class="text-right" width="120">
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">3.</td>
                                <td >Profil Perusahaan/ITUP Impresariat </td>
                                <td class="text-right" width="120">
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">4.</td>
                                <td >Proposal Pertunjukan</td>
                                <td class="text-right" width="120">
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">5.</td>
                                <td >izin Tempat Pertunjukan</td>
                                <td class="text-right" width="120">
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">6.</td>
                                <td >Fotokopi Passport Artis + VISA</td>
                                <td class="text-right" width="120">
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">7.</td>
                                <td >Curriculum Vitae + Foto Artis</td>
                                <td class="text-right" width="120">
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">8.</td>
                                <td >RPTKA (Rencara Penempatan Tenaga Kerja Asing)/TA 01</td>
                                <td class="text-right" width="120">
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">9.</td>
                                <td >STM (Surat Tanda Melapor) oleh Mabes POLRI</td>
                                <td class="text-right" width="120">
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">10.</td>
                                <td >IMTA (Izin Menggunakan Tenaga Kerja Asing)</td>
                                <td class="text-right" width="120">
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">11.</td>
                                <td >DPKK (Dana Pengembangan Ketrampilan &amp; Keahlian)</td>
                                <td class="text-right" width="120">
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">12.</td>
                                <td >Izin Keramaian dari Mabes POLRI</td>
                                <td class="text-right" width="120">
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="15px">12.</td>
                                <td >Izin dari MUI Pusat</td>
                                <td class="text-right" width="120">
                                    <div class="btn bg-red btn-xs"><i class="fa fa-upload"></i> <judul>Upload</judul> <input name="upload_dok_ktp" style="display: none;" type="file"></div>
                                    <div type="button" class="btn btn-primary btn-xs btn-preview-image" title="View" src=""><em class="fa fa-eye"></em></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    {{--</div>--}}
                </form>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.Main content -->
    </div>
    <!-- /.container -->
@endsection
