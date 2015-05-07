# rename-update-php-mysql
Renombrar nombres de los archivos de un directorio y actualizarlos en mysql

<?php 
include('conexion.php');
$res = mysql_query("SELECT * FROM images");
while($row = mysql_fetch_array($res)){
  $clientes[]=$row; 
  $ide    = $row['ide']; 
  $cliente = $row['IDProducto'];
  $imagen = utf8_decode($row['imagen']);

  if(file_exists('jsons/'.$imagen)){
    rename('jsons/'.$imagen,'jsons/img/banners/'.$ide.".jpg");
  }
  $ids=0; 
  $newid="img/banners/".$ide.".jpg";
foreach($clientes as $row) 
$sql="UPDATE images SET imagen='".$newid."' WHERE ide = $ide"; 
if($result=mysql_query($sql) or die(mysql_error())) { 
//echo "Update".$ids++."<br />"; 
printf ("Registros actualizados: %d\n", mysql_affected_rows());
} 

}


?>


