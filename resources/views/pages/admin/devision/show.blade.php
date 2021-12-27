@extends('pages.admin.dashboard.layouts.master')

@section('title', 'Halaman Show Devisi')
@section('dataDevisi', 'active')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail {{ $data->name }}</h1>
        <div class="pull-right">
            <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ route('data-devisi.index') }}"><i class="fas fa-caret-left"></i> Kembali</a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div class="card-title">
                        <strong>{{ $data->name }}</strong>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-xl-12">
                            <p class="text-left">{{ $data->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection