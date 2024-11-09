@extends('layouts.app', ['title' => 'Edit Galeri'])

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.gallery.index') }}">Galeri</a></li>
                                    <li class="breadcrumb-item active">Edit</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="card">

                                <div class="card-body">
                                    <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                        </div>

                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" name="title" value="{{ old('title', $gallery->title) }}" placeholder="Judul Foto" class="form-control @error('title') is-invalid @enderror">

                                            @error('title')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="row col-12">
                                            <label>Slider</label>
                                            <div class="form-group">
                                                <div class="demo-inline-spacing mt-1">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="slider"
                                                            value="N" id="slider-no" {{ $gallery->slider === 'N' ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="slider-no">Tidak Aktif</label>
                                                    </div>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" class="custom-control-input" name="slider"
                                                            value="Y" id="slider-yes" {{ $gallery->slider === 'Y' ? 'checked' : '' }}>
                                                        <label class="custom-control-label" for="slider-yes">Aktif</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input type="text" name="keterangan" value="{{ old('keterangan', $gallery->keterangan) }}" placeholder="Keterangan Foto" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input type="date" name="publish"
                                                value="{{ old('publish', $gallery->publish) }}"
                                                class="form-control @error('publish') is-invalid @enderror">

                                            @error('publish')
                                            <div class="invalid-feedback" style="display: block">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <button class="btn btn-primary" type="submit">SIMPAN</button>
                                        <a href="{{ route('admin.gallery.index') }}" class="btn btn-warning">KEMBALI</a>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

@endsection
