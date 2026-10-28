
@extends('layouts.admin')

@section('title', 'Calendar')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Calendar</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <button type="button" class="btn btn-outline-primary"
                        onclick="ubahBulan(-1)">
                    &laquo; Sebelumnya
                </button>

                <h5 id="judul-bulan" class="mb-0"></h5>

                <button type="button" class="btn btn-outline-primary"
                        onclick="ubahBulan(1)">
                    Berikutnya &raquo;
                </button>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-light">
                        <tr>
                            <th>Min</th>
                            <th>Sen</th>
                            <th>Sel</th>
                            <th>Rab</th>
                            <th>Kam</th>
                            <th>Jum</th>
                            <th>Sab</th>
                        </tr>
                    </thead>
                    <tbody id="isi-kalender"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    let tanggalAktif = new Date();

    function tampilkanKalender() {
        const tahun = tanggalAktif.getFullYear();
        const bulan = tanggalAktif.getMonth();

        const namaBulan = [
            'Januari', 'Februari', 'Maret', 'April',
            'Mei', 'Juni', 'Juli', 'Agustus',
            'September', 'Oktober', 'November', 'Desember'
        ];

        document.getElementById('judul-bulan').textContent =
            namaBulan[bulan] + ' ' + tahun;

        const hariPertama = new Date(tahun, bulan, 1).getDay();
        const jumlahHari = new Date(tahun, bulan + 1, 0).getDate();

        let html = '<tr>';
        for (let i = 0; i < hariPertama; i++) {
            html += '<td></td>';
        }

        for (let hari = 1; hari <= jumlahHari; hari++) {
            const tanggal = new Date(tahun, bulan, hari);
            const hariIni = new Date();

            const aktif =
                tanggal.toDateString() === hariIni.toDateString();

            html += '<td class="' +
                (aktif ? 'bg-primary text-white' : '') +
                '">' + hari + '</td>';

            if (tanggal.getDay() === 6 && hari !== jumlahHari) {
                html += '</tr><tr>';
            }
        }

        const sisa = (7 - new Date(tahun, bulan, jumlahHari).getDay() - 1 + 7) % 7;
        for (let i = 0; i < sisa; i++) {
            html += '<td></td>';
        }

        html += '</tr>';
        document.getElementById('isi-kalender').innerHTML = html;
    }

    function ubahBulan(arah) {
        tanggalAktif.setMonth(tanggalAktif.getMonth() + arah);
        tampilkanKalender();
    }

    tampilkanKalender();
</script>
@endpush
