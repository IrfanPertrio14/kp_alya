<?php 
session_start();

$id_menu = $_GET['id_menu'];

if (isset($_SESSION['pesanan'][$id_menu]))
{
	$_SESSION['pesanan'][$id_menu]+=1;
}

else 
{
	$_SESSION['pesanan'][$id_menu]=1;
}

echo "<script>alert('Produk telah masuk ke pesanan anda');</script>";
echo "<script>location= 'menu_pembeli.php'</script>";

 ?>