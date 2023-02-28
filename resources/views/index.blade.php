<!doctype html>
<html lang="en">
  <head>
  	<title>Buku Tamu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Buku Tamu</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url({{('/frontend/images/bg-1.jpg')}});">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Form Buku Tamu</h3>
			      		</div>
								
								@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif
			      	</div>
				<form action="{{url('simpan-bukutamu')}}" method="POST" class="signin-form">
					@csrf	  
					<div class="form-group mb-3">
			      			<label class="label" for="name">Nama</label>
			      			<input type="text" name="nama" class="form-control" placeholder="Silahkan Isi Nama Anda" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Telepon</label>
						<input type="text" name="telepon" class="form-control" placeholder="Silahkan Isi Telepon Anda" required>

					</div>
					<div class="form-group mb-3">
						<label class="label" for="name">Alamat</label></br>
						<textarea class="form-control" name="alamat" placeholder="Silahkan Isi Alamat Anda"></textarea>
					</div>
			  <div class="form-group mb-3">
				  <label class="label" for="password">Keperluan</label>
				<input type="text" name="keperluan"class="form-control" placeholder="Silahkan IsiKeperluan Anda" required>
			  </div>
			  <div class="form-group mb-3">
				<label class="label" for="name">Tujuan</label>
				<input type="text" name="tujuan"class="form-control" placeholder="Siilahkan IsiTujuan Anda" required>
			</div>
	  <div class="form-group mb-3">
		  <label class="label" for="password">Email</label>
		<input type="text" name="email"class="form-control" placeholder="Silahkan IsiEmail Anda" required>
	  </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Simpan</button>
		            </div>
		           <div class="mt-5">
				   <a href="{{url('dashboard')}}">Dashboard</a>
				   </div>
		     	 </div>
					</div>
			</div>
		</div>
	</section>

	<script src="{{('frontend/js/jquery.min.js')}}"></script>
  <script src="{{('frontend/js/popper.js')}}"></script>
  <script src="{{('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{('frontend/js/main.js')}}"></script>

	</body>
</html>

