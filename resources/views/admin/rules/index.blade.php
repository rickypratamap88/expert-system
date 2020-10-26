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
                <div>Rules</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block">
                    <a href="/admin/rules/create" class="btn-shadow  btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-plus fa-w-20"></i>
                        </span>
                        Create
                    </a>
                </div>
            </div>    
        </div>
    </div>            
    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title">Tabel Penyakit</h5>
                    <table class="mb-0 table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Penyakit</th>
                                <th>Gejala</th>
                                <th>Probabilitas</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rules as $rule)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $rule->disease->name }}</td>
                                    <td>{{ $rule->symptom->symptom }}</td>
                                    <td>{{ number_format($rule->probability, 2) }}</td>
                                    <td>
                                        <a href="/admin/rules/{{ $rule->id }}/edit" class="btn btn-primary btn-sm float-left mr-1">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <form action="/admin/rules/{{ $rule->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Data Rule akan terhapus')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $rules->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
