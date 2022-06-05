<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSISTEMPENJUALAN</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>THOMASTORE</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#perulangan">PERULANGAN</a></li>
                    <li><a href="#percabangan">PERCABANGAN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- home -->
        <section id="home">
            <img
                src="https://img.freepik.com/free-vector/online-shopping-concept-landing-page_52683-22153.jpg?t=st=1653576485~exp=1653577085~hmac=4010d7acad6e0627ab457d7a67503db997d2427c408a6f10f870f17cf9f355e0&w=626" />
            <div class="kolom">
                <p class="deskripsi">WEB PENJUALAN NO. 1 DI DUNIA</p>
                <h2>THOMASTORE</h2>
                <h5>SELAMAT DATANG DI WEB KAMI!</h5>
            </div>
        </section>

        <!-- about -->
        <section id="about">
            <div class="kolom">
                <p class="deskripsi">ABOUT US</p>
                <h2>THOMASTORE</h2>
                <p>THOMASTORE adalah perusahaan internet yang memungkinkan setiap individu dan pemilik bisnis di
                    Indonesia untuk mengembangkan dan mengelola bisnis online mereka secara mudah dan gratis, sekaligus
                    memungkinkan pengalaman berbelanja online yang lebih aman dan nyaman.</p>
            </div>
            <img src="https://cdn.discordapp.com/attachments/910811122679054348/979416984842289232/tomaslebew.jpg" />
        </section>

        <!-- perulangan -->
        <section id="perulangan">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Contoh Perulangan</p>
                    <?php
                    for ($i = 0; $i < 5; $i++) {
                        echo "<h2>Maaf Sedang Maintenance 🙏</h2>";
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- percabangan -->
        <section id="percabangan">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Percabangan</p>
                    <form action="percabangan.php" target="1" method="post">
                        <h2>masukan ukuran baju
                        </h2>Input ukuran badan<br><br>
                        <input type="text" name="ukuranbaju"><br><br>
                        <iframe name="1" width="500px" height="100px"></iframe><br>
                        <br><input type="submit">
                    </form>
                </div>
            </div>
        </section>
    </div>


</body>

</html>