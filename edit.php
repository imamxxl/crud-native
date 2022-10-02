<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <title>Edit</title>
</head>

<body>
    <div class="p-3">
        <h2 class="text-center">Edit Dokter</h2>
        <br />
        <a class="btn btn-success" href="dokter.php"><i class="fa fa-long-arrow-left"></i>Kembali</a>
        <br />
        <br />
        <h3>Tambah Data Mahasiswa</h3>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($db, "select * from dokter where id_dokter='$id'");
        while ($dokter = mysqli_fetch_array($data)) {
        ?>
            <form method="post" action="edit-aksi.php">
                <div class="form-group mb-2">
                    <label for="">ID Dokter</label>
                    <input type="text" class="form-control" id="id_dokter" name="id_dokter" placeholder="ID Dokter" readonly value="<?php echo $dokter['id_dokter']; ?>">
                </div>
                <div class="form-group mb-2">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" placeholder="Nama Dokter" value="<?php echo $dokter['nama_dokter']; ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Jekel</label>
                    <input type="text" class="form-control" id="jekel" name="jekel" placeholder="Nama Dokter" value="<?php echo $dokter['jekel']; ?>">
                </div>
                <div class="form-group mb-2">
                    <label>Keahlian</label>
                    <input type="text" class="form-control" id="keahlian" name="keahlian" placeholder="Keahlian" value="<?php echo $dokter['keahlian']; ?>">
                </div>
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"  value="<?php echo $dokter['alamat']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>