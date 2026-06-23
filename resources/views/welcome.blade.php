<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Sembako KDKMP</title>

    @vite('resources/css/app.css')
</head>
<body>

    <!-- Navbar -->
    <header>
        <div class="container">
            <h1>KDKMP ROBBY</h1>
            <nav>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Produk</a></li>
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <h2>Kedai Sembako KDKMP</h2>
        <p>Menyediakan kebutuhan pokok lengkap dengan harga terjangkau.</p>
        <a href="/produk" class="btn">
    Belanja Sekarang
</a>
    </section>

    <!-- Kategori -->
    <section class="kategori">
        <h2>Kategori Produk</h2>

        <div class="kategori-box">
            <div class="card">Beras</div>
            <div class="card">Minyak Goreng</div>
            <div class="card">Gula</div>
            <div class="card">Mie Instan</div>
        </div>
    </section>

    <!-- Produk -->
    <section class="produk">
        <h2>Produk Unggulan</h2>

        <div class="produk-container">

            <div class="produk-card">
                <img src="https://down-id.img.susercontent.com/file/b6ec2a01ea3fa65ff00ee730eb81d013" alt="Beras">
                <h3>Beras Premium 5 Kg</h3>
                <p>Rp75.000</p>
            </div>

            <div class="produk-card">
                <img src="https://cf.shopee.co.id/file/32fb803d7603c5c12ebff64d9efc85c9" alt="Minyak">
                <h3>Minyak Goreng 2 Liter</h3>
                <p>Rp38.000</p>
            </div>

            <div class="produk-card">
                <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98o-lxmyb4hljjfy9a" alt="Gula">
                <h3>Gula Pasir 1 Kg</h3>
                <p>Rp18.000</p>
            </div>

        </div>
    </section>

    <!-- Tentang -->
    <section class="tentang">
        <h2>Tentang KDKMP</h2>
        <p>
            KDKMP Kedai Kelontong Robby adalah toko kelontong yang menyediakan berbagai kebutuhan sehari-hari dengan harga terjangkau dan kualitas terbaik. Kami berkomitmen memberikan pelayanan yang ramah, produk yang lengkap, serta kemudahan berbelanja bagi masyarakat sekitar.

Dengan mengutamakan kepuasan pelanggan, KDKMP Kedai Kelontong Robby hadir sebagai solusi kebutuhan rumah tangga yang praktis, nyaman, dan terpercaya.
    </section>

    <!-- Footer -->
    <footer>
        <p>© Kedai Sembako KDKMP Robby Afrian Prima</p>
    </footer>

</body>
</html>