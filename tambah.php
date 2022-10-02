<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

    <title>Tambah Data</title>
</head>

<body>
    <div class="p-3">
        <h2 class="text-center">Tambah Dokter</h2>
        <br />
        <a class="btn btn-success" href="dokter.php"><i class="fa fa-long-arrow-left"></i>Kembali</a>
        <br />
        <br />
        <h3>Tambah Data Mahasiswa</h3>
        <form method="post" action="tambah-aksi.php">
            <table>
                <tr>
                    <td>ID Dokter</td>
                    <td><input type="text" name="id_dokter"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama_dokter"></td>
                </tr>
                <tr>
                    <td>Jekel</td>
                    <td><input type="text" name="jekel"></td>
                </tr>
                <tr>
                    <td>Keahlian</td>
                    <td><input type="text" name="keahlian"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>

        <!-- <form method="post" action="tambah-aksi.php">
            <div class="form-group mb-2">
                <label for="">ID Dokter</label>
                <input type="text" class="form-control" id="id_dokter" name="id_dokter" placeholder="ID Dokter">
            </div>
            <div class="form-group mb-2">
                <label for="">Nama</label>
                <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" placeholder="Nama Dokter">
            </div>
            <div class="form-group mb-2">
                <label>Jekel</label>
                <input type="text" class="form-control" id="jekel" name="jekel" placeholder="Jenis Kelamin">
            </div>
            <div class="form-group mb-2">
                <label>Keahlian</label>
                <input type="text" class="form-control" id="keahlian" name="keahlian" placeholder="Keahlian">
            </div>
            <div class="form-group mb-3">
                <label>Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form> -->
    </div>
</body>

</html>
</body>

</html>