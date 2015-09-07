<?php
session_start();
include("conexion.php");
if(isset($_POST['user']) && !empty($_POST['user']) &&
	isset($_POST['pw']) && !empty($_POST['pw'])	)
{

$con=mysql_connect($host, $user, $pw) or die("problemas con servidor");
mysql_select_db($db, $con) or die("problemas con DB");

	$sel= mysql_query("SELECT USER, PW FROM usuarios WHERE USER= '$_POST[user]'", $con);

$sesion= mysql_fetch_array($sel);

if($_POST['pw']==$sesion['PW']){
	$_SESSION['username'] = $_POST['user'];
	echo "sesion exitosa... Hola_".$_SESSION['username'];

}else{echo "ERROR";}

}else{echo "deves llenar ambos campos";
	echo "<a href=form.php> salir </a>";
}

?>