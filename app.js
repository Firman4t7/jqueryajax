	$(document).ready(function(){

			// $('#isitable').load('datatable.php');
			kosong();
		});

	function buka() {
		$('#forminput').modal('show');
	}

	function simpan() {
			//$nama = $_POST['nama'];

			var id_user = $('#id_user').val();
			var nama = $('#nama').val();
			var username = $('#username').val();
			var password = $('#password').val();

			// cara kerja ajax

			$.ajax({

				url: 'simpan.php',
				type: 'POST',
				dataType: 'JSON',
				data: {
					'id_user':id_user,
					'nama':nama,
					'username':username,
					'password':password
				},
				success: function(data)
				{
					//var data = JSON.parse(data);
					console.log(data);

					if(data.pesan == 'berhasil')
					{
						kosong();
					}	
				}


			});	

		}

		function kosong() {

			//$('[nama = "nama"]')

			$('#id_user').val('')
			$('#nama').val('')
			$('#username').val('')
			$('#password').val('')
			$('#forminput').val('hide')
			$('#isitable').load('datatable.php')

		}



		// setelah file dimasukan github


		function hapus(id) {
			$.ajax({

				url: 'hapus.php',
				type: 'POST',
				dataType: 'JSON',
				data: {
					'id_user':id
				},
				success: function(data)
				{
					if(data.pesan == "berhasil")
					{
						kosong();
					}	

				}

			});	


		}

		function edit(id,nama,username,password)
		{

			$('#id_user').val(id)
			$('#nama').val(nama)
			$('#username').val(username)
			$('#password').val(password)


			$('#forminput').modal('show');

		}