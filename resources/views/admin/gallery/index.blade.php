@extends('layouts.app', ['title' => 'Galeri'])

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
                                    <li class="breadcrumb-item active">Galeri</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- Table head options start -->
                <div class="row" id="table-head">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <form action="{{ route('admin.gallery.index') }}" method="GET">
                                    <div class="form-group">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary btn-sm" style="padding: 12px">
                                                    <i class="fa fa-plus-circle mr-25"></i> TAMBAH
                                                </a>
                                            </div>
                                            <input type="text" class="form-control" name="q"
                                                placeholder="cari berdasarkan nama kategori">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-search mr-25"></i> CARI</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center" style="width: 6%">NO</th>
                                                <th scope="col">JUDUL FOTO</th>
                                                <th scope="col" class="text-center">GAMBAR</th>
                                                <th scope="col" class="text-center" style="width: 4%">EDIT</th>
                                                <th scope="col" class="text-center" style="width: 4%">DELETE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($galleries as $no => $gallery)
                                            <tr>
                                                <th scope="row" style="text-align: center">
                                                    {{ ++$no + ($galleries->currentPage()-1) * $galleries->perPage() }}
                                                </th>
                                                <td>{{ $gallery->title }}</td>
                                                <td class="text-center">
                                                    <img src="{{ $gallery->image }}" class="rounded" style="width:50px">
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('admin.gallery.edit', $gallery->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        <i class="fa fa-pencil-alt"></i>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <button onClick="Delete(this.id)" class="btn btn-sm btn-danger"
                                                        id="{{ $gallery->id }}">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @empty
                                                <div class="alert alert-danger">
                                                    <div class="alert-body">Data Belum Tersedia!</div>
                                                </div>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    <div style="margin-top: 1rem">
                                        {{ $galleries->links("vendor.pagination.bootstrap-5") }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<script>
    //ajax delete
    function Delete(id) {
        var id = id;
        var token = $("meta[name='csrf-token']").attr("content");

        swal({
            title: "APAKAH KAMU YAKIN ?",
            text: "INGIN MENGHAPUS DATA INI!",
            icon: "warning",
            buttons: [
                'TIDAK',
                'YA'
            ],
            dangerMode: true,
        }).then(function (isConfirm) {
            if (isConfirm) {

                //ajax delete
                jQuery.ajax({
                    url: "/admin/gallery/" + id,
                    data: {
                        "id": id,
                        "_token": token
                    },
                    type: 'DELETE',
                    success: function (response) {
                        if (response.status == "success") {
                            swal({
                                title: 'BERHASIL!',
                                text: 'DATA BERHASIL DIHAPUS!',
                                icon: 'success',
                                timer: 1000,
                                showConfirmButton: false,
                                showCancelButton: false,
                                buttons: false,
                            }).then(function () {
                                location.reload();
                            });
                        } else {
                            swal({
                                title: 'GAGAL!',
                                text: 'DATA GAGAL DIHAPUS!',
                                icon: 'error',
                                timer: 1000,
                                showConfirmButton: false,
                                showCancelButton: false,
                                buttons: false,
                            }).then(function () {
                                location.reload();
                            });
                        }
                    }
                });

            } else {
                return true;
            }
        })
    }
</script>
@endsection
