<?php 
	require_once("conexion.php");
	$conexion= Conexion::Conectar();

	$id =$_POST['clave'];
	$id_diario  = $_POST['id_diario']; 
	$id_tipo_articulo = $_POST['id_tipo_articulo'];
	$Titulo = $_POST['Titulo'];
	$Url = $_POST['Url'];
    $Es_nacional = $_POST['Es_nacional']; 
	
$sql ="UPDATE articulos SET Titulo='$Titulo', Url='$Url',Es_nacional='$Es_nacional' WHERE id_articulo='$id' ";
                                $query = sqlsrv_query( $conexion , $sql );
                                $res = sqlsrv_rows_affected( $query );
    sqlsrv_free_stmt( $query );
    Conexion::Desconectar();

    if( $query == FALSE or $res == false ){
        echo false;
        die( FormatErrors( sqlsrv_errors() ) );
    }else{
        echo true;
    }

 ?>