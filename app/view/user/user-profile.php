<h5 class="text-uppercase">Hi Wellcome <?= $_SESSION['usernameUser'] ?></h5>
<div class="container mt-3">
<?php if (isset($_GET['menu'])) {
	$menu = $_GET['menu'];

	if ($menu == 'edit') { ?>

		<form method="POST" action="../app/model/user/user-edit-user.php">
		<table class="table center mt-2">
				<input type="hidden" name="id" value="<?= $_SESSION['idUser'] ?>">
				<tr>
					<td>Nama</td>
					<td><input class="form-control" type="text" name="namaUser" value="<?= $_SESSION['namaUser'] ?>"></td>
				</tr>
				<tr>
					<td>No Telp</td>
					<td><input class="form-control" type="number" name="noTelp" value="<?= $_SESSION['noTelp'] ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea class="form-control" name="alamatUser"><?= $_SESSION['alamatUser'] ?></textarea>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input class="form-control" type="text" name="emailUser" value="<?= $_SESSION['emailUser'] ?>" ></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input class="form-control" type="text" name="username" value="<?= $_SESSION['usernameUser'] ?>" ></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input class="form-control" type="password" name="password" value="<?= $_SESSION['passUser'] ?>" ></td>
				</tr>
			</table>
				<button type="submit" name="submit" class="btn btn-success btn-md"><i class="fas fa-paper-plane"></i></button>
				<a href="?halaman=user-profile" class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></a>
			</div>
		</form>

		
<?php	}
}else{ ?>

<table class="table center mt-2">
				<input type="hidden" name="id" value="<?= $_SESSION['idUser'] ?>">
				<tr>
					<td>Nama</td>
					<td><input readonly class="form-control" type="text" name="namaUser" value="<?= $_SESSION['namaUser'] ?>"></td>
				</tr>
				<tr>
					<td>No Telp</td>
					<td><input readonly class="form-control" type="number" name="noTelp" value="<?= $_SESSION['noTelp'] ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea readonly class="form-control" name="alamatUser"><?= $_SESSION['alamatUser'] ?></textarea>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input readonly class="form-control" type="text" name="emailUser" value="<?= $_SESSION['emailUser'] ?>" readonly></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input readonly class="form-control" type="text" name="username" value="<?= $_SESSION['usernameUser'] ?>" readonly></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input readonly class="form-control" type="password" name="password" value="<?= $_SESSION['passUser'] ?>" readonly></td>
				</tr>
			</table>
	<a href="?halaman=user-profile&menu=edit" class="btn btn-primary btn-md"><i class="fas fa-user-edit"></i></a>



<?php } ?>