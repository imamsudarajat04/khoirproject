@extends('pages.admin.dashboard.layouts.master')

@section('title', 'Halaman Global Setting')
@section('global', 'active')

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
            <form action="{{ route('global-setting.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card shadow mb-2">
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Judul Navbar</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="navbar_title" placeholder="Masukan Title.." value="{{ old('navbar_title', $data->navbar_title) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Primary Color</label>
                                    <div class="col-12">
                                        <input type="color" class="form-control" name="primary_color" value="{{ old('primary_color', $data->primary_color) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Secondary Color</label>
                                    <div class="col-12">
                                        <input type="color" class="form-control" name="secondary_color" value="{{ old('secondary_color', $data->secondary_color) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Font Size Title</label>
                                    <div class="col-12">
                                        <input type="number" class="form-control" name="font_size_title" placeholder="Masukan Font Size Title.." value="{{ old('font_size_title', $data->font_size_title) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Font Size Subtitle</label>
                                    <div class="col-12">
                                        <input type="number" class="form-control" name="font_size_subtitle" placeholder="Masukan Font Size Subtitle.." value="{{ old('font_size_subtitle', $data->font_size_subtitle) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Page Banner</label>
                                    <div class="col-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="page_banner" id="customFile1">
                                            <label class="custom-file-label" for="customFile">Pilih..</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Page Banner About</label>
                                    <div class="col-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="page_banner_about" id="customFile2">
                                            <label class="custom-file-label" for="customFile">Pilih..</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Page Banner Testimoni</label>
                                    <div class="col-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="page_banner_testimonials" id="customFile3">
                                            <label class="custom-file-label" for="customFile">Pilih..</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Title Profile</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="title_profile" placeholder="Masukan Title Profile.." value="{{ old('title_profile', $data->title_profile) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Subtitle Profile</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subtitle_profile" placeholder="Masukan Subtitle Profile.." value="{{ old('subtitle_profile', $data->subtitle_profile) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Icon Profile Pertama</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="icon_profile_one" placeholder="Masukan Icon Profile Pertama.." value="{{ old('icon_profile_one', $data->icon_profile_one) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Title Profile Pertama</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="title_profile_one" placeholder="Masukan Title Profile Pertama.." value="{{ old('title_profile_one', $data->title_prfile_one) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Subtitle Profile Pertama</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subtitle_profile_one" placeholder="Masukan Subtitle Profile Pertama.." value="{{ old('subtitle_profile_one', $data->subtitle_profile_one) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Icon Profile Kedua</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="icon_profile_two" placeholder="Masukan Icon Profile Kedua.." value="{{ old('icon_profile_two', $data->icon_profile_two) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Title Profile Kedua</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="title_profile_two" placeholder="Masukan Title Profile Kedua.." value="{{ old('title_profile_two', $data->title_prfile_two) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Subtitle Profile Kedua</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subtitle_profile_two" placeholder="Masukan Subtitle Profile Kedua.." value="{{ old('subtitle_profile_two', $data->subtitle_profile_two) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Icon Profile Ketiga</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="icon_profile_three" placeholder="Masukan Icon Profile Ketiga.." value="{{ old('icon_profile_three', $data->icon_profile_three) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Title Profile Ketiga</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="title_profile_three" placeholder="Masukan Title Profile Ketiga.." value="{{ old('title_profile_three', $data->title_prfile_three) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Subtitle Profile Ketiga</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subtitle_profile_three" placeholder="Masukan Subtitle Profile Ketiga.." value="{{ old('subtitle_profile_three', $data->subtitle_profile_three) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Subtitle Services</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subtitle_services" placeholder="Masukan Subtitle Services.." value="{{ old('subtitle_services', $data->subtitle_services) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Subtitle Team</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subtitle_team" placeholder="Masukan Subtitle Team.." value="{{ old('subtitle_team', $data->subtitle_team) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Subtitle Faq</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subtitle_faq" placeholder="Masukan Subtitle Faq.." value="{{ old('subtitle_faq', $data->subtitle_faq) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-2">
                                <div class="row">
                                    <label class="col-12 control-label">Subtitle Contact</label>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subtitle_contact" placeholder="Masukan Subtitle Contact.." value="{{ old('subtitle_contact', $data->subtitle_contact) }}">
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

@push('customjs')
    <script>
        $('#customFile1').on('change', function() {
            //get the file name
            var fileName = $(this).val();
            //clean fake path
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(cleanFileName);
        });

        $('#customFile2').on('change', function() {
            //get the file name
            var fileName = $(this).val();
            //clean fake path
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(cleanFileName);
        });

        $('#customFile3').on('change', function() {
            //get the file name
            var fileName = $(this).val();
            //clean fake path
            var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(cleanFileName);
        });
    </script>
@endpush