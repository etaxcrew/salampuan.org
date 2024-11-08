@extends('layouts.app', ['title' => 'Profile'])

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
                            <h2 class="content-header-title float-left mb-0">Profile</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Edit Profil</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <div class="row">
                    <div class="col-md-12">
                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                @if (session('status')=='profile-information-updated')
                                    Profile has been updated.
                                @endif
                                @if (session('status')=='password-updated')
                                    Password has been updated.
                                @endif
                                @if (session('status')=='two-factor-authentication-disabled')
                                    Two factor authentication disabled.
                                @endif
                                @if (session('status')=='two-factor-authentication-enabled')
                                    Two factor authentication enabled.
                                @endif
                                @if (session('status')=='recovery-codes-generated')
                                    Recovery codes generated.
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Page Heading -->
                <div class="row">

                    <div class="col-md-5">
                        <div class="card border-0 shadow">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold"><i class="fas fa-user-circle"></i> UPDATE PROFILE</h6>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('user-profile-information.update') }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name') ?? auth()->user()->name }}" required autofocus
                                            autocomplete="name" />
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary text-uppercase" type="submit">
                                            Update Profile
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="card border-0 shadow">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold"><i class="fas fa-unlock"></i> UPDATE PASSWORD</h6>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('user-password.update') }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" class="form-control" name="current_password" required
                                            autocomplete="current-password" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" required autocomplete="new-password"
                                            class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation" required
                                            autocomplete="new-password" />
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary text-uppercase" type="submit">
                                            Update Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection