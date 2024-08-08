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

    $sql = "SELECT id, name, kategori, FROM produk";
    $query = mysqli_query($koneksi, $sql); 

    if (isset($_GET['op'])) {
        $op = $_GET['op'];
    } else {
        $op = "";
    }
    
    if ($op == 'edit') {
        $id         = $_GET['id'];
        $sql       = "SELECT name,kategori FROM produk WHERE id = '$id'";
        $q1         = mysqli_query($koneksi, $sql);
        $r1         = mysqli_fetch_array($q1);
        $id        = $r1['id'];
        $nama       = $r1['name'];
        $kategori   = $r1['kategori'];
    
        if ($id == '') {
            $error = "Data tidak ditemukan";
        }
    }
?>

<style>
     body{
        font-family: 'Times New Roman';
        margin: 0;
        padding: 0;
        display: flex;
    }  
    .category {
        width: 500px;
        padding: 20px;
    }
    .text-gray {
	    color: grey;
    }
    .category table th{
        background-color:#73bf51;;
        color: white;
        border: 1px solid black;
        padding: 15px;
        text-align: left;
    }
    .category table td{
        background-color:#acef8e;;
        border: 1px solid black;
        padding: 15px;
        text-align: left;
    }
 
</style>
<body>
    <div class="category">
        <div style="display:flex; gap: 1em">        
            <div class="row align-items-center py-3 px-xl-5">    
                
                <h3>-- Produk --</h3>

                <form action="tambah_produk.php" method="get">
                <button type="submit" name="tambah">Tambah Produk</button>
                <br><br>
                </form>

                <p>
                    <?php
                    if(isset($_SESSION['error'])) {
                    echo   "<span style='color:red'>" .  $_SESSION['error'] . "</span>";
                    unset($_SESSION['error']);
                    }
                    
                    if(isset($_SESSION['success'])) {
                        echo   "<span style='color:green'>" .  $_SESSION['success'] . "</span>";
                        unset($_SESSION['success']);
                        }
                   ?>
                </p>

                <table cellspacing="0" cellpading="8px" border="1">
                    <tr>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>

                    <?php
                        include 'koneksi.php';

                        $sql = "SELECT id, name, kategori FROM produk";
                        $query = mysqli_query($koneksi, $sql);
                    ?>
                    <?php
                        
                    ?>

                    <?php while($row = mysqli_fetch_assoc($query)) : ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['kategori']; ?></td>
                            <td>
                                <a href="edit_produk.php?id=<?php echo $row['id'] ?>">Edit</a>
                                <a href="hapus_produk.php?id=<?php echo $row['id'] ?>">Hapus</a>
                            </td>
                    
                        </tr>
                    <?php endwhile; ?>    
                </table>

            </div>
        </div>
    </div>
</body>
