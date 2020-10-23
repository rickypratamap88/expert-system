@extends('layouts.backend.app')

@section('title', 'Users Dashboard | Daftar Gejala Penyakit Ginjal')

@section('content')

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <h5 class="my-0">Berikut adalah gejala penyakit ginjal yang bisa anda pilih sesuai gejala yang anda rasakan</h5><br>
                <h5 class="my-0">Anda bisa klik <code>checkbox</code> atau <code>nama gejala yang dibawah ini</code></h5><br>
                <h5 class="my-0">Klik <code>Submit</code> jika sudah memilih semua gejala yang anda rasakan</h5>
            </div>
        </div>
    </div>
</div>

<div class="separator-breadcrumb border-top"></div>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card text-left">
            <div class="card-body">
                <form action="{{ route('users.diagnosis.proccess') }}" method="POST">
                    @csrf

                    @forelse ($symtoms->chunk(3) as $chunks)
                        <div class="row">
                            @foreach ($chunks as $symtom)
                                <div class="col-sm-4">
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