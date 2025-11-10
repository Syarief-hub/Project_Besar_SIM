<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Surat | SiPANDA</title>

    <!-- Font Awesome & CSS -->
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin2/css/tentang.css') }}" rel="stylesheet">
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
      <a href="{{ url('/login') }}">HOME</a>
      <a href="{{ url('/Buatsurat') }}">BUAT SURAT</a>
      <a href="{{ url('/tentang') }}" class="active"><i class="fas fa-info-circle"></i>
                                             TENTANG <span class="active">SiPANDA</span></a>
      <a href="{{ url('/Menulogin') }}" class="btn-login">
        <i class="fas fa-sign-in-alt"></i> LOGIN
      </a>
    </div>
  </div>

  <!-- Main konten -->
   <main class="tentang-container">
    
    <!-- Judul Halaman -->
    <section class="section-judul">
        <i class="fas fa-info-circle"></i>
        <h1>Tentang SiPANDA</h1>
    </section>

    <!-- Apa itu SiPANDA -->
    <section class="section-deskripsi">
        <h2>Apa itu SiPANDA?</h2>
        <p>
            SiPANDA adalah aplikasi pelayanan administrasi surat tingkat desa 
            yang dikembangkan untuk membantu pemerintah desa dalam mengelola 
            pembuatan, pencatatan, dan pengarsipan surat secara digital.
        </p>
        <p>
            Dengan SiPANDA, pembuatan surat seperti surat keterangan, surat 
            pengantar, dan dokumen administrasi lainnya menjadi lebih efisien, 
            terstruktur, dan dapat diakses secara online oleh warga desa.
        </p>
    </section>

    <!-- Fitur Utama -->
    <section class="section-fitur">
        <h2>Fitur Utama</h2>

        <div class="fitur-grid">
            <div class="fitur-box">
                <i class="fas fa-file-alt"></i>
                <h3>Template Surat</h3>
                <p>Berbagai template surat desa siap digunakan dalam format standar.</p>
            </div>

            <div class="fitur-box">
                <i class="fas fa-database"></i>
                <h3>Arsip Digital</h3>
                <p>Penyimpanan dan pengarsipan surat digital yang mudah dikelola.</p>
            </div>

            <div class="fitur-box">
                <i class="fas fa-users"></i>
                <h3>Akses Multi-Level</h3>
                <p>Akses bertingkat untuk admin, operator, dan warga desa.</p>
            </div>
        </div>
    </section>

    <!-- Kontribusi -->
    <section class="section-kontribusi">
        <i class="fas fa-code-branch"></i>
        <strong>Kontribusi</strong>
        <p>Ingin berkontribusi dalam pengembangan SiPANDA?</p>
        <p><a href="#">Kunjungi repository GitHub kami</a> untuk informasi lebih lanjut.</p>
    </section>

    <!-- Hak Cipta -->
    <section class="section-lisensi">
        <h2>Hak Cipta dan Lisensi</h2>
        <p>
            SiPANDA dilisensikan dengan lisensi open source yang
            memungkinkan penggunaan dan pengembangan bersama.
        </p>
        <p class="copyright">© 2025 SiPANDA</p>
    </section>

</main>

    <!-- FOOTER -->
    <footer class="footer-login">
        <p><strong>Copyright © 2025 SiPANDA.</strong> All rights reserved.</p>
    </footer>

    <script src="{{ asset('sbadmin2/js/script3.js') }}"></script>
</body>
</html>
