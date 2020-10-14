<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url?>assets/css/main.css">

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Registarse | Automatización y gestión Multitiendas</title>
</head>

<body>

    <div class="container mt-5 mb-5" style="max-width: 800px">
        <div class="container-fluid bg-white border shadow text-center">
            <div>
                <div class="container p-5">
                    <h4 class="text-muted pb-4 borde-bottom-diseno">Registrarse</h4>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input type="text" name="nombre" class="form-control p pb-4" placeholder="Nombre" required>
                        </div>
                        <div class="form-group pb-4">
                            <select class="form-control" required>
                                <option value="">Tipo de documento</option>
                                <option>Cédula de ciudadania</option>
                                <option>Tarjeta de identidad</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control p pb-4" placeholder="Email" required>
                        </div>
                        <div class="form-group pt-1">
                            <input type="password" name="clave" class="form-control p pb-4" placeholder="Contraseña" required>
                        </div>
                        <div class="form-group pt-3">
                            <input type="submit" class="form-control btn btn-outline-black" value="Listo">
                        </div>
                    </form>
                </div>
                <div class="form-group pb-4">
                    <span class="text-dark">¿Ya tienes una cuenta?</span>
                    <a href="index.php">Inicia sesión</a>
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