<?php

class Conexion
{
    private static $db = 'examen';
    private static $server = "209.17.116.5\SQLEXPRESS,1433";#servidor\instancia,numero de puerto( por defecto es 1433 )
// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
    private static $user = 'e1';
    private static $passwd = 'Varios4321';
    private static $cont  = null;
    private static $conec_info=  null;

    public function __construct() {
        die('Init function is not allowed');
    }
    public static function Conectar()
    {
       if ( null == self::$cont )
       {     
        try
        {
          self::$conec_info = array("Database"=> self::$db ,"UID"=> self::$user ,"PWD"=> self::$passwd );
          self::$cont =   sqlsrv_connect( self::$server, self::$conec_info ); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
    public static function Desconectar()
    {
        sqlsrv_close( self::$cont );
        self::$cont = null;
    }
}

/*$server = "DIACACHIMBA\SQLEXPRESS,1433";#servidor\instancia,numero de puerto( por defecto es 1433 )
// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$conec_info = array("Database"=>"productos","UID"=>"root","PWD"=>"sandino");
$con = sqlsrv_connect( $server, $conec_info );

if( $con ){
	echo "Conexion establecida. <br/> ";
}else{
	echo "No se pudo establecer la conexion. <br/>";
	die( print_r( sqlsrv_errors(), true ) );
}
*/

/*
   $query = "SELECT * FROM articulos";
    $res =  sqlsrv_query($con , $query, array(), array("Scrollable" => SQLSRV_CURSOR_KEYSET ));
    if (0 !== sqlsrv_num_rows($res)){
        while ($fila = sqlsrv_fetch_array($res)) {
            echo "Code: ".utf8_encode($fila['code'])." "
                .utf8_encode($fila['nombre'])." "
                .utf8_encode($fila['categoria']);
            echo "<br>";
        }
    }else{
    	echo "No hay datos";
    }
    */
