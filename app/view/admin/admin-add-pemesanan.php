<form class="form-control" method="POST" action="../app/model/admin/admin-tambah-pemesanan.php" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td><h5 class="text-uppercase mb-3">Dafta Pertandingan</h5></td>
		</tr>
		<tr>
			<td>
				<select class="form-control" name="idTiket">
				<?php 

					$sql  = "SELECT * FROM tiket a, pertandingan b WHERE a.idPertandingan = b.idPertandingan AND b.status = 'Belum Dimulai' AND a.jumlahTiket != 0";
					$exe  = $conn->query($sql);
					while ($data = $exe->fetch_array()) { ?>

					<option value="<?= $data['idTiket'] ?>"><?= $data['tim1'] ?> VS <?= $data['tim2'] ?> | <?= $data['waktuTanding']?> - <?= $data['tanggalTanding']?> |  <?= $data['jumlahTiket']?> <?= $data['jenisKelas']?> <?= $data['hargaTiket']?> <?= $data['venue']?></option>

					<?php }	?>
				</select>
			</td>
		</tr>
	</table>
	<table class="table">
		<tr>
			<td><h5 class="text-uppercase mb-3">Masukan Data Pembelian</h5></td>
		</tr>
		<tr>
			<td>
				Email :	<input type="email" name="cekId" class="form-control">
			</td>
		</tr>
		</tr>
		<tr>
			<td>
				<span>Qty : </span> 
				<input type="number" name="qty" class="form-control">
			</td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
	<a href="?halaman=admin-data-user" class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></a>
</form>