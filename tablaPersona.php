<?php
    include "clase/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_persona,
                    nombre,
                    apellidoPaterno,
                    apellidoMaterno,
                    sexo,
                    fechaNacimiento FROM t_lista";
    $respuesta = mysqli_query($conexion, $sql);
?>
<div class="table-responsive" >
    <table class="table table-dark table-striped" id="tablaPersonas">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Sexo</th>
            <th>Fecha de Nacimiento</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
        <?php 
            while($mostrar = mysqli_fetch_array($respuesta)) {  
        ?>
            <tr>
                <td><?php echo $mostrar['id_persona'];?></td>
                <td><?php echo $mostrar['nombre'];?></td>
                <td><?php echo $mostrar['apellidoPaterno'];?></td>
                <td><?php echo $mostrar['apellidoMaterno'];?></td>
                <td><?php echo $mostrar['sexo'];?></td>
                <td><?php echo $mostrar['fechaNacimiento'];?></td>
                <td>
                    <form action="editarPersona.php" method="POST">
                        <input type="text" hidden name="idPersona" value="<?php echo $mostrar['id_persona'];?>">
                        <button class="btn btn-warning">Editar</button>
                    </form>
                </td>
                <td>
                    <form action="servidor/eliminarPersona.php" method="POST">
                        <input type="text" hidden name="idPersona" value="<?php echo $mostrar['id_persona'];?>">
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php
            }
        ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaPersonas').DataTable();
	});
</script>