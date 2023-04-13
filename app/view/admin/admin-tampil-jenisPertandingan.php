<h5 class="text-uppercase mb-3">Data | Jenis Pertandingan</h5>
<a href="?halaman=admin-data-jenisPertandingan&menu=tambah-jenisPertandingan" class="btn btn-primary btn-md mb-3"><i class="fas fa-user-plus"></i></a>
<div class="table-responsive">
<table class="table table-striped">
	<tr>
		<td>No</td>
		<td>Id Jenis Pertandingan</td>
		<td>Nama Pertandingan</td>
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "SELECT * FROM jenispertandingan";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['idJenispertandingan']?></td>
			<td><?= $data['namaJenispertandingan']?></td>
			<td>
				<a href="?halaman=admin-data-jenisPertandingan&menu=edit-jenisPertandingan&id=<?= $data['idJenispertandingan'] ?>" class="btn btn-warning btn-md" style="color:white"><i class="fas fa-user-edit"></i></a>
				<a href="../app/model/admin/admin-delete-jenisPertandingan.php?id=<?= $data['idJenispertandingan'] ?>" class="btn btn-danger btn-md"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
</div>

<?php 
	
	if (isset($_GET['menu'])) {

	$menu = $_GET['menu'];

	if ($menu == 'tambah-jenisPertandingan') {
		include '../app/view/admin/admin-add-jenisPertandingan.php';
	}else if($menu == 'edit-jenisPertandingan'){
		include '../app/view/admin/admin-edit-jenisPertandingan.php';
	}
} 

?>