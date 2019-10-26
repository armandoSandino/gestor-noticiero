<?php
require_once("conexion.php");
$conex = Conexion::Conectar();
//$id = $_POST['identificador'];
$sql ="SELECT * FROM articulos WHERE id_articulo='5'";
$query = sqlsrv_query( $conex , $sql );

if( 0 !== sqlsrv_num_rows( $query ) ){
	
	while( $fila = sqlsrv_fetch_array( $query) ){
		
     $arr = array('respuesta'=>'200 OK', 'id_articulo'=> $fila['id_articulo'] , 'id_diario'=>  $fila['id_diario'] ,
	'id_tipo_articulo'=> $fila['id_tipo_articulo'],
	'Titulo'=>$fila['Titulo'], 'Url'=> $fila['Url'] , 'Es_nacional'=> $fila['Es_nacional'] ); 

	/*$arr = array('200 OK',  $fila['id_articulo'] ,  $fila['id_diario'] ,
	 $fila['id_tipo_articulo'],
	$fila['Titulo'],  $fila['Url'] ,  $fila['Es_nacional'] );*/ 

	sqlsrv_free_stmt( $query );
	Conexion::Desconectar();
	echo json_encode( $arr );
	
		break;
	}


}else{
	sqlsrv_free_stmt( $query );
	Conexion::Desconectar();
	$arr = array('respuesta'=>'NO_DATA');
	json_encode( $arr );

}



?>