<html>
  <head>
    <meta http-equiv="Content-Type" 
             content="text/html; charset=iso-8859-1" />
    <title>Full Row Select</title>
    <script type="text/javascript">
    function ChangeColor(tableRow, highLight)
    {
    if (highLight)
    {
      tableRow.style.backgroundColor = '#ADD8E6';
    }
    else
    {
      tableRow.style.backgroundColor = 'white';
    }
  }

  function DoNav(theUrl)
  {
  document.location.href = theUrl;
  }
  
  function ClickRow(row)
  {
      
  }
  </script>
</head>
<body>
  <table width="auto" border="1" cellpadding="0" cellspacing="2" align ="center">
      <tr>
          <td>
              ID
          </td>
          <td>
              Curso
          </td>
          <td>
              Siglas
          </td>
          <td>
              Horario
          </td>
          <td>
              Creditos
          </td>
          <td>
              Calificacion
          </td>
      </tr>
<?php
include '../LG/userLG.php';
include '../LG/cursoLG.php';
include '../LG/asignacionLG.php';
session_start();
$cLG = new cursoLG();
$listCurso = $cLG->cursoSInfo($_SESSION['idUsuario']);
foreach($listCurso as $curso)
{
    session_start();
    echo '<tr onmouseover="ChangeColor(this, true);" onmouseout="ChangeColor(this, false);">';
    echo "<td>{$curso->getIdCurso()}</td>";
    echo "<td>{$curso->getNombre()}</td>";
    echo "<td>{$curso->getSigla()}</td>";
    echo "<td>{$curso->getHorario()}</td>";
    echo "<td>{$curso->getCreditos()}</td>";
    echo "<td>{$curso->getCalificacion()}</td>";
    echo '</tr>';       
}
?>        
  <!--<tr onmouseover="ChangeColor(this, true);" 
              onmouseout="ChangeColor(this, false);" 
              onclick="DoNav('http://www.yahoo.com/');">
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr onmouseover="ChangeColor(this, true);" 
              onmouseout="ChangeColor(this, false);" 
              onclick="DoNav('http://www.microsoft.com/');">
    <td>4</td>
    <td>5</td>
    <td>6</td>
  </tr>
  <tr onmouseover="ChangeColor(this, true);" 
              onmouseout="ChangeColor(this, false);" 
              onclick="DoNav('http://Imar.Spaanjaars.Com/');">
    <td>7</td>
    <td>8</td>
    <td>9</td>
  </tr>-->
  </table>
</body>
</html>
