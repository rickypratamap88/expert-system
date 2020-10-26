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
                <div>Update Profile</div>
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
                            <form action="/admin/profile/update" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="email">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="email" name="email" type="text" value="{{ Auth::user()->email }}" readonly />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="username">username</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('username') is-invalid @enderror" id="username" name="username" type="text" value="{{ Auth::user()->username }}" />
                                        @error('username') <strong class="text-danger">{{ $message }}</strong> @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="name">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ Auth::user()->name }}" />
                                        @error('name') <strong class="text-danger">{{ $message }}</strong> @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="image">Image</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <img class="img-thumbnail" src="{{ asset('storage/users/' . Auth::user()->image) }}" alt="">
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image" onchange="return previewImage(event)">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@push('js')
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
@endpush