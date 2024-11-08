@extends('layouts.auth', ['title' => 'Update Password'])

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">

                        <!-- Reset Password -->
                        <div class="card mb-0">
                            <div class="card-body">

                                <div class="card-text mb-2">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                </div>

                                <a href="/">
                                    <img src="{{ asset('logo.png') }}" style="height: 77px;" alt="salampuan.org">
                                </a>
                                <h4 class="card-title mt-2 mb-1">Buat Password Baru</h4>

                                <form action="{{ route('password.update') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $request->email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Alamat Elamil">
                                            @error('email')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input id="password" type="password" class="form-control form-control-merge @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukkan Password Baru">
                                            <div class="input-group-append">
                                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                            </div>
                                        </div>
                                        @error('password')
                                        <div class="alert alert-danger mt-2">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Konfirmasi Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password Baru">
                                            <div class="input-group-append">
                                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block">UPDATE PASSWORD</button>
                                </form>

                                <div class="divider my-2">
                                    <div class="divider-text"><a href="/login" class="text-dark">Back to Login</a></div>
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
