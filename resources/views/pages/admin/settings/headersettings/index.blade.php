@extends('pages.admin.dashboard.layouts.master')

@section('title', 'Halaman Header Setting')
@section('header', 'active')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengaturan Global</h1>
    </div>

    <!-- Alert -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="my-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <form action="{{ route('header-setting.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card shadow mb-2">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Header Title</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="header_title" placeholder="Masukan Header Title.." value="{{ old('header_title', $data->header_title) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Header Subtitle</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="header_subtitle" placeholder="Masukan Header Subtitle.." value="{{ old('header_subtitle', $data->header_subtitle) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Header Button Text</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="header_button_text" placeholder="Masukan Header Button Text.." value="{{ old('header_button_text', $data->header_button_text) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Email Header</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="header_email" placeholder="Masukan Email.." value="{{ old('header_email', $data->header_email) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Nomor HP Header</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="header_phone" placeholder="Masukan Nomor HP.." value="{{ old('header_phone', $data->header_phone) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 mt-2">
                            <button type="submit" class="btn btn-primary btn-block px-5"><i class="fas fa-edit"></i> Simpan Pengaturan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection