<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
   
    <title>Hello, world!</title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
	<div class="container">
		<h3><i class="fas fa-cart-arrow-down text-warning mr-2"></i></h3>
  <a class="navbar-brand font-weight-bold" href="#">RusticGArden</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto mr-4">
	      <li class="nav-item active ">
	        <a class="nav-link text-warning" href="#">Beranda <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link text-warning" href="#">Hubungi Kami <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link text-warning" href="LoginForm">Login <span class="sr-only">(current)</span></a>
	      </li>
	      
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
		    </form>
		    <div class="icon mt-2">
		    	<h5>
	    		<i class="fas fa-cart-arrow-down ml-3 mr-3 text-warning"></i>
	    		<i class="fas fa-envelope mr-3 text-warning"></i>
	    		<i class="fas fa-bell mr-3 text-warning"></i>
	    	</h5>
	    </div>
	  </div>
	  </div>
	</nav>
		 <div class="row">
          <div class="col-md-2">
            <div class="card">
              <div class="card-header">
                 Filter
              </div>
              <div class="col-md-10">
                <form action="{{url('Home/produk')}}" method="post"">
                  @csrf
                  <div class="form-group">
                    <label for="" class="control-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">Stok</label>
                    <input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">Harga Min</label>
                    <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">Harga Max </label>
                    <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
                  </div>
                  <button class="btn btn-warning float-right"> <i class="fa fa-search"></i> Filter</button>
                </form>
              </div>
            </div>
          </div>
		<div class="col-md-10">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="img/slide/slide1.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="img/slide/slide2.jpg" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="img/slide/slide3.jpg" class="d-block w-100" alt="...">
			    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
					<h4 class="text-center font-weight-bold m-4 ">PRODUK TERBARU</h4>

