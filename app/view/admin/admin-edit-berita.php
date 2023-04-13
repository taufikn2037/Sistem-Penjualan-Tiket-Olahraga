<?php

	$idBerita	= $_GET['id'];

	$sql 	= "SELECT * FROM berita WHERE idBerita = '$idBerita'";
	$exec 	= $conn->query($sql);
	$res	= $exec->fetch_array();

?>

<form class="form-control" method="POST" action="../app/model/admin/admin-edit-berita.php" enctype="multipart/form-data">
	<table class="table">
	<input class="form-control" type="hidden" name="id" required="" value="<?= $_GET['id'] ?>">
		<tr>
			<td><label>Judul Berita</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="judulBerita" required="" value="<?= $res['judulBerita'] ?>"></td>
		</tr>
		<tr>
			<td><label>Tanggal Berita</label></td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglBerita" required="" readonly value="<?= $res['tanggalBerita'] ?>"></td>
		</tr>
		<tr>
			<td><label>Isi Berita</label></td>
			<td>:</td>
			<td><textarea class="form-control" name="isiBerita" required=""><?= $res['isiBerita'] ?></textarea></td>
		</tr>
		<tr>
			<td><label>Thumbnail</label></td>
			<td>:</td>
			<td>
				<img src="../gambar/berita/<?= $res['fotoBerita'] ?>" width="500"></br>
				<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
				<input name="fotoBerita" type="file" class="form-control">
			</td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
</form>