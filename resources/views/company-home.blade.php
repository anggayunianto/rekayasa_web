<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Perusahaan - Rekayasa Web</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        .navbar {
            background: #0f3d91;
            color: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 21px;
            font-weight: bold;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-size: 14px;
        }

        .hero {
            background: linear-gradient(
                135deg,
                #0f3d91,
                #2563eb
            );

            color: white;
            text-align: center;
            padding: 80px 20px;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 18px;
        }

        .hero p {
            font-size: 17px;
            color: #dbeafe;
            max-width: 650px;
            margin: auto;
            line-height: 1.7;
        }

        .section {
            width: 85%;
            max-width: 1100px;
            margin: 50px auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 35px;
        }

        .section-title h2 {
            color: #0f3d91;
            font-size: 30px;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #6b7280;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
            text-align: center;
            border: 1px solid #eef0f4;
        }

        .icon {
            width: 55px;
            height: 55px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #e8f0ff;
            color: #0f3d91;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: bold;
        }

        .card h3 {
            color: #111827;
            margin-bottom: 12px;
        }

        .card p {
            color: #6b7280;
            line-height: 1.7;
            font-size: 14px;
        }

        .about {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.06);
            text-align: center;
        }

        .about p {
            color: #6b7280;
            line-height: 1.8;
            max-width: 800px;
            margin: auto;
        }

        .cta {
            margin-top: 45px;
            text-align: center;
        }

        .button {
            display: inline-block;
            background: #0f3d91;
            color: white;
            text-decoration: none;
            padding: 13px 28px;
            border-radius: 8px;
            font-weight: bold;
        }

        .button:hover {
            background: #0b2f70;
        }

        footer {
            margin-top: 60px;
            background: #0f3d91;
            color: white;
            text-align: center;
            padding: 25px;
            font-size: 13px;
        }

        @media (max-width: 800px) {
            .cards {
                grid-template-columns: 1fr;
            }

            .navbar {
                padding: 18px 5%;
            }

            .hero h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">

        <div class="logo">
            Rekayasa Web
        </div>

        <div>
            <a href="/">Beranda</a>
            <a href="/login">Login</a>
        </div>

    </nav>

    <section class="hero">

        <h1>Profil Perusahaan</h1>

        <p>
            Membangun layanan yang profesional, terpercaya,
            dan berorientasi pada kebutuhan pelanggan.
        </p>

    </section>

    <section class="section">

        <div class="section-title">

            <h2>Tentang Perusahaan</h2>

            <p>
                Mengenal lebih dekat profil perusahaan kami
            </p>

        </div>

        <div class="about">

            <p>
                Perusahaan kami berkomitmen untuk memberikan
                produk dan pelayanan yang berkualitas dengan
                mengutamakan profesionalisme, inovasi, dan
                kepuasan pelanggan.
            </p>

        </div>

    </section>

    <section class="section">

        <div class="section-title">

            <h2>Visi & Misi</h2>

            <p>
                Prinsip yang menjadi dasar dalam menjalankan perusahaan
            </p>

        </div>

        <div class="cards">

            <div class="card">

                <div class="icon">
                    V
                </div>

                <h3>Visi</h3>

                <p>
                    Menjadi perusahaan yang terpercaya,
                    profesional, inovatif, dan mampu
                    memberikan nilai terbaik bagi pelanggan.
                </p>

            </div>

            <div class="card">

                <div class="icon">
                    M
                </div>

                <h3>Misi</h3>

                <p>
                    Memberikan pelayanan terbaik,
                    meningkatkan kualitas produk,
                    serta mengembangkan inovasi secara berkelanjutan.
                </p>

            </div>

            <div class="card">

                <div class="icon">
                    ✓
                </div>

                <h3>Komitmen</h3>

                <p>
                    Menjaga kualitas, profesionalisme,
                    dan kepuasan pelanggan dalam setiap
                    proses pelayanan.
                </p>

            </div>

        </div>

        <div class="cta">

            <a href="/" class="button">
                Kembali ke Beranda
            </a>

        </div>

    </section>

    <footer>
        © 2026 Rekayasa Web • Universitas Pamulang
    </footer>

</body>
</html>