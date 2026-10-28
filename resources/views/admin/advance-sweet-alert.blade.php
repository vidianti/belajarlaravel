
@extends('layouts.admin')

@section('title', 'Sweet Alerts')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Sweet Alerts</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5>Contoh Notifikasi</h5>
            <p>Klik tombol untuk mencoba notifikasi.</p>

            <button type="button" class="btn btn-primary"
                    onclick="tampilkanAlert()">
                Tampilkan Alert
            </button>

            <button type="button" class="btn btn-success"
                    onclick="tampilkanSukses()">
                Notifikasi Sukses
            </button>

            <button type="button" class="btn btn-danger"
                    onclick="tampilkanError()">
                Notifikasi Error
            </button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function tampilkanAlert() {
        Swal.fire({
            title: 'Halo!',
            text: 'Sweet Alerts berhasil dijalankan.',
            icon: 'info',
            confirmButtonText: 'Oke'
        });
    }

    function tampilkanSukses() {
        Swal.fire({
            title: 'Berhasil!',
            text: 'Notifikasi sukses berfungsi.',
            icon: 'success',
            confirmButtonText: 'Oke'
        });
    }

    function tampilkanError() {
        Swal.fire({
            title: 'Terjadi Kesalahan',
            text: 'Ini contoh notifikasi error.',
            icon: 'error',
            confirmButtonText: 'Tutup'
        });
    }
</script>
@endpush
