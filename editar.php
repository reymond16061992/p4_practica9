
<html>
  <head>
<title>Editar</title>
  </head>
  <body>
    <h2>Editar</h2>

<?php
require_once('contacto.php');
if(isset($_GET['id']) && $_GET['id'] != ''){
	
	$modelo=new Contacto(); 
	$resultado=$modelo->seleccionarID($_GET['id']);
?>
   
   <form method="post" action="editadoguardar.php">

<input type="hidden" name="id" value="<?php echo$resultado['id'];?>"/> <p/>

<label for="txtNombre">Nombre </label><br/>
<input type="textnombre" name="txtNombre"value="<?php echo $resultado['nombre'];?>"/> <p/>
      
<label for="txtTelefono">Telefono</label><br/>
      <input type="texttelefono" name="txtTelefono" value="<?php echo $resultado['telefono'];?>"/> <p/>

<label for="txtCelular">Celular</label><br/>
      <input type="textcelular" name="txtCelular"value="<?php echo$resultado['celular'];?>"/> <p/>

<label for="txtDomicilio">Domicilio</label><br/>
      <input type="textdomicilio" name="txtDomicilio"value="<?php echo$resultado['direccion'];?>"/> <p/>

<label for="txtColonia">Colonia</label><br/>
      <input type="textcolonia" name="txtColonia"value="<?php echo$resultado['colonia'];?>"/> <p/>

<label for="txtCP">CP</label><br/>
      <input type="textcp" name="txtCP"value="<?php echo$resultado['cp'];?>"/> <p/>


<input type="submit" value="Guadar" />

<a href="Directorio.php"><h3>volver</h3></a>
    <?php
	 
	 }else{
	 echo "No tiene permiso para ingresar a esta pagina.";
	 }
    ?>
 </form>
  	
  </body>

