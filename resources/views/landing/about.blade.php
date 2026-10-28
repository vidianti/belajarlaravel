@extends('layouts.landing')

@section('title', 'Tentang Kami')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <img class="img-fluid rounded"
                             src="{{ asset('templates/landing/img/about-1.jpg') }}"
                             alt="Restoran">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid rounded"
                             src="{{ asset('templates/landing/img/about-2.jpg') }}"
                             alt="Hidangan">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid rounded"
                             src="{{ asset('templates/landing/img/about-3.jpg') }}"
                             alt="Suasana restoran">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid rounded"
                             src="{{ asset('templates/landing/img/about-4.jpg') }}"
                             alt="Makanan">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h5 class="section-title">Tentang Kami</h5>
                <h2 class="mb-4">Selamat Datang di Restoran</h2>
                <p>Kami berkomitmen menyajikan makanan yang lezat
                   dengan bahan berkualitas.</p>
                <p>Pelayanan yang ramah dan suasana nyaman menjadi
                   prioritas kami.</p>
                <a href="{{ route('landing.booking') }}"
                   class="btn btn-primary py-3 px-5">
                    Reservasi Sekarang
                </a>
            </div>
        </div>
    </div>
</div>
@endsection