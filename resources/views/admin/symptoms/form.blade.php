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
                    @if (isset($symptom))
                        Update Data Gejala
                    @else
                        Tambah Data Gejala
                    @endif
                </div>
            </div>
        </div>
    </div>            
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="row">
                <div class="col-md-7">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Form Gejala</h5>
                            <form class="" action="@if (isset($symptom)) {{  url('admin/symptoms', $symptom->id) }} @else {{ route('admin.symptoms.store') }} @endif" method="post">
                                @csrf
                                @if (isset($symptom))
                                    @method('patch')
                                @endif
                                <div class="position-relative form-group">
                                    <label for="code" class="">Kode</label>
                                    <input name="code" id="code" type="text" class="form-control @error('code') is-invalid @enderror" value="{{ $symptom->code ?? old('code') }}">
                                    @error('code') <small class="form-text text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="position-relative form-group">
                                    <label for="symptom" class="">Gejala</label>
                                    <input name="symptom" id="symptom" type="text" class="form-control @error('symptom') is-invalid @enderror" value="{{ $symptom->symptom ?? old('code') }}">
                                    @error('symptom') <small class="form-text text-danger">{{ $message }}</small> @enderror
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