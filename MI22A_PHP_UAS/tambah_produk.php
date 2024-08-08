<?php
    /**
    * NIM : 2257401085
    * Nama : Lisa Amanda
    * Kelas : MI22A
    */
?>

<?php

    include 'cek_session.php';
    include 'menu.php';
    include 'koneksi.php';

    $id         = "";
    $nama       = "";
    $kategori   = "";
    $deskripsi  = "";
    $gambar     = "";
    $sukses     = "";
    $error      = "";

    if (isset($_GET['op'])) {
        $op = $_GET['op'];
    } else {
        $op = "";
    }

    if ($op == 'edit') {
        $id         = $_GET['id'];
        $sql       = "SELECT * FROM produk WHERE id = '$id'";
        $q1         = mysqli_query($koneksi, $sql);
        $r1         = mysqli_fetch_array($q1);
        $id        = $r1['id'];
        $nama       = $r1['name'];
        $kategori   = $r1['kategori'];
        $deskripsi  = $r1['deskripsi'];
        $gambar     = $r1['gambar'];

        if ($id == '') {
            $error = "Data tidak ditemukan";
        }
    }
    if (isset($_POST['simpan'])) {
        $nama        = $_POST['name'];
        $kategori    = $_POST['kategori'];
        $deskripsi   = $_POST['deskripsi'];
        $gambar      = $_POST['gambar'];


        if ($nama && $kategori && $deskripsi && $gambar) {
            if ($op == 'edit') {
                $sql       = "UPDATE name SET id = '$id', name='$nama', kategori = '$kategori', deskripsi='$deskripsi', gambar='$gambar' where id = '$id'";
                $q1         = mysqli_query($koneksi, $sql);
                if ($q1) {
                    $sukses = "Data berhasil diupdate";
                } else {
                    $error  = "Data gagal diupdate";
                }
            } else {
                $sql   = "INSERT INTO produk(name, kategori, deskripsi, gambar) values ( '$nama','$kategori','$deskripsi','$gambar')";
                $q1     = mysqli_query($koneksi, $sql);
                if ($q1) {
                    $sukses     = "Berhasil memasukkan data baru";
                } else {
                    $error      = "Gagal memasukkan data";
                }
            }
            }   else {
                $error = "Silakan masukkan semua data";
        }
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
         body{
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        } 
        .mx-auto {
           
            position: absolute;
        left: 45%;
        top: 30%;
        transform: translate(-50%,-50%);
        padding: 20px 25px;
        width: 800px;
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        
        <div class="card">
            <div class="card-header">
                Tambah Produk
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=editcb.php");
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:5;url=editcb.php");
                }
                ?>
                <form action="" method="post">
                    <table cellpadding="10px">
                        <h2>Tambah Produk</h2>

                        <tr>
                            <td>Kode Produk</td>
                            <td><input type="text" name="id" id="id"></td>
                        </tr>

                        <tr>
                            <td>Nama Produk</td>
                            <td><input type="text" name="name" id="name"></td>
                        </tr>

                        <tr>
                            <td>Kategori</td>
                            <td>
                                <select name="kategori" id="kategori">
                                    <option value="Pilih Kategori">Pilih Kategori</option>
                                    <option value="0">Baju</option>
                                    <option value="1">Celana</option>
                                    <option value="2">Aksesoris</option>
                                    <option value="3">Tas</option>
                                    <option value="4">Sepatu</option>
                                    <option value="5">Sandal</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Deskripsi</td>
                            <td><textarea rows="5" cols="25"></textarea></td>
                        </tr>

                        <tr>
                            <td>Gambar</td>
                            <td><input type="file" name="file" id="file"></td>
                        </tr>

                        <tr>
                            <td>
                                <td><a href="produk.php">Kembali</a>
                                    <button type="submit" name="simpan">Simpan Produk</button>
                                    
                                </td>
                            </tr>
                                
                    </table>    
                        
            </form>    
                
   

</form>