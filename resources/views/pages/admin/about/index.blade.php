@extends('pages.admin.dashboard.layouts.master')

@section('title', 'Halaman About Setting')
@section('about', 'active')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengaturan About Us</h1>
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
            <form action="{{ route('about-us.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card shadow mb-2">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Title About</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="title" placeholder="Masukan Title.." value="{{ old('title', $data->title) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Subtitle About</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subtitle" placeholder="Masukan Subtitle.." value="{{ old('subtitle', $data->subtitle) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Link Youtube</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="link_youtube" placeholder="Masukan Link Youtube.." value="{{ old('link_youtube', $data->link_youtube) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Title Point Pertama</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="title_point_one" placeholder="Masukan Title Point Pertama.." value="{{ old('title_point_one', $data->title_point_one) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Subtitle Point Pertama</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subtitle_point_one" placeholder="Masukan Subtitle Point Pertama.." value="{{ old('subtitle_point_one', $data->subtitle_point_one) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Icon Point Pertama</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="icon_point_one" placeholder="Masukan Icon Point Pertama.." value="{{ old('icon_point_one', $data->icon_point_one) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Title Point Kedua</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="title_point_two" placeholder="Masukan Title Point Kedua.." value="{{ old('title_point_two', $data->title_point_two) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Subtitle Point Kedua</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subtitle_point_two" placeholder="Masukan Subtitle Point Kedua.." value="{{ old('subtitle_point_two', $data->subtitle_point_two) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Icon Point Kedua</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="icon_point_two" placeholder="Masukan Icon Point Kedua.." value="{{ old('icon_point_two', $data->icon_point_two) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Title Point Ketiga</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="title_point_three" placeholder="Masukan Title Point Ketiga.." value="{{ old('title_point_three', $data->title_point_three) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Subtitle Point Ketiga</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subtitle_point_three" placeholder="Masukan Subtitle Point Ketiga.." value="{{ old('subtitle_point_three', $data->subtitle_point_three) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Icon Point Ketiga</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="icon_point_three" placeholder="Masukan Icon Point Ketiga.." value="{{ old('icon_point_three', $data->icon_point_three) }}">
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