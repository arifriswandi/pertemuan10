<?php
require 'function.php';


$id = $_GET["id"];

if ( hapus($id) > 0 ) {

	echo "
		<scrip>
			alert('data berhasil dihapus');
			document.location.href = 'index.php';
		</scrip>
	";
} else {
	echo "
		<scrip>
			alert('data gagal dihapus');
			document.location.href = 'index.php';
		</scrip>
	";
}

?>