@extends('layouts.landing')

@section('title', 'Menu')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title">Menu Kami</h5>
            <h2>Menu Populer</h2>
        </div>

        <div class="row g-4">
            @php
                $menus = [
                    ['nama' => 'Menu Spesial 1', 'harga' => 'Rp 35.000', 'gambar' => 'menu-1.jpg'],
                    ['nama' => 'Menu Spesial 2', 'harga' => 'Rp 40.000', 'gambar' => 'menu-2.jpg'],
                    ['nama' => 'Menu Spesial 3', 'harga' => 'Rp 30.000', 'gambar' => 'menu-3.jpg'],
                    ['nama' => 'Menu Spesial 4', 'harga' => 'Rp 45.000', 'gambar' => 'menu-4.jpg'],
                    ['nama' => 'Menu Spesial 5', 'harga' => 'Rp 25.000', 'gambar' => 'menu-5.jpg'],
                    ['nama' => 'Menu Spesial 6', 'harga' => 'Rp 32.000', 'gambar' => 'menu-6.jpg'],
                    ['nama' => 'Menu Spesial 7', 'harga' => 'Rp 38.000', 'gambar' => 'menu-7.jpg'],
                    ['nama' => 'Menu Spesial 8', 'harga' => 'Rp 42.000', 'gambar' => 'menu-8.jpg'],
                ];
            @endphp

            @foreach ($menus as $menu)
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <img class="card-img-top"
                             src="{{ asset('templates/landing/img/' . $menu['gambar']) }}"
                             alt="{{ $menu['nama'] }}">

                        <div class="card-body">
                            <h5>{{ $menu['nama'] }}</h5>
                            <p class="text-primary fw-bold">
                                {{ $menu['harga'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection