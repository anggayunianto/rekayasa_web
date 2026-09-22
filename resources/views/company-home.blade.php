<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Profil Perusahaan</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #333;
        }

        .navbar {
            background: #1565c0;
            padding: 18px 8%;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h2 {
            margin: 0;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .hero {
            text-align: center;
            padding: 70px 20px;
            background: white;
        }

        .hero h1 {
            color: #1565c0;
            font-size: 36px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            color: #666;
        }

        .content {
            width: 85%;
            max-width: 900px;
            margin: 40px auto;
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            background: white;
            width: 250px;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .card h3 {
            color: #1565c0;
        }

        .footer {
            text-align: center;
            background: #1565c0;
            color: white;
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>Profil Perusahaan</h2>

        <div>
            <a href="/">Beranda</a>
            <a href="/login">Login</a>
        </div>
    </div>

    <section class="hero">
        <h1>Selamat Datang</h1>

        <p>
            Website Profil Perusahaan
        </p>

        <p>
            Halaman ini dibuat sebagai bagian dari
            <strong>Tugas Rekayasa Web</strong>.
        </p>
    </section>

    <div class="content">

        <div class="card">
            <h3>Tentang Kami</h3>
            <p>
                Perusahaan yang berkomitmen memberikan
                pelayanan dan produk berkualitas.
            </p>
        </div>

        <div class="card">
            <h3>Visi</h3>
            <p>
                Menjadi perusahaan yang terpercaya,
                profesional, dan terus berkembang.
            </p>
        </div>

        <div class="card">
            <h3>Misi</h3>
            <p>
                Memberikan pelayanan terbaik serta
                menciptakan nilai bagi pelanggan.
            </p>
        </div>

    </div>

    <div class="footer">
        &copy; 2026 Tugas Rekayasa Web
    </div>

</body>
</html>
