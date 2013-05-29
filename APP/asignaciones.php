<html>

<head>
<link rel="stylesheet" type="text/css" href="estilo_1.css">

<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
		function enableAgregarAsignacion (){
			document.getElementById("agregarAsignacion").className = "Visible"
		}
			
		function disableAgregarAsignacion (){
			document.getElementById("agregarAsignacion").className = "NoVisible"
		}	
		
		function cerrarAsignacion (){
			document.getElementById("modificarAsignacion").className = "NoVisible"	
		}
			
			
		function agregarAsignacion (){
			if (document.getElementById("nombreAsignacion").value == "" || document.getElementById("fechaAsignacion") == ""||document.getElementById("elm1").value == ""|| document.getElementById("tipoAsignacion") == ""||document.getElementById("porcentajeAsignacion") == "" ||document.getElementById("medioAsignacion") == "" ){
				/*POP UP error (complete la informacion)*/
				alert("Complete correctamente la informacion");
				}
				else {
					/*POP UP <insercion completada>*/
					var r=confirm("Confirme la creacion de asignacion");
					if (r==true)
					  {
					  /* 
					  AGREGAR A BD
					  */
					  var nombre = document.getElementById("nombreAsignacion").value;
					  var fecha = document.getElementById("fechaAsignacion").value;
					  var medio = document.getElementById("medioAsignacion").value;
					  var porcentaje = document.getElementById("porcentajeAsignacion").value;
					  var tipo = document.getElementById("tipoAsignacion").value;
					  
                                          //asignacionI('$nombre','$descripcion','$fechaHoraAsignacion','$medioEntrega','$tipo','$porcentaje','$idCurso')")
					  alert("Asignacion asignada");
					  }
							
					/*refresh*/
					disableAgregarAsignacion();
					setTimeOut ("location.reload (true);" , 0 );
					
					}
			
			}
			
		function mostrarAsignacion (id, tipoUsuario, nombre, descripcion, fecha1, medio, tipo, porcentaje){
			/*retorna la asignacion  y se le debe asignar a estos espacios q estan en blanco*/
			document.getElementById("nombreAsignacion2").value = nombre;
			document.getElementById("fechaAsignacion2").value =fecha1;
			document.getElementById("elm2").value = descripcion;
			document.getElementById("medioAsignacion2").value =medio;
			document.getElementById("tipoAsignacion2").value =tipo;
			document.getElementById("porcentajeAsignacion2").value =porcentaje;
			
			document.getElementById("modificarAsignacion").className = "Visible";
			if (tipoUsuario == "1") {
				document.getElementById("profesorDivModificar").className = "Visible";
				}
				
				
					
					
		}	
		
		function modificarAsignacion (){
			if (document.getElementById("nombreAsignacion2").value == "" || document.getElementById("fechaAsignacion2") == ""||document.getElementById("elm2").value == "" ){
				/*POP UP error (complete la informacion)*/
				alert("Complete correctamente la informacion");
			}else {
				/*POP UP <insercion completada>*/
				var r=confirm("Confirme la modificacion de asignacion");
					if (r==true)
					  {
					  /*
					  AGREGAR A BD
					  
					  */
					  alert("Asignacion asignada");
					  }
				document.getElementById("modificarAsignacion").className = "NoVisible";
				setTimeOut ("location.reload (true);" , 0 );
				}
			}
		
		function eliminarAsignacion(id, cursoID){
			var r=confirm("Confirme la eliminacion de asignacion");
					if (r==true)
					  {
					  /*
					  BORRAR DE BD
					  
					  */
					  alert("Asignacion borrada");
					  }
				setTimeOut ("location.reload (true);" , 0 );
		}
		
		function mostrarPanelParaMensaje (nombre, fecha, calificacion){
			document.getElementById ("nombreAsignacionMensaje").value = nombre;
			document.getElementById ("fechaAsignacionMensaje").value = fecha;
			
			document.getElementById ("PanelParaMensaje").className = "Visible";
		}
		
		function ocultarPanelParaMensaje (){
			document.getElementById ("PanelParaMensaje").className = "NoVisible";	
		}
		
		
		function enviarMensaje(){
			var e = document.getElementById ("opcionesDeMensaje");
			var tipoMensaje = e.options[e.selectedIndex].text;
			var nombre = document.getElementById ("nombreAsignacionMensaje").value;
			var fecha = document.getElementById ("fechaAsignacionMensaje").value;
			var mensaje = document.getElementById ("areaMensaje").value;
			
			
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
			
			
			
			<div id = "notAccounRegister">
					<a href = "lostPass" id = "lostPassLink" onclick = "logOut()">Log Out</a>
			</div>
			
		</div>
		
	</div>
	
	
	

	<div id='cssmenu'>
	<ul>
	   <li ><a href='index.html'><span>Home</span></a></li>
	   <li><a href='perfil.html'><span>Perfil</span></a></li>
	   <li class='active'><a href='cursos.php'><span>Curso</span></a>
		  
	   </li>
	   <li class='last'><a href='correspondencia.php'><span>Correspondencia</span></a>
		  
	   </li>
	</ul>
	</div>

	<div id = "principalBlock">
		<?php
		$profesorID = "";
		$profesorNombre = "";
		$cursoID = $_GET["idCurso"];
		/*
		*  agregar tipoUsuario
		* */
	     include '../LG/userLG.php';
            include '../LG/cursoLG.php';
            include '../LG/asignacionLG.php';
            session_start();
            $tipoUsuario = $_SESSION['tipoUsuario'];
            $aLG = new asignacionLG();



		/*recogemos los datos de la base y vamos creando el script*/
				print ("<div id = \"tablaAsignaciones\">
				
				<form id = \"f\" name = \"f\" method = \"POST\" >"
				
				);
				$colnum = 0;
				if ($tipoUsuario == "2"){
					$colnum = 7;
					
					}else{
						$colnum =  6;
						}
					
					
					
				print ("<table border=\"1\">\n<tr>\n<td colspan = \"$colnum\"> <h2> Asignaciones </h2></td></tr>\n");
							
						//$consulta = mysql_query("SELECT * from Curso JOIN CursoPorProfesor WHERE IDprofesor='".$profesorID."'",$conexion);
						$consulta = $aLG->asignacionSInfo($_SESSION['idUsuario'],$cursoID);
						print ("<td>Nombre</td><td>Fecha</td><td>Medio</td><td>Tipo</td><td>porcentaje</td><td>Acciones</td>\n");
						foreach($consulta as $asignacion){
							
							

							//$idAsignacion= $fila['idAsignacion'] ; 
                            $idAsignacion = $asignacion->getIdAsignacion();
							//$nombre = $fila['nombre'];
                            $nombre = $asignacion->getNombre();
							//$fecha1 = $fila['fechaHoraAsignacion'];
                            $fecha1 = $asignacion->getFechaHoraAsignacion();						
							//$medio = $fila['medioEntrega'];
                            $medio = $asignacion->getMedioEntrega();
							//$tipo = $fila['tipo'];
                            $tipo = $asignacion->getTipo();
							//$porcentaje = $fila['porcentaje'];
                            $porcentaje = $asignacion->getPorcentaje();

			    $descripcion = "";
			    
                            $calificacion = $asignacion->getCalificacion();

							print ("<tr>
								
								<td>$nombre</td>
								<td>$fecha1 </td>
								<td>$medio </td>
								<td>$tipo </td>
								<td>$porcentaje </td>
								");
								
							if ($tipoUsuario == "2"){	
								print ("<td>$calificacion </td>
								");
							}
							
							
							print ("<td> <img src=\"Icons/view.png\" onclick = \"mostrarAsignacion($idAsignacion, $tipoUsuario, $nombre, $descripcion, $fecha1, $medio, $tipo, $porcentaje)\" />");
									
							if ($tipoUsuario == "1"){
									print ("
										<img src=\"Icons/delete.png\" onclick = \"eliminarAsignacion($idAsignacion)\"/> </td></tr>\n");
							}else {
									
									
									print ("<img src=\"Icons/email.png\" onclick = \"mostrarPanelParaMensaje($nombre, $fecha, $calificacion)\"/> </td></tr>\n");
						
									
									
								}
				}
						
					print ("</table>");
					print ("<br/><br/><a href = \"index.html\"> Go back </a>");
					print ("<br/><button type= \"button\" value=\"Agregar Asignacion\" name=\"btn_agregarAsignacion\" onclick = \"enableAgregarAsignacion()\"/>");
					print ("</form></div>");/*id = "tablaCursos"*/


							
				print ( "	<div id = \"agregarAsignacion\" class = \"NoVisible\" >
							<form id = \"f2\" name = \"f2\" method = \"POST\" >
				
				
							<fieldset>
								<legend> Nueva asignacion </legend>
									Nombre de la asignacion: <input type = \"text\" id = \"nombreAsignacion\" name=\"na\"/> <br/>
									Fecha de asignacion: <input type = \"text\" id = \"fechaAsignacion\" name=\"fa\"/> <br/>
									Medio de asignacion: <input type = \"text\" id = \"medioAsignacion\" name=\"ma\"/> <br/>
									Porcentaje de asignacion: <input type = \"text\" id = \"porcentajeAsignacion\" name=\"pa\"/> <br/>
									Tipo de asignacion: <input type = \"text\" id = \"tipoAsignacion\" name=\"ta\"/> <br/>
									<br/>
							
							
							<div id = \"TA\">
								<textarea id=\"elm1\" name=\"elm1\" rows=\"10\" cols=\"80\" style=\"width: 50%\" >
								</textarea>
							</div>
							
							<div id = \"botonSubmit\">
								<button type = \"button\" value = \"Agregar Asignacion\" name = \"btn_submitAsignacion\" onclick = \"AgregarAsignacion()\"/>
							</div>
							
							
							</fieldset>
							
							
							</form>
							</div>
						");
						
						
						
				
				
				print ( "	<div id = \"modificarAsignacion\" class = \"NoVisible\" >
							<form id = \"f3\" name = \"f3\" method = \"POST\" >
				
				
							<fieldset>
								<legend>Asignacion </legend>
									Nombre de la asignacion: <input type = \"text\" id = \"nombreAsignacion2\" name=\"na2\"/> <br/>
									Fecha de asignacion: <input type = \"text\" id = \"fechaAsignacion2\" name=\"fa2\"/> <br/>
									Medio de asignacion: <input type = \"text\" id = \"medioAsignacion2\" name=\"ma2\"/> <br/>
									Porcentaje de asignacion: <input type = \"text\" id = \"porcentajeAsignacion2\" name=\"pa2\"/> <br/>
									Tipo de asignacion: <input type = \"text\" id = \"tipoAsignacion2\" name=\"ta2\"/> <br/>
									<br/>
							
							
							<div id = \"TA2\">
								<textarea id=\"elm2\" name=\"elm2\" rows=\"10\" cols=\"80\" style=\"width: 50%\" >
								</textarea>
							</div>
							
							<div id = \"profesorDivModificar\" class = \"NoVisible\">
								<button type = \"button\" value = \"Modificar\" name = \"btn_modificar\" onclick = \"modificarAsignacion()\"/>
							</div>
							
							<div id = \"cerrarConsulta\" >
								<button type = \"button\" value = \"Cerrar\" name = \"btn_modificar\" onclick = \"cerrarAsignacion()\"/>
							</div>
							
							
							</fieldset>
							
							
							</form>
							</div>
						");	
						
						
				print ( "	<div id = \"PanelParaMensaje\" class = \"NoVisible\" >
							<form id = \"f3\" name = \"f3\" method = \"POST\" >
				
				
							<fieldset>
								<legend> Nuevo mensaje </legend>
									Nombre de la asignacion: <input type = \"text\" disabled id = \"nombreAsignacionMensaje\" name=\"na2\"/> <br/>
									Fecha de asignacion: <input type = \"text\" disabled id = \"fechaAsignacionMensaje\" name=\"fa2\"/> <br/>
									
									
									
							
									Tipo de mensaje: <select id = \"opcionesDeMensaje\">
														<option value=\"reclamo\">Reclamo</option>
														<option value=\"consulta\" selected>Consulta</option>
														
													 </select>
									
									<br/>
							
							
							<div id = \"areaDeMensaje\">
								<textarea id=\"areaMensaje\" name=\"areaMensaje\" rows=\"10\" cols=\"80\" style=\"width: 50%\" >
								</textarea>
							</div>
							
							<div id = \"bloqueEnviarMensaje\" >
								<button type = \"submit\" value = \"Enviar\" name = \"btn_enviarMensaje\" onclick = \"enviarMensaje()\"/>
							</div>
							
							<div id = \"cancelar\" >
								<button type = \"submit\" value = \"Cerrar\" name = \"btn_cancelarMensaje\" onclick = \"ocultarPanelParaMensaje()\"/>
							</div>
							
							
							</fieldset>
							
							
							</form>
							</div>
						");		
				
			


		mysql_close($conexion);
		?>
		
		
		
	</div>

</body>


</html>
