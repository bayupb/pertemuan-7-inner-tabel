<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Inner-Join Database</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h4>Berikut adalah tugas pertemuan 7 - Menampilkan Data Table MYSQL</h4>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <table class="table table-light table-sm table-bordered table-striped">
                <h4>Table Mahasiswa</h4>
                <thead>
                    <tr>
                        <th>Nim Mhs</th>
                        <th>Nama Mhs</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM mahasiswa';
        $query = mysqli_query($tersambung, $sql);
        while ($row = mysqli_fetch_array($query)){
        ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['nim_mhs']?></td>
                        <td><?php echo $row['nama_mhs']?></td>
                        <td><?php echo $row['alamat']?></td>
                    </tr>
                </tbody>
                <?php
        }
        ?>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <table class="table table-light table-sm table-bordered table-striped">
                <h4>Table Perpustakaan</h4>
                <thead>
                    <tr>
                        <th>Kode Buku</th>
                        <th>Nama Buku</th>
                    </tr>
                </thead>
                <?php
        include 'koneksi.php';
        $sql = 'SELECT * FROM perpustakaan';
        $query = mysqli_query($tersambung, $sql);
        while ($row = mysqli_fetch_array($query)){
        ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['kode_buku']?></td>
                        <td><?php echo $row['nama_buku']?></td>
                    </tr>
                </tbody>
                <?php
        }
        ?>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <table class="table table-light table-sm table-bordered table-striped">
                <h4>Table Menampilakn data mahasiswa dari tabel pelanggan beserta proses penginputannya</h4>
                <thead>
                    <tr>
                        <th>Nim Mhs</th>
                        <th>Nama Mhs</th>
                        <th>Jumlah Buku</th>
                        <th>Tanggal Proses</th>
                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $sql = ' SELECT ms.nim_mhs, nama_mhs, jumlah_buku, timestamp
                FROM mahasiswa ms
                JOIN proses ps USING(nim_mhs)';
                $query = mysqli_query($tersambung, $sql);
                while ($row = mysqli_fetch_array($query)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['nim_mhs']?></td>
                        <td><?php echo $row['nama_mhs']?></td>
                        <td><?php echo $row['jumlah_buku']?></td>
                        <td><?php echo $row['timestamp']?></td>
                    </tr>
                </tbody>
                <?php
        }
        ?>
            </table>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <table class="table table-light table-sm table-bordered table-striped">
                <h4>Table Menampilkan data mahasiswa dari tabel pelanggan beserta proses penginputannya</h4>
                <thead>
                    <tr>
                        <th>Nim Mhs</th>
                        <th>Nama Mhs</th>
                        <th>Kode Buku</th>
                        <th>Jumlah Buku</th>
                        <th>Tanggal Proses</th>
                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $sql = ' SELECT ms.nim_mhs, kode_buku, nama_mhs, jumlah_buku, timestamp
                FROM mahasiswa ms
                LEFT JOIN proses ps USING(nim_mhs)';
                $query = mysqli_query($tersambung, $sql);
                while ($row = mysqli_fetch_array($query)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['nim_mhs']?></td>
                        <td><?php echo $row['nama_mhs']?></td>
                        <td><?php echo $row['kode_buku']?></td>
                        <td><?php echo $row['jumlah_buku']?></td>
                        <td><?php echo $row['timestamp']?></td>
                    </tr>
                </tbody>
                <?php
        }
        ?>
            </table>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>