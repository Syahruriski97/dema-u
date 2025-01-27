<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kementrian - Kabinet Indrapatra</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    // Include Header
    function renderHeader() {
        echo '
        <header class="header">
            <div class="header-container">
                <div class="logo-section">
                    <img src="https://s3-alpha-sig.figma.com/img/9c3c/c00d/1d14d3819a890a3bfea17761bb66a47f?Expires=1732492800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=lgSgf4ELjwqpUvQZgNlgldKO2cSpBtfROa8N4G8muikJRmAe7aHKsCFA2kCy0dL3cGbyWotWS-G9Ad4gI9iGIxADZL~OPP1VwHpoCKb7QoYY~mbJtJSjQGDQoOr6rV6rQDsDnDwP8wIkSg93N1WjnQvOiyjhGfh0RKVEohsBODZZKQrRth20khpjOZTWgdM23qgVl0BeLQdqgHyWd9MGEUCVpAKvjdqJ8SgaGNEBHWEs3~K91hAWMm6oqX-~AoJYVnK0jKk58sqCSdHbh1ofCTBH8o~FnlDriudj71QjGHOSZnanv038aaJaDxalTQ0p4KmBepYAkRyBEY0rBnRzIQ__" alt="Logo Kabinet Indrapatra" class="logo">
                    <div class="header-text">
                        <h1>KABINET</h1>
                        <h2>INDRAPATRA</h2>
                        <h3>DEMA UIN AR-RANIRY</h3>
                    </div>
                </div>
                <nav class="navbar">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="profil.php">Profil</a></li>
                        <li><a href="kementrian.php">Kementrian</a></li>
                        <li><a href="layanan.php">Layanan Mahasiswa</a></li>
                    </ul>
                </nav>
            </div>
        </header>';
    }

    // Render Header
    renderHeader();
    ?>

    <!-- Kementrian Section -->
    <section id="kementrian" class="kementrian-section">
        <div class="kementrian-container">
            <h1>Kementrian Kabinet Indrapatra</h1>
            <p>Kementrian Kabinet Indrapatra memiliki visi untuk menciptakan lingkungan mahasiswa yang inklusif, inovatif, dan berdaya saing global. Berdasarkan nilai-nilai dari Benteng Indra Patra, berikut adalah daftar kementrian:</p>
            <div class="kementrian-list">
                <div class="kementrian-item">
                    <h2>Kementrian Pendidikan</h2>
                    <p>Meningkatkan kualitas pendidikan melalui program pelatihan, seminar, dan dukungan akademik untuk mahasiswa.</p>
                </div>
                <div class="kementrian-item">
                    <h2>Kementrian Sosial</h2>
                    <p>Mengkoordinasikan program sosial dan pengabdian kepada masyarakat, termasuk bantuan untuk mahasiswa kurang mampu.</p>
                </div>
                <div class="kementrian-item">
                    <h2>Kementrian Seni dan Budaya</h2>
                    <p>Melestarikan budaya Aceh melalui kegiatan seni, musik, dan festival budaya yang melibatkan mahasiswa dan masyarakat.</p>
                </div>
                <div class="kementrian-item">
                    <h2>Kementrian Teknologi</h2>
                    <p>Memanfaatkan teknologi untuk mempermudah layanan mahasiswa, termasuk sistem informasi akademik dan aplikasi internal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 DEMA UIN Ar-Raniry - Kabinet Indrapatra</p>
    </footer>
</body>
</html>
