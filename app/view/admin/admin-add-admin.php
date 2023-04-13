<form class="form-control" method="POST" action="../app/model/admin/admin-tambah-admin.php" enctype="multipart/form-data">
	<table class="table">
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
		<tr>
			<td><label>Email</label></td>
			<td>:</td>
			<td><input class="form-control" type="email" name="email" required=""></td>
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
	<a href="?halaman=admin-data-admin" class="btn btn-warning btn-md text-white"><i class="fas fa-times"></i></a>
</form>