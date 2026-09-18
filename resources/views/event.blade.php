<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PetalTech Workshop</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">

        <div class="logo">
            🌸 PetalTech
        </div>

        <nav>
            <a href="#home">Home</a>
            <a href="#workshop">Workshop</a>
            <a href="#about">About</a>
        </nav>

        <a href="#workshop" class="nav-button">
            Explore ♡
        </a>

    </header>


    <!-- HERO -->
    <section class="hero" id="home">

        <div class="hero-text">

            <p class="small-title">
                ♡ LEARN • CREATE • GROW ♡
            </p>

            <h1>
                Tech skills,
                <br>
                <i>but make it cute.</i>
            </h1>

            <p>
                Tempat belajar berbagai skill informatika
                dengan suasana yang fun, aesthetic,
                dan beginner-friendly.
            </p>

            <a href="#workshop" class="button">
                Explore Workshop →
            </a>

        </div>


        <div class="hero-card">

            <div class="laptop">

                <div class="dots">
                    ● ● ●
                </div>

                <h3>
                    hello, coder! ♡
                </h3>

                <div class="line pink"></div>
                <div class="line"></div>
                <div class="line short"></div>
                <div class="line pink small"></div>

            </div>

            <span class="flower">🌷</span>
            <span class="sparkle">✦</span>
            <span class="heart">♡</span>

        </div>

    </section>


    <!-- WORKSHOP -->
    <section class="workshop" id="workshop">

        <div class="section-title">

            <p class="small-title">
                OUR LITTLE CLASSES
            </p>

            <h2>
                Choose your
                <i>favorite</i>
                workshop
            </h2>

            <p>
                Klik tombol detail untuk melihat informasi
                workshop.
            </p>

        </div>


        <!-- FILTER -->
        <div class="filters">

            <button class="filter active" data-filter="all">
                All
            </button>

            <button class="filter" data-filter="web">
                Web
            </button>

            <button class="filter" data-filter="design">
                Design
            </button>

            <button class="filter" data-filter="programming">
                Programming
            </button>

            <button class="filter" data-filter="database">
                Database
            </button>

            <button class="filter" data-filter="tools">
                Tools
            </button>

        </div>


        <!-- CARD EVENT -->
        <div class="event-container">

            @foreach ($events as $event)

            <div
                class="event-card"
                data-category="{{ strtolower($event['kategori']) }}"
            >

                <div class="event-image">

                    <span class="event-icon">
                        {{ $event['icon'] }}
                    </span>

                    <span class="kategori">
                        {{ $event['kategori'] }}
                    </span>

                </div>


                <div class="event-content">

                    <p class="date">
                        ♡ {{ $event['tanggal'] }}
                    </p>

                    <h3>
                        {{ $event['nama'] }}
                    </h3>

                    <p>
                        {{ $event['deskripsi'] }}
                    </p>

                    <div class="event-info">

                        <span>
                            🕐 {{ $event['waktu'] }}
                        </span>

                        <span>
                            📍 {{ $event['tempat'] }}
                        </span>

                    </div>


                    <button
                        class="detail-button"
                        onclick='showDetail(@json($event))'
                    >
                        View Details ↗
                    </button>

                </div>

            </div>

            @endforeach

        </div>

    </section>


    <!-- ABOUT -->
    <section class="about" id="about">

        <div>

            <p class="small-title">
                WHY PETALTECH?
            </p>

            <h2>
                Belajar informatika
                <br>
                <i>lebih fun.</i>
            </h2>

        </div>


        <div class="about-content">

            <div>
                <b>01 — Beginner Friendly</b>

                <p>
                    Materi dimulai dari dasar sehingga
                    cocok untuk mahasiswa yang baru belajar.
                </p>
            </div>

            <div>
                <b>02 — Hands On</b>

                <p>
                    Peserta tidak hanya mendapatkan materi,
                    tetapi juga melakukan praktik langsung.
                </p>
            </div>

            <div>
                <b>03 — Community</b>

                <p>
                    Peserta dapat berdiskusi dan belajar
                    bersama melalui komunitas workshop.
                </p>
            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>

        <b>
            🌸 PetalTech
        </b>

        <span>
            Made with code & lots of pink ♡
        </span>

        <span>
            © 2026
        </span>

    </footer>


    <!-- POPUP DETAIL -->
    <div class="popup" id="detailPopup">

        <div class="popup-box">

            <button
                class="close"
                onclick="closeDetail()"
            >
                ×
            </button>

            <div class="popup-icon" id="popupIcon">
                💻
            </div>

            <div class="popup-content">

                <span
                    class="popup-category"
                    id="popupCategory"
                ></span>

                <h2 id="popupTitle"></h2>

                <p id="popupDescription"></p>


                <div class="popup-info">

                    <div>
                        <small>TANGGAL</small>
                        <b id="popupDate"></b>
                    </div>

                    <div>
                        <small>WAKTU</small>
                        <b id="popupTime"></b>
                    </div>

                    <div>
                        <small>LOKASI</small>
                        <b id="popupLocation"></b>
                    </div>

                </div>


                <button
                    class="button full"
                    onclick="openRegister()"
                >
                    Daftar Workshop ♡
                </button>

            </div>

        </div>

    </div>


    <!-- POPUP PENDAFTARAN -->
    <div class="popup" id="registerPopup">

        <div class="popup-box register-box">

            <button
                class="close"
                onclick="closeRegister()"
            >
                ×
            </button>

            <div class="ribbon">
                🎀
            </div>

            <p class="small-title">
                SAVE YOUR SEAT
            </p>

            <h2>
                Daftar Workshop
            </h2>

            <p>
                Isi data kamu untuk mendaftar.
            </p>


            <form>

                <label>
                    Nama Lengkap

                    <input
                        type="text"
                        placeholder="Masukkan nama"
                    >
                </label>


                <label>
                    NIM

                    <input
                        type="text"
                        placeholder="Masukkan NIM"
                    >
                </label>


                <label>
                    Email

                    <input
                        type="email"
                        placeholder="Masukkan email"
                    >
                </label>


                <button
                    type="button"
                    class="button full"
                    onclick="successRegister()"
                >
                    Konfirmasi Pendaftaran ✨
                </button>

            </form>

        </div>

    </div>


    <!-- POPUP BERHASIL -->
    <div class="popup" id="successPopup">

        <div class="popup-box success-box">

            <div class="success-icon">
                🌷
            </div>

            <p class="small-title">
                YAY, YOU'RE IN! ♡
            </p>

            <h2>
                Pendaftaran berhasil!
            </h2>

            <p>
                Kamu berhasil mendaftar workshop.
            </p>

            <a
                href="https://chat.whatsapp.com/"
                target="_blank"
                class="whatsapp"
            >
                💬 Gabung Grup WhatsApp
            </a>

            <button
                class="back-button"
                onclick="location.reload()"
            >
                ← Kembali ke Workshop
            </button>

        </div>

    </div>



    <script src="app.js"></script>

</body>

</html>