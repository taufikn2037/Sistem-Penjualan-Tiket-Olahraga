<form class="form-control" method="POST" action="../app/model/admin/admin-tambah-tiket.php" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td><label>Jenis Laga</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="jenisLaga" required=""></td>
		</tr>
		<tr>
			<td><label>Kelas</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="jenisKelas" required=""></td>
		</tr>
		<tr>
			<td><label>jumlahT Tiket</label></td>
			<td>:</td>
			<td><input class="form-control" type="number" name="jumlahTiket" required=""></td>
		</tr>
		<tr>
			<td><label>Harga Tiket</label></td>
			<td>:</td>
			<td><input class="form-control" type="number" name="hargaTiket" required=""></td>
		</tr>
		<tr>
			<td><label>Pertandingan</label></td>
			<td>:</td>
			<td>
				<select class="form-control" name="idPertandingan">
				<?php 

					$sql  = "SELECT * FROM pertandingan WHERE status = 'Belum Dimulai'";
					$exe  = $conn->query($sql);
					while ($data = $exe->fetch_array()) { ?>

					<option value="<?= $data['idPertandingan'] ?>"><?= $data['tim1'] ?> VS <?= $data['tim2'] ?></option>

					<?php }	?>
				</select>
			</td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
	<a href="?halaman=admin-data-tiket" class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></a>
</form>