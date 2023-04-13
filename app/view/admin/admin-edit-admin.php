<?php

	$idAdmin	= $_GET['id'];

	$sql 	= "SELECT * FROM admin WHERE idAdmin = '$idAdmin'";
	$exec 	= $conn->query($sql);
	$res	= $exec->fetch_array();

?>

<form class="form-control" method="POST" action="../app/model/admin/admin-edit-admin.php" enctype="multipart/form-data">
	<table class="table">
		<input class="form-control" type="hidden" name="id" required="" value="<?= $_GET['id'] ?>">
		<tr>
			<td><label>Username</label></td>
			<td>:</td>
			<td><input class="form-control" type="text" name="userAdmin" required="" value="<?= $res['userAdmin'] ?>"></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td>:</td>
			<td><input class="form-control" type="password" name="passAdmin" required="" value="<?= $res['passAdmin'] ?>"></td>
		</tr>
		<tr>
			<td><label>Email</label></td>
			<td>:</td>
			<td><input class="form-control" type="email" name="emailAdmin" required="" value="<?= $res['emailAdmin'] ?>"></td>
		</tr>
		<tr>
			<td><label>Level</label></td>
			<td>:</td>
			<td>
				<select class="form-control" name="level">
					<option value="Admin">ADMIN</option>
					<option value="Content Writer">CONTENT WRITER</option>
					<option value="Front Office">Front Office</option>
				</select>
			</td>
		</tr>
	</table>
	<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
</form>