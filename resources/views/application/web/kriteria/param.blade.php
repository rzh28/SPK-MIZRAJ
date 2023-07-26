@extends('layouts.web.admin')

@section('title')
    <title>Data Kriteria</title>
@endsection

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Data Kriteria Beasiswa</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Parameter Kriteria</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Welcome back  -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
             <div class="col-lg-12 col-xlg-12 col-md-12">
                {{-- Nilai Siswa --}}
                <div class="card border-light">
                    <div class="card-header">
                        <h3>Parameter Kriteria</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="penilaian" class="table table-striped table-bordered" style="text-align:center" >
                                 <thead>
                                    <tr>
                                        <th style="width: 3px">
                                            Kriteria
                                        </th>
                                        <th style="width: 3px">
                                            Nilai
                                        </th>
                                        <th style="width: 3px">
                                            Nilai Inisialisasi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <br>
                                            <br>
                                            <br>
                                            PENGHASILAN ORANG TUA
                                        </td>
                                        <td>
                                            <p>Lebih dari Rp 5.000.000</p>
                                            <p>Rp. 3.000.000 - Rp 4.999.999</p>
                                            <p>Rp 1.500.000- Rp 2.999.999</p>
                                            <p>Rp 800.000 - Rp 1.499.999</p>
                                            Kurang Dari Rp 800.000
                                        </td>
                                        <td>
                                            <p>5</p>
                                            <p>4</p>
                                            <p>3</p>
                                            <p>2</p>
                                            1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br><br><br>
                                            TANGGUNGAN ORANG TUA
                                        </td>
                                        <td>
                                            <p>Lebih dari 5 Anak</p>
                                            <p>4 Anak</p>
                                            <p>3 Anak</p>
                                            <p>2 Anak</p>
                                            1 Anak
                                        </td>
                                        <td>
                                            <p>5</p>
                                            <p>4</p>
                                            <p>3</p>
                                            <p>2</p>
                                            1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br><br><br>
                                            KEPEMILIKAN KENDARAAN
                                        </td>
                                        <td>
                                            <p>Tidak Ada</p>
                                            <p>Sepeda</p>
                                            <p>Sepeda Motor</p>
                                            <p>Mobil</p>
                                            Mobil & Sepeda Motor
                                        </td>
                                        <td>
                                            <p>5</p>
                                            <p>4</p>
                                            <p>3</p>
                                            <p>2</p>
                                            1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <br><br><br>
                                            KEHADIRAN
                                        </td>
                                        <td>
                                            <p>80  - 100</p>
                                            <p>60 - 79</p>
                                            <p>40 - 59</p>
                                            <p>20 - 39</p>
                                            1 - 19
                                        </td>
                                        <td>
                                            <p>5</p>
                                            <p>4</p>
                                            <p>3</p>
                                            <p>2</p>
                                            1
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="div" style="float: right">
                            <a href="{{ route('admin.penilaianAwal') }}" class="button btn btn-outline-info">
                                <i class="icon-picture"></i> <font class="font-medium">Kembali</font> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
