<?php

	$idAdmin	= $_GET['id'];

	$sql 	= "SELECT * FROM jenispertandingan WHERE idJenispertandingan = '$idAdmin'";
	$exec 	= $conn->query($sql);
	$res	= $exec->fetch_array();

?>

<form class="form-control" method="POST" action="../app/model/admin/admin-edit-jenisPertandingan.php" enctype="multipart/form-data">
	<table class="table">
		<input class="form-control" type="hidden" name="id" required="" value="<?= $_GET['id'] ?>">
		<tr>
			<td><label>Nama Jenis Pertandingan</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="jenisPertandingan" required="" value="<?= $res['namaJenispertandingan'] ?>"></td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
</form>