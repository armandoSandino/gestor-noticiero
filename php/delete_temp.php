<?php
session_start();
unset($_SESSION['id_articulo']);

unset($_SESSION['id_diario'] );

unset( $_SESSION['id_tipo_articulo']);
unset( $_SESSION['Titulo'] );
 unset( $_SESSION['Url'] );
unset( $_SESSION['Es_nacional'] );
session_destroy();
session_write_close();

?>