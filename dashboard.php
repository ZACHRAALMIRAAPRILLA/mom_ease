<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/dashboard.css">
</head>

<body>

    <div class="main-content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-8">
                    <h4>Manajemen Pengguna</h4>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search user by name or username">
                        <button class="btn btn-outline-secondary">Filter</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>NAMA</th>
                                    <th>STATUS PENGGUNA</th>
                                    <th>ROLE PENGGUNA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>dr.Teuku Aldi Aulia,SpOg</td>
                                    <td><span class="badge bg-success">Availabe</span></td>
                                    <td>Dokter</td>
                                </tr>
                                <tr>
                                    <td>dr.jaracomel,SpOg-KFM</td>
                                    <td><span class="badge bg-success">Availabe</span></td>
                                    <td>Dokter</td>
                                </tr>
                                <tr>
                                    <td>dr. Rizki Ananda,SpOg-KFER</td>
                                    <td><span class="badge bg-warning">Non Availabe</span></td>
                                    <td>Dokter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Today</h4>
                    <div class="border p-3">
                        <div class="d-flex justify-content-between">
                            <span>4 October, 2024</span>
                            <div>
                                <button class="btn btn-outline-secondary btn-sm"><i class="fa fa-arrow-left"></i></button>
                                <button class="btn btn-outline-secondary btn-sm"><i class="fa fa-arrow-right"></i></button>
                            </div>
                        </div>
                        <table class="table table-sm mt-3 text-center">
                            <thead>
                                <tr>
                                    <th>Sun</th>
                                    <th>Mon</th>
                                    <th>Tue</th>
                                    <th>Wed</th>
                                    <th>Thu</th>
                                    <th>Fri</th>
                                    <th>Sat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td class="table-primary">4</td>
                                    <td>5</td>
                                </tr>
                                <!-- Add more weeks as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <h4>Grafik Jumlah Pasien</h4>
                    <canvas id="patientChart" width="400" height="200"></canvas>
                </div>
                <div class="col-md-4">
                    <h4>Laporan Medis</h4>
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pasien</th>
                                    <th>Diagnosis</th>
                                    <th>Status</th>
                                    <th>Tanggal Laporan</th>
                                    <th>Tindakan Admin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>pipuy</td>
                                    <td>Pembekuan darah</td>
                                    <td>Diajukan</td>
                                    <td>October 30, 2024</td>
                                    <td><a href="#">Lihat</a> | <a href="#">Tindak</a></td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (Popper.js) --
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>F
<!- Chart.js for the chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Initialize chart
        const ctx = document.getElementById('patientChart').getContext('2d');
        const patientChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                datasets: [{
                    label: 'Minggu ini',
                    data: [3, 7, 4, 5, 8, 6, 9],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false,
                }, {
                    label: 'Minggu lalu',
                    data: [2, 5, 3, 6, 7, 4, 8],
                    borderColor: 'rgba(153, 102, 255, 1)',
                    fill: false,
                }]
            }
        });
    </script>
</body>

</html>