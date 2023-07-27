@extends('layouts.web.admin')

@section('title')
<title>Data Siswa</title>
@endsection

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Dashboard</h4>
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
                        <li class="breadcrumb-item active" aria-current="page">Topsis Normalisasi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            @if (count($normalisasis))
            <div class="card border-light">
                <div class="card-header">
                    <h3>Topsis Normalisasi</h3>
                </div>
                <div>
                    <!-- Message Status -->
                    @if(Session::has('success_message'))
                    <div class="alert alert-success" role="alert">
                        <i class="ti-user"></i> {{ Session::get('success_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span> </button>
                    </div>
                    @endif

                    @if(Session::has('error_message'))
                    <div class="alert alert-danger" role="alert">
                        <i class="ti-user"></i> {{ Session::get('error_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span> </button>
                    </div>
                    @endif
                    <!--End Message Status -->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="matrix_normalisasi" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nomor Induk Siswa Nasional</th>
                                    <th scope="col">Nama Siswa</th>

                                    @foreach ($kriterias as $kriteria)
                                    <th scope="col">{{ $kriteria->name}}</th>
                                    @endforeach

                                </tr>
                            </thead>
                            <tbody>
                                @if ($siswas)

                                @foreach ($siswas as $key => $siswa)

                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $siswa->nisn }}</td>
                                    <td>{{ $siswa->nama }}</td>

                                    @foreach ($siswa->penilaian_normalisasis as $penilaian)
                                    @if ($penilaian['topsis_normalisasi'])
                                    <td>{{ round($penilaian['topsis_normalisasi'], 4)}}</td>
                                    @endif

                                    @endforeach
                                </tr>

                                @endforeach

                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6 ">
                            <form action="{{ route('admin.simpan.Pembobotan') }}" method="post">
                                @csrf
                                <button class="btn btn-outline-success">Proses Pembobotan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-block">
                        <div class="card-title-block">
                            <h1 class="title text-center"> DATA BELUM DIINPUT, SILAHKAN INPUT TERLEBIH DAHULU</h1>
                        </div>
                        <div class="head logo-sekolah">
                            <img src="{{ asset('assets/img_asset/logo.png') }}" alt="LOGO SEKOLAH" class="center">
                        </div>

                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<style>
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 25%;
    }
    </style>
@endsection
@section('script')
<script>
    $(document).ready( function () {
       $('#matrix_normalisasi').DataTable();
    } );
</script>
@endsection
