<?php 	
if (isset($_GET['page'])) {
	if ($_GET['page'] == 'data-siswa') {
			include_once('tables/datasiswa.php');
	}
	else if ($_GET['page'] == 'data-kelas') {
		include_once('tables/datakelas.php');
	}		
	else if ($_GET['page'] == 'data-sekolah') {
		include_once('tables/datasekolah.php');
	}
 }

 else if(isset($_GET['add'])){
	if ($_GET['add'] == 'add-kelas') {
		include_once('forms/add-kelas.php');
	}
	else if($_GET['add'] == 'add-sekolah') {
		include_once('forms/add-sekolah.php');
	}
	else if($_GET['add'] == 'add-siswa') {
		include_once('forms/add-siswa.php');
	}
}

else if(isset($_GET['insert'])){
	if ($_GET['insert'] == 'insert-kelas') {
		include_once('core/insert.php');
	}
	else if ($_GET['insert'] == 'insert-siswa') {
		include_once('core/insert.php');
	}
	else if ($_GET['insert'] == 'insert-sekolah') {
		include_once('core/insert.php');
	}
}

else if(isset($_GET['edit-kelas'])){
		include_once('core/edit.php');
		include_once('forms/edit-kelas.php');	
}
else if(isset($_GET['edit-siswa'])){
		include_once('core/edit.php');
		include_once('forms/edit-siswa.php');	
}
else if(isset($_GET['edit-sekolah'])){
		include_once('core/edit.php');
		include_once('forms/edit-sekolah.php');		
}

else if(isset($_GET['delete-kelas'])){
		include_once('core/delete.php');
}
else if(isset($_GET['delete-siswa'])){
		include_once('core/delete.php');
}
else if(isset($_GET['delete-sekolah'])){
		include_once('core/delete.php');
}
 else{
 	include_once('article/article.php');
 	} ?>