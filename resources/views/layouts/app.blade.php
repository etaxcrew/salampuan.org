<!DOCTYPE html>
<html class="semi-dark-layout" data-layout="semi-dark-layout" data-textdirection="ltr">

<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="">
    <meta name="author" content="Hendra Kahar">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name') }} — Administrator</title>

    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link href="{{ asset('app-assets/vendors/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-auth.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-invoice-list.css') }}">
    <!-- END: Page CSS-->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- sweet alert -->
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">


      <!-- BEGIN: Header-->
      <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
          <div class="bookmark-wrapper d-flex align-items-center">
              <ul class="nav navbar-nav d-xl-none">
                  <li class="nav-item">
                    <a class="nav-link menu-toggle" href="javascript:void(0);"><i class="fas fa-bars"></i></a>
                  </li>
              </ul>
              <ul class="nav navbar-nav bookmark-icons">
                <!-- <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="" data-toggle="tooltip" data-placement="top" title="Email">
                    <i class="fa fa-envelope fa-lg"></i>
                  </a>
                </li> -->
                <li class="nav-item d-none d-lg-block">
                  <a class="nav-link" href="https://salampuan.org" target="_blank" data-toggle="tooltip" data-placement="top" title="Visit Website">
                    <i class="fa fa-external-link-alt fa-lg"></i>
                  </a>
                </li>
              </ul>
          </div>
          <ul class="nav navbar-nav align-items-center ml-auto">
              <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="user-nav d-sm-flex d-none">
                    <span class="user-name font-weight-bolder">{{ auth()->user()->name }}</span>
                    <span class="user-status">Administrator</span>
                  </div>
                  <span class="avatar">
                    <img class="round" src="{{ auth()->user()->avatar_url }}" alt="avatar" height="40" width="40">
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                  <a class="dropdown-item" href="{{ route('admin.profile.index') }}"><i class="fas fa-user mr-50"></i> Edit Profil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt mr-50"></i> Keluar</a>
                </div>
              </li>
          </ul>
        </div>
      </nav>
      <!-- END: Header-->

      <!-- BEGIN: Main Menu-->
      <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                  <a class="navbar-brand" href="{{ route('admin.dashboard.index') }}">
                    <h2 class="brand-text" style="margin-top: 10px;">SALAMPUAN <span style="font-size: 10px;">.org</span></h2>
                  </a>
                </li>
                <li class="nav-item nav-toggle">
                  <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4">x</i>
                  </a>
                </li>
            </ul>
        </div>

        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class="navigation-header"><span>Main Menu</span></li>
                <li class="{{ Request::is('admin/dashboard*') ? ' active' :  '' }} nav-item">
                  <a class="d-flex align-items-center" href="{{ route('admin.dashboard.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                    <span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span>
                  </a>
                </li>
                <li class="{{ Request::is('admin/post*') ? ' active' :  '' }} nav-item">
                    <a class="d-flex align-items-center" href="{{ route('admin.post.index') }}">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
                      </svg>
                      <span class="menu-item text-truncate" data-i18n="Berita">Berita</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/category*') ? ' active' :  '' }} nav-item">
                    <a class="d-flex align-items-center" href="{{ route('admin.category.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bookmark"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                        <span class="menu-title text-truncate" data-i18n="Kategori">Kategori</span>
                    </a>
                </li>

                <li class="navigation-header"><span>Settings</span></li>
                <li class="{{ Request::is('admin/user*') ? ' active' :  '' }} nav-item">
                    <a class="d-flex align-items-center" href="{{ route('admin.user.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span class="menu-title text-truncate" data-i18n="User">Users</span>
                    </a>
                </li>

            </ul>

        </div>
      </div>
      <!-- END: Main Menu-->

      @yield('content')

      <!-- BEGIN: Footer -->
      <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
          <span class="float-md-left d-block d-md-inline-block mt-25">&copy; 2024<a class="ml-25" href="" target="_blank">SalamPuan.org</a>
            <span class="d-none d-sm-inline-block">All rights Reserved</span>
          </span>
          <span class="float-md-right d-none d-md-block">PT. Gorontalo Web Hosting
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
          </span>
        </p>
      </footer>
      <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="fa fa-arrow-up"></i></button>
      <!-- END: Footer-->

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Apakah Yakin Ingin Keluar ?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Silahkan pilih "Logout" di bawah untuk mengakhiri sesi saat ini.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </div>
          </div>
        </div>
      </div>


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/forms/form-select2.js') }}"></script>
    <!-- END: Page JS-->

    <script>
      //sweetalert for success or error message
      @if(session()->has('success'))
          swal({
              type: "success",
              icon: "success",
              title: "BERHASIL!",
              text: "{{ session('success') }}",
              timer: 1500,
              showConfirmButton: false,
              showCancelButton: false,
              buttons: false,
          });
          @elseif(session()->has('error'))
          swal({
              type: "error",
              icon: "error",
              title: "GAGAL!",
              text: "{{ session('error') }}",
              timer: 1500,
              showConfirmButton: false,
              showCancelButton: false,
              buttons: false,
          });
          @endif
    </script>

</body>
<!-- END: Body-->

</html>
