@extends('layouts.backend.app')

@section('title', 'Dashboard')

@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon pe-7s-graph1">
                    </i>
                </div>
                <div>Penyakit</div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block">
                    <a href="/admin/diseases/create" class="btn-shadow  btn btn-info">
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
                    <table class="mb-0 table" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Probability</th>
                                <th>Appear</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($diseases as $disease)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $disease->code }}</td>
                                <td>{{ $disease->name }}</td>
                                <td>{{ $disease->probability }}</td>
                                <td>{{ $disease->appear }}</td>
                                <td>
                                    <a href="/admin/diseases/{{ $disease->id }}/edit" class="btn btn-primary btn-sm float-left mr-1">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <form action="/admin/diseases/{{ $disease->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Data gejala akan terhapus')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
@endpush
