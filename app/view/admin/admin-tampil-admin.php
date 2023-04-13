<h5 class="text-uppercase mb-3">Data | Petugas</h5>
<a href="?halaman=admin-data-admin&menu=tambah-admin" class="btn btn-primary btn-md mb-3"><i class="fas fa-user-plus"></i></a>
<div class="table-responsive">
<table class="table table-striped">
	<tr>
		<td>No</td>
		<td>Username</td>
		<td>Password</td>
		<td>Email</td>
		<td>Level</td>
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "SELECT * FROM admin";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['userAdmin']?></td>
			<td><input class="form-control" type="password" value="<?= $data['passAdmin']?>" readonly=""></td>
			<td><input class="form-control" type="email" value="<?= $data['emailAdmin']?>" readonly=""></td>
			<td><?= $data['level']?></td>
			<td>
				<a href="?halaman=admin-data-admin&menu=edit-admin&id=<?= $data['idAdmin'] ?>" class="btn btn-warning btn-md" style="color:white"><i class="fas fa-user-edit"></i></a>
				<a href="../app/model/admin/admin-delete-admin.php?id=<?= $data['idAdmin'] ?>" class="btn btn-danger btn-md"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
</div>

<?php 
	
	if (isset($_GET['menu'])) {

	$menu = $_GET['menu'];

	if ($menu == 'tambah-admin') {
		include '../app/view/admin/admin-add-admin.php';
	}else if($menu == 'edit-admin'){
		include '../app/view/admin/admin-edit-admin.php';
	}
} 

?>