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
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>
    <style>
     body{
        height: 100vh;
        background-image: url(img/awan2.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
       
    }      
    .container{
        position: absolute;
        left: 30%;
        top: 25%;
        transform: translate(-50%,-50%);
        padding: 20px 25px;
        width: 300px;
        background-color: #acef8e;
        box-shadow: 0 0 10px rgba(255,255,255,.3);
    }
    .container form h2{
        text-align: left;
        color: black;
        margin-bottom: 30px;
        border-bottom: 4px solid #73bf51;;
    }
    .container label{
        text-align: left;
        color: black;
    }
    .container form input{
        width: calc(100% - 20px);
        padding: 8px 10px;
        margin-bottom: 15px;
        border: none;
        background-color: #73bf51;
        border-bottom: 2px solid #73bf51;;
        color: black;
        font-size: 20px;
    }
    .container form button{
        width: 100%;
        padding: 5px 0;
        border: none;
        background-color:#73bf51;;
        font-size: 18px;
        color: black;
    }   
    .container form a{
        text-align: left;
        color: darkblue;
    }

    </style>

</head>
    <body>
        <div class="container border">
            <div class="row align-items-center py-3 px-xl-5">
                <div>
                    <form action="" method="post">
                        <table cellpadding="10px">
                            <h2>Tambah Kategori</h2>

                            <tr>
                                <td>Nama Kategori</td>
                                <td><input type="text" name="name" id="name"></td>
                            </tr>

                            <tr>
                                <td>
                                    <td><a href="kategori.php">Kembali</a>
                                        <button type="submit" name="simpan">Simpan Kategori</button>
                                        
                                    </td>
                                </tr>
                                    
                        </table>    
                            
                    </form>    

                    <?php 
                        if (isset($_POST['simpan'])) {
                            include 'koneksi.php';

                            $nama = $_POST['name'];

                            $sql = "INSERT INTO kategori (nama_kategori)VALUES ('$nama');";
                            $result = mysqli_query($koneksi, $sql);

                            if ($result) {
                                $_SESSION['success'] = "Kategori Berhasil ditambah";
                                header('location: kategori.php');
                        
                            } else {
                                echo "<span style='color:red'>"."FILED";
                            }
                        }
                    ?>
                </div>
            </div>     
        </div>
    </body>
</html>	
