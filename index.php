<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kabinet Indrapatra</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>
<body>
    <?php
    // Header Section
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

    // Hero Section
    function renderHero() {
        echo '
        <section id="home" class="hero">
            <div class="overlay">
                <div class="hero-text">
                    <h2>SELAMAT DATANG DI OFFICIAL WEBSITE</h2>
                    <h1>DEMA UIN AR-RANIRY</h1>
                    <h2>KABINET INDRAPATRA</h2>
                </div>
            </div>
        </section>';
    }

    // Profil Section
    function renderProfil() {
        echo '
        <section id="profil" class="profil-section">
            <div class="profil-container">
                <div class="profil-image-wrapper">
                    <img src="https://s3-alpha-sig.figma.com/img/6de6/f10c/138f75d419c95650891dbffc3e2c3849?Expires=1732492800&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=LMY0oocEqIY~cpRi5ZeEOSaOV1Hu46ArdroJ6I-CNu7iJPKxlzaSXHEodOn2UwoKpa-zGdCfNhESEZZt9~r~Nh-D2gNLGzSLrQEnwng232hOTVzWb7727~QXcNpXOtq9pzK33IKbnLFtgu3JFcX6dijGe5joTpoOjRV9VIVWNCeXBcsv31iA7yh0WakhdDAyA73itx42sH8aKNxyrlhoGZytLzalwyYchawbwm8geE9QFWeGtRhf-lOdUlU6UZOqwJulgJJ0twJBS2Hgkqfjw7yFbucMiW4ga8qI8u0J8vsasJIREb2ZGUKHULVveHC0o6tWsdU3ya~0QBnfU1EyBQ__" alt="Kabinet Indrapatra" class="profil-image">
                    <h2>KABINET INDRAPATRA</h2>
                </div>
                <div class="profil-content">
                    <h2>Kabinet Indrapatra</h2>
                    <p id="typing-effect"></p>
                    <p></p>
                </div>
            </div>
        </section>';
    }

    // Footer Section
    function renderFooter() {
        echo '
        <footer class="footer">
            <p>&copy; 2024 DEMA UIN Ar-Raniry - Kabinet Indrapatra</p>
        </footer>';
    }

    // Render all sections
    renderHeader();
    renderHero();
    renderProfil();
    renderFooter();
    ?>
</body>
</html>