<div class="row mx-auto">
	<div class="card mr-2 ml-2" style="width: 16rem;">
			 <img src="img/produk/Dried-Rose.jpg" class="card-img-top " alt="...">
			  <div class="card-body bg-light">
			    <h5 class="card-title">Dried Rose</h5>
			     <p class="card-text">Bunga Mawar Kering Good Quality.</p>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star-half-alt text-warning"></i>
			    <i class="far fa-star text-warning"></i><br>
			    <a href="#" class="btn btn-primary"data-target="#produk1" data-toggle="modal">Detail</a>
			    <a href="#" class="btn btn-danger">Rp 450.000</a>
			  </div>
			</div>
			<div class="card mr-2 ml-2" style="width: 16rem;">
			 <img src="img/produk/mix-dried.jpg" class="card-img-top " alt="...">
			  <div class="card-body bg-light">
			    <h5 class="card-title">Mix Dried</h5>
			     <p class="card-text">Bunga Kering variasi.</p><br>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="far fa-star text-warning"></i>
			    <i class="far fa-star text-warning"></i>
			    <i class="far fa-star text-warning"></i><br>
			    <a href="#" class="btn btn-primary"data-target="#produk2" data-toggle="modal">Detail</a>
			    <a href="#" class="btn btn-danger">Rp 300.000</a>
			  </div>
			</div>
			<div class="card mr-2 ml-2" style="width: 16rem;">
			 <img src="img/produk/Setaria.jpg" class="card-img-top " alt="...">
			  <div class="card-body bg-light">
			    <h5 class="card-title">Setaria</h5>
			     <p class="card-text">Pajangan Bunga Setaria.</p><br>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i><br>
			    <a href="#" class="btn btn-primary"data-target="#produk3" data-toggle="modal">Detail</a>
			    <a href="#" class="btn btn-danger">Rp 200.000</a>
			  </div>
			</div>
			<div class="card mr-2 ml-2" style="width: 16rem;">
			 <img src="img/produk/Sikas-Gold.jpg" class="card-img-top " alt="...">
			  <div class="card-body bg-light">
			    <h5 class="card-title">Sikas Gold</h5>
			     <p class="card-text">Pajangan Sikas Gold.</p><br>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star-half-alt text-warning"></i><br>
			    <a href="#" class="btn btn-primary"data-target="#produk4" data-toggle="modal">Detail</a>
			    <a href="#" class="btn btn-danger">Rp 300.000</a>
			  </div>
			</div>
			</div><br>
			<div class="row mx-auto">
	<div class="card mr-2 ml-2" style="width: 16rem;">
			 <img src="img/produk/Rustic-WeddingBouquet.jpg" class="card-img-top " alt="...">
			  <div class="card-body bg-light">
			    <h5 class="card-title">Rustic Wedding Bouquet</h5>
			     <p class="card-text">Bunga Rustik Kapas.</p><br>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i><br>
			    <a href="#" class="btn btn-primary"data-target="#produk5" data-toggle="modal">Detail</a>
			    <a href="#" class="btn btn-danger">Rp 600.000</a>
			  </div>
			</div>
			<div class="card mr-2 ml-2" style="width: 16rem;">
			 <img src="img/produk/StarryGrass.jpg" class="card-img-top " alt="...">
			  <div class="card-body bg-light">
			    <h5 class="card-title">Starry Grass</h5>
			     <p class="card-text">Bunga kering Starry Grass.</p><br><br>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star-half-alt text-warning"></i><br>
			    <a href="#" class="btn btn-primary">Detail</a>
			    <a href="#" class="btn btn-danger">Rp 100.000</a>
			  </div>
			</div>
			<div class="card mr-2 ml-2" style="width: 16rem;">
			 <img src="img/produk/palem.jpg" class="card-img-top " alt="...">
			  <div class="card-body bg-light">
			    <h5 class="card-title">Rustic Palm</h5>
			     <p class="card-text">Daun Rustik Palem.</p><br><br>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i><br>
			    <a href="#" class="btn btn-primary">Detail</a>
			    <a href="#" class="btn btn-danger">Rp 200.000</a>
			  </div>
			</div>
			<div class="card mr-2 ml-2" style="width: 16rem;">
			 <img src="img/produk/baby-breath.jpg" class="card-img-top " alt="...">
			  <div class="card-body bg-light">
			    <h5 class="card-title">Baby's Breath</h5>
			     <p class="card-text">Bunga Baby Breath kering Viral.</p><br>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i>
			    <i class="fas fa-star text-warning"></i><br>
			    <a href="#" class="btn btn-primary">Detail</a>
			    <a href="#" class="btn btn-danger">Rp 250.000</a>
			  </div>
			</div>
			</div>

			<div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			        	<div class="col-md-6">
			        		<img src="img/produk/Dried-Rose.jpg">
			        	</div>
			        	<div class="col-md-6">
			        		<table class="table table-borderless">
			        			<tr>
			        				<th>Nama Produk</th>
			        				<td>Dried Rose</td>
			        			</tr>
			        			<tr>
			        				<th>Keterangan</th>
			        				<td>Dried Rose merupakan bunga mawar yang dikeringkan dengan proses yang higinies dan bahan bahan yang aman. Dried Rose memliki tingkat keawetan seperti bunga plastik sehingga cocok untuk dijadikan pajangan.</td>
			        			</tr>
			        			<tr>
			        				<th>Stok</th>
			        				<td>50 Buket</td>
			        			</tr>
			        			
			        		</table>


			        	</div>
			        </div>

			      </div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Order</button>
			      </div>
			    </div>
			  </div>
			</div>
				<div class="modal fade" id="produk2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			        	<div class="col-md-6">
			        		<img src="img/produk/mix-dried.jpg">
			        	</div>
			        	<div class="col-md-6">
			        		<table class="table table-borderless">
			        			<tr>
			        				<th>Nama Produk</th>
			        				<td>Mix Dried</td>
			        			</tr>
			        			<tr>
			        				<th>Keterangan</th>
			        				<td>Variasi berbagai jenis bunga kering dalam satu buket. Cocok untuk kado ulangtahun atau kado anniversary.</td>
			        			</tr>
			        			<tr>
			        				<th>Stok</th>
			        				<td>15 Buket</td>
			        			</tr>
			        			
			        		</table>


			        	</div>
			        </div>

			      </div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Order</button>
			      </div>
			    </div>
			  </div>
			</div>
				<div class="modal fade" id="produk3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			        	<div class="col-md-6">
			        		<img src="img/produk/Setaria.jpg">
			        	</div>
			        	<div class="col-md-6">
			        		<table class="table table-borderless">
			        			<tr>
			        				<th>Nama Produk</th>
			        				<td>Setaria</td>
			        			</tr>
			        			<tr>
			        				<th>Keterangan</th>
			        				<td>Setaria adalah satu dari banyaknya jenis tanaman yang dijadikan sebagai hiasan untuk meja belajar, meja samping tempat tidur maupun meja ruang tamu.</td>
			        			</tr>
			        			<tr>
			        				<th>Stok</th>
			        				<td>30 Buket</td>
			        			</tr>
			        			
			        		</table>


			        	</div>
			        </div>

			      </div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Order</button>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="modal fade" id="produk4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			        	<div class="col-md-6">
			        		<img src="img/produk/Sikas-Gold.jpg">
			        	</div>
			        	<div class="col-md-6">
			        		<table class="table table-borderless">
			        			<tr>
			        				<th>Nama Produk</th>
			        				<td>Sikas Gold</td>
			        			</tr>
			        			<tr>
			        				<th>Keterangan</th>
			        				<td>Berasal dari tanaman palem. Daun kering jenis Sikas Gold banyak sekali diminati oleh kaum milenial. Warnanya yang berkilau seperti emas membuat dekorasi ruangan menjadi lebih astetik dan elegan.</td>
			        			</tr>
			        			<tr>
			        				<th>Stok</th>
			        				<td>100 Helai</td>
			        			</tr>
			        			
			        		</table>


			        	</div>
			        </div>

			      </div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Order</button>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="modal fade" id="produk5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <div class="row">
			        	<div class="col-md-6">
			        		<img src="img/produk/Rustic-WeddingBouquet.jpg">
			        	</div>
			        	<div class="col-md-6">
			        		<table class="table table-borderless">
			        			<tr>
			        				<th>Nama Produk</th>
			        				<td>Rustic Wedding Bouquet</td>
			        			</tr>
			        			<tr>
			        				<th>Keterangan</th>
			        				<td>Bunga Rustik Kapas berwarna putih yang melambangkan kesucian dan kesetiaan. Sangat cocok untuk menemani hari bahagia di pernikahan anda.</td>
			        			</tr>
			        			<tr>
			        				<th>Stok</th>
			        				<td>65 buket</td>
			        			</tr>
			        			
			        		</table>


			        	</div>
			        </div>

			      </div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Order</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>

<footer class="bg-warning text-white p-5">
	<div class="row">
		<div class="col-md-3">
			<h5>LAYANAN PELANGGAN</h5>
			<ul>
				<li>Pusat Bantuan</li>
				<li>Cara Pembelian</li>
				<li>Pengiriman</li>
				<li>Cara Pengembalian</li>
			</ul>
		</div>
		<div class="col-md-3">
			<h5>TENTANG KAMI</h5>
			<p>Rustic Garden merupakan situs jual beli bunga kering yang berdiri dari tahun 2015 dan sudah menjadi kepercayaan jutaan pelanggan. Serta sudah mendapatkan berbagai penghargaan dan menjalin kerjasama dengan berbagai perusahaan besar dari berbagai negara.</p>
		</div>
		<div class="col-md-3">
			<h5>MITRA KERJASAMA</h5>
			<ul>
				<li>Thecoppelia</li>
				<li>Twigs_and_Twine</li>
				<li>Atrinasoendoro</li>
				<li>Flowerist</li>
				<li>Lovely Purple</li>
			</ul>
		</div>
		<div class="col-md-3">
			<h5>HUBUNGI KAMI</h5>
			<ul>
				<li>021-070-520-00</li>
				<li>021-270-720-01</li>
				<li>021-011-120-19</li>
				<li>rusticGarden@gmail.com</li>

			</ul>

		</div>
	</div>
</footer>

<div class="copyright text-center text-white font-weight-bold bg-dark">
	<p>Developed by RusticGarden Copyright <i class="far fa-copyright"></i> 2019</p>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>

</html>