@extends('layout.admin_layout')

@section('content')

<h2 class="mb-4">Dashboard Sistem ATK</h2>

<div class="row">

    <!-- CARD: Total Stok -->
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Total Jenis ATK</h6>
                <h3>45</h3>
            </div>
        </div>
    </div>

    <!-- CARD: Pengambilan Bulan Ini -->
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Pengambilan Bulan Ini</h6>
                <h3>180</h3>
            </div>
        </div>
    </div>

    <!-- CARD: Pegawai Mengambil -->
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6>Pegawai yang Mengambil</h6>
                <h3>58 Pegawai</h3>
            </div>
        </div>
    </div>

</div>

<!-- GRAFIK -->
<div class="card shadow-sm mt-4">
    <div class="card-header">Grafik Pengambilan ATK Per Bulan</div>
    <div class="card-body">
        <canvas id="atkChart" height="80"></canvas>
    </div>
</div>

<!-- TABLE -->
<div class="card shadow-sm mt-4">
    <div class="card-header">Riwayat Pengambilan Terbaru</div>
    <div class="card-body">

        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nama Pegawai</th>
                <th>ATK</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>1</td>
                <td>Rina Amelia</td>
                <td>Bolpoin</td>
                <td>5</td>
                <td>20 Nov 2025</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ahmad Fikri</td>
                <td>Kertas A4</td>
                <td>2 Rim</td>
                <td>19 Nov 2025</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Siti Nurhaliza</td>
                <td>Stabilo</td>
                <td>3</td>
                <td>19 Nov 2025</td>
            </tr>
            </tbody>

        </table>

    </div>
</div>

@endsection

@section('chart')
<script>
    const ctx = document.getElementById('atkChart');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
            datasets: [{
                label: 'Pengambilan ATK',
                data: [140, 160, 180, 210, 190, 230],
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'blue',
                borderWidth: 2
            }]
        }
    });
</script>
@endsection
