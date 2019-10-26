<div class="container">
<div class="row" style="margin-top: 1em">
    <div class="col col-md-4" style="">
      <div style="border:1px solid black; padding: 1em   ">
      	<h1>Diarios:</h1>
<ul class="list-group">
  <li class="list-group-item">La Prensa</li>
  <li class="list-group-item active">El Nuevo Diario</li>
  <li class="list-group-item">Confidencial</li>
</ul>
      </div>
    </div>
<!-- end diarios -->

<div class="col col-md-4">
    <div style="border:1px solid black; padding: 1em;">
      	<h1>Articulos:</h1>

<ul class="list-group">
	<?php
	require_once("conexion.php");
	$conex = Conexion::Conectar();
	$sql= "SELECT * FROM articulos";
	$query = sqlsrv_query( $conex , $sql );
	if(  sqlsrv_num_rows( $query) !== 0 ){
		while( $fila= sqlsrv_fetch_array( $query ) ){
			$data = $fila['id_articulo']."_".$fila['id_diario']."_".$fila['id_tipo_articulo']."_".$fila['Titulo']."_".$fila['Url']."_".$fila['Es_nacional'];
		?>
		<li class="list-group-item" data-toggle="modal" data-target="#modal_acciones_articulo" onclick="extraerDatos('<?php echo $data?>')"> <?php echo $fila[0] ?> </li>
		<?php
	}
		
	}else{
		echo"
	<script type='text/javascript'>
		alertify.confirm('No hay artículos registrados. Desea registrar un diario.',
  function(){
    alertify.success('Ok');
  },
  function(){
    alertify.error('Cancel');
  });
	</script>";
	}
	sqlsrv_free_stmt( $query );
	Conexion::Desconectar();
	?>

</ul>

<!-- button -->
<div class="row" style="padding: 2em">
<div class="col col-md-6">
			<button class="btn btn-secondary btn-md btn-block" data-toggle="modal" data-target="#insertarArticulo">
				Borrar 
			</button>

</div>
<div class="col col-md-6">
			<button class="btn btn-primary btn-md btn-block" data-toggle="modal" data-target="#insertarArticulo">
				Nuevo
			</button>

</div>	
</div>
<!-- end button articulos -->
	
    </div>
</div>
<!-- end articulos  -->

<div class="col col-md-4">
      <div style="border:1px solid black; padding: 1em ">
      	<h1>Detalle:</h1>
      <!--	<form > -->
  <div class="form-group row" >
    <label for="name_art" class="col-sm-4 col-form-label">Titulo del Articulo</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="name_art" placeholder="Articulo" required>
    </div>
  </div>
  <div class="form-group row">
    <label for="url_art" class="col-sm-2 col-form-label">URL</label>
    <div class="col-sm-10">
      <input type="url" class="form-control" id="url_art" placeholder="URL" required>
    </div>
  </div>

    <fieldset class="form-group" >
    <div class="row" >
      <legend class="col-form-label col-sm-3 pt-0">Noticia Nacional</legend>
      <div class="col-sm-9">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="noti_si" id="noti_si" value="Si" >
          <label class="form-check-label" for="noti_si">
            Si
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="noti_no" id="noti_no" value="No">
          <label class="form-check-label" for="noti_no">
            No
          </label>
        </div>
      </div>
    </div>
  </fieldset>


<div class="input-group mb-3">
<div class="row">
	<div class="col-md-5">
		<label>Tipo de articulo: </label>
	</div>
	<div class="col-md-7">
	<select class="custom-select" onchange="ShowSelectedArticulo();"  id="new_articulo" name="new_articulo">
    <option value="Seleccione" selected> Seleccione </option>
    <option value="Politico">Politico</option>
    <option value="Economico">Economico</option>
    <option value="Social">Social</option>
    <option value="Farándula">Farándula</option>
    <option value="Sucesos">Sucesos</option>
    <option value="Tecnologia">Tecnologia</option>
  </select>
	</div>
</div>
</div>


  <div class="form-group row">
    <div class="col-md-6">
      <button type="submit" class="btn btn-secondary btn-block">Cancelar</button>
    </div>
     <div class="col-md-6">
      <button type="button" class="btn btn-primary btn-block" onclick="registrar_articulo()" id="registrar_articulo">Salvar</button>
    </div>
  </div>

 <!-- </form> -->

      </div>
</div>
<!-- end detalles -->

  </div>
</div>
<!-- end container -->