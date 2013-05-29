<html>

<head>
<link rel="stylesheet" type="text/css" href="estilo_1.css">

<script type="text/javascript">
		function enableAgregarEstudiante (){
			document.getElementById("agregarEstudiantes").className = "Visible"
			}
		
		function disableAgregarEstudiante (){
			document.getElementById("agregarEstudiantes").className = "NoVisible"
			}
			
		function eliminarEstudiante (id, curso){
				/*
				elimina estudiante de base de datos
				*/
		}	
		
		function agregarEstudiante (estudianteID, curso){
			/*
			agrega a bd
			
			*/
		}
		
		function getEstudiante (){
			/*
			retorna de bd
			*/
			
			
			}
		
		
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
			<input type="text"  name = "Welcome: "  />
			
			
			
			<div id = "notAccounRegister">
				
				<input type= 'button' value='Log Out' name='btn_logOut'  onClick = 'logOut()'/>
				
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
                include '../LG/userLG.php';
                include '../LG/cursoLG.php';
                include '../LG/asignacionLG.php';    
                
                $uLG = new userLG();
                $listCurso = $uLG->infoPersonalSListaEstudiantes($_POST['btn_curso']);
                foreach($listCurso as $curso)
                {
                    echo $curso->getIdCurso()." ";
                    echo $curso->getNombre()." ";
                    echo $curso->getSigla()." ";
                    echo $curso->getHorario()." ";
                    echo $curso->getCreditos()." ";
                    echo $curso->getCalificacion()."<br>";
            
                }
                
		$profesorID = "";
		$profesorNombre = "";
		$cursoID = $_GET["id"];


		$Titulo = "";
		echo $Titulo;


		include "conexion.php";


		/*recogemos los datos de la base y vamos creando el script*/
				print ("<div id = 'tablaEstudiantes'>
				
					<form id = 'f' name = 'f' method = 'POST' >		
				");
				
				
				print ("<table border=\"1\">\n<tr>\n<td colspan = \"3\"> <h2> Estudiantes </h2></td></tr>\n");
							
						$consulta = mysql_query("SELECT * from Curso JOIN CursoPorProfesor WHERE IDprofesor='".$profesorID."'",$conexion);
						print ("<td>Nombre</td><td>Fecha Nacimiento</td><td>E-mail</td><td>Acciones</td>");
						while($fila=mysql_fetch_array($consulta)) {
							
							$idEstudiante= $fila['idInfoPersonal'] ; 
							$nombreEstudiante = $fila['nombre'];
							$fechaNacimiento = $fila['fechaNacimiento'];
							$correo = $fila['correoElectronico'];
												
							
							print ("<tr>
								
								<td>$nombreEstudiante</td>
								<td>$fechaNacimiento </td>
								<td> $correo</td>
								<td> <img src ='' name='btn_eliminarEstudiante' onClick = eliminarEstudiante($idEstudiante, $cursoID)/> </td>
								
								</tr>\n");	
				}
						
					print ("</table>");
					print ("<br/><br/><a href = \"index.html\"> Go back </a>");
					print ("</form></div>");/*id = "tablaEstudiantes"*/


				print("<br/><input type = 'button' id = 'buttonAgregarEst' onClick = 'enableAgregarEstudiante()'/>");


				print ("<div id = 'agregarEstudiantes' class = 'NoVisible'>");
					print ("<form>");
					print ("
					Carne: <input type = 'text' id = 'carneEstudiante' name='na2'/> <input type = 'button' value = 'Buscar' id = 'btn_getEstudiante'   onClick = 'getEstudiante()'><br/>
					Nombre: <input type = 'text' id = 'nombreEstudiante' name='ne'/> <br/>
					Fecha de nacimiento: <input type = 'text' id = 'fechaNacimiento' name='fn'/> <br/>
					<input type = 'button' value = 'Agregar' id = 'btn_agregarEstudiante'   onClick = 'agregarEstudiante()'><br/>
					");
					print ("</form>");
				
				print ("</div>");



		mysql_close($conexion);
		?>
		
		
		
		
		
		
	</div>

</body>


</html>
