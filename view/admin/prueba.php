<!DOCTYPE html>
<html>

<head>
    <title>modal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body><br>

    <?php include_once 'menu.php'; ?>

    <tr>
<?php for ($i=4; $i < 10 ; $i++):?>
    
    <center>
        <!-- Button trigger modal -->
        <button type="button" id="btnmodal" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-nom="carlos" data-numero="<?=$i?>" data-ape="mendez">
            <?=$i?>
        </button></center>
</tr>
    

    

    <script>
        $(document).ready(function() {
            $("#btnmodal").click(function() {
                var nombre = $(this).data('nom');
                var apellido = $(this).data('ape');
                var numero = $(this).data('numero');

                $("#nombre").val(nombre);
                $("#apellido").val(apellido);
                $("#numero").val(numero);


            });
        });
    </script>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>nombre : </label><input type="text" id="nombre" name=""><br>
                    <label>apellido : </label><input type="text" id="apellido" name="">
                    <label>apellido : </label><input type="text" id="numero" name="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <?php endfor ?>

</body>

</html>