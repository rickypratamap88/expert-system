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
                    @if (isset($rule))
                        Update Data Rule
                    @else
                        Tambah Data Rule
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
                            <h5 class="card-title">Form Rule</h5>
                            <form class="" action="@if (isset($rule)) {{  url('admin/rules/' . $rule->id) }} @else {{ route('admin.rules.store') }} @endif" method="post">
                                @csrf
                                @if (isset($rule))
                                    @method('patch')
                                @endif

                                <div class="form-group">
                                    <label for="diseases">Penyakit</label>
                                    <select class="form-control @error('disease_id') @enderror" id="diseases" name="disease_id">
                                        @foreach ($diseases as $disease)
                                        <option value="{{ $disease->id }}">{{ $disease->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('disease_id') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="form-group">
                                    <label for="symptoms">Gejala</label>
                                    <select class="form-control @error('symptom_id') @enderror" id="symptoms" name="symptom_id">
                                        @foreach ($symptoms as $symptom)
                                        <option value="{{ $symptom->id }}">{{ $symptom->symptom }}</option>
                                        @endforeach
                                    </select>
                                    @error('symptom_id') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>

                                <div class="position-relative form-group">
                                    <label for="probability">Probabilitas</label>
                                    <input type="text" class="form-control @error('probability') @enderror" id="probability" name="probability" value="{{ $rule->probability ?? old('probability') }}">
                                    @error('probability') <span class="text-danger">{{ $message }}</span> @enderror
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