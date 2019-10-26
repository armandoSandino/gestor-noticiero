<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title> Test </title>
	<!-- <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="lib/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="lib/alertifyjs/css/themes/default.css">

	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 

	<!--<script src="lib/jquery-3.2.1.min.js"></script> -->
	<script type="text/javascript" src="lib/jquery-3.4.1.js"></script> 
	<script type="text/javascript"  src="lib/bootstrap/js/bootstrap.js" ></script>  
	<script type="text/javascript" src="lib/alertifyjs/alertify.js"></script>
	<script type="text/javascript" src="js/main.js"></script>


</head>
<body>


	<div class="container">
		<div id="main"></div>
	</div>



<!-- Modal de accinones -->
<div class="modal fade" id="modal_acciones_articulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Acciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
      	 <input type="text" hidden="" id="id_element_action" name="">
      	  <h5>Eliminar articulo</h5>
      	  <div id="example" >
      	  	     <button class="btn-secondary popover-test btn-block" title="dar click"> Eliminar</button>
      	  </div>
  <hr>
        <h5>Editar articulo</h5>
      	<button class="btn-secondary popover-test btn-block" title="dar click" data-toggle="modal" data-target="#modal_Edicion_Articulo" > Editar </button> <!-- onclick="PoblarFormeditarArticulo()" -->
  <hr>
         <h5>Mostrar articulo</h5>
      	<button class="btn-secondary popover-test btn-block" title="dar click" data-toggle="modal" data-target="#modal_Mostrar_Articulo" > Mostrar </button>
  <hr>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal"  >Close</button> <!-- onclick="deleteSession()" -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>















<!-- Modal para mostrar datos -->
<div class="modal fade" id="modal_Mostrar_Articulo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Informacion del Articulo</h4>
      </div>
      <div class="modal-body">
      	    <label>Identificador del Articulo</label>
      		<input type="text"  id="id_articulo_show" name="" class="form-control input-sm"  disabled>
        	<label>Id Diario</label>
        	<input type="number" name="" id="id_diario_show" class="form-control input-sm" disabled>
        	<label>Id Tipo Articulo</label>
        	<input type="number" name="" id="id_tipo_articulo_show" class="form-control input-sm" disabled>
        	<label>Titulo del articulo</label>
        	<input type="text" name="" id="Titulo_show" class="form-control input-sm" required disabled="">
        	<label>Url</label>
        	<input type="text" name="" id="Url_show" class="form-control input-sm" required disabled="">
        	<label>Noticia Nacional</label>
        	<input type="text"  id="id_nacional_show" name="" class="form-control input-sm"  disabled>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="cerrar_dialog_show" data-dismiss="modal"> Cerrar</button>
        
      </div>
    </div>

  </div>
</div>









<!-- Modal para edicion de datos-->
<div class="modal fade" id="modal_Edicion_Articulo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
      		<input type="text" hidden="" id="id_articulo_edit" name="">
        	<label>Id Diario</label>
        	<input type="number" name="" id="id_diario_edit" class="form-control input-sm" disabled>
        	<label>Id Tipo Articulo</label>
        	<input type="number" name="" id="id_tipo_articulo_edit" class="form-control input-sm" disabled>
        	<label>Titulo del articulo</label>
        	<input type="text" name="" id="Titulo_edit" class="form-control input-sm" required>
        	 <label>Url</label>
        	<input type="text" name="" id="Url_edit" class="form-control input-sm" required>

        	 <label>Noticia Nacional</label>
        	     <fieldset class="form-group" >
    <div class="row" >
     <!-- <legend class="col-form-label col-sm-3 pt-0">Noticia Nacional</legend> -->
      <div class="col-sm-9">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="noti_si_edit" id="noti_si_edit" value="Si">
          <label class="form-check-label" for="noti_si_edit">
            Si
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="noit_no_edit" id="noti_no_edit" value="No">
          <label class="form-check-label" for="noti_no_edit">
            No
          </label>
        </div>
      </div>
    </div>
  </fieldset>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="update_articulo" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>

  </div>
</div>




</body>

<footer>

<script type="text/javascript">
	$(document).ready(function(){
		$('#main').load('php/main.php');
	});
</script>

	<script type="text/javascript">
		$(document).ready( function(){
			$("#modal_acciones_articulo").hide();

			$("#update_articulo").click( function(){

			if( $("input[name='noti_si_edit']:radio").is(':checked') &&
			$("input[name='noti_no_edit']:radio").is(':checked') ){  
					alertify.message("Selecciones solo una opcion, si el articulo es nacional o no !");
			}else{

			if( $("input[name='noti_si_edit']:radio").is(':checked') || 
			$("input[name='noti_no_edit']:radio").is(':checked') ) {  
				if($("input[name='noti_si_edit']:radio").is(':checked')){
				update_data( $('input:radio[name=noti_si_edit]:checked').val() ) ;
				}
				if($("input[name='noti_no_edit']:radio").is(':checked')){
				update_data( $('input:radio[name=noti_no_edit]:checked').val() ) ;
				}

				}//end if

			}//end else
		        
			});	

			$("#example").click( function(){
				delete_data();
			});	
			$("#registrar_articulo").click( function(){
				registrar_articulo();
			});	
			
/*
			$("input[name=noti_no]").change(function () {	 
		      	alert( $(this).val() );
				//$("#noti_si").attr('checked', false);
	            $("#noti_no").attr('checked', true);
	            //$('input:radio[name=noti_no]').attr('checked',true);
	            $('input:radio[name=noti_si]').attr('checked',false);
			});*/

		/*$("input[name=noti_si]").click(function () {    
        alert("La edad seleccionada es: " + $('input:radio[name=noti_si]:checked').val());
        alert("La edad seleccionada es: " + $(this).val());
        $('input:radio[name=noti_no]').attr('checked',false);
        });
        
        $("input[name=noti_no]").click(function () {    
        alert("La edad seleccionada es: " + $('input:radio[name=noti_no]:checked').val());
        alert("La edad seleccionada es: " + $(this).val());
        
        $('input:radio[name=noti_si]').attr('checked',false);
        $("#noti_si").attr('checked', true);

        }); */

		});


	</script>
</footer>

</html>