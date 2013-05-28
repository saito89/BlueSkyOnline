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
		
		function agregarAsignacion (){
			if (document.getElementById("nombreAsignacion").value == "" || document.getElementById("fechaAsignacion") == ""||document.getElementById("elm1").value == "" ){
				/*
				POP UP error (complete la informacion)		
				*/
				}
				
				else {
					/*
					POP UP <insercion completada>
					refresh
					*/
					disableAgregarAsignacion();
					
					}
			
			}
			
		function mostrarAsignacion (id){
			/*retorna la asignacion  y se le debe asignar a estos espacios q estan en blanco*/
			document.getElementById("nombreAsignacion2").value = ""
			document.getElementById("fechaAsignacion2").value = ""
			document.getElementById("elm1").value = ""
			
			document.getElementById("modificarAsignacion").className = "Visible"
			
		}	
		
		function modificarAsignacion (){
			if (document.getElementById("nombreAsignacion2").value == "" || document.getElementById("fechaAsignacion2") == ""||document.getElementById("elm2").value == "" ){
				/*
				POP UP error (complete la informacion)		
				*/
			}else {
				/*
				POP UP <insercion completada>
				refresh
				*/
				document.getElementById("modificarAsignacion").className = "NoVisible"
				}
			
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
			<img id = "imgLogo"src = "Screenshots/logo.png" >
		</div>
		
		<div id = "autentificacion">
			<img src = "Icons/logIn.png" id = "loginLogo">  <!--login -->
			<input type="text"  name = "logIn_nombre" id = "logIn_nombre" placeholder="username" style="text-align: center"/>
			<input type="password"  name = "password" id = "password" placeholder="password" style="text-align: center" />
			
			
			<div id = "notAccounRegister">
				
				<a href = "lostPass" id = "lostPassLink">Lost Password?</a>
				
			</div>
	</div>
	
	</div>
	
	
	

	<div id='cssmenu'>
	<ul>
	   <li class='active'><a href='index.html'><span>Home</span></a></li>
	   <li><a href='perfil.html'><span>Perfil</span></a></li>
	   <li class='has-sub'><a href='cursos.php'><span>Cursos</span></a>
		  <ul>
			 
			 <li><a href='asignaciones.php'><span>Asignaciones</span></a></li>
			 <li class='last'><a href='calificaciones.php'><span>Calificaciones</span></a></li>
		  </ul>
	   </li>
	   <li class='has-sub last'><a href='correspondencia.php'><span>Correspondencia</span></a>
		  <ul>
			 <li><a href='consultas.php'><span>Consultas</span></a></li>
			 <li class='last'><a href='reclamos.php'><span>Reclamos</span></a></li>
		  </ul>
	   </li>
	</ul>
	</div>

	<div id = "principalBlock">
		<?php
		$profesorID = "";
		$profesorNombre = "";
		$cursoID = $_POST["btn_curso"];

	


		include "conexion.php";


		/*recogemos los datos de la base y vamos creando el script*/
				print ("<div id = 'tablaAsignaciones'>
				
				<form id = 'f' name = 'f' method = 'POST' >"
				
				);
				
				
				print ("<table border=\"1\">\n<tr>\n<td colspan = \"5\"> <h2> Asignaciones </h2></td></tr>\n");
							
						$consulta = mysql_query("SELECT * from Curso JOIN CursoPorProfesor WHERE IDprofesor='".$profesorID."'",$conexion);
						print ("<td>Nombre</td><td>Fecha</td><td>Medio</td><td>Tipo</td><td>porcentaje</td><td>Acciones</td>\n");
						while($fila=mysql_fetch_array($consulta)) {
							
							$idAsignacion= $fila['idAsignacion'] ; 
							$nombre = $fila['nombre'];
							$fecha1 = $fila['fechaHoraAsignacion'];							
							$medio = $fila['medioEntrega'];
							$tipo = $fila['tipo'];
							$porcentaje = $fila['porcentaje'];
							print ("<tr>
								
								<td>$nombre</td>
								<td>$fecha1 </td>
								<td>$medio </td>
								<td>$tipo </td>
								<td>$porcentaje </td>
								
								<td> <input type= 'button' value='Mostrar' name='btn_MostrarAsignacion' onClick = 'mostrarAsignacion($idasignacion)'/> </td>
								
								</tr>\n");	
				}
						
					print ("</table>");
					print ("<br/><br/><a href = \"index.html\"> Go back </a>");
					print ("<br/><input type= 'button' value='Agregar Asignacion' name='btn_agregarAsignacion' onClick = 'enableAgregarAsignacion()'/>");
					print ("</form></div>");/*id = "tablaCursos"*/


							
				print ( "	<div id = 'agregarAsignacion' class = 'NoVisible' >
							<form id = 'f2' name = 'f2' method = 'POST' >
				
				
							<fieldset>
								<legend> Nueva asignacion </legend>
									Nombre de la asignacion: <input type = 'text' id = 'nombreAsignacion' name='na'/> <br/>
									Fecha de asignacion: <input type = 'text' id = 'fechaAsignacion' name='fa'/> <br/>
									<br/>
							
							
							<div id = 'TA'>
								<textarea id='elm1' name='elm1' rows='10' cols='80' style='width: 50%' >
								</textarea>
							</div>
							
							<div id = 'botonSubmit'>
								<input type = 'submit' name = 'btn_submitAsignacion' OnClick = 'AgregarAsignacion()'/>
							</div>
							
							
							</fieldset>
							
							
							</form>
							</div>
						");
						
						
						
				
				
				print ( "	<div id = 'modificarAsignacion' class = 'NoVisible' >
							<form id = 'f3' name = 'f3' method = 'POST' >
				
				
							<fieldset>
								<legend> Nueva asignacion </legend>
									Nombre de la asignacion: <input type = 'text' id = 'nombreAsignacion2' name='na2'/> <br/>
									Fecha de asignacion: <input type = 'text' id = 'fechaAsignacion2' name='fa2'/> <br/>
									<br/>
							
							
							<div id = 'TA2'>
								<textarea id='elm2' name='elm2' rows='10' cols='80' style='width: 50%' >
								</textarea>
							</div>
							
							<div id = 'botonSubmit2'>
								<input type = 'submit' name = 'btn_modificar' OnClick = 'modificarAsignacion()'/>
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
