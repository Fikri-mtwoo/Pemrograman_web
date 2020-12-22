<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="logo"><span>Sekolah Ku</span></div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="home.php?page=tampil_siswa">Data Siswa</a></li>
        </ul>
        <button class="btn">Masuk</button>
    </nav>
    <section>
        <div class="hero">
            <img src="student.png" alt="">
        </div>
        <div class="content">
            <?php include "content.php"?>
        </div>
    </section>
    <footer>&copy; Copy Right Sekolah Ku 2020</footer>
</body>
</html>