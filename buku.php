<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpusku</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }

      .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
      }

      .navbar a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
      }

      .container {
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      .library {
        text-align: center;
        margin-bottom: 20px;
      }

      .pos {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        max-height: 600px;
        overflow-y: auto;
      }

      .card {
        width: calc(25% - 20px);
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        text-align: center;
      }

      .card-image img {
        width: 100%;
        height: auto;
      }

      .card-details {
        padding: 10px;
      }

      .button {
        display: flex;
        justify-content: center;
        gap: 10px;
        padding: 10px;
      }

      .btn {
        padding: 5px 10px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 3px;
      }

      .btn:hover {
        background-color: #0056b3;
      }

      footer {
        text-align: center;
        padding: 20px;
        background-color: #333;
        color: white;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <div class="navbar">
      <div class="left">
        <a href="#"> Home </a>
        <a href="#"> Buku </a>
        <a href="#"> Tentang </a>
        <a href="#"> Kontak Kami </a>
      </div>
      <div class="right">
        <a href="login.php"> Login </a>
        <a href="register.php"> Register </a>
      </div>
    </div>

    <div class="container">
      <div class="library">
        <h2>Selamat Datang!</h2>
        <p>Menyediakan berbagai koleksi buku terbaru</p>
      </div>

      <div class="pos">
        <!-- Card Template (Multiple Cards) -->
        <div class="card">
          <div class="card-image">
            <img src="bumi.jpg" alt="Judul Buku" />
          </div>
          <div class="card-details">
            <h3 class="book-title">Bumi</h3>
            <p class="book-details">Penulis : Tere Liye</p>
            <p class="book-details">Tahun Terbit : 2022</p>
          </div>
          <div class="button">
            <a href="login.php?id=1" class="btn">Pinjam</a>
            <a href="detail.php?id=1" class="btn">Detail</a>
          </div>
        </div>

        <!-- Additional Cards -->
        <div class="card">
          <div class="card-image">
            <img src="matahari.jpg" alt="Judul Buku" />
          </div>
          <div class="card-details">
            <h3 class="book-title">Matahari</h3>
            <p class="book-details">Penulis : Tere Liye</p>
            <p class="book-details">Tahun Terbit : 2018</p>
          </div>
          <div class="button">
            <a href="login.php?id=2" class="btn">Pinjam</a>
            <a href="detail.php?id=2" class="btn">Detail</a>
          </div>
        </div>
        <!-- Repeat similar cards as needed -->

        <!-- More cards can be added here -->
        <div class="card">
          <div class="card-image">
            <img src="bulan.jpg" alt="Judul Buku" />
          </div>
          <div class="card-details">
            <h3 class="book-title">Bulan</h3>
            <p class="book-details">Penulis : Tere Liye</p>
            <p class="book-details">Tahun Terbit : 2022</p>
          </div>
          <div class="button">
            <a href="login.php?id=3" class="btn">Pinjam</a>
            <a href="detail.php?id=3" class="btn">Detail</a>
          </div>
        </div>

        <!-- Example duplicate card for scrolling -->
        <div class="card">
          <div class="card-image">
            <img src="bintang.jpg" alt="Judul Buku" />
          </div>
          <div class="card-details">
            <h3 class="book-title">Bintang</h3>
            <p class="book-details">Penulis : Tere Liye</p>
            <p class="book-details">Tahun Terbit : 2017</p>
          </div>
          <div class="button">
            <a href="login.php?id=4" class="btn">Pinjam</a>
            <a href="detail.php?id=4" class="btn">Detail</a>
          </div>
        </div>
      </div>
    </div>

    <footer>&copy; Pier 2025. Hak Cipta Dilindungi. Made with <span style="color: red;">&#10084;</span> by pier.</footer>
  </body>
</html>
