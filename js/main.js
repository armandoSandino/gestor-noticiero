
function delete_data(){
	var params ={
		clave: $("#id_element_action").val()
	};
	$.ajax({
		type:"POST",
		url:"php/delete_articulo.php",
		data: params,
		success: function( response ){
			if( response ){	
			$('#main').load('php/main.php');	
			alertify.alert("Registro Eliminado.", function(){
                alertify.message('OK');
            });
			}else
				alertify.error("Registro no eliminado, intentelo luego.");
		},
		error: function( ){
		alertify.warning("Disculpe intentelo luego.");
		console.log("La peticion no tuvo exito.");
		}
	}).done( function( mensaje ){
		console.log("La peticion concluyo.");
	});
}
function update_data( cual_noticia ){
	nacion = -1;
	if( cual_noticia == "Si"){
		nacion = 1;
	}else if( cual_noticia=="No" ){
		nacion = 0;
	}if( nacion == -1){//la nacionalidad  de la noticia no fue seleccionada
		alertify.warning("Intentalo luego.");
	}
	var params = {
		clave: $("#id_articulo_edit").val(),
		id_diario: $("#id_diario_edit").val(),
		id_tipo_articulo: $("#id_tipo_articulo_edit").val(),
		Titulo: $("#Titulo_edit").val(),
		Url: $("#Url_edit").val(),
		Es_nacional: nacion
	};
	$.ajax({
		type:"POST",
		url:"php/update_articulo.php",
		data:params,
		success: function( response ){
			if( response ){		
			$('#main').load('php/main.php');
			alertify.alert("Registro actualizado.", function(){
                alertify.message('OK');
            });

			}else
				alertify.error("Registro no actualizado, intentelo luego.");
		},
		error: function( ){
		alertify.warning("Disculpe intentelo luego.");
		console.log("La peticion no tuvo exito.");
		}
	}).done( function( mensaje ){
		console.log("La peticion concluyo.");
	});
}

function registrar_articulo(){
			valor = 3;
			si = false; no  = false;
			if( $(".form-check input[name='noti_si']:radio").is(':checked')) {  
			//alertify.message( $('input:radio[name=noti_si]:checked').val() );
			 si = true; valor= 1;
			}
		    if( $(".form-check input[name='noti_no']:radio").is(':checked')) {  
			//alertify.message( $('input:radio[name=noti_si]:checked').val() ); 
			 no = true; valor = 0;
			} 
			if( si && no ){
			alertify.message("Favor solo necesitamos saber si el articulo es nacional o no.");	
			return;
			}if( si==false && no ==false ){
			alertify.message("Favor solo necesitamos saber si el articulo es nacional o no, marque una opcion.");	
			return;
			}

var tipo_articulo = document.getElementById("new_articulo").value;
if( tipo_articulo == "Seleccione"){
	alertify.message("Seleccione el tipo del articulo a publicar."); return;
}valor_tipo_articulo = 421 ;
switch( tipo_articulo ){
	case "Politico":{
		valor_tipo_articulo = 1;
	}break;
	case "Economico":{
		valor_tipo_articulo = 2;
	}break;
	case "Social":{
		valor_tipo_articulo = 3;
	}break;
	case "Farándula":{
		valor_tipo_articulo = 4;
	}break;
	case "Sucesos":{
		valor_tipo_articulo = 5;
	}break;
	case "Tecnologia":{
		valor_tipo_articulo = 6;
	}break;
	default: break;
}
	var params = {
		Titulo: $("#name_art").val(),
		Url: $("#url_art").val(),
		Es_nacional: valor,
		id_tipo_articulo: valor_tipo_articulo,
		id_diario : 1
	};

	$.ajax({
		type:"POST",
		url:"php/insert_articulo.php",
		data:params,
		success: function( response ){
			if( response ){		
            $('#main').load('php/main.php');
			alertify.alert("Registro agregado.", function(){
                alertify.message('OK');
            });
			}else
				alertify.error("Registro no agregado, intentelo luego.");
		},
		error: function( ){
		alertify.warning("Disculpe intentelo luego.");
		console.log("La peticion no tuvo exito.");
		}
	}).done( function( mensaje ){
		console.log("La peticion concluyo.");
	});

}




function extraerDatos( data ){
	dat = data.split("_");
	var params = {
	id_articulo: dat[0],
	id_diario: dat[1],
	id_tipo_articulo: dat[2],
	Titulo:dat[3],
	Url: dat[4],
	Es_nacional: dat[5]	
	};
	$("#id_element_action").val(dat[0]);

//datos editar
	$("#id_articulo_edit").val( dat[0]);
	$("#id_diario_edit").val(dat[1]);
	$("#id_tipo_articulo_edit").val( dat[2] );
	$("#Titulo_edit").val( dat[3]) ;
	$("#Url_edit").val( dat[4] );

	$("#noti_si_edit").attr('checked', false );
	$("#noti_no_edit").attr('checked', false );

	if( dat[5] == 1){
		$("#noti_si_edit").attr('checked', true);
	}else if( dat[5] == 0 ){
		$("#noti_no_edit").attr('checked', true);
	}

	//datos mostrar detalle
	$("#id_articulo_show").val( dat[0]);
	$("#id_diario_show").val(dat[1]);
	$("#id_tipo_articulo_show").val( dat[2] );
	$("#Titulo_show").val( dat[3]) ;
	$("#Url_show").val( dat[4] );


	if( dat[5] === 1){
		$("#id_nacional_show").val("SI");
	}else if( dat[5] == 0 ){
		$("#id_nacional_edit").val("NO");
	}
}


function ShowSelectedArticulo(){
/* Para obtener el valor */
var cod = document.getElementById("new_articulo").value;
 //alertify.message( cod );
/* Para obtener el texto */
var combo = document.getElementById("new_articulo");
var selected = combo.options[combo.selectedIndex].text;

}













function  PoblarFormeditarArticulo(){
	var ide ={
		identificador:$("#id_element_action").val()
	}; 
	
	$.ajax({
		type:"POST",
		url:"php/extraerDatos.php",
		data: ide ,
		dataType:'json',
		success: function( json ){
			alertify.message( json );

			if( response.respuesta  == '200 OK' ){		
				//alertify.success("Registro actualizado");
				alertify.alert("Registro actualizado.", function(){
                alertify.message('OK');
            });
			}else
				alertify.error("Registro no actualizado, intentelo luego.");
				console.log("La peticion concluyo exitisamante."); 

		},
		error: function( ){
		alertify.warning("Disculpe intentelo luego.");
		console.log("La peticion no tuvo exito.");
		}
	}).done( function( mensaje ){
		console.log("La peticion concluyo.");
	});

}




function deleteSession(){
	$.ajax({
		type:"POST",
		url:"./php/delete_temp.php",
		data:"borrando",
		success: function( response ){
				console.log("La peticion concluyo exitisamante.");
		},
		error: function( ){
		alertify.warning("Disculpe intentelo luego.");
		console.log("La peticion no tuvo exito.");
		}
	}).done( function( mensaje ){
		console.log("La peticion concluyo.");
	})	
}
