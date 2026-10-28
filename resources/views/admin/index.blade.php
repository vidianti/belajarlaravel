@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4>Dashboard</h4>
            <p class="text-muted">Selamat datang di panel Admin Upcube.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card"><div class="card-body">
            <h5>Total Pengguna</h5>
            <h3>1.250</h3>
        </div></div>
    </div>
    <div class="col-md-4">
        <div class="card"><div class="card-body">
            <h5>Total Pesanan</h5>
            <h3>850</h3>
        </div></div>
    </div>
    <div class="col-md-4">
        <div class="card"><div class="card-body">
            <h5>Pendapatan</h5>
            <h3>Rp 5.000.000</h3>
        </div></div>
    </div>
</div>
@endsection