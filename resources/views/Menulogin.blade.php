<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menulogin - SiPANDA</title>

    <!-- Font Awesome -->
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- Style Login -->
    <link rel="stylesheet" href="{{ asset('sbadmin2/css/Menulogin.css') }}">
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login System</h2>

            <form>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" required>
                </div>

                <div class="input-group">
                    <i class="fas fa-key"></i>
                    <input type="password" placeholder="Password" required>
                </div>

                <button type="submit" class="btn-login">Login</button>
            </form>

            <p class="copyright">
                © 2025 <strong>SiPANDA</strong><br>
                All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
