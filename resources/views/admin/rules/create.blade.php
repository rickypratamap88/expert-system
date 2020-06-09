@extends('layouts.backend.app')

@section('title', 'Dashboard')

@section('content')
<div class="breadcrumb">
    <h1>Create Rules</h1>
</div>
<div class="separator-breadcrumb border-top"></div><!-- end of main-content -->

<div class="row">
    <div class="col-md-6">
        <p>Tambah Data Rule</p>
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex flex-column">
                    <form action="{{ route('admin.rules.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="diseases">Penyakit</label>
                            <select class="form-control" id="diseases" name="disease_id">
                                @foreach ($diseases as $disease)
                                <option value="{{ $disease->id }}">{{ $disease->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="symptoms">Gejala</label>
                            <select class="form-control" id="symptoms" name="symptom_id">
                                @foreach ($symptoms as $symptom)
                                <option value="{{ $symptom->id }}">{{ $symptom->symptom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="probability">Probabilitas</label>
                            <input type="text" class="form-control" id="probability" name="probability">
                        </div>
                        
                        <button type="submit" class="btn btn-primary pd-x-20 mt-2">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection