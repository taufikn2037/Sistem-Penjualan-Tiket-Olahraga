<h5 class="text-uppercase mb-3">Laporan | Berita</h5>
<a href="?halaman=admin-laporan-berita&menu=tambah-berita" class="btn btn-primary btn-md mb-3"><i class="fas fa-user-plus"></i></a>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<tr>
		<td>No</td>
		<td>Judul Berita</td>
		<td>Tanggal Berita</td>
		<td>isi Berita</td>			
		<td>Writer</td>	
		<td>Foto</td>
		<td>Action</td>
	</tr>
	<?php 
	$sql  = "SELECT * FROM berita a, admin b WHERE a.idAdmin = b.idAdmin;";
	$exe  = $conn->query($sql);
	$no = 1;
	while ($data = $exe->fetch_array()) { ?>
		<tr>
			<td><?= $no ++ ?></td>
			<td><?= $data['judulBerita']?></td>
			<td><?= $data['tanggalBerita']?></td>
			<td><textarea class="form-control"><?= $data['isiBerita']?></textarea></td>
			<td><?= $data['userAdmin']?></td>
			<td><img src="../gambar/berita/<?= $data['fotoBerita'] ?>" class="img-fluid" width="100"></td>
			<td>
				<a href="?halaman=admin-laporan-berita&menu=edit-berita&id=<?= $data['idBerita'] ?>" class="btn btn-warning btn-md" style="color:white"><i class="fas fa-user-edit"></i></a>
				<a href="../app/model/admin/admin-delete-berita.php?id=<?= $data['idBerita'] ?>" class="btn btn-danger btn-md"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
	
<?php }	?>
</table>
<div class="table-responsive">

<?php 
	
	if (isset($_GET['menu'])) {

	$menu = $_GET['menu'];

	if ($menu == 'tambah-berita') {
		include '../app/view/admin/admin-add-berita.php';
	}else if($menu == 'edit-berita'){
		include '../app/view/admin/admin-edit-berita.php';
	}
} 

?>