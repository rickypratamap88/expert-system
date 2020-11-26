@extends('layouts.backend.app')

@section('title', 'Users Dashboard | Daftar Gejala Penyakit Ginjal')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon pe-7s-rocket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Diagnosis</div>
            </div>  
        </div>
    </div>  
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <form action="{{ route('users.diagnosis.proccess') }}" method="POST">
                    @csrf

                    @forelse ($symtoms->chunk(2) as $chunks)
                        <div class="row">
                            @foreach ($chunks as $symtom)
                                <div class="col-sm-6">
                                    <label class="checkbox checkbox-outline-primary">
                                        <input type="checkbox" id="{{ $symtom->id }}" name="symptom[]" value="{{ $symtom->id }}"/>
                                        <span>{{$symtom->code . ' - ' . $symtom->symptom }}</span>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    @empty
                        <div>
                            <p>Not Symptoms</p>
                        </div>
                    @endforelse

                    <div class="form-group mt-3 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection