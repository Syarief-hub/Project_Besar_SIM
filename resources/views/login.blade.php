<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SiPANDA</title>

  <!-- Font Awesome & SBAdmin2 -->
  <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset('sbadmin2/css/login.css') }}" />
</head>

<body>
  <!-- NAVBAR -->
  <div class="navbar-top">
    <div class="logo-left">
      <img src="{{ asset('sbadmin2/img/Surat1-removebg-preview.png') }}" alt="icon surat">
      <span>SiPANDA</span>
    </div>

    <div class="hamburger" id="hamburger">
      <i class="fas fa-bars"></i>
    </div>

    <div class="nav-menu" id="navMenu">
      <a href="{{ url('/login') }}" class="active"><i class="fas fa-home"></i> HOME</a>
      <a href="{{ url('/Buatsurat') }}">BUAT SURAT</a>
      <a href="{{ url('/tentang') }}">TENTANG <span>SiPANDA</span></a>
      <a href="{{ url('/Menulogin') }}" class="btn-login">
        <i class="fas fa-sign-in-alt"></i> LOGIN
      </a>
    </div>
  </div>

  <!-- MAIN -->
  <main>
    <img src="{{ asset('sbadmin2/img/Logo.png') }}" class="logo-desa" alt="Logo" />
    <h2 class="title-text">WEB APLIKASI PELAYANAN SURAT ADMINISTRASI DESA</h2>
    <h3 class="subtitle-text">DESA PANGGULO<br />KABUPATEN BONEBOLANGO</h3>
    <div class="btn-main">
      <a href="{{ url('/Buatsurat') }}">
        <i class="fas fa-envelope"></i> BUAT SURAT
      </a>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="footer-login">
    <p><strong>Copyright © 2025 SiPANDA.</strong> All rights reserved.</p>
  </footer>

  <!-- Script -->
  <script src="{{ asset('sbadmin2/js/script1.js') }}"></script>
</body>
</html>
