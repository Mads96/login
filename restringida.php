<?php
session_start();
if(isset($_SESSION['username'])){
echo "Si me puedes ver <a href='logout.php'>cerrar</a> ".$_SESSION['username'];
}else{echo "No me puedes ver";}
?>