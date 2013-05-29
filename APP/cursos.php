<html>

<head>
<link rel="stylesheet" type="text/css" href="estilo_1.css">
</head>

<body>
	

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
	   <li ><a href='index.html'><span>Home</span></a></li>
	   <li><a href='perfil.html'><span>Perfil</span></a></li>
	   <li class='active' ><a href='cursos.php'><span>Cursos</span></a>
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
        session_start();
        $cLG = new cursoLG();

		$profesorID = "";
		$profesorNombre = "";


		$Titulo = "";
		echo $Titulo;
	

		


		/*recogemos los datos de la base y vamos creando el script*/
				print ("<div id = \"tablaCursos\">
				
				<form id = \"f\" name = \"f\" method = \"POST\" action = \"asignaciones.php?idCurso\">"
				
				);
				
				if ($_SESSION['tipoUsuario']=="1"){
					
					print ("<table border=\"1\">\n<tr>\n<td colspan = \"5\"> <h2> Cursos </h2></td></tr>\n");
							
						//$consulta = mysql_query("SELECT * from Curso JOIN CursoPorProfesor WHERE IDprofesor='".$profesorID."'",$conexion);
						$consulta = $cLG->cursoSInfo($_SESSION['idUsuario']);
						print ("<td>Nombre</td><td>Sigla</td><td>Estudiantes</td><td>Creditos</td><td>Horario</td><td>Sigla</td><td>Acciones</td>\n");
						foreach($consulta as $curso){
						
							//$idCurso= $fila['idCurso'] ; 
                            $idCurso = $curso->getIdCurso();
							//$nombreCurso = $fila['nombre'];
                            $nombreCurso = $curso->getNombre();				
							//$creditosCurso = $fila['creditos'];
                            $creditosCurso = $curso->getCreditos();
							//$horarioCurso = $fila['horario'];
                            $horarioCurso = $curso->getHorario();
							//$siglaCurso = $fila['sigla'];
                            $siglaCurso = $curso->getSigla();
							
							
							print ("<tr>
								
								<td>$nombreCurso</td>
								<td>$siglaCurso </td>
								
								<td> <a href = \"estudiantes.php?id=$idCurso\"> Estudiantes </a> </td>
								<td> $creditosCurso</td>
								<td> $horarioCurso  </td>
                                                                    <td>
								<a href=\"asignaciones.php?idCurso=$idCurso\"><img src=\"Icons/go-button.png\"></a>	
								</td>
								</tr>\n");	
				}
						
					print ("</table>");
					print ("<br/><br/><a href = \"index.html\"> Go back </a>");
					print ("</form></div>");/*id = "tablaCursos"*/
					
					}else {
						print ("<table border=\"1\">\n<tr>\n<td colspan = \"4\"> <h2> Cursos </h2></td></tr>\n");
							
						//$consulta = mysql_query("SELECT * from Curso JOIN CursoPorProfesor WHERE IDprofesor='".$profesorID."'",$conexion);
						$consulta = $cLG->cursoSInfo($_SESSION['idUsuario']);
						print ("<td>Nombre</td><td>Sigla</td><td>Creditos</td><td>Horario</td><td>Sigla</td><td>Acciones</td>\n");
						foreach($consulta as $curso){
						
							//$idCurso= $fila['idCurso'] ; 
                            $idCurso = $curso->getIdCurso();
							//$nombreCurso = $fila['nombre'];
                            $nombreCurso = $curso->getNombre();				
							//$creditosCurso = $fila['creditos'];
                            $creditosCurso = $curso->getCreditos();
							//$horarioCurso = $fila['horario'];
                            $horarioCurso = $curso->getHorario();
							//$siglaCurso = $fila['sigla'];
                            $siglaCurso = $curso->getSigla();
							
							
							print ("<tr>
								
								<td>$nombreCurso</td>
								<td>$siglaCurso </td>
								<td> $creditosCurso</td>
								<td> $horarioCurso  </td>
                                                                    <td>
								<a href=\"asignaciones.php?idCurso=$idCurso\"><img src=\"Icons/go-button.png\"></a>	
								</td>
								</tr>\n");	
				}
						
					print ("</table>");
					print ("<br/><br/><a href = \"index.html\"> Go back </a>");
					print ("</form></div>");/*id = "tablaCursos"*/
						
						
						}
				



		
		?>
		
		
		
		
	</div>

</body>


</html>
