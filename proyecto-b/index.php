<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="./imagenes/cielo.png" height="50px">
                </a>
                <button
                    class="navbar-toggler bg-ligth"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#contenido-menu"
                    aria-controls="contenido-menu"
                    aria-expanded="false"
                    aria-label="Mostrar / Ocultar Navegacion">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="contenido-menu">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
                        <li class="nav-item dropdown">
                            <a 
                                href="#" 
                                class="nav-link dropdown-toggle" 
                                id="Submenu-Productos" role="button" 
                                data-bs-toggle="dropdown" 
                                aria-expanded="false"
                                >
                                    Productos
                                </a> 
                            <ul class="dropdown-menu" aria-labelledby="Submenu-Productos">
                                <li><a href="#" class="dropdown-item">Computadoras </a></li>
                                <li><a href="#" class="dropdown-item">Laptops      </a></li>
                                <li><a href="#" class="dropdown-item">Smartphones  </a></li>
                                <li><a href="#" class="dropdown-item">Drones       </a></li>
                                <li><a href="#" class="dropdown-item">Accesorios   </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link">Contacto  </a> 
                        </li>
                    </ul>
                    <form action="" class="d-flex">
                        <input type="text" class="from-control me-2" aria-label="Buscar" placeholder="Buscar">
                        <button class="btn btn-outline-info" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">Bienvenido $Mensaje xD</div>
        <div class="row">
            <div class="col">
                <div id="slider" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="./imagenes/s1.jpg" class="w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="./imagenes/s2.jpg" class="w-100" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="./imagenes/s3.jpg" class="w-100" alt="">
                        </div>
                    </div>
                     <button 
                        class="carousel-control-prev" 
                        type="button" 
                        data-bs-target="#slider" 
                        data-bs-slide="prev"
                        >
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior </span>
                    </button>
                    <button 
                        class="carousel-control-next" 
                        type="button" 
                        data-bs-target="#slider" 
                        data-bs-slide="next"
                        >
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    <div class="carousel-indicators">
                        <button 
                            type="button" 
                            data-bs-target="#slider" 
                            data-bs-slide-to="0" 
                            class="active" 
                            aria-current="true" 
                            aria-label="Slide #1">
                        </button>
                        <button 
                            type="button" 
                            data-bs-target="#slider" 
                            data-bs-slide-to="1" 
                                           
                            aria-current="true" 
                            aria-label="Slide #2">
                        </button>
                        <button 
                            type="button" 
                            data-bs-target="#slider" 
                            data-bs-slide-to="2" 
                                           
                            aria-current="true" 
                            aria-label="Slide #3">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row py-5">
            <div class="col-12">
                <div class="border-bottom">
                    <h1 class="text-center">Galeria</h1>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                    <img class="card-img-top" src="./imagenes/1.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">¡Phone</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dignissimos!</p>
                        <a href="#" class="btn btn-sm btn-outline-info">Comprar</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./imagenes/2.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">¡Phone</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dignissimos!</p>
                        <a href="#" class="btn btn-sm btn-outline-info">Comprar</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./imagenes/3.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">¡Phone</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dignissimos!</p>
                        <a href="#" class="btn btn-sm btn-outline-info">Comprar</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./imagenes/4.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">¡Phone</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dignissimos!</p>
                        <a href="#" class="btn btn-sm btn-outline-info">Comprar</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./imagenes/5.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">¡Phone</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dignissimos!</p>
                        <a href="#" class="btn btn-sm btn-outline-info">Comprar</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./imagenes/6.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">¡Phone</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dignissimos!</p>
                        <a href="#" class="btn btn-sm btn-outline-info">Comprar</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./imagenes/7.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">¡Phone</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dignissimos!</p>
                        <a href="#" class="btn btn-sm btn-outline-info">Comprar</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./imagenes/8.jpg" alt="">
                    <div class="card-body">
                        <h3 class="card-title">¡Phone</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, dignissimos!</p>
                        <a href="#" class="btn btn-sm btn-outline-info">Comprar</a>
                        <a href="#" class="btn btn-sm btn-outline-dark">Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="row border-top py-5 justify-content-between">
            <div class="col-auto">
                <h3 class="lead"> Cielo.com</h3>
                <a href="#" class="btn btn-link">Acerca de</a>
                <a href="#" class="btn btn-link">Contacto</a>
            </div>
            <div class="col-auto">
                <a href="#" class="btn btn-link">Subir en pagina</a>
            </div>
        </div>
    </footer>
    
    <script src="./js/bootstrap.bundle.min.js"></script>

</body>
</html>