<?php 
	require_once("conexion.php");
	$conexion= Conexion::Conectar();

	$id_diario  = $_POST['id_diario']; 
	$id_tipo_articulo = $_POST['id_tipo_articulo'];
	$Titulo = $_POST['Titulo'];
	$Url = $_POST['Url'];
    $Es_nacional = $_POST['Es_nacional']; 
	
$sql ="INSERT INTO articulos(id_diario,id_tipo_articulo,Titulo,Url,Es_nacional) VALUES('$id_diario','$id_tipo_articulo','$Titulo','$Url','$Es_nacional')";
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