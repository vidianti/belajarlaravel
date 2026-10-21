
@extends('landing.layouts.admin')

@section('title', 'Chart')

@section('content')
<div class="row">
    <div class="col-12">
        <h4 class="mb-1">Chart</h4>
        <p class="text-secondary">Grafik ringkasan data produk.</p>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12 col-xl-8">
        <div class="card radius-10">
            <div class="card-body">
                <h5 class="card-title">Data Penjualan Bulanan</h5>
                <div style="height: 320px;">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-xl-4">
        <div class="card radius-10">
            <div class="card-body">
                <h5 class="card-title">Kategori Produk</h5>
                <div style="height: 320px;">
                    <canvas id="categoryChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const salesCanvas = document.getElementById('salesChart');
    const categoryCanvas = document.getElementById('categoryChart');

    if (salesCanvas) {
        new Chart(salesCanvas, {
            type: 'bar',
            data: {
                labels: [
                    'Januari', 'Februari', 'Maret',
                    'April', 'Mei', 'Juni'
                ],
                datasets: [{
                    label: 'Penjualan',
                    data: [12, 19, 10, 25, 18, 30],
                    backgroundColor: '#0d6efd'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    }

    if (categoryCanvas) {
        new Chart(categoryCanvas, {
            type: 'doughnut',
            data: {
                labels: ['Elektronik', 'Aksesori', 'Peralatan'],
                datasets: [{
                    data: [40, 35, 25],
                    backgroundColor: ['#0d6efd', '#198754', '#ffc107']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    }
});
</script>
@endsection
