<?
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion = ''){
    echo 'usted no tiene autorización';
    die();
}
  
session_destroy();
header("location:index.php");
?>
