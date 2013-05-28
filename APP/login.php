<html>
    <form id="frm" action="login.php" method="POST">
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
    $uEN = $uLG->usuarioSLogin($_POST['username'],$_POST['password']);
    if(!is_null($uEN->getIdUsuario()))
    {
        session_start();
        $_SESSION['idUsuario'] = $uEN->getIdUsuario();
        $_SESSION['userName'] = $uEN->getUserName();
        $_SESSION['password'] = $uEN->getPassword();
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
echo '<center>';
echo 'Username: ';
echo '<input type="Text" name="username"> <br>';
echo 'Password: ';
echo '<input type="Password" name="password"> <br>';

echo '</center>';
?>
    <center>
    <input type="Submit" id="login" name="Login" value="Login">
    </center>
    </form>
</html>
