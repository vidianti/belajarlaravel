
@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    {{-- Judul Halaman --}}
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Data Tables</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/admin') }}">Admin</a>
                        </li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    {{-- Tabel Utama --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="card-title">Basic Data Table</h4>
                            <p class="card-title-desc">
                                Contoh tabel data menggunakan Bootstrap.
                            </p>
                        </div>

                        <button type="button" class="btn btn-primary"
                            onclick="alert('Fitur tambah data belum diaktifkan.')">
                            + Tambah Data
                        </button>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 60px;">No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th style="width: 150px;">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Andi Pratama</td>
                                    <td>andi@example.com</td>
                                    <td>
                                        <span class="badge bg-success">Aktif</span>
                                    </td>
                                    <td>20 Oktober 2026</td>
                                    <td>
                                        <button class="btn btn-sm btn-info text-white"
                                            onclick="alert('Fitur detail belum diaktifkan.')">
                                            Detail
                                        </button>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="alert('Fitur hapus belum diaktifkan.')">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>Siti Amelia</td>
                                    <td>siti@example.com</td>
                                    <td>
                                        <span class="badge bg-success">Aktif</span>
                                    </td>
                                    <td>21 Oktober 2026</td>
                                    <td>
                                        <button class="btn btn-sm btn-info text-white"
                                            onclick="alert('Fitur detail belum diaktifkan.')">
                                            Detail
                                        </button>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="alert('Fitur hapus belum diaktifkan.')">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Budi Santoso</td>
                                    <td>budi@example.com</td>
                                    <td>
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    </td>
                                    <td>22 Oktober 2026</td>
                                    <td>
                                        <button class="btn btn-sm btn-info text-white"
                                            onclick="alert('Fitur detail belum diaktifkan.')">
                                            Detail
                                        </button>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="alert('Fitur hapus belum diaktifkan.')">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>Dewi Lestari</td>
                                    <td>dewi@example.com</td>
                                    <td>
                                        <span class="badge bg-danger">Nonaktif</span>
                                    </td>
                                    <td>23 Oktober 2026</td>
                                    <td>
                                        <button class="btn btn-sm btn-info text-white"
                                            onclick="alert('Fitur detail belum diaktifkan.')">
                                            Detail
                                        </button>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="alert('Fitur hapus belum diaktifkan.')">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>Rina Anggraini</td>
                                    <td>rina@example.com</td>
                                    <td>
                                        <span class="badge bg-success">Aktif</span>
                                    </td>
                                    <td>24 Oktober 2026</td>
                                    <td>
                                        <button class="btn btn-sm btn-info text-white"
                                            onclick="alert('Fitur detail belum diaktifkan.')">
                                            Detail
                                        </button>
                                        <button class="btn btn-sm btn-danger"
                                            onclick="alert('Fitur hapus belum diaktifkan.')">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Informasi Tabel --}}
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <small class="text-muted">
                            Menampilkan 5 data contoh
                        </small>

                        <nav aria-label="Navigasi halaman">
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">Sebelumnya</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">Berikutnya</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
