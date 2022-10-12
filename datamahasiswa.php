<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Perpustakaan</title>
</head>
<body>
    <h3>Data Mahasiswa</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>ALAMAT</th>
                <th>PASSWORD</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include"koneksi.php";
            $qry_mahasiswa=mysqli_query($koneksi,"select * from mahasiswa");
            $no=0;
            while($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)){
            $no++;?>
            <tr>
                <td><?=$no?></td>
                <td><?=$data_mahasiswa['nama']?></td> 
                <td><?=$data_mahasiswa['nim']?></td>
                <td><?=$data_mahasiswa['alamat']?></td> 
                <td><?=$data_mahasiswa['password']?></td> 
                <td><a href="edit.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>" class="btn btn-success">Edit</a> | 
                <a href="hapus.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

