<h5 class="text-uppercase">Hi Wellcome <?= $_SESSION['userAdmin'] ?></h5>
<div class="container mt-3">
<?php if (isset($_GET['menu'])) {
	$menu = $_GET['menu'];

	if ($menu == 'edit') { ?>

		<form method="POST" action="../app/model/admin/admin-edit-admin.php">
			<table class="table center mt-2">
				<input type="hidden" name="id" value="<?= $_SESSION['idAdmin'] ?>">
				<tr>
					<td>Username</td>
					<td><input class="form-control" type="text" name="userAdmin" value="<?= $_SESSION['userAdmin'] ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input class="form-control" type="password" name="passAdmin" value="<?= $_SESSION['passAdmin'] ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input class="form-control" type="email" name="emailAdmin" value="<?= $_SESSION['emailAdmin'] ?>"></td>
				</tr>
				<tr>
					<td>Level</td>
					<td><input class="form-control" type="text" name="level" value="<?= $_SESSION['level'] ?>" readonly></td>
				</tr>
			</table>
				<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
				<a href="?halaman=admin-profile" class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></a>
			</div>
		</form>

		
<?php	}
}else{ ?>

	<table class="table center mt-4">
		<tr>
			<td>Username</td>
			<td><input class="form-control" type="text" name="userAdmin" value="<?= $_SESSION['userAdmin'] ?>" readonly></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input class="form-control" type="password" name="passAdmin" value="<?= $_SESSION['passAdmin'] ?>"readonly></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input class="form-control" type="email" name="emailAdmin" value="<?= $_SESSION['emailAdmin'] ?>"readonly></td>
		</tr>
		<tr>
			<td>Level</td>
			<td><input class="form-control" type="text" name="status" value="<?= $_SESSION['level'] ?>"readonly></td>
		</tr>
	</table>
	<a href="?halaman=admin-profile&menu=edit" class="btn btn-primary btn-md"><i class="fas fa-user-edit"></i></a>



<?php } ?>