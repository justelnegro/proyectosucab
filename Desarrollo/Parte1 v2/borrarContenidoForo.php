<?php 
session_start();

$usuario = $_SESSION["usuario"];
$_SESSION["privilegio"];
$tema = $_GET['tema'];
?>


<html><!-- InstanceBegin template="/Templates/plantillaAulaVirtual.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Aula Virtual CSLC</title>
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<link href="files/style_.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- ImageReady Slices (plantillaAulaVirtual.ai) -->
<table id="Table_01" width="1024" height="1241" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="3">
			<img src="images/plantillaAulaVirtual_01.png" width="1" height="1241" alt=""></td>
		<td colspan="2" align="left" valign="top" background="images/plantillaAulaVirtual_02.png" width="1023" height="393" >
        <table width="75%" height="100%" border="0">
  <tr>
    <td width="11%" height="357">&nbsp;</td>
    <td width="89%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    <!--Cerrar Sesion-->
     <!-- InstanceBeginEditable name="Cerrar Sesion" -->
	<h2><a href="cerrarSesion.php" class="home" id="link_home" style="color:#666666; font-style:italic; font-size:18px;">Cerrar Sesi�n >></a></h2>
	<!-- InstanceEndEditable -->
    </td>
  </tr>
</table>

		</td>
	</tr>
	<tr>
    
		<td align="left" valign="top" width="672" height="807" background="images/plantillaAulaVirtual_03.png">
        
        <table width="100%" border="0">
  <tr>
    <td width="5%"></td>
    <td width="95%"><!-- InstanceBeginEditable name="Contenido" -->
	<h2>Bienvenid@&nbsp;
    	<?php 
				echo $_SESSION["usuario"];
				$usuario = $_SESSION["usuario"];
		?>
    </h2>
    
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

		  <h2 style="color:#666666;" align="center">Eliminar todo el contenido del foro</h2>
		
				  <h2 style="color:#666666">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;En esta secci�n podra borrar todo el contenido del foro, inlcuyendo los comentarios emitidos por Ud. y por cualquier otro usuario en algun tema de este modulo de discusi�n. Deber� estar consciente de que esta acci�n ser� irreversible, por lo tanto una vez que elimine todo el contenido no podr� volver tener acceso a �ste. A continuaci�n para realizar el borrado del foro presione el bot�n de Vaciar Foro.</h2>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<form id="form1" name="form1" method="post" action="" style="position:absolute; left: 432px; top: 612px;">
		 <input type="submit" name="borrar" id="borrar" value="Vaciar Foro" align="middle" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          <input type="submit" name="cancelar" id="cancelar" value="Cancelar" align="middle" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
		</form>
	
       <?php  
         if (isset($_POST["cerrarSesion"]))
	{
	?>
		<script language="javascript">
			window.location = "cerrarSesion.php";
		</script>		
	<?
		
	}
	         if (isset($_POST["borrar"]))
	{
	?>
		<script language="javascript">
			window.location = "borrarForo1.php";
		</script>		
	<?
		
	}
	         if (isset($_POST["cancelar"]))
	{
	?>
		<script language="javascript">
			window.location = "gestionarForo.php";
		</script>		
	<?
		
	}
	?>
	<!-- InstanceEndEditable --></td>
  </tr>
</table>

        	</td>
  <td rowspan="2" align="left" valign="top" background="images/plantillaAulaVirtual_04.png" width="351" height="848">
			
			<table id="sidebar" width="354" border="0">
              <tr>
                <td>
                <ul class="categorytext">
        <li>
          
          <ul>
            <li><a href="agregarAlumnoAdmin_1.php">Agregar Alumnos</a> </li>
            <li><a href="modificarAlumnoAdmin_1.php">Modificar Alumno</a> </li>
            <li><a href="inhabilitarAlumnoAdmin_1.php">Inhabilitar Alumno</a> </li>
            <li><a href="eliminarAlumnoAdmin_1.php">Eliminar Alumnos</a> </li>
          </ul>
        </li>
      </ul>
                
                </td>
                
              </tr>
              <tr>
                <td>
                
                <ul class="categorytext">
        <li>
          
          <ul>
            <li><a href="agregarExamenAdmin_1.php">Agregar Examen Virtual</a> </li>
            <li><a href="modificarExamenAdmin_1.php">Modificar Examen Virtual</a> </li>
            <li><a href="eliminarExamenAdmin_1.php">Eliminar Examen Virtual</a> </li>
          </ul>
        </li>
      </ul>
                
                </td>
               
              </tr>
              <tr>
                <td>
                
                
          <ul class="categorytext">
        <li>
          
          <ul>
<li><a href="agregarEvaluacionAdmin.php">Agregar Evaluaci�n</a></li>
          <li><a href="modificarEvaluacionAdmin.php">Modificar Evaluaci�n</a></li>
          <li><a href="eliminarEvaluacionAdmin.php">Eliminar Evaluaci�n</a></li>
          <li><a href="cargarNotasAdmin.php">Cargar Notas</a></li>
          <li><a href="consultarNotasAdmin.php">Consultar Notas</a></li>
          <li><a href="modificarNotasAdmin.php">Modificar Notas</a></li>
          </ul>
        </li>
      </ul>
          
                
                </td>
              
              </tr>
              <tr>
                <td>
                
          <ul class="categorytext">
        <li>
          
          <ul>
			<li><a href="gestionarForo.php">Ver Foro</a></li>
    	   <li><a href="crearTema.php">Crear un tema</a></li>
           <li><a href="borrarContenidoForo.php">Borrar Foro</a></li>
          </ul>
        </li>
      </ul>
          
                
                
                </td>
              
              </tr>
            </table></td>
	</tr>
	<tr>
		<td>
			<img src="images/plantillaAulaVirtual_05.png" width="672" height="41" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
<!-- InstanceEnd --></html>
