<?php

if ($_SESSION['nombre']) {
} else {
    session_destroy();
    header('Location:?c=Usuarios&a=index');
}

?>