<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Dream</title>
    <!-- Bootstrap Styles-->
    <link href="{{('public')}}/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{('public')}}/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{('public')}}/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{('public')}}/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>


<body>

    

        </nav>
        <!-- /. NAV SIDE  -->
    </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"></h1>
                  <div class="container">
                      <div class="row">
                        <div class="col-md-12 mt-5">
                          <div class="card">
                            <div class="card-header">
                              Tambah Data Produk
                                </div>
                            <div class="card-body">
                                <form action="{{url('produk', $produk->id)}}" method="post">
                                    @csrf
                                    @method("PUT")
                                <div class="from-group">
                                    <label for="" class="control-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{$produk->nama}}">
                            </div>
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="from-group">
                                    <label for="" class="control-label">Harga</label>
                                    <input type="text" class="form-control" name="harga" value="{{$produk->harga}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="from-group">
                                    <label for="" class="control-label">Berat</label>
                                    <input type="text" class="form-control" name="berat" value="{{$produk->berat}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="from-group">
                                    <label for="" class="control-label">Stock</label>
                                    <input type="text" class="form-control" name="stock" value="{{$produk->stock}}">
                            </div>
                        </div>
                    </div>
                                <div class="from-group">
                                    <label for="" class="control-label">Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
                            </div>
                            <button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
                    </div>
                    </form>
          </div>
      </div>
  </div>
                <!-- /. ROW  -->


               </div>
                <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{('public')}}/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="{{('public')}}/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="{{('public')}}/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="{{('public')}}/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="{{('public')}}/assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="{{('public')}}/assets/js/custom-scripts.js"></script>


</body>

</html>