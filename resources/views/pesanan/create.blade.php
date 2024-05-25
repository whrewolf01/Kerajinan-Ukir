<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin kerajinan Ukir</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('template/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       @include('side-bar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('topbars')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard Pesanan</h1>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{route('pesanan.create')}}" class="btn btn-primary mb-3">Input Data</a>
                            <h6 class="m-0 font-weight-bold text-primary">Data Table Pesanan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{ route('pesanan.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="id_pesanan" class="form-label">ID Pesanan</label>
                                        <input type="text" class="form-control" name="id_pesanan" id="id_pesanan" >
                                      </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="id_pelanggan" class="form-control-label">Nama Customer</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="id_pelanggan" id="id_pelanggan" class="form-control" onchange="updateUserId()">
                                                <option value="">Nama</option>
                                                @foreach ($pelanggan as $pelanggan)
                                                    <option value="{{ $pelanggan->id_pelanggan }}">{{ $pelanggan->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                      <label for="tanggal_pesanan" class="form-label">Tanggal Pesanan</label>
                                      <input type="text" class="form-control" name="tanggal_pesanan" id="tanggal_pesanan" >
                                    </div>
                                    <div class="mb-3">
                                      <label for="status_pesanan" class="form-label">Status Pesanan</label>
                                      <input type="text" class="form-control" name="status_pesanan" id="status_pesanan" >
                                    </div>
                                    <div class="mb-3">
                                      <label for="total_harga" class="form-label">Total Harga</label>
                                      <input type="text" class="form-control" name="total_harga" id="total_harga" >
                                    </div>
                                    <div class="mb-3">
                                      <label for="alamat_pengiriman" class="form-label">Alamat Pengiriman</label>
                                      <input type="text" class="form-control" name="alamat_pengiriman" id="alamat_pengiriman" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                                        <input type="text" class="form-control" name="metode_pembayaran" id="metode_pembayaran" >
                                      </div>
                                    <button type="submit" class="btn btn-primary float-end">TAMBAH</button>
                                    <a href ="{{ route ('pesanan.index') }}" class="btn btn-primary float-end">CANCEL</a>
                                </form>
                            </div>
                        </div>
                    </div>                
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
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
                    <a class="btn btn-primary" href="login.blade.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('template/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>