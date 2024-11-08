@extends('layouts.auth', ['title' => 'Forgot Password'])

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
                                <h4 class="card-title mt-2 mb-1">Lupa Password</h4>
                                <p class="card-text mb-2">Silakan masukkan alamat yang email aktif.</p>

                                <form action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Alamat Email" aria-describedby="login-email" autofocus />
                                        @error('email')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">SEND PASSWORD RESET LINK</button>
                                </form>

                                <div class="divider my-2">
                                    <div class="divider-text"><a href="/login" class="text-dark">Back to Login</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Reset Password -->

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
