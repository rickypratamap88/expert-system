@extends('layouts.backend.app')

@section('title', 'Hasil Diagnosa')

@section('content')

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon pe-7s-rocket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Hasil Diagnosis</div>
            </div>  
        </div>
    </div>  

    <div class="row">
        <div class="col-sm-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    @foreach ($diagnosisMax as $diagnosaMax)
                    <h1 class="card-title" style="font-size: 25px">Penyakit : {{ $diagnosaMax->name }}</h1>
                    <h3>{{ floor($diagnosaMax->results * 100) }}%.</h3>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Info Penyakit</h5>
                    <h6 class="card-subtitle">{{ $diagnosaMax->created_at }}</h6>
                    <p>{!! $diagnosaMax->information !!}</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Saran Dokter</h5>
                    <h6 class="card-subtitle">{{ $diagnosaMax->created_at }}</h6>
                    <p>{!! $diagnosaMax->suggestion !!}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">Hasil Perhitungan</h4>
                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Penyakit</th>
                                    <th>Hasil Probabilitas</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($diagnosis as $diagnosa)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $diagnosa->code }}</td>
                                        <td>{{ $diagnosa->name }}</td>
                                        <td>{{ floor($diagnosa->results * 100) }}%</td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Penyakit</th>
                                    <th>Hasil Probabilitas</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection