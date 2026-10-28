
@extends('layouts.landing')

@section('title', 'Home - RestoranKita')

@section('content')

<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <p class="section-title">Selamat Datang di RestoranKita</p>

                <h1>Nikmati Hidangan Lezat Setiap Hari</h1>

                <p class="lead my-4">
                    Kami menyajikan makanan berkualitas dengan bahan segar,
                    rasa istimewa, dan pelayanan terbaik.
                </p>

                <a href="{{ route('landing.menu') }}" class="btn btn-primary btn-lg px-4">
                    Lihat Menu
                </a>

                <a href="{{ route('landing.booking') }}" class="btn btn-outline-light btn-lg px-4 ms-2">
                    Reservasi
                </a>
            </div>

            <div class="col-lg-5 text-center mt-5 mt-lg-0">
                <img
                    src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=700&q=85"
                    alt="Hidangan restoran"
                    class="img-fluid rounded-circle shadow"
                    style="width: 380px; height: 380px; object-fit: cover;"
                >
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="text-center mb-5">
        <p class="section-title">Mengapa Memilih Kami?</p>
        <h2 class="fw-bold">Pelayanan Terbaik untuk Anda</h2>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 p-4">
                <i class="bi bi-person-check fs-1 text-warning"></i>
                <h4 class="mt-3">Koki Profesional</h4>
                <p>Kami menyajikan hidangan dengan perhatian pada rasa dan kualitas.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 p-4">
                <i class="bi bi-egg-fried fs-1 text-warning"></i>
                <h4 class="mt-3">Makanan Berkualitas</h4>
                <p>Bahan makanan dipilih dengan cermat untuk sajian yang lezat.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 p-4">
                <i class="bi bi-cart-check fs-1 text-warning"></i>
                <h4 class="mt-3">Mudah Dipesan</h4>
                <p>Jelajahi menu dan buat reservasi melalui website kami.</p>
            </div>
        </div>
    </div>
</section>

<section class="container py-4">
    <div class="text-center mb-4">
        <p class="section-title">Menu Favorit</p>
        <h2 class="fw-bold">Hidangan Pilihan Kami</h2>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <img class="food-image"
                     src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=700&q=85"
                     alt="Pizza">
                <div class="card-body">
                    <h5>Pizza Spesial</h5>
                    <p>Pizza dengan topping pilihan dan cita rasa istimewa.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <img class="food-image"
                     src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=700&q=85"
                     alt="Burger">
                <div class="card-body">
                    <h5>Burger Premium</h5>
                    <p>Perpaduan roti lembut dan isian yang menggugah selera.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <img class="food-image"
                     src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=700&q=85"
                     alt="Salad">
                <div class="card-body">
                    <h5>Salad Segar</h5>
                    <p>Pilihan segar untuk melengkapi hidangan Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('landing.menu') }}" class="btn btn-primary px-4">
            Lihat Semua Menu
        </a>
    </div>
</section>

<section class="container py-5">
    <div class="row align-items-center bg-light rounded p-4 p-lg-5">
        <div class="col-lg-8">
            <p class="section-title">Reservasi</p>
            <h2 class="fw-bold">Rencanakan Makan Bersama Kami</h2>
            <p class="mb-lg-0">Pesan meja untuk keluarga, teman, atau acara spesial Anda.</p>
        </div>

        <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
            <a href="{{ route('landing.booking') }}" class="btn btn-primary btn-lg">
                Pesan Meja Sekarang
            </a>
        </div>
    </div>
</section>

@endsection
