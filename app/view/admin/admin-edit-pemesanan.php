<?php

	$idUser	= $_GET['id'];

	$sql 	= "SELECT * FROM user WHERE idUser = '$idUser'";
	$exec 	= $conn->query($sql);
	$res	= $exec->fetch_array();

?>

<form class="form-control" method="POST" action="../app/model/admin/admin-edit-user.php" enctype="multipart/form-data">
	<table class="table">
	<input class="form-control" type="hidden" name="id" required="" value="<?= $_GET['id'] ?>">
		<tr>
			<td><label>Nama</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nama" required="" value="<?= $res['namaUser'] ?>"></td>
		</tr>
		<tr>
			<td><label>No Telp</label></td>
			<td>:</td>
			<td><input class="form-control" type="number" name="tlp" required="" value="<?= $res['noTelp'] ?>"></td>
		</tr>
		<tr>
			<td><label>Alamat</label></td>
			<td>:</td>
			<td><textarea name="alamat" id="" class="form-control"><?= $res['alamatUser'] ?></textarea></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td>:</td>
			<td><input class="form-control" type="email" name="email" required="" value="<?= $res['emailUser'] ?>"></td>
		</tr>
		<tr>
			<td><label>Username</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="username" required="" value="<?= $res['usernameUser'] ?>"></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td>:</td>
			<td><input class="form-control" type="password" name="password" required="" value="<?= $res['passUser'] ?>"></td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
</form>