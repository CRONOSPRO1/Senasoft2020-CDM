<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/main.css">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Crear ingreso | Automatización y gestión Multitiendas</title>
</head>

<body>

    <!-- Incluimos el archivo de la barra superior con el método include de php -->


    <div class="container">
        <div class="card shadow-lg p-3 mb-3 bg-white rounded mt-4" style="max-width: 1000px; margin: 0 auto;">
            <div class="card-body">
                <div class="card-title pb-2 text-center">
                    <h4 class="text-secondary borde-bottom-diseno">Agregar ingreso</h4>
                    <hr class="pb-2 pt-2">
                </div>
                <!-- <form action="" method="POST">
                    <div class="form-group form-inline">
                        <label>Número soporte</label>
                        <input type="number" name="no_soporte" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                    </div>


                    <hr class="pt-4 mt-5">
                    <div class="form-row mt-4">
                        <div class="col-md-6 mb-3 pr-4">
                            <a href="#" class="btn btn-danger form-control">Cancelar</a>
                        </div>
                        <div class="col-md-6 mb-3  pr-4">
                            <input class="btn btn-info form-control" value="Guardar" type="submit">
                        </div>
                    </div>
                </form> -->

                <div class="content">

                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="from group">
                            <label>Proveedor</label>
                            <select name="pidproducto" id="pidproducto" class="form-control" data-live-search="true">
                                <option value=""> .</option>
                            </select>
                        </div>
                    </div>
                    <div class="row py-5 px-4">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="from group">
                                <label class="mb-4">Producto</label>
                                <select name="pidproducto" id="pidproducto" class="form-control p pb-4" data-live-search="true">
                                    <option value=""> .</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                            <div class="form-group">
                                <label class="mb-4">Cantidad</label>
                                <input type="number" name="pcantidad" id="pcantidad" required value="<?php if (isset($email_acudiente)) echo $email_acudiente ?>" class="form-control p pb-4">
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                            <div class="form-group">
                                <label class="mb-4">Precio de costo</label>
                                <input type="number" name="pcosto" id="pcosto" required value="<?php if (isset($email_acudiente)) echo $email_acudiente ?>" class="form-control p pb-4">
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                            <div class="form-group">
                                <label class="mb-4">Precio de venta</label>
                                <input type="number" name="pprecio" id="pprecio" required value="<?php if (isset($email_acudiente)) echo $email_acudiente ?>" class="form-control p pb-4">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                            <div class="form-group">
                                <label class="px-5 pb-3 mb-4"> </label>
                                <button type="button" id="bt_add" class="btn btn-outline-dark">Agregar</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                        <table id="detalles" class="table table-striped table-hover">
                            <thead>
                                <th>Opciones</th>
                                <th>Artículo</th>
                                <th>Cantidad</th>
                                <th>Costo</th>
                                <th>Precio</th>
                                <th>SubTotal</th>
                            </thead>
                            <td>
                            <th>Total</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>
                                <h4 id="total">$0.00</h4>
                            </th>
                            </td>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

                <hr class="pt-4 mt-5">
                <div class="form-row mt-4">
                    <div class="col-md-6 mb-3 pr-4">
                        <a href="#" class="btn btn-danger form-control">Cancelar</a>
                    </div>
                    <div class="col-md-6 mb-3  pr-4">
                        <input class="btn btn-info form-control" value="Guardar" type="submit">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery, Popper js y Boostrao js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="<?= base_url ?>/assets/js/main.js"></script>

    <!-- ScrollReveal (Framework para aportar interavtivdad y animcación a las paginas) -->
    <script src="https://unpkg.com/scrollreveal"></script>


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
    </script>
</body>

</html>