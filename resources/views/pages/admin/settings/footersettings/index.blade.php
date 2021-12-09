@extends('pages.admin.dashboard.layouts.master')

@section('title', 'Halaman Footer Setting')
@section('footer', 'active')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengaturan Footer</h1>
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
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card shadow mb-2">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Judul Footer</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="footer_title" placeholder="Masukan Title.." value="{{ old('footer_title', $data->footer_title) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Alamat Footer</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="footer_address" placeholder="Masukan Alamat.." value="{{ old('footer_address', $data->footer_address) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Telepon Footer</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="footer_phone" placeholder="Masukan Telepon.." value="{{ old('footer_phone', $data->footer_phone) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Email Footer</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="footer_email" placeholder="Masukan Email.." value="{{ old('footer_email', $data->footer_email) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Copyright Footer</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="footer_copyright" placeholder="Masukan Copyright.." value="{{ old('footer_copyright') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Map Footer (iframe)</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="footer_map" placeholder="Masukan Title.." value="{{ old('footer_map') }}">
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