<html>

<head>
<link rel="stylesheet" type="text/css" href="estilo_1.css">

<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	
	function enableAgregarMensaje (){
			document.getElementById ("crearMensaje").className = "Visible";
		} 
		
	function disableAgregarMensaje (){
			document.getElementById ("crearMensaje").className = "NoVisible";
		} 
		
		
	function consultarMensaje (id){
		/*
		Buscar el mensaje y postearlo en:
			-nombreMensaje2
			-destinatario2
			-elm12
		
		*/		
		document.getElementById ("verMensaje").className = "Visible";
		}
	
	function eliminarMensaje (id){
		/*ELIMINAR MENSAJE*/
		var r=confirm("Confirme el borrado");
		if (r==true)
		  {
		  /*
		  Borrar de BD
		  
		  */
		  alert("Mensaje borrado");
		  setTimeOut ("location.reload (true);" , 0 );
		  }
		}
		
	function closeMensaje (){
		document.getElementById ("verMensaje").className = "NoVisible";
		}
	
	function replyMensaje(){
		enableAgregarMensaje();
		
		document.getElementById ("destinatario").value = document.getElementById ("proveniente").value;
		}
		
	function cancelEnviarMensaje(){
			disableAgregarMensaje()	;
		}	
	
	function enviarMensaje(){
			/*
			1. extraer la informacion de:
				-nombreMensaje:		 var nombre = document.getElementById("nombreMensaje").value
				-destinatario:		 var destino = document.getElementById("destinatario").value
				- y elm1: 			 var texto =  document.getElementById("elm1").value
				
			2. crear una insercion en la bd. 
			
			3. crear pop-up de notificacion
			
			4. ocultar crearMensaje: 
				disableAgregarMensaje()
			*/
		
		
		}
	
	
	
tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		<!--theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",-->
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
</head>

<body>
	
	<style>
		.NoVisible {display: none;}
		.Visible {display: block;}
	</style>
	

	<div id = "barraHorizontal1">
		
		<div id = "logo"> 
			<img id = "imgLogo"src = "Icons/logo.jpg" width = 300px height = 138px />
		</div>
		
		<div id = "autentificacion">
			<script type="text/javascript">
				function logOut(){
					window.location.href = "index.html";
					}
			</script>
			
			<?php
			$nombreUsuario = $_GET("nombreUsuario");
			print ("$nombreUsuario");
			?>	
			
			<div id = "notAccounRegister">
					<a href = "lostPass" id = "lostPassLink" onclick = "logOut()">Log Out</a>
			</div>
			
		</div>
		
		
	
	</div>
	
	
	

	<div id='cssmenu'>
	<ul>
	   <li ><a href='index.html'><span>Home</span></a></li>
	   <li><a href='perfil.html'><span>Perfil</span></a></li>
	   <li ><a href='cursos.php'><span>Cursos</span></a>
		 
	   </li>
	   
	   <li class='active last'><a href='correspondencia.php'><span>Correspondencia</span></a>
		</li>
	</ul>
	</div>

	<div id = "principalBlock">
		
		
		
		<?php
		
			print ("<div id = \"tablaCorrespondencia\">
				
				<form id = \"f\" name = \"f\" method = \"POST\" >"
				
				);
				
							
				print ("<table border=\"1\">\n<tr>\n<td colspan = \"5\"> <h2> Correspondencia </h2></td></tr>\n");
							
						$consulta = mysql_query("SELECT * from Curso JOIN CursoPorProfesor WHERE IDprofesor='".$profesorID."'",$conexion);
						print ("<td>Nombre</td><td>Fecha</td><td>Medio</td><td>Tipo</td><td>porcentaje</td><td>Acciones</td>\n");
						
						
						while($fila=mysql_fetch_array($consulta)) {
							
							$idmensaje= $fila['idAsignacion'] ; 
							$nombre = $fila['nombre'];
							$contenido = $fila['texto'];							
							$fuente = $fila['medioEntrega'];
							$fecha = $fila['tipo'];
							$tipo = $fila['porcentaje'];
							
							
							print ("<tr>
								
								<td>$nombre</td>
								<td>$fecha1 </td>
								<td>$medio </td>
								<td>$tipo </td>
								<td>$porcentaje </td>
								");
							
									print ("<td><img src=\"Icons/view.png\" onClick = \"consultarMensaje($idmensaje)\"/> ");
									print ("<img src=\"Icons/delete.png\" onClick = \"eliminarMensaje($idmensaje)\"/> </td></tr>\n");
															
				}
						
					print ("</table>");
					print ("<br/><br/><a href = \"index.html\"> Go back </a>");
					print ("<br/><input type= \"button\" value=\"Agregar Mensaje\" name=\"btn_agregarMensaje\" onclick = \"enableAgregarMensaje()\"/>");
					print ("</form></div>");/*id = "tablaCorrespondencia"*/

		print ("	<div id = \"verMensaje\" class = \"NoVisible\" >
							<form id = \"f3\" name = \"f3\" method = \"POST\" >
				
				
							<fieldset>
								<legend> Mensaje </legend>
									Nombre: <input type = \"text\" id = \"nombreMensaje2\" name=\"nm\"/> <br/>
									Proveniente de: <input type = \"text\" id = \"proveniente\" name=\"dest\"/> <br/>
									<br/>
							
							
							<div id = \"TA\">
								<textarea id=\"elm12\" name=\"elm12\" rows=\"10\" cols=\"80\" style=\"width: 50%\" >
								</textarea>
							</div>
							
							<div id = \"botonSubmit2\">
								<button type = \"button\" value = \"Close\" name = \"btn_closeMensaje\" onclick = \"closeMensaje()\"/>
							</div>
							
							<div id = \"botonSubmit22\">
								<button type = \"button\" value =\"Reply\" name = \"btn_replyMensaje\" onclick = \"replyMensaje()\"/>
							</div>
							</fieldset>
							
							
							</form>
							</div>
						");
		
		
				print ( "	<div id = \"crearMensaje\" class = \"NoVisible\" >
							<form id = \"f2\" name = \"f2\" method = \"POST\" >
				
				
							<fieldset>
								<legend> Nuevo Mensaje </legend>
									Nombre: <input type = \"text\" id = \"nombreMensaje\" name=\"nm\"/> <br/>
									Enviar a: <input type = \"text\" id = \"destinatario\" disabled name=\"dest\"/> <br/>
									<br/>
							
							
							<div id = \"TA\">
								<textarea id=\"elm1\" name=\"elm1\" rows=\"10\" cols=\"80\" style=\"width: 50%\" >
								</textarea>
							</div>
							
							<div id = \"botonSubmit\">
								<button type = \"button\" value = \"Enviar\" name = \"btn_submitMensaje\" onclick = \"enviarMensaje()\"/>
							</div>
							
							<div id = \"cancelCrearMensaje\">
								<button type = \"button\" value = \"Cancelar\" name = \"btn_submitMensaje\" onclick = \"cancelEnviarMensaje()\"/>
							</div>
							
							
							</fieldset>
							
							
							</form>
							</div>
						");
		
		
						
		?>
	</div>

</body>


</html>
