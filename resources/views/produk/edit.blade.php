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
                    <h1 class="h3 mb-4 text-gray-800">Dashboard Produk</h1>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{route('produk.index')}}" class="btn btn-primary mb-3">Input Data</a>
                            <h6 class="m-0 font-weight-bold text-primary"> Edit Data Table Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="{{ route('produk.update', $produk->id_produk) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mb-3">
                                      <label for="id_produk" class="form-label">ID Produk</label>
                                      <input type="text" class="form-control" name="id_produk" value="{{$produk->id_produk}}" id="id_produk" >
                                    </div>
                                    <div class="mb-3">
                                      <label for="nama_produk" class="form-label">Nama Produk</label>
                                      <input type="text" class="form-control" name="nama_produk" value="{{$produk->nama_produk}}" id="nama_produk" >
                                    </div>
                                    <div class="mb-3">
                                      <label for="deskripsi" class="form-label">Deskripsi</label>
                                      <input type="text" class="form-control" name="deskripsi" value="{{$produk->deskripsi}}" id="deskripsi" >
                                    </div>
                                    <div class="mb-3">
                                      <label for="harga" class="form-label">Harga</label>
                                      <input type="text" class="form-control" name="harga" value="{{$produk->harga}}" id="harga" >
                                    </div>
                                    <div class="mb-3">
                                      <label for="stok" class="form-label">Stok</label>
                                      <input type="text" class="form-control" name="stok" value="{{$produk->stok}}" id="stok" >
                                    </div>
                                    <div class="mb-3">
                                      <label for="kategori" class="form-label">Kategori</label>
                                      <input type="text" class="form-control" name="kategori" value="{{$produk->kategori}}" id="kategori" >
                                    </div>
                                    <button type="submit" class="btn btn-primary float-end">Edit</button>
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