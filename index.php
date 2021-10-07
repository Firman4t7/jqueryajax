<!DOCTYPE html>
<html>
<head>
	<title>Belajar Jquery</title>
</head>
<!-- link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<body>

	<!-- script -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


	<!-- contetnt -->


	<br>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<button type="button" class="btn btn-primary btn-sm" onclick="buka()">ADD</button>
			</div>
			<div class="card-body">
				<div id="isitable"></div>
			</div>
		</div>
	</div>





	<!-- The Modal -->
	<div class="modal" id="forminput">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Data User CRUD</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<!-- untuk edit -->
					<input type="hidden" name="" id="id_user">
					<div class="form-group">
						<label for="Nama">Nama</label>
						<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
					</div>
					<div class="form-group">
						<label for="Username">Username</label>
						<input type="text" name="username" id="username" class="form-control" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="Password">Password</label>
						<input type="text" name="password" id="password" class="form-control" placeholder="Password">
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-success" onclick="simpan()" data-dismiss="modal">Simpan</button>
					<button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>



	<script src="app.js" ></script>




</body>
</html>