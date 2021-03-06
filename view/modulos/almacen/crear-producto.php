<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url?>assets/css/main.css">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Crear producto | Automatización y gestión Multitiendas</title>
</head>

<body>

    <div class="container">
        <div class="card shadow-lg p-3 mb-3 bg-white rounded mt-4" style="max-width: 900px; margin: 0 auto;">
            <div class="card-body">
                <div class="card-title pb-2 text-center">
                    <h4 class="text-secondary borde-bottom-diseno">Agregar producto</h4>
                    <hr class="pb-2 pt-2">
                </div>
                <form action="<?=base_url?>dashboard/guardar_producto" method="POST">
                

                    <div class="form-group form-inline">
                        <label>Nombre del producto</label>
                        <input type="text" name="nombre" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                    </div>
                    
                        <div class="from group">
                                <label class="mb-4">Categoria</label>                                
                                <select name="idcategoria"  data-live-search="true" >
                                
                                    <?php //foreach ($this->model_categoria->listar_categorias() as $row):?>
                                        <option value="">Categoria</option>                                
                                    <?php //endforeach;?>
                                </select>
                            </div>
    
                    <div class="form-group form-inline">
                        <label>Descripción</label>
                        <input type="text" name="descripcion" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                    </div>
                    <div class="form-group form-inline">
                        <label>Codigo</label>
                        <input type="text" name="codigo" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                    </div>

                    <div class="form-group form-inline">
                        <label>Stock</label>
                        <input type="number" name="stock" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                    </div>

                    <div class="form-group form-inline">
                        <label>Imagen</label>
                        <input type="file" name="imagen" class="form-control p2 mx-sm-3"  autocomplete="off">
                    </div>

                    <hr class="pt-4 mt-5">
                    <div class="form-row mt-4">
                        <div class="col-md-6 mb-3 pr-4">
                            <a href="<?= base_url ?>dashboard/productos" class="btn btn-danger form-control">Cancelar</a>
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
    <script src="<?=base_url?>assets/js/main.js"></script>

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