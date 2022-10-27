<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Comentarios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                       <?php if (isset($_SESSION["usuario"])){?> <li><a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("crear")."" ?>">Crear Comentario</a></li> <?php } ?>                        
                       <?php if (isset($_SESSION["usuario"])){?> <li><a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("contacto")."&m=".seg::codificar("mostrar")."" ?>">Mostrar Comentarios</a></li> <?php } ?>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if(isset($_SESSION["usuario"])){ ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION["nombre"]?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Editar perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("cerrar_sesion")."" ?>">Cerrar Sesión</a></li>
                    </ul>
                </li>
                <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "index.php?c=".seg::codificar("usuario")."&m=".seg::codificar("login")."" ?>" tabindex="-1">Login</a>
                </li>
                    <?php } ?>

            </ul>
        </div>
    </div>
</nav>