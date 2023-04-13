<?php

	$idPertandingan	= $_GET['id'];

	$sql 	= "SELECT * FROM pertandingan WHERE idPertandingan = '$idPertandingan'";
	$exec 	= $conn->query($sql);
	$res	= $exec->fetch_array();

?>

<form class="form-control" method="POST" action="../app/model/admin/admin-edit-pertandingan.php" enctype="multipart/form-data">
	<table class="table">
	<input class="form-control" type="hidden" name="id" required="" value="<?= $_GET['id'] ?>">
		<tr>
			<td><label>TIM 1</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tim1" required="" value="<?= $res['tim1'] ?>"></td>
		</tr>
		<tr>
			<td><label>TIM 2</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tim2" required=""value="<?= $res['tim2'] ?>"></td>
		</tr>
		<tr>
			<td><label>Waktu Tanding</label></td>
			<td>:</td>
			<td><input class="form-control" type="time" name="waktuTanding" required="" value="<?= $res['waktuTanding'] ?>"></textarea></td>
		</tr>
		<tr>
			<td><label>Tanggal Tanding</label></td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tanggalTanding" required="" value="<?= $res['tanggalTanding'] ?>"></td>
		</tr>
		<tr>
			<td><label>venue</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="venue" required="" value="<?= $res['venue'] ?>"></td>
		</tr>
		<tr>
			<td><label>Status</label></td>
			<td>:</td>
			<td>
			<select class="form-control" name="status">				
				<option value="Selesai">Selesai</option>
				<option value="Belum Dimulai">Belum Dimulai</option>		
			</select>
			</td>
		</tr>
		<tr>
			<td><label>Jenis Pertandingan</label></td>
			<td>:</td>
			<td>
			<select class="form-control" name="idJenispertandingan">
				<?php 

					$sql  = "SELECT * FROM jenispertandingan";
					$exe  = $conn->query($sql);
					while ($data = $exe->fetch_array()) { 

						if($res['idJenispertandingan'] == $data['idJenispertandingan']){
							$select = "selected";
						}else{
							$select = "";
						}  ?>
						
						<option <?= $select ?> value="<?= $data['idJenispertandingan'] ?>"><?= $data['namaJenispertandingan'] ?> </option>


					<?php }	?>
				</select>
			</td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
</form>