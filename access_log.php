<?php
session_start();

// Oturum kontrolü
if (!isset($_SESSION['username'])) {
    header('Location: admin_log.php'); // Kullanıcı oturum açmamışsa log.php sayfasına yönlendir
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Log</title>
    <!-- Bootstrap CSS bağlantısı -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Access Log Verileri</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Ülke</th>
                <th>IP</th>
                <th>Cihaz Sistemi</th>
                <th>Ziyaret Tarihi</th>
                <th>Ziyaret Saati</th>
                <th>Ziyaret Edilen Sayfa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Access log verilerini okuyun ve tabloya ekleyin (access_log.txt dosyasından al)
            $log_content = file_get_contents('access_log.txt');
            $log_lines = explode(PHP_EOL, $log_content);

            foreach ($log_lines as $log_line) {
                if (!empty($log_line)) {
                    $log_data = explode("\t", $log_line);
                    echo "<tr>";
                    echo "<td>" . $log_data[0] . "</td>";
                    echo "<td><span style='color:red;'>" . $log_data[1] . "</span></td>";
                    echo "<td>" . $log_data[2] . "</td>";
                    echo "<td>" . date("Y-m-d", strtotime($log_data[3])) . "</td>";
                    echo "<td>" . date("H:i:s", strtotime($log_data[3])) . "</td>";
                    echo "<td>" . $log_data[4] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS ve jQuery bağlantıları -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>





















