@extends('layouts.auth', ['title' => 'Login'])

@section('content')

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-v1 px-2">
                <div class="auth-inner py-2">

                    <!-- Login v1 -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <a class="brand-logo" href="/">
                                <img src="{{ asset('logo.png') }}" style="height: 77px;" alt="salampuan.org">
                            </a>
                            <p class="card-text mb-2 text-center">Masuk sebagai Admin</p>

                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="login-email" class="form-label">Email Address</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Alamat Email" aria-describedby="login-email" tabindex="1"
                                        autofocus />
                                    @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <label for="login-password">Password</label>
                                        <a href="/forgot-password">
                                            <small>Lupa Password?</small>
                                        </a>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input type="password"
                                            class="form-control form-control-merge @error('password') is-invalid @enderror"
                                            name="password" tabindex="2" placeholder="Kata Sandi"
                                            aria-describedby="login-password" />
                                        <div class="input-group-append">
                                            <span class="input-group-text cursor-pointer"><i
                                                    data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-block" tabindex="3">LOGIN</button>
                            </form>

                            {{-- <p class="text-center mt-2">
                                <span>Anda belum punya akun?</span>
                                <a href="#">
                                    <span>Daftar disini</span>
                                </a>
                            </p> --}}

                            <div class="divider my-2">
                                <div class="divider-text">&copy; 2024. SalamPuan.org</div>
                            </div>

                        </div>
                    </div>
                    <!-- /Login v1 -->

                </div>
            </div>

        </div>
    </div>
</div>
<!-- END: Content-->

@endsection
