<?php
    /**
    * NIM : 2257401085
    * Nama : Lisa Amanda
    * Kelas : MI22A
    */
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .main {
        display: flex;
    }
    .side-nav {
        background: #acef8e;
        ;
        width: 25vw;
        max-width: 200px;
        height: 100vh;
    }

    .side-nav nav {
        display: flex;
        flex-direction: column;
    }

    .side-nav nav a {
        font-family: 'Times New Roman';
        text-decoration: none;
        color: black;
        padding: 0.8rem;
    }

    .side-nav nav a:hover {
        background-color: rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>
<aside class="side-nav">
	<nav>
		<a href="admin.php">Beranda</a>
		<a href="produk.php">Produk</a>
		<a href="kategori.php">Kategori</a>
		<a href="logout.php">Logout</a>
	</nav>
</aside>
</body>
</html>