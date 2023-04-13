<form class="form-control" method="POST" action="../app/model/admin/admin-tambah-berita.php" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td><label>Judul Berita</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="judulBerita" required=""></td>
		</tr>
		<tr>
			<td><label>Tanggal Berita</label></td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglBerita" required="" readonly></td>
		</tr>
		<tr>
			<td><label>Isi Berita</label></td>
			<td>:</td>
			<td><textarea class="form-control" name="isiBerita" required=""></textarea></td>
		</tr>
		<tr>
			<td><label>Thumbnail</label></td>
			<td>:</td>
			<td><input class="form-control" type="file" name="fotoBerita" required=""></td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
	<a href="?halaman=admin-laporan-berita" class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></a>
</form>