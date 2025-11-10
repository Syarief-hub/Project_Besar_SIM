<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Surat | SiPANDA</title>

    <!-- Font Awesome & CSS -->
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin2/css/surat.css') }}" rel="stylesheet">
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
      <a href="{{ url('/Buatsurat') }}" class="active"><i class="fas fa-envelope"></i> BUAT SURAT</a>
      <a href="{{ url('/tentang') }}">TENTANG <span>SiPANDA</span></a>
      <a href="{{ url('/Menulogin') }}" class="btn-login">
        <i class="fas fa-sign-in-alt"></i> LOGIN
      </a>
    </div>
  </div>


    <!-- KONTEN -->
    <main>
        <div class="container text-center">
            <h2 class="title-text">PILIH JENIS SURAT</h2>

            <div class="card-container">
                @php
                    $suratList = [
                        'SURAT KETERANGAN',
                        'SURAT KETERANGAN BERKELAKUAN BAIK',
                        'SURAT KETERANGAN DOMISILI',
                        'SURAT KETERANGAN KEPEMILIKAN KENDARAAN BERMOTOR',
                        'SURAT KETERANGAN USAHA',
                        'SURAT KETERANGAN TIDAK MAMPU',
                        'SURAT KETERANGAN PERHIASAN',
                        'SURAT LAPOR HAJATAN',
                        'SURAT IZIN KERAMAIAN',
                        'SURAT PERNYATAAN KEHILANGAN',
                        'SURAT KETERANGAN TANAH',
                        'SURAT PENGANTAR NIKAH'
                    ];
                @endphp

                @foreach($suratList as $surat)
                <div class="surat-card">
                    <img src="{{ asset('sbadmin2/img/Surat.png') }}" alt="Gambar Surat">
                    <h3>{{ $surat }}</h3>
                    <a href="{{ url('/buat-surat/form') }}" class="btn-card">BUAT SURAT</a>
                </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="footer-login">
        <p><strong>Copyright © 2025 SiPANDA.</strong> All rights reserved.</p>
    </footer>

    <script src="{{ asset('sbadmin2/js/script2.js') }}"></script>
</body>
</html>
