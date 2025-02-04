<table>
  <tbody>
    <tr>
      <th>Num pregunta:</th>
      <td><?php echo $res_dada->getNumPregunta() ?></td>
    </tr>
    <tr>
      <th>Respuesta:</th>
      <td><?php echo $res_dada->getRespuesta() ?></td>
    </tr>
    <tr>
      <th>Idnota:</th>
      <td><?php echo $res_dada->getIdnota() ?></td>
    </tr>
    <tr>
      <th>Idpersona:</th>
      <td><?php echo $res_dada->getIdpersona() ?></td>
    </tr>
    <tr>
      <th>Idevaluacion:</th>
      <td><?php echo $res_dada->getIdevaluacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('resp_dad/edit?num_pregunta='.$res_dada->getNumPregunta().'&idnota='.$res_dada->getIdnota().'&idpersona='.$res_dada->getIdpersona().'&idevaluacion='.$res_dada->getIdevaluacion()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('resp_dad/index') ?>">List</a>

  <!-- Aquí se define el slot que me devuelve el menú para el usuario ALUM -->

<?php slot('menuSidebarAlumno')
      ?>
      <div class="linkstext">
        <ul>
		<p></p>
		<p></p>
                <br />
		<a href="">Ver Temas</a>
        </ul>
      </div>
      <div class="linkstext">
      <ul>
	  <p></p>
	  <p></p>
          <br />
	       <a href="">Responder Exámen</a>
      </ul>
      </div>
<?php end_slot(); ?>

<!-- Aquí se define el slot que me devuelve el menú para el usuario ADMIN -->

<?php slot('menuSidebarAdmin')
      ?>
       <ul class="categorytext">
        <li class="categories">
          <h2>
            <!-- -->
          </h2>
          <ul>
            <li><a href="">&nbsp;&nbsp;Agregar Alumnos</a> </li>
            <li><a href="">&nbsp;&nbsp;Modificar Alumno</a> </li>
            <li><a href="personas/seccion">&nbsp;&nbsp;Listar Alumnos</a> </li>
            <li><a href="">&nbsp;&nbsp;Eliminar Alumnos</a> </li>
          </ul>
        </li>
      </ul>
      <div class="newcomments">
        <ul>
           <li><a href="">&nbsp;&nbsp;Agregar Exámen Virtual</a></li>
        	<li><a href="">&nbsp;&nbsp;Modificar Exámen Virtual</a></li>
        	<li><a href="">&nbsp;&nbsp;Eliminar Exámen Virtual</a></li>
        </ul>
      </div>
      <div class="linkstext">
        <ul>
		<li><a href="">&nbsp;&nbsp;Agregar Evaluación</a></li>
          <li><a href="">&nbsp;&nbsp;Modificar Evaluación</a></li>
          <li><a href="">&nbsp;&nbsp;Eliminar Evaluación</a></li>
          <li><a href="">&nbsp;&nbsp;Cargar Notas</a></li>
          <li><a href="">&nbsp;&nbsp;Consultar Notas</a></li>
          <li><a href="">&nbsp;&nbsp;Modificar Notas</a></li>
        </ul>
      </div>
      <div class="linkstext">
      <ul>
    	   <li><a href="">&nbsp;&nbsp;Ver Foro</a></li>
    	   <li><a href="">&nbsp;&nbsp;Crear un tema</a></li>
           <li><a href="">&nbsp;&nbsp;Borrar Foro</a></li>
      </ul>
      </div>
<?php end_slot(); ?>