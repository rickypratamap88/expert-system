@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon pe-7s-graph1">
                    </i>
                </div>
                <div>
                    @if (isset($disease))
                        Update Data Penyakit
                    @else
                        Tambah Data Penyakit
                    @endif
                </div>
            </div>
        </div>
    </div>            
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-9">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Form Penyakit</h5>
                            <form class="" action="@if (isset($disease)) {{  url('admin/diseases/' . $disease->id) }} @else {{ route('admin.diseases.store') }} @endif" method="post">
                                @csrf
                                @if (isset($disease))
                                    @method('patch')
                                @endif
                                <div class="position-relative form-group">
                                    <label for="code">Kode</label>
                                    <input class="form-control @error('code') is-invalid @enderror" name="code" id="code" type="text" value="{{ $disease->code ?? old('code') }}">
                                    @error('code') <small class="form-text text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="position-relative form-group">
                                    <label for="name">Nama Penyakit</label>
                                    <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" type="text" value="{{ $disease->name ?? old('name') }}">
                                    @error('name') <small class="form-text text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="position-relative form-group">
                                    <label for="probability">Probabilitas</label>
                                    <input class="form-control @error('probability') is-invalid @enderror" name="probability" id="probability" type="text" value="{{ $disease->probability ?? old('probability') }}">
                                    @error('probability') <small class="form-text text-danger">{{ $message }}</small> @enderror
                                </div>
                                                
                                <div class="position-relative form-group">
                                    <label for="appear">Jumlah Muncul</label>
                                    <input class="form-control @error('appear') is-invalid @enderror" name="appear" id="appear" type="text" value="{{ $disease->appear ?? old('appear') }}">
                                    @error('appear') <small class="form-text text-danger">{{ $message }}</small> @enderror
                                </div>
                                
                                <div class="position-relative form-group">
                                    <label for="information">Informasi</label>
                                    <textarea class="form-control" name="information" id="information" type="text">{{ $disease->information ?? old('information') }}</textarea>
                                    @error('information') <small class="form-text text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="position-relative form-group">
                                    <label for="suggestion">Saran</label>
                                    <textarea class="form-control" name="suggestion" id="suggestion">{{ $disease->suggestion ?? old('suggestion') }}</textarea>
                                    @error('suggestion') <small class="form-text text-danger">{{ $message }}</small> @enderror
                                </div>

                                <button type="submit" class="mt-1 btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection