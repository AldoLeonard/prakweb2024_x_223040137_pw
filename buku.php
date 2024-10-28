<?php
$conn = new mysqli("localhost", "root", "", "prakweb_2024_x_223040137");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
<?php
$query = "SELECT * FROM buku";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Data Buku</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Data Buku</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id_buku']; ?></td>
                        <td><?php echo $row['judul']; ?></td>
                        <td><?php echo $row['penulis']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php $conn->close(); ?>
