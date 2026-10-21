
@extends('landing.layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <h4 class="mb-0">Dashboard</h4>
        <p class="text-secondary">Selamat datang di halaman Admin SnackedAdmin.</p>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 mt-4">

    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-1">Total Produk</p>
                        <h4 class="mb-0">120</h4>
                    </div>
                    <div class="ms-auto">
                        <i class="bi bi-box-seam fs-2 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-1">Kategori</p>
                        <h4 class="mb-0">8</h4>
                    </div>
                    <div class="ms-auto">
                        <i class="bi bi-grid fs-2 text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-1">Pesanan</p>
                        <h4 class="mb-0">45</h4>
                    </div>
                    <div class="ms-auto">
                        <i class="bi bi-cart-check fs-2 text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-1">Pengguna</p>
                        <h4 class="mb-0">75</h4>
                    </div>
                    <div class="ms-auto">
                        <i class="bi bi-people fs-2 text-danger"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card radius-10">
            <div class="card-body">
                <h5 class="card-title">Informasi Dashboard</h5>
                <p class="mb-0">
                    Halaman dashboard digunakan untuk menampilkan
                    ringkasan informasi dan aktivitas admin.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
