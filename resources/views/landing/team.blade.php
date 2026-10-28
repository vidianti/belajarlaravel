@extends('layouts.landing')

@section('title', 'Tim Kami')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="section-title">Tim Kami</h5>
            <h2>Kenali Tim Restoran</h2>
        </div>

        <div class="row g-4">
            @php
                $tim = [
                    ['nama' => 'Andi', 'jabatan' => 'Head Chef', 'foto' => 'team-1.jpg'],
                    ['nama' => 'Siti', 'jabatan' => 'Sous Chef', 'foto' => 'team-2.jpg'],
                    ['nama' => 'Budi', 'jabatan' => 'Restaurant Manager', 'foto' => 'team-3.jpg'],
                    ['nama' => 'Dina', 'jabatan' => 'Service Staff', 'foto' => 'team-4.jpg'],
                ];
            @endphp

            @foreach ($tim as $anggota)
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center h-100">
                        <img class="card-img-top"
                             src="{{ asset('templates/landing/img/' . $anggota['foto']) }}"
                             alt="{{ $anggota['nama'] }}">

                        <div class="card-body">
                            <h5>{{ $anggota['nama'] }}</h5>
                            <p>{{ $anggota['jabatan'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection