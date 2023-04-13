<form class="form-control" method="POST" action="../app/model/admin/admin-tambah-user.php" enctype="multipart/form-data">
	<table class="table">
		<tr>
			<td><label>Nama</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nama" required=""></td>
		</tr>
		<tr>
			<td><label>No Telp</label></td>
			<td>:</td>
			<td><input class="form-control" type="number" name="tlp" required=""></td>
		</tr>
		<tr>
			<td><label>Alamat</label></td>
			<td>:</td>
			<td><textarea name="alamat" id="" class="form-control"></textarea></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td>:</td>
			<td><input class="form-control" type="email" name="email" required=""></td>
		</tr>
		<tr>
			<td><label>Username</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="username" required=""></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td>:</td>
			<td><input class="form-control" type="password" name="password" required=""></td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
	<a href="?halaman=admin-data-user" class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></a>
</form>