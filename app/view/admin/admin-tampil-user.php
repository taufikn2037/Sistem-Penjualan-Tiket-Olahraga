<h5 class="text-uppercase mb-3">Data | User</h5>
<a href="?halaman=admin-data-user&menu=tambah-user" class="btn btn-primary btn-md mb-3"><i class="fas fa-user-plus"></i></a>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>No Telp</td>
		<td>Alamat</td>		
		<td>Email</td>
		<td>Username</td>
		<td>Password</td>
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "SELECT * FROM user";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['namaUser']?></td>
			<td><?= $data['noTelp']?></td>
			<td><?= $data['alamatUser']?></td>
			<td><?= $data['emailUser']?></td>
			<td><?= $data['usernameUser']?></td>
			<td><input class="form-control" type="password" value="<?= $data['passUser']?>" readonly=""></td>
			<td>
				<a href="?halaman=admin-data-user&menu=edit-user&id=<?= $data['idUser'] ?>" class="btn btn-warning btn-md" style="color:white"><i class="fas fa-user-edit"></i></a>
				<a href="../app/model/admin/admin-delete-user.php?id=<?= $data['idUser'] ?>" class="btn btn-danger btn-md"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
<div class="table-responsive">

<?php 
	
	if (isset($_GET['menu'])) {

	$menu = $_GET['menu'];

	if ($menu == 'tambah-user') {
		include '../app/view/admin/admin-add-user.php';
	}else if($menu == 'edit-user'){
		include '../app/view/admin/admin-edit-user.php';
	}
} 

?>