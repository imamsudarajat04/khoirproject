@extends('pages.admin.dashboard.layouts.master')

@section('title', 'Halaman Data Blog')
@section('blog', 'active')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Dokumentasi Kegiatan</h1>
        <div class="pull-right">
            <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="{{ route('data-blog.index') }}"><i class="fas fa-caret-left"></i> Kembali</a>
        </div>
    </div>

    <!-- Alert -->
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
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <form action="{{ route('data-blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
                        <div class="form-group">
                            <div class="row">
                                <label class="col-12 control-label">Judul</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="title" placeholder="Masukan Judul" value="{{ old('title') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-12 control-label">Deskripsi</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="description" placeholder="Masukan Deskripsi" value="{{ old('description') }}">
                                </div>
                            </div>
                        </div>
                        <div class=" form-group">
                            <div class="row">
                                <label class="col-12 control-label">Konten</label>
                                <div class="col-12">
                                    <textarea name="content" id="contentDokumentasi">{{ old('content') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-12 control-label">Tanggal Publis</label>
                                <div class="col-12">
                                    <input type="date" class="form-control" name="publish_date" value="{{ old('publish_date') }}">
                                </div>
                            </div>
                        </div>
                        <div class=" form-group">
                            <div class="row">
                                <label class="col-12 control-label">Cover</label>
                                <div class="col-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="cover" id="customFile">
                                        <label class="custom-file-label" for="customFile">Pilih Foto Cover</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-12 control-label">Kategori</label>
                                <div class="col-12">
                                    <select name="category_id" class="form-control">
                                        <option value="" disabled selected>==Pilih==</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary btn-block px-5"><i class="fas fa-save"></i> Simpan Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('customjs')
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };

        CKEDITOR.replace('contentDokumentasi', options);

        $('#customFile').on('change', function() {
            //get the file name
            var fileName = $(this).val();
            //clean fake path
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(cleanFileName);
        });
    </script>
@endpush
