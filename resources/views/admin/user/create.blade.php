@extends('layouts.app', ['title' => 'Tambah User'])

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
                                    <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">Users</a></li>
                                    <li class="breadcrumb-item active">Tambah</li>
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
                                    <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <input type="text" name="name" value="{{ old('name') }}"
                                                        placeholder="Masukkan Nama User"
                                                        class="form-control @error('name') is-invalid @enderror">

                                                    @error('name')
                                                    <div class="invalid-feedback" style="display: block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Alamat Email</label>
                                                    <input type="email" name="email" value="{{ old('email') }}"
                                                        placeholder="Masukkan Alamat Email"
                                                        class="form-control @error('email') is-invalid @enderror">

                                                    @error('email')
                                                    <div class="invalid-feedback" style="display: block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="password" value="{{ old('password') }}"
                                                        placeholder="Masukkan Password"
                                                        class="form-control @error('password') is-invalid @enderror">

                                                    @error('password')
                                                    <div class="invalid-feedback" style="display: block">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Konfirmasi Password</label>
                                                    <input type="password" name="password_confirmation"
                                                        placeholder="Masukkan Konfirmasi Password" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary mt-1" type="submit">SIMPAN</button>
                                        <a href="{{ route('admin.user.index') }}" class="btn btn-warning mt-1">KEMBALI</a>
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