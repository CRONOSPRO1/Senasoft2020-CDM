<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/main.css">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Usuarios | Automatización y gestión Multitiendas</title>
</head>



<body>

    <div class="container mb-5">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">
                        <div class="row px-4">
                            <div class="mr-auto">
                                <h4>Usuarios</h4>                    
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="panel-heading">
                            <div class="busca mb-4">
                                <input type="text" name="busqueda" id="busqueda" placeholder=" Realizar una búsqueda" title="Buscar" autocomplete="off">
                            </div>
                        </div>

                        <div class="container" id="alerta-no-results" style="display: none;max-width: 600px;">
                            <div class="alert alert-danger" role="alert">
                                No hay resultados para mostrar
                            </div>
                        </div>

                        <div class="table-responsive" id="tabla">
                            <table class="table table-hover table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Número de identificacion</th>
                                        <th>Tipo de usuario</th>
                                        <th col="2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="registros">
                                    <?php foreach ($this->model_admin->listar_usuarios() as $lista) : ?>
                                        <tr>
                                            <td><?= $lista['nombre'] ?></td>
                                            <td><?= $lista['email'] ?></td>
                                            <td><?= $lista['no_documento'] ?></td>
                                            <td><?= $lista['rol'] ?></td>
                                            <td>
                                                <a href="<?= base_url ?>dashboard/Eliminar_usuarios&id=<?= $lista['idusuario'] ?>" class="mr-2" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                    <span class="text-danger">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg>
                                                    </span>
                                                    <a data-toggle="tooltip" data-placement="top" title="Actualizar" href="javascript:void(0)" onclick="mostarDetalles('<?= $lista['telefono'] ?>','<?= $lista['direccion'] ?>','<?= $lista['nombre'] ?>','<?= $lista['email'] ?>','<?= $lista['no_documento'] ?>','<?= $lista['idusuario'] ?>')" data-target="#actualizar">
                                                        <span class="text-success">
                                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Actualizar Usuario (Ventana modal) -->

    <div class="modal" tabindex="-1" id="actualizar">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Actualizar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url ?>dashboard/Actualizar_Usuario" method="POST">
                    <input type="hidden" id="idusuario" name="idusuario">
                    <div class="modal-body">
                        <div class="form-group form-inline">
                            <label>Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control p2 mx-sm-3" readonly autocomplete="off" style="max-width: 65%;">
                        </div>
                        <div class="form-group form-inline">
                            <label>Telefono</label>
                            <input type="number" name="telefono" id="telefono" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                        </div>
                        <div class="form-group form-inline">
                            <label>Direccion</label>
                            <input type="text" name="direccion" id="direccion" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                        </div>
                        <div class="form-group form-inline">
                            <label>Email</label>
                            <input type="text" name="email" id="email" class="form-control p2 mx-sm-3" required="">
                        </div>

                        <div class="form-group form-inline">
                            <label>Número de identificación</label>
                            <input type="number" name="no_documento" id="no_documento" readonly autocomplete="off" class="form-control p2 mx-sm-3" required="">
                        </div>

                        <hr class="pt-4 mt-5">
                        <div class="form-row mt-4">
                            <div class="col-md-6 mb-3 pr-4">
                                <a href="#" class="btn btn-danger form-control" data-dismiss="modal">Cancelar</a>
                            </div>
                            <div class="col-md-6 mb-3  pr-4">
                                <input class="btn btn-info form-control" value="Actualizar" type="submit">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <a class="añadir" href="<?= base_url ?>dashboard/crear_usuario">✚</a>




    <!-- jQuery, Popper js y Boostrao js -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="<?= base_url ?>assets/js/main.js"></script>


    <!-- ScrollReveal (Framework para aportar interavtivdad y animcación a las paginas) -->
    <script src="https://unpkg.com/scrollreveal"></script>



    <script>
        function mostarDetalles(telefono, direccion, nombre, email, no_documento, idusuario) {
            $('#actualizar').modal('show');

            document.getElementById("telefono").value = telefono;
            document.getElementById("direccion").value = direccion;
            document.getElementById("nombre").value = nombre;
            document.getElementById("email").value = email;
            document.getElementById("no_documento").value = no_documento;
            document.getElementById("idusuario").value = idusuario;
        }
    </script>


    <script>
        window.sr = ScrollReveal();

        // Definimos los paramtros que enviara a la clase para dar la interactividad
        sr.reveal('.navbar', {
            duration: 800,
            origin: 'bottom',
            distance: '-100px'
        });
        sr.reveal('.container', {
            duration: 2000,
            origin: 'right',

            distance: '-800px'
        });
        //Efecto de aparicion
        ScrollReveal().reveal('.card-img', {
            delay: 500
        });
    </script>
</body>

</html>