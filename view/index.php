<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/main.css">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Iniciar sesion | Automatización y gestión Multitiendas</title>
</head>

<body>

    <div class="mt-5 mb-5 pt-3">
        <div class="container mt-5" style="max-width: 1000px">
            <div class="container-fluid bg-white border shadow text-center mt-5">
                <div class="row">
                    <div class="col-sm-4 centrar img-login d-flex flex-column align-items-center justify-content-center">
                        <div class="container ">
                            <h6 class="text-white text-shadow" style="font-size: 20px;text-shadow: #000 0px 1px 20px;">Automatización y gestión Multitiendas</h6>
                        </div>
                    </div>

                    <div class="col-sm-8 p-5">
                        <h4 class="text-muted pb-4 borde-bottom-diseno">Iniciar sesión</h4>
                        <div class="form-group">
                            <form action="<?=base_url?>Principal/validar" method="POST">
                                <input type="number" name="no_documento" class="form-control p pb-4" placeholder="Usuario" required="">
                        </div>
                        <div class="form-group pt-1">
                            <input type="password" name="clave" class="form-control p pb-4" placeholder="Contraseña" required="">
                        </div>
                        <div class="form-group pt-3">
                            <input type="submit" class="form-control btn btn-outline-dark" value="Iniciar sesión">
                            </form>
                        </div>
                        <div class="form-group pt-3">
                            <a href="register.php" class="text-dark">Olvidé la cotraseña</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery y Boostrao js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

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
        //Efecto de aparicion
        ScrollReveal().reveal('.card-img', {
            delay: 500
        });
    </script>
</body>

</html>