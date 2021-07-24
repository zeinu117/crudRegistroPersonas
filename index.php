<?php  include 'header.php'; ?>

<div class="container text-center">
    <h1 class="mt-5 text-white font-weight-light">Lista de Personas Bonitas :D</h1>
    <p class="lead text-white-50">
    <div class="row">
        <div class="col-sm-12">
            <form action="servidor/agregarPersona.php" method="POST">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" required class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label for="apellidoA">Apellido Paterno</label>
                        <input type="text" name="apellidoA" id="apellidoA" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="apellidoM">Apellido Materno</label>
                        <input type="text" name="apellidoM" id="apellidoM" required class="form-control">

                    </div>
                    <div class="col-sm-6">
                        <label for="sexo">Sexo</label>
                        <input type="text" name="sexo" id="sexo" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="fecha">Seleccionar Fecha</label>
                        <input type="date" required class="form-control" name="fecha" id="fecha">
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
                <br>
                <button class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <h3>Listado</h3>
            <div id="tablaPersona"></div>
        </div>
    </div>
    </p>
</div>


<?php  include 'footer.php'; ?>
<script>
    $(document).ready(function(){
        $('#tablaPersona').load('tablaPersona.php');
    });
</script>