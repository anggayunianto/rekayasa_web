<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Rekayasa Web</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f3d91, #2563eb);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 900px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr 1fr;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .left {
            background: #0f3d91;
            color: white;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .left h1 {
            font-size: 34px;
            margin-bottom: 18px;
        }

        .left p {
            color: #dbeafe;
            line-height: 1.7;
        }

        .left .info {
            margin-top: 30px;
        }

        .left .info div {
            margin-bottom: 15px;
            font-size: 14px;
        }

        .right {
            padding: 50px 40px;
        }

        .right h2 {
            color: #111827;
            margin-bottom: 8px;
            font-size: 28px;
        }

        .description {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #374151;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }

        input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        button {
            width: 100%;
            border: none;
            padding: 13px;
            background: #0f3d91;
            color: white;
            border-radius: 8px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #0b2f70;
        }

        .register {
            text-align: center;
            margin-top: 22px;
            color: #6b7280;
            font-size: 14px;
        }

        .register a {
            color: #2563eb;
            text-decoration: none;
            font-weight: bold;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #6b7280;
            text-decoration: none;
            font-size: 13px;
        }

        @media (max-width: 700px) {
            .login-wrapper {
                grid-template-columns: 1fr;
            }

            .left {
                padding: 35px 30px;
            }

            .right {
                padding: 35px 30px;
            }
        }
    </style>
</head>

<body>

    <div class="login-wrapper">

        <div class="left">

            <h1>Rekayasa Web</h1>

            <p>
                Selamat datang di sistem informasi
                berbasis Laravel.
            </p>

            <div class="info">
                <div>✓ Sistem berbasis Laravel</div>
                <div>✓ Tampilan responsif</div>
                <div>✓ Implementasi Route & View</div>
            </div>

        </div>

        <div class="right">

            <h2>Selamat Datang</h2>

            <p class="description">
                Silakan masuk untuk melanjutkan.
            </p>

            <form>

                <div class="form-group">
                    <label for="username">Username</label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Masukkan username"
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                    >
                </div>

                <button type="submit">
                    Login
                </button>

            </form>

            <div class="register">
                Belum memiliki akun?
                <a href="#">Registrasi</a>
            </div>

            <a href="/" class="back">
                ← Kembali ke halaman utama
            </a>

        </div>

    </div>

</body>
</html>