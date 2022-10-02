<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <title>Dokter</title>
</head>

<body>
    <h2 class="mt-3 text-center">Data Dokter</h2>

    <div class="p-3">
        <table border="1" class="table table-striped">
            <thead>
                <tr>
                    <th>ID Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Jenis Kelamin</th>
                    <th>Keahlian</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <div class="mb-2">

                    <a href="tambah.php" class="btn btn-primary">Tambah</a>
                </div>

                <?php
                $sql = 'SELECT * FROM dokter';
                $query = mysqli_query($db, $sql);

                while ($dokter = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?= $dokter['id_dokter'] ?></td>
                        <td><?= $dokter['nama_dokter'] ?></td>
                        <td><?= $dokter['jekel'] ?></td>
                        <td><?= $dokter['keahlian'] ?></td>
                        <td><?= $dokter['alamat'] ?></td>
                        <td>
                            <a class="btn btn-warning" href="edit.php?id=<?php echo $dokter['id_dokter']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus-aksi.php?id=<?php echo $dokter['id_dokter']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>