@extends('layouts.landing')

@section('title', 'Reservasi')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-title">Reservasi</h5>
                <h2 class="text-primary mb-4">Pesan Meja Anda</h2>
                <p>Silakan isi formulir untuk mengajukan reservasi meja.</p>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="#" method="POST">
                            @csrf

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control"
                                           placeholder="Nama lengkap" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control"
                                           placeholder="Email" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Jumlah Orang</label>
                                    <select class="form-select">
                                        <option>1 orang</option>
                                        <option>2 orang</option>
                                        <option>3 orang</option>
                                        <option>4 orang</option>
                                        <option>5 orang atau lebih</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Permintaan Khusus</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="button"
                                            class="btn btn-primary w-100 py-3">
                                        Ajukan Reservasi
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection