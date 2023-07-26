@extends('layouts.web.admin')

@section('title')
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
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card  bg-light no-card-border">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="m-r-10">
                                {{-- <img src="{{ asset('assets/adminbite/assets/images/users/2.jpg') }}" alt="user"
                                    width="60" class="rounded-circle" /> --}}
                            </div>
                            <div>
                                <h3 class="m-b-0">Welcome Back!, {{ Str::upper(auth()->user()->name) }}</h3>
                                <span>{{ date('d M Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-block">
                    <div class="card-title-block">
                        <h3 class="title text-center">SISTEM PENDUKUNG KEPUTUSAN - SMP MUHAMMADIYAH 31 JAKARTA</h3>
                    </div>
                    <div class="head logo-sekolah">
                        <img src="{{ asset('assets/img_asset/logo.png') }}" alt="LOGO SEKOLAH" class="center">
                    </div>
                    <br>
                    <div class="body description-school text-justify m-20 p-20">
                        SMP Muhammadiyah 31 Jakarta didirikan tanggal 2 Februari 1974. Tiga puluh tahun lalu lokasi kompleks pendidikan Muhammadiyah berbentuk rawa dan akhirnya sekarang menjadi Kompleks Pendidikan Perguruan Muhammadiyah Cabang Rawamangun.
                        Gedung SMP ini berdiri di bagian selatan kompleks perguruan.
                        Motto SMP Muhammadiyah 31 adalah: "Membentuk manusia yang cerdas, terampil, serta beriman dan bertaqwa kepada Allah SWT. Berakhlaq mulia, berguna bagi agama, bangsa, negara, masyarakat, dan tanah air tercinta."
                    </div>
                </div>
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
