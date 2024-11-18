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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="asset/dashboard.css">
</head>
<body>

<!-- Sidebar -->
<div class="d-flex">
    <div class="bg-dark text-white sidebar p-3">
        <!-- Sidebar Image -->
        <div class="text-center mb-3">
            <img src="asset/images/logomomease.png" alt="Logo" class="img-fluid" style="max-width: 180px; border-radius: 50%;">
        </div>
        
        
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="dashboard" class="nav-link text-white active">
                    <i class="fa fa-dashboard me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="LaporandanStatistik" class="nav-link text-white">
                    <i class="fa fa-bar-chart me-2"></i> Laporan Dan Statistik
                </a>
            </li>
            <li class="nav-item">
                <a href="dokter" class="nav-link text-white">
                    <i class="fa fa-calendar me-2"></i> Jadwal Dokter
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
