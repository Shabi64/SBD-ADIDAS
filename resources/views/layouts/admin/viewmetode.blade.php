<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       @include('layouts/admin/side')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               @include('layouts/admin/topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

<div class="row" >
    <div class="col-md-12">
<div class="card">

</div>
<div class="card">
  
    <div class="container">
        <div class="row">
            <h1>Daftar Metode Pembayaran</h1>

            <div class="col-md-12">
             
                <button id="btnTambahMetode">Tambah Metode Pembayaran</button>

                <form id="formTambahMetode" action="{{ route('admin.metode_pembayaran.store') }}" method="POST" style="display: none;">
                    @csrf
                    <div>
                        <label for="metode_pembayaran">Metode Pembayaran:</label>
                        <input type="text" name="metode_pembayaran" id="metode_pembayaran" required>
                    </div>
                    <div>
                        <label for="pembayaran">Nomor Pembayaran:</label>
                        <input type="text" name="nomor_pembayaran" id="pembayaran" required>
                    </div>
                    <button type="submit">Tambah</button>
                </form>
                
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Metode Pembayaran</th>
                        <th>Nomor Rekening</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($metodePembayaran as $metode)
                    <tr>
                        <td>{{ $metode->id }}</td>
                        <td>{{ $metode->metode_pembayaran }}</td>
                        <td>{{ $metode->nomor }}</td>
                        <td>
                            <form action="{{ route('admin.metode_pembayaran.update', $metode->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" name="metode_pembayaran" value="{{ $metode->metode_pembayaran }}">
                                <input type="text" name="nomor_pembayaran" value="{{ $metode->nomor}}">
                                <button type="submit">Simpan</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('admin.metode_pembayaran.destroy', $metode->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus metode pembayaran ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                
                
            </div>
        </div>
    </div>
</div>

</div>
    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts/admin/footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>

</body>

</html>       
<script>
    document.getElementById('btnTambahMetode').addEventListener('click', function() {
        var form = document.getElementById('formTambahMetode');
        form.style.display = 'block';
    });
</script>

