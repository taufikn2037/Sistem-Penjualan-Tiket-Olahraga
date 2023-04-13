<?php

	$idTiket	= $_GET['id'];

	$sql 	= "SELECT * FROM tiket WHERE idTiket = '$idTiket'";
	$exec 	= $conn->query($sql);
	$res	= $exec->fetch_array();

?>

<form class="form-control" method="POST" action="../app/model/admin/admin-edit-tiket.php" enctype="multipart/form-data">
<table class="table">
<input class="form-control" type="hidden" name="idTiket" required="" value="<?= $_GET['id'] ?>">
		<tr>
			<td><label>Jenis Laga</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="jenisLaga" required="" value="<?= $res['jenisLaga'] ?>"></td>
		</tr>
		<tr>
			<td><label>Kelas</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="jenisKelas" required="" value="<?= $res['jenisKelas'] ?>"></td>
		</tr>
		<tr>
			<td><label>jumlahT iket</label></td>
			<td>:</td>
			<td><input class="form-control" type="number" name="jumlahTiket" required="" value="<?= $res['jumlahTiket'] ?>"></td>
		</tr>
		<tr>
			<td><label>Harga Tiket</label></td>
			<td>:</td>
			<td><input class="form-control" type="number" name="hargaTiket" required="" value="<?= $res['hargaTiket'] ?>"></td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
</form>