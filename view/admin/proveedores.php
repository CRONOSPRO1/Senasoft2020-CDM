<?php require_once'session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>Lista de proveedores</title>
</head>

<body>

    <?php require_once'menu.php'?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <div class="row px-4">
                            <div class="mr-auto">
                                <h4>Proveedores</h4>
                            </div>
                            <div class="text-right">
                                <a href="?c=Admin&a=crear_proveedor_vista" class="btn btn-success">
                                    ✚ Crear proveedor
                                </a>
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
                                        <th>No. documento</th>
                                        <th>Dirección</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th col="2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="registros">

                                    <?php foreach ($this->model->listar_personas("proveedor") as $lista) : ?>
                                        <tr>
                                            <td><?= $lista['nombre']; ?></td>
                                            <td><?= $lista['no_documento']; ?></td>
                                            <td><?= $lista['direccion']; ?></td>
                                            <td><?= $lista['telefono']; ?></td>
                                            <td><?= $lista['email']; ?></td>
                                            <td>

                                                <a href="?c=Admin&a=eliminar&id=<?= $lista['idpersona'] ?>&tipo=proveedor"><span class="btn btn-outline-danger py-0 mr-2 align-middle" data-toggle="tooltip" data-placement="top" title="Eliminar">x</span>
                                                    <a href="javascript:void(0)" onclick="mostarDetalles('<?= $lista['nombre'] ?>','<?= $lista['no_documento'] ?>','<?= $lista['tipo_documento'] ?>','<?= $lista['direccion'] ?>','<?= $lista['telefono'] ?>','<?= $lista['email'] ?>','<?= $lista['idpersona'] ?>')" data-target="#actualizar"><span class="btn btn-outline-success py-0 align-middle" data-toggle="tooltip" data-placement="top" title="Actualizar">🡡</span></a>
                                            </td>

                                        <?php endforeach; ?>


                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="divModal"></div>
    <script>
        function mostarDetalles(nombre, no_documento, tipo_documento, direccion, telefono, email, idpersona) {
            $('#actualizar').modal('show');

            document.getElementById("nombre").value = nombre;
            document.getElementById("no_documento").value = no_documento;
            document.getElementById("tipo_documento").value = tipo_documento;
            document.getElementById("direccion").value = direccion;
            document.getElementById("telefono").value = telefono;
            document.getElementById("email").value = email;
            document.getElementById("idpersona").value = idpersona;

        }
    </script>

    <!-- Actualizar proveedor (Ventana modal) -->


    <div class="modal" tabindex="-1" id="actualizar">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Actualizar proveedor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="?c=Admin&a=actualizar" method="POST">
                    <div class="modal-body">
                        <div class="form-group form-inline">
                            <label>Nombre del proveedor</label>
                            <input type="text" name="nombre" id="nombre" class="form-control p2 mx-sm-3" readonly autocomplete="off" style="max-width: 70%;">
                        </div>


                        <input type="hidden" name="idpersona" id="idpersona" value="" class="form-control p2 mx-sm-3" readonly autocomplete="off" style="max-width: 70%;">
                        <input type="hidden" name="tipo" value="proveedor" class="form-control p2 mx-sm-3" readonly autocomplete="off" style="max-width: 70%;">

                        <div class="form-group form-inline">
                            <label>Tipo de documento</label>

                            <input type="text" value="" id="tipo_documento" class="form-control p2 mx-sm-3" readonly>
                        </div>

                        <div class="form-group form-inline">
                            <label>Número de documento</label>
                            <input type="number" name="numero" id="no_documento" class="form-control p2 mx-sm-3" readonly autocomplete="off" style="max-width: 70%;">
                        </div>

                        <div class="form-group form-inline">
                            <label>Dirección</label>
                            <input type="text" name="direccion" id="direccion" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                        </div>

                        <div class="form-group form-inline">
                            <label>Telefono</label>
                            <input type="number" name="telefono" id="telefono" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                        </div>

                        <div class="form-group form-inline">
                            <label>Email</label>

                            <input type="email" name="email" id="email" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                        </div>

                        <hr class="pt-4 mt-5">
                        <div class="form-row mt-4">
                            <div class="col-md-6 mb-3 pr-4">
                                <a href="#" class="btn btn-danger form-control" data-dismiss="modal">Cancelar</a>
                            </div>
                            <div class="col-md-6 mb-3  pr-4">
                                <input type="submit" class="btn btn-info form-control" value="Actualizar">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>