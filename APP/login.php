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
                        <form id="frm" action="login.php" method="POST">
			<input type="text"  name = "logIn_nombre" id = "logIn_nombre" placeholder="username" style="text-align: center"/>
			<input type="password"  name = "password" id = "password" placeholder="password" style="text-align: center" />
			<input type="Submit" id="login" name="Login" value="Login">

                        </form>
			
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
    include '../LG/userLG.php';
    include '../LG/cursoLG.php';
    include '../LG/asignacionLG.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

        
        
        
        
if($_POST['Login'])
{
    $uLG = new userLG();
    $uEN = $uLG->usuarioSLogin($_POST['logIn_nombre'],$_POST['password']);
    if(!is_null($uEN->getIdUsuario()))
    {
        session_start();
        $_SESSION['idUsuario'] = $uEN->getIdUsuario();
        header("Location:prueba.php");
        //echo $uEN->getIdUsuario()."<br>".$uEN->getUserName()."<br>".$uEN->getPassword()."<br>".$uEN->getTipo()."<br>".$uEN->getNombre()."<br>".$uEN->getFechaNacimiento()."<br>".$uEN->getDescripcion()."<br>".$uEN->getCorreoElectronico()."<br>";
    }
 else 
 {
    echo '<script type="text/javascript">
    window.alert("Usuario o contrasena incorrecta!")
    </script>';
 }
    
}
//echo '<center>';
//echo 'Username: ';
//echo '<input type="Text" name="username"> <br>';
//echo 'Password: ';
//echo '<input type="Password" name="password"> <br>';
//
//echo '</center>';
?>
    
        </div>
    </body>
</html>
