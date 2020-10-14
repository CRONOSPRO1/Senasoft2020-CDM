<?php require_once'session.php';
require_once'config/parameters.php'?>

<header>
    <div class="container-fluid mb-5 " >
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
            <a class="nav-link" href="index.php"><img src="<?=base_url?>/assets/img/logosoft.png" alt="Logo" width="100px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mr-auto"><?php echo $_SESSION['nombre'] ?></div>
                <ul class="navbar-nav form-inline my-2 my-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Almacen
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?=base_url?>Categorias/index">Categorias</a>
                            <a class="dropdown-item" href="productos.php">Producto</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Inventario
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?=base_url?>Admin/proveedores">Proveedores</a>
                            <a class="dropdown-item" href="compras.php">Compras</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Solicitudes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?=base_url?>Admin/talleres">Talleres</a>
                            <a class="dropdown-item" href="<?=base_url?>Admin/talleres">Solicitudes</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle pl-4 pr-5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Acceso
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="?c=Usuarios&a=listar">Usuarios</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
