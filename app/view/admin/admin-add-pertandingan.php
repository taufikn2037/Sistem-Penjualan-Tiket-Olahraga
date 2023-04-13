<form class="form-control" method="POST" action="../app/model/admin/admin-tambah-pertandingan.php" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td><label>TIM 1</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tim1" required=""></td>
		</tr>
		<tr>
			<td><label>TIM 2</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tim2" required=""></td>
		</tr>
		<tr>
			<td><label>Waktu Tanding</label></td>
			<td>:</td>
			<td><input class="form-control" type="time" name="waktuTanding" required=""></textarea></td>
		</tr>
		<tr>
			<td><label>Tanggal Tanding</label></td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tanggalTanding" required=""></td>
		</tr>
		<tr>
			<td><label>Venue</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="venue" required=""></td>
		</tr>
		<tr>
			<td><label>Jenis Pertandingan</label></td>
			<td>:</td>
			<td>
			<select class="form-control" name="idJenispertandingan">
				<?php 

					$sql  = "SELECT * FROM jenispertandingan";
					$exe  = $conn->query($sql);
					while ($data = $exe->fetch_array()) { ?>

					<option value="<?= $data['idJenispertandingan'] ?>"><?= $data['namaJenispertandingan'] ?></option>

					<?php }	?>
				</select>
			</td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
	<a href="?halaman=admin-data-pertandingan" class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></a>
</form>