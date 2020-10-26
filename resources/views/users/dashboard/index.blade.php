@extends('layouts.backend.app')

@section('title', 'Users | Dashboard')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon pe-7s-rocket icon-gradient bg-mean-fruit"></i>
                </div>
                <div>Dashboard</div>
            </div>  
        </div>
    </div>  
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Consultations</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{ $consultations->count() }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection