<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel Body">
                <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                <thead style="background-color:#A9D0F5">
                    <th>Opciones</th>
                    <th>Artículo</th>
                    <th>Cantidad</th>
                    <th>Costo</th>
                    <th>Precio</th>
                    <th>SubTotal</th>
                </thead>
                <tfoot>
                    <th>Total</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <!-- Por medio del id del h4 vamos actualizando para que se actualize el valor -->
                    <th><h4 id="total">$0.00</h4></th>
                </tfoot>
                <tbody>

                </tbody>
            </table>
            
            </div>        
        </div>    
    </div>
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
            <!-- Este token va a trabajar con las transaciones, muy inprotante desde el modelo -->
            <input name"_token" value="csrf_token" type="hidden"></input>
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
    </div>
    
    
</body>
</html>