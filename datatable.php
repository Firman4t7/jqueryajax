
<table class="table table-striped" border="1">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Aksi</th>
		</tr>
	</thead>

	<?php 

	include "koneksi.php";
	$data = $conn->query("SELECT * FROM tb_user");
	foreach ($data as $i => $nilai) {
		?>
		<tbody>
			<tr>
				<td><?= $i+1?></td>
				<td><?= $nilai['nama'];?></td>
				<td><?= $nilai['username'];?></td>
				<td><?= $nilai['password'];?></td>
				<td>
					<button type="button" class="btn btn-warning btn-sm" onclick="edit(
						'<?= $nilai['id_user']?>',
						'<?= $nilai['nama']?>',
						'<?= $nilai['username']?>',
						'<?= $nilai['password']?>'

						)">Edit</button>
						<button type="button" class="btn btn-danger btn-sm" onclick="hapus('<?= $nilai['id_user']?>')" >Hapus</button>
					</td>
				</tr>

			</tbody>

		<?php } ?>

	</table>