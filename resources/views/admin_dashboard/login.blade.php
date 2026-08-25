<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Babita Construction Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="shortcut icon" href="{{ url('admin/images/favicon.png') }}" />

    <style>
        :root {
            --brand-orange: #FF5E14;
            --brand-orange-dark: #d94c0a;
            --brand-dark: #1c1c1c;
        }

        * {
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: 'Open Sans', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Rubik', sans-serif;
        }

        .login-page {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background-image: url('{{ url('img/Construction.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .login-page::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(15, 15, 15, 0.92) 0%, rgba(28, 28, 28, 0.85) 45%, rgba(255, 94, 20, 0.55) 100%);
        }

        .login-brand {
            position: absolute;
            top: 28px;
            left: 32px;
            display: flex;
            align-items: center;
            gap: 10px;
            z-index: 2;
        }

        .login-brand img {
            height: 34px;
            width: auto;
        }

        .login-brand span {
            color: #fff;
            font-weight: 600;
            font-size: 1.05rem;
            letter-spacing: 0.3px;
        }

        .login-card {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 440px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.35);
            overflow: hidden;
        }

        .login-card__stripe {
            height: 6px;
            background: repeating-linear-gradient(45deg, var(--brand-orange) 0, var(--brand-orange) 14px, var(--brand-dark) 14px, var(--brand-dark) 28px);
        }

        .login-card__body {
            padding: 2.75rem 2.25rem 2.25rem;
        }

        .login-logo {
            width: 76px;
            height: 76px;
            border-radius: 50%;
            background: #fff4ec;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.25rem;
            box-shadow: 0 6px 16px rgba(255, 94, 20, 0.18);
        }

        .login-logo img {
            width: 48px;
            height: 48px;
            object-fit: contain;
        }

        .login-title {
            text-align: center;
            margin-bottom: 0.35rem;
            font-size: 1.55rem;
            font-weight: 700;
            color: var(--brand-dark);
        }

        .login-subtitle {
            text-align: center;
            color: #767676;
            font-size: 0.92rem;
            margin-bottom: 1.75rem;
        }

        .login-alert {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #fdecea;
            color: #b3261e;
            border: 1px solid #f5c6c2;
            padding: 10px 14px;
            border-radius: 10px;
            font-size: 0.88rem;
            margin-bottom: 1.25rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-group label {
            display: block;
            font-size: 0.78rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            color: #4a4a4a;
            margin-bottom: 0.4rem;
        }

        .input-wrap {
            position: relative;
        }

        .input-wrap i.field-icon {
            position: absolute;
            top: 50%;
            left: 14px;
            transform: translateY(-50%);
            color: #a8a8a8;
            font-size: 0.95rem;
        }

        .input-wrap input {
            width: 100%;
            padding: 12px 14px 12px 42px;
            border: 1.5px solid #e4e4e4;
            border-radius: 10px;
            font-size: 0.95rem;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .input-wrap input:focus {
            outline: none;
            border-color: var(--brand-orange);
            box-shadow: 0 0 0 3px rgba(255, 94, 20, 0.15);
        }

        .input-wrap .toggle-password {
            position: absolute;
            top: 50%;
            right: 14px;
            transform: translateY(-50%);
            color: #a8a8a8;
            cursor: pointer;
            background: none;
            border: none;
            font-size: 0.95rem;
            padding: 0;
        }

        .field-error {
            color: #d93025;
            font-size: 0.8rem;
            margin-top: 0.35rem;
            display: block;
        }

        .login-meta {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 1.5rem;
        }

        .login-meta a {
            font-size: 0.85rem;
            color: var(--brand-orange);
            text-decoration: none;
            font-weight: 600;
        }

        .login-meta a:hover {
            text-decoration: underline;
        }

        .btn-login {
            width: 100%;
            border: none;
            border-radius: 10px;
            padding: 13px 16px;
            background: linear-gradient(135deg, var(--brand-orange), var(--brand-orange-dark));
            color: #fff;
            font-weight: 700;
            font-size: 0.95rem;
            letter-spacing: 0.4px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 94, 20, 0.3);
        }

        .login-footer {
            text-align: center;
            margin-top: 1.75rem;
            color: #9a9a9a;
            font-size: 0.78rem;
        }

        .login-footer .secure-line {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            margin-bottom: 6px;
            color: #6c6c6c;
        }

        @media (max-width: 576px) {
            .login-brand {
                display: none;
            }

            .login-card__body {
                padding: 2.25rem 1.5rem 1.75rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-page">
        <div class="login-brand">
            <img src="{{ url('img/logo.png') }}" alt="Babita Construction">
            <span>Babita Construction</span>
        </div>

        <div class="login-card">
            <div class="login-card__stripe"></div>
            <div class="login-card__body">
                <div class="login-logo">
                    <img src="{{ url('img/logo.png') }}" alt="logo">
                </div>

                <h3 class="login-title">Welcome Back</h3>
                <p class="login-subtitle">Sign in to access your admin dashboard</p>

                @if (session()->has('error'))
                    <div class="login-alert">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <span>{{ session()->get('error') }}</span>
                    </div>
                @endif

                <form method="POST" action="{{ route('login.insert') }}" onsubmit="return handleLoginSubmit(this)">
                    @csrf
                    <div class="form-group">
                        <label for="loginId">Mobile Number or Email</label>
                        <div class="input-wrap">
                            <i class="fa-solid fa-user field-icon"></i>
                            <input type="text" id="loginId" name="login_id" placeholder="Enter mobile number or email" value="{{ old('login_id') }}">
                        </div>
                        @error('login_id')
                            <span class="field-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <div class="input-wrap">
                            <i class="fa-solid fa-lock field-icon"></i>
                            <input type="password" id="loginPassword" name="password" placeholder="Enter your password">
                            <button type="button" class="toggle-password" onclick="toggleLoginPassword()">
                                <i class="fa-solid fa-eye" id="togglePasswordIcon"></i>
                            </button>
                        </div>
                        @error('password')
                            <span class="field-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="login-meta">
                        <a href="#">Forgot password?</a>
                    </div>

                    <button class="btn-login" type="submit" id="loginSubmitBtn">
                        <span id="loginSubmitLabel">LOGIN IN</span>
                        <i class="fa-solid fa-arrow-right-to-bracket" id="loginSubmitIcon"></i>
                    </button>
                </form>

                <div class="login-footer">
                    <div class="secure-line">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Secure Admin Access</span>
                    </div>
                    &copy; {{ date('Y') }} Babita Construction. Built for precision and safety.
                </div>
            </div>
        </div>
    </div>

    <script>
        var loginFormSubmitted = false;

        function handleLoginSubmit(form) {
            if (loginFormSubmitted) {
                return false;
            }
            loginFormSubmitted = true;

            var btn = document.getElementById('loginSubmitBtn');
            document.getElementById('loginSubmitLabel').textContent = 'Signing In...';
            document.getElementById('loginSubmitIcon').className = 'fa-solid fa-spinner fa-spin';
            btn.disabled = true;

            return true;
        }

        function toggleLoginPassword() {
            var input = document.getElementById('loginPassword');
            var icon = document.getElementById('togglePasswordIcon');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>
