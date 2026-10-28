@extends('layouts.landing')

@section('title', 'Layanan')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title">Layanan Kami</h5>
            <h2>Pelayanan Terbaik</h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-user-tie fa-3x text-primary mb-3"></i>
                        <h5>Chef Profesional</h5>
                        <p>Hidangan disiapkan oleh koki berpengalaman.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-utensils fa-3x text-primary mb-3"></i>
                        <h5>Makanan Berkualitas</h5>
                        <p>Bahan pilihan untuk cita rasa terbaik.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-cart-plus fa-3x text-primary mb-3"></i>
                        <h5>Pemesanan Online</h5>
                        <p>Pemesanan meja lebih mudah dan praktis.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-headset fa-3x text-primary mb-3"></i>
                        <h5>Layanan Ramah</h5>
                        <p>Kami siap membantu kebutuhan pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection