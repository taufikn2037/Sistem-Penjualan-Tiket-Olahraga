<form class="form-control" method="POST" action="../app/model/user/user-upload-pembayaran.php" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td><label>iDPemesanan</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="idPemesanan" value="<?= $_GET['id'] ?>" readonly></td>
		</tr>
		<tr>
			<td><label>Bukti Pembayaran</label></td>
			<td>:</td>
			<td><input class="form-control" type="file" name="fotoPembayaran" required=""></td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
	<a href="?halaman=user-Tiket" class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></a>
</form>