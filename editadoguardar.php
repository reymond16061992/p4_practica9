<?php
require_once("contacto.php");
if(isset($_POST['id'])){
$id = $_POST['id'];
    
    $Nombre = $_POST['txtNombre'];
    $Telefono = $_POST['txtTelefono'];
    $Celular = $_POST['txtCelular'];
    $Domicilio = $_POST['txtDomicilio'];
    $Colonia = $_POST['txtColonia'];
    $CP = $_POST['txtCP'];
	 
   $contacto=new Contacto();
   $contacto->nombre = $Nombre;
   $contacto->telefono = $Telefono;
   $contacto->celular	 = $Celular;
   $contacto->domicilio = $Domicilio;
   $contacto->colonia = $Colonia;
   $contacto->cp = $CP;
 
$contacto->EditarID($_POST['id']);
   echo "Se ha editado con exito";
 

	 }else{
echo "No tiene permiso para ingresar a esta pagina.";
	 }
?>
	<a href="Directorio.php"><h3>Volver</h3></a>
