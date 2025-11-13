<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project_SIM</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin2/css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin2/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin2/css/penduduk.css') }}" rel="stylesheet">




</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-fw fa-shield-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SI-PANDA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-2">


            <!-- Heading -->
            <div class="sidebar-heading">
                Main navigation
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard" class="active">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Data penduduk -->
            <li class="nav-item">
                <a class="nav-link" href="/penduduk">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data penduduk</span></a>
            </li>

            <!-- Nav Item - Surat -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Surat</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/permintaan">Permintaan Surat</a>
                        <a class="collapse-item" href="/suratselesai">Surat Selesai</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Laporan -->
            <li class="nav-item">
                <a class="nav-link" href="/laporan">
                    <i class="fas fa-fw fa-chart-bar"></i>
                    <span>Laporan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Logout Button -->
                        <li class="nav-item d-flex align-items-center">
                            <a class="btn btn-danger logout-btn" href="/login">
                                <i class="fas fa-sign-out-alt mr-1"></i> Logout
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h1 class="h3 text-gray-800">Data Penduduk</h1>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                            <i class="fas fa-plus"></i> Tambah Penduduk
                        </button>
                    </div>

                    <!-- Alert Sukses -->
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span>&times;</span>
                            </button>
                        </div>
                    @endif

                    <!-- Card Data Penduduk -->
                    <div class="card shadow mb-4">
                        <div
                            class="card-header py-3 bg-primary text-white d-flex justify-content-between align-items-center">
                            <h6 class="m-0 font-weight-bold">Daftar Penduduk</h6>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" width="100%">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tempat/Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th width="120px">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($penduduks as $p)
                                            <tr>
                                                <td>{{ $p->nik }}</td>
                                                <td>{{ $p->nama }}</td>
                                                <td>{{ $p->tempat_lahir }}, {{ $p->tanggal_lahir }}</td>
                                                <td>{{ $p->jenis_kelamin }}</td>
                                                <td>{{ $p->agama }}</td>
                                                <td>{{ $p->alamat }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm" data-toggle="modal"
                                                        data-target="#modalEdit{{ $p->id }}">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <form action="{{ route('penduduk.destroy', $p->id) }}" method="POST"
                                                        style="display:inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Hapus data ini?')">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>

                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="modalEdit{{ $p->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="modalEditLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form action="{{ route('penduduk.update', $p->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Penduduk</h5>
                                                                <button type="button" class="close" data-dismiss="modal">
                                                                    <span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label>NIK</label>
                                                                    <input type="text" name="nik" value="{{ $p->nik }}"
                                                                        class="form-control" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Nama</label>
                                                                    <input type="text" name="nama" value="{{ $p->nama }}"
                                                                        class="form-control" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tempat Lahir</label>
                                                                    <input type="text" name="tempat_lahir"
                                                                        value="{{ $p->tempat_lahir }}" class="form-control"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Tanggal Lahir</label>
                                                                    <input type="date" name="tanggal_lahir"
                                                                        value="{{ $p->tanggal_lahir }}" class="form-control"
                                                                        required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jenis Kelamin</label>
                                                                    <select name="jenis_kelamin" class="form-control">
                                                                        <option value="Laki-laki" {{ $p->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                                        <option value="Perempuan" {{ $p->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Agama</label>
                                                                    <input type="text" name="agama" value="{{ $p->agama }}"
                                                                        class="form-control" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Alamat</label>
                                                                    <textarea name="alamat" class="form-control"
                                                                        required>{{ $p->alamat }}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-success">Simpan
                                                                    Perubahan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Page Content -->
            </div>
        </div>

        <!-- Modal Tambah -->
        <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="{{ route('penduduk.store') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Penduduk</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group"><label>NIK</label><input type="text" name="nik" class="form-control"
                                    required></div>
                            <div class="form-group"><label>Nama</label><input type="text" name="nama"
                                    class="form-control" required></div>
                            <div class="form-group"><label>Tempat Lahir</label><input type="text" name="tempat_lahir"
                                    class="form-control" required></div>
                            <div class="form-group"><label>Tanggal Lahir</label><input type="date" name="tanggal_lahir"
                                    class="form-control" required></div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group"><label>Agama</label><input type="text" name="agama"
                                    class="form-control" required></div>
                            <div class="form-group"><label>Alamat</label><textarea name="alamat" class="form-control"
                                    required></textarea></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Content -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer-login">
        <p><strong>Copyright © 2025 SiPANDA.</strong> All rights reserved.</p>
    </footer>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin2/js/sb-admin-2.min.js') }}"></script>

</body>

</html>