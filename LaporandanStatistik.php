<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<!-- Main Content -->
<div class="main-content" style="margin-left: 270px; padding: 20px;">
    <!-- Header Section -->
    <div class="header">
        <h2>Laporan Dan Statistik</h2>
        <p>Grafik Laporan berdasarkan data</p>
    </div>

    <!-- KPI Boxes -->
    <div style="display: flex; gap: 20px; margin-bottom: 20px;">
        <div style="background-color: #f8f9fa; padding: 20px; border-radius: 5px; width: 150px;">
            <h5>04 October 2024</h5>
            <p>11 Jam Kerja</p>
        </div>
        <div style="background-color: #f8f9fa; padding: 20px; border-radius: 5px; width: 150px;">
            <p>Lakukan penjadwalan dengan teliti</p>
            <p>8:00 AM</p>
            <input type="checkbox" checked>
        </div>
    </div>

    <!-- Chart and Data Panels -->
    <div style="display: flex; gap: 20px;">
        <div style="flex: 2; background-color: white; padding: 20px; border-radius: 5px;">
            <h5>Kunjungan Pasien dan Resep</h5>
            <div style="background-color: #e9ecef; height: 200px; border-radius: 5px;">
                <!-- Placeholder for Chart -->
                <p style="text-align: center; padding-top: 80px;">Chart Placeholder</p>
            </div>
        </div>
        <div style="flex: 1; background-color: white; padding: 20px; border-radius: 5px; text-align: center;">
            <h5>Oktober 2024</h5>
            <h1>45623</h1>
            <p>Pengunjung Bulan</p>
            <p>Ini Sangat Memuaskan</p>
        </div>
    </div>

    <div style="margin-top: 20px;">
        <div style="background-color: white; padding: 20px; border-radius: 5px;">
            <h5>Statistik Kunjungan</h5>
            <table style="width: 100%; text-align: left; border-collapse: collapse;">
                <tr>
                    <th>Bulan</th>
                    <th>Jumlah</th>
                    <th>Perubahan</th>
                </tr>
                <tr>
                    <td>Januari</td>
                    <td>1500</td>
                    <td><i class="fa fa-arrow-up" style="color: green;"></i></td>
                </tr>
                <tr>
                    <td>Februari</td>
                    <td>500</td>
                    <td><i class="fa fa-arrow-down" style="color: red;"></i></td>
                </tr>
                <tr>
                    <td>Maret</td>
                    <td>1450</td>
                    <td><i class="fa fa-arrow-up" style="color: green;"></i></td>
                </tr>
            </table>
            <button style="margin-top: 10px; width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px;">Details</button>
        </div>
    </div>
</div>

</body>
</html>
