<?php

session_start();

 $_SESSION['id_articulo'] = $_POST['id_articulo'];
 $_SESSION['id_diario'] = $_POST['id_diario'];
 $_SESSION['id_tipo_articulo'] = $_POST['id_tipo_articulo'];
 $_SESSION['Titulo'] = $_POST['Titulo'];
 $_SESSION['Url'] = $_POST['Url'];
 $_SESSION['Es_nacional'] = $_POST['Es_nacional'];

//session_destroy();
 
/*if ( !isset($_SESSION['id_articulo']) ) {
  $_SESSION['id_articulo'] = $_POST['id_articulo'];
  $_SESSION['id_diario'] = $_POST['id_diario'];
  $_SESSION['id_tipo_articulo'] = $_POST['id_tipo_articulo'];
  $_SESSION['Titulo'] = $_POST['Titulo'];
  $_SESSION['Url'] = $_POST['Url'];
  $_SESSION['Es_nacional'] = $_POST['Es_nacional'];
} else{

unset($_SESSION['id_articulo']);
session_destroy();
session_write_close();

}*/


?>