<?php 
	require_once("conexion.php");
	$conexion= Conexion::Conectar();

	$id =$_POST['clave'];
$sql ="DELETE FROM articulos WHERE id_articulo='$id' ";
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