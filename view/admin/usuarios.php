<?php require_once'session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url?>assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Lista de usuarios</title>
</head>

<body>

    <?php include_once 'menu.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <div class="row px-4">
                            <div class="mr-auto">
                                <h4>Usuarios</h4>
                            </div>
                            <!-- <div class="text-right">
                                <a href="crear-usuario.php" class="btn btn-success">                                    
                                    ✚ Crear usuario 
                                </a>
                            </div> -->
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
                                        <th>Email</th>
                                        <th col="2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="registros">
                                    <?php foreach ($this->model->listar_usuarios() as $lista) : ?>
                                        <tr>

                                            <td><?php echo $lista['nombre'] ?></td>
                                            <td><?php echo $lista['no_documento'] ?></td>
                                            <td><?php echo $lista['email'] ?></td>
                                            <td>
                                                <a href="<?=base_url?>idusuario=<?= $lista['idusuario'] ?>"><span class="btn btn-outline-danger py-0 mr-2 align-middle" data-toggle="tooltip" data-placement="top" title="Eliminar">x</span></a>
                                                <a data-toggle="modal" id="<?= $id=$lista['idusuario'];?>" href="" data-target="#actualizar"><span class="btn btn-outline-success py-0 align-middle" data-toggle="tooltip" data-placement="top" title="Actualizar">🡡</span></a>
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


    <!-- Actualizar usuario (Ventana modal) -->

    <div class="modal" tabindex="-1" id="actualizar">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Actualizar usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body">
                        <div class="form-group form-inline">
                            <label>Nombre del usuario</label>
                            <input type="text" name="nombre" value="<?php echo $id?>" class="form-control p2 mx-sm-3" required="" autocomplete="off" style="max-width: 70%;">
                        </div>

                        <div class="form-group form-inline">
                            <label>Tipo de documento</label>
                            <select class="form-control p2 mx-sm-3" name="tipo_documento" value="" required>
                                <option selected disabled value=""> </option>
                                <option>Cédula de ciudadania</option>
                                <option>Trajeta de identidad</option>
                            </select>
                        </div>

                        <div class="form-group form-inline">
                            <label>Número de documento</label>
                            <input type="number" name="no_documento" class="form-control p2 mx-sm-3" required="" autocomplete="off" style="max-width: 70%;">
                        </div>

                        <div class="form-group form-inline">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control p2 mx-sm-3" required="" autocomplete="off">
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
    <script>
        $('#edit-modal').on('show.bs.modal', function(e) {
            
            var $modal = $(this),
                esseyId = e.relatedTarget.id;
            
//            $.ajax({
//                cache: false,
//                type: 'POST',
//                url: 'backend.php',
//                data: 'EID='+essay_id,
//                success: function(data) 
//                {
                    $modal.find('.edit-content').html(esseyId);
//                }
//            });
            
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>