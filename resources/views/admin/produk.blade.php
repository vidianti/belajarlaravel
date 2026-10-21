
@extends('landing.layouts.admin')

@section('title', 'Data Produk')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h4 class="mb-1">Data Produk</h4>
        <p class="text-secondary mb-0">Kelola daftar produk.</p>
    </div>

    <button type="button" class="btn btn-primary"
        onclick="alert('Fitur tambah produk belum diaktifkan.')">
        <i class="bi bi-plus-circle"></i> Tambah Produk
    </button>
</div>

<div class="card radius-10">
    <div class="card-body">
        <h5 class="card-title">Daftar Produk</h5>

        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Produk A</td>
                        <td>Elektronik</td>
                        <td>Rp150.000</td>
                        <td>20</td>
                        <td><span class="badge bg-success">Tersedia</span></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Produk B</td>
                        <td>Aksesori</td>
                        <td>Rp75.000</td>
                        <td>15</td>
                        <td><span class="badge bg-success">Tersedia</span></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Produk C</td>
                        <td>Peralatan</td>
                        <td>Rp250.000</td>
                        <td>0</td>
                        <td><span class="badge bg-danger">Habis</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
