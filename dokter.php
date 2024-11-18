<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Jadwal Dokter</title>
    <link rel="stylesheet" href="asset/dokter.css">
</head>
<body>

    <!-- Main Content -->
    <div class="main-content" style="margin-left: 270px; padding: 20px;">
        <div class="header">
            <div class="title">
                <h1>Kelola Jadwal Dokter</h1>
                <p>Jadwal Harian Dokter</p>
            </div>
            <div class="work-hours">
                <p><strong>11</strong> Jam Kerja</p>
            </div>
            <div class="date">
                <?php echo date("d F Y"); ?>
            </div>
        </div>

        <!-- Doctor Schedule Table -->
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Ruang</th>
                    <th>Jam</th>
                    <th>Tindakan Admin</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Sample data array for doctors' schedules
                $doctors = [
                    ["dr.Teuku Aldi Aulia,SpOg", "Kebidanan dan Kandungan", "1", "08.00 - 12.00 WIB"],
                    ["dr.jaracomel,SpOg-KFM", "Fetomaternal", "2", "09.00 - 13.00 WIB"],
                    ["dr. Rizki Ananda,SpOg-KFER", "Endokrin dan Fertilitas", "3", "10.00 - 14.00 WIB"],
                    ["dr. cut raysha kecebong,SpOg(K)Onk", "Onkologi Ginekologi ", "4", "11.00 - 15.00 WIB"],
                ];
                
                // Display data in table rows
                $no = 1;
                foreach ($doctors as $doctor) {
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>{$doctor[0]}</td>";
                    echo "<td>{$doctor[1]}</td>";
                    echo "<td>{$doctor[2]}</td>";
                    echo "<td>{$doctor[3]}</td>";
                    echo "<td><a href='#'>Tambah</a> | <a href='#'>Edit</a> | <a href='#'>Hapus</a></td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
