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

    <div class="container mb-4">
        <div class="card shadow-lg p-3 mb-3 bg-white rounded mt-4" style="max-width: 1000px; margin: 0 auto;">
            <div class="card-body">
                <div class="card-title pb-2 text-center">
                    <h4 class="text-secondary borde-bottom-diseno">Agregar Compra</h4>
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
<<<<<<< HEAD
                    <div class="row pb-5 px-4">
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <div class="from group">
                                <label>Proveedor</label>
                                <select name="proveedor" id="proveedor" class="form-control p py-0" data-live-search="true">
                                    <option value=" "> </option>
                                    <?php foreach ($this->model_clipro->listar('Proveedor') as $row) : ?>
                                        <option value="<?= $row['idproveedor'] ?>"><?= $row['nombre'] . " " ?><?= $row['Apellido'] . " " ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
=======

                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        <div class="from group">
                            <label>Proveedor</label>
                            <select name="proveedor" id="proveedor" class="form-control" data-live-search="true">
                                <?php foreach ($this->model_clipro->listar('Proveedor') as $row):?>
                                <option value="<?=$row['idproveedor']?>"><?=$row['nombre']. " "?><?=$row['Apellido']. " "?></option>
                                <?php endforeach;?>
                            </select>
>>>>>>> ce37a1864d747e18ff4c6154bfa0d0839c1265b1
                        </div>
                    </div>
                    <div class="row pb-5 px-4">
                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
                            <div class="from group">
<<<<<<< HEAD
                                <label class="mb-4">Producto</label>
                                <select name="pidproducto" id="pidproducto" class="form-control p p-0" data-live-search="true" required="">
                                    <option value=" "> </option>
                                    <?php foreach ($this->model_producto->listar_productos() as $row) : ?>
                                        <option value="<?= $row['idproducto'] ?>"><?= $row['nombre'] ?></option>
                                    <?php endforeach; ?>
=======
                                <label class="mb-4">Producto</label>                                
                                <select name="pidproducto" id="pidproducto" class="form-control" data-live-search="true" >
                                    <?php foreach ($this->model_producto->listar_productos() as $row):?>
                                        <option value="<?=$row['idproducto']?>"><?=$row['nombre']?></option>                                
                                    <?php endforeach;?>
>>>>>>> ce37a1864d747e18ff4c6154bfa0d0839c1265b1
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                            <div class="form-group">
                                <label class="mb-4">Cantidad</label>
                                <input type="number" name="pcantidad" id="pcantidad" required="" value="<?php if (isset($email_acudiente)) echo $email_acudiente ?>" class="form-control p p-0">
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                            <div class="form-group">
                                <label class="mb-4">Precio de costo</label>
                                <input type="number" name="pcosto" id="pcosto" required="" value="<?php if (isset($email_acudiente)) echo $email_acudiente ?>" class="form-control p p-0">
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                            <div class="form-group">
                                <label class="mb-4">Precio de venta</label>
                                <input type="number" name="pprecio" id="pprecio" required="" value="<?php if (isset($email_acudiente)) echo $email_acudiente ?>" class="form-control p p-0">
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                            <div class="form-group">
                                <label class="px-5 pb-3 mb-4"> </label>
                                <button type="button" id="agregar" class="btn btn-outline-dark">Agregar</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
<<<<<<< HEAD
                        <div class="table-responsive">
                            <table id="detalles" class="table table-striped table-hover">
                                <thead>
                                    <th>Opciones</th>
                                    <th>Artículo</th>
                                    <th>Cantidad</th>
                                    <th>Costo</th>
                                    <th>Precio</th>
                                    <th>SubTotal</th>
                                </thead>
                                <form action="" method="POST">
                                    <tbody id="bodyTable">

                                    </tbody>
                            </table>
                        </div>
=======

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
                            <th></th>
                            <th>
                                <h4 id="total">$0.00</h4>
                            </th>
                            </td>
                            <tbody>
                            </tbody>
                        </table>
>>>>>>> ce37a1864d747e18ff4c6154bfa0d0839c1265b1
                    </div>
                </div>

                <hr class="pt-4 mt-5">
                <div class="form-row mt-4">
                    <div class="col-md-6 mb-3 pr-4">
                        <a href="<?= base_url ?>dashboard/ingreso" class="btn btn-danger form-control">Cancelar</a>
                    </div>
                    <div class="col-md-6 mb-3  pr-4">
                        <input class="btn btn-info form-control" value="Guardar" type="submit">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- jQuery, Popper js y Boostrao js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Framework Select2 para dar más interactivdad a los Select mediante los formularios con una búsqueda en tiempo real-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <!-- Incluimos el archivo del Main de JavaScript para ajustar contenidos y dar más interactividad a la capa vista -->
    <script src="<?= base_url ?>/assets/js/main.js"></script>

    <!-- ScrollReveal (Framework para aportar interavtivdad y animcación a las paginas) -->
    <script src="https://unpkg.com/scrollreveal"></script>


    <script>
        $('#agregar').click(function() {

            // let productoRow = [idproducto = $("#pidproducto").val(), producto = $("#pidproducto option:selected").text(), cantidad = $("#pcantidad").val(), costo = $("#pcosto").val(), precio = $("#pprecio").val()]


            var Fila = document.createElement("tr");
            document.getElementById("bodyTable").appendChild(Fila);

            var añadirTD = document.createElement("td");
            var añadirTD2 = document.createElement("td");
            var añadirTD3 = document.createElement("td");
            var añadirTD4 = document.createElement("td");
            var añadirTD5 = document.createElement("td");

            var idproductov = idproducto = $("#pidproducto").val();
            var productov = producto = $("#pidproducto option:selected").text();
            var cantidadv = idproducto = cantidad = $("#pcantidad").val();
            var costov = costo = $("#pcosto").val();
            var preciov = precio = $("#pprecio").val();

            añadirTD.innerHTML = idproducto = $("#pidproducto").val() + '<input type="hidden" value=' + idproductov + '>';
            añadirTD2.innerHTML = producto = $("#pidproducto option:selected").text() + '<input type="hidden" value=' + productov + '>';
            añadirTD3.innerHTML = idproducto = cantidad = $("#pcantidad").val() + '<input type="hidden" value=' + cantidadv + '>';
            añadirTD4.innerHTML = idproducto = costo = $("#pcosto").val() + '<input type="hidden" value=' + costov + '>';
            añadirTD5.innerHTML = idproducto = precio = $("#pprecio").val() + '<input type="hidden" value=' + preciov + '>';

            Fila.appendChild(añadirTD);
            Fila.appendChild(añadirTD2);
            Fila.appendChild(añadirTD3);
            Fila.appendChild(añadirTD4);
            Fila.appendChild(añadirTD5);

            $("#pidproducto").val("");
            $("#pcantidad").val("");
            $("#pcosto").val("");
            $("#pprecio").val("");


        });
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

        //Obtebemos el Id del select para aplicar el estilo y ajuste del frameworl Select2
        $("#proveedor").select2({
            width: '70%'
        });

        $("#pidproducto").select2({
            width: '100%'
        });
    </script>
</body>

</html>