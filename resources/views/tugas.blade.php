<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tugas Rekayasa Web</title>

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
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
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

        .navbar a:hover {
            text-decoration: underline;
        }

        .hero {
            min-height: 430px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 20px;
        }

        .card {
            width: 100%;
            max-width: 850px;
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .badge {
            display: inline-block;
            background: #e8f0ff;
            color: #0f3d91;
            padding: 8px 18px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 38px;
            color: #0f3d91;
            margin-bottom: 12px;
        }

        .subtitle {
            color: #6b7280;
            font-size: 16px;
            margin-bottom: 35px;
        }

        .data {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            text-align: left;
        }

        .data-box {
            background: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 20px;
        }

        .data-box span {
            display: block;
            color: #6b7280;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .data-box strong {
            color: #111827;
            font-size: 16px;
        }

        .button {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 25px;
            background: #0f3d91;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }

        .button:hover {
            background: #0b2f70;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #6b7280;
            font-size: 13px;
        }

        @media (max-width: 700px) {
            .navbar {
                padding: 18px 5%;
            }

            .data {
                grid-template-columns: 1fr;
            }

            .card {
                padding: 30px 20px;
            }

            h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="logo">Rekayasa Web</div>

        <div>
            <a href="/">Beranda</a>
            <a href="/login">Login</a>
            <a href="/home">Profil Perusahaan</a>
        </div>
    </nav>

    <section class="hero">

        <div class="card">

            <div class="badge">
                UNIVERSITAS PAMULANG
            </div>

            <h1>Tugas Rekayasa Web</h1>

            <p class="subtitle">
                Dokumentasi dan Implementasi Project Laravel
            </p>

            <div class="data">

                <div class="data-box">
                    <span>Nama Mahasiswa</span>
                    <strong>Angga Yunianto</strong>
                </div>

                <div class="data-box">
                    <span>NIM</span>
                    <strong>251011701168</strong>
                </div>

                <div class="data-box">
                    <span>Program Studi</span>
                    <strong>Sistem Informasi</strong>
                </div>

            </div>

            <a href="/home" class="button">
                Lihat Profil Perusahaan
            </a>

        </div>

    </section>

    <footer>
        © 2026 Rekayasa Web • Universitas Pamulang
    </footer>

</body>
</html>