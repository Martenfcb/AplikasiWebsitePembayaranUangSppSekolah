<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Sistem Informasi</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        body {
            background: linear-gradient(135deg, #cfe9ff, #eef4ff);
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .logo-background {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 1000px;
            height: 1000px;
            transform: translate(-50%, -50%);
            opacity: 0.08;
            z-index: 0;
            animation: floatRotate 60s infinite linear;
            pointer-events: none;
        }

        @keyframes floatRotate {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            50% { transform: translate(-50%, -52%) rotate(180deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        .login-wrapper {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 420px;
            z-index: 2;
            animation: fadeInDown 1s ease;
            position: relative;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 25px;
        }

        .logo-container img {
            width: 80px;
            animation: bounceIn 1.2s;
        }

        .login-wrapper h4 {
            text-align: center;
            font-weight: 700;
            color: #0d6efd;
            margin-bottom: 8px;
        }

        .login-wrapper p {
            text-align: center;
            color: #6c757d;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 0.5rem;
        }

        .btn-primary {
            border-radius: 0.5rem;
            font-weight: bold;
        }

        .input-group-text {
            background-color: #f1f1f1;
            border-right: 0;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.2);
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .logo-background {
                width: 600px;
                height: 600px;
            }
        }
    </style>
</head>
<body>

    <!-- Background Logo -->
    <img src="{{ asset('images/logo_smk.png') }}" alt="Logo Background" class="logo-background" />

    <!-- Login Form -->
    <div class="login-wrapper shadow">
        <div class="logo-container">
            <img src="{{ asset('images/logo_smk.png') }}" alt="Logo SMK" class="animate__animated animate__pulse" />
        </div>
        <h4>Selamat Datang 👋</h4>
        <p>Silakan login ke sistem Anda</p>

        {{-- ✅ Flash Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- ✅ Error Message --}}
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login gagal!</strong> Periksa kembali email dan password Anda.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                           required autofocus placeholder="you@example.com" value="{{ old('email') }}">
                </div>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                           required placeholder="••••••••">
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">🔓 Masuk</button>

            <div class="text-center mt-4">
                <small class="text-muted">
                    <i class="bi bi-person-plus-fill me-1"></i> Belum punya akun?
                    <a href="{{ route('register') }}" class="text-decoration-none fw-semibold text-primary">
                        Daftar Sekarang
                    </a>
                </small>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
