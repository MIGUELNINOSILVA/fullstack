<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="registrarse.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sigmar&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class="fondo">
            <div class="hero">
                <div class="contenido-hero">
                    <h1 class="mb-4 titulo"><strong>SIMULACRO DE PREPARACION 
                        <br> API REST</strong></h1>
                    <h2 class="titulo2"><strong>ALQUILARTEMIS</strong></h2>
                    <div>
                        <button class="btn btn-outline-info mt-4" type="button" data-bs-toggle="modal" data-bs-target="#registerUsuario"><strong>REGISTRARSE</strong></button>
                        <button class="btn btn-outline-info mt-4 ms-4" type="button" data-bs-toggle="modal" data-bs-target="#inicioSeccion"><strong>INICIAR SECCION</strong></button>
                    </div>
                    
                </div>
            </div>
        </section>
        <div class="modal fade" id="registerUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header color1">
                        <h1 class="modal-title fs-5 titulo3" id="exampleModalLabel"><strong>Registro De Usuarios</strong></h1>
                    </div>
                    <div class="modal-body">
                        <form id="formulario" class="row g-3" method="POST" action="registrarse.php">
                            <div class="col-md-12">
                                <label for="nombre" class="form-label headerr"><strong>Nombre</strong></label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="nombre" 
                                name="nombre"
                                placeholder="Digitar Nombre">
                            </div> 

                            <div class="col-md-6">
                                <label for="user" class="form-label headerr"><strong>Usuario</strong></label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="user" 
                                name="user"
                                placeholder="Digitar Usuario">
                            </div>
                
                            <div class="col-md-6">
                                <label for="password" class="form-label headerr"><strong>Password</strong>
                                </label>
                                <input 
                                type="password" 
                                class="form-control" 
                                id="password" 
                                name="password"
                                placeholder="Digitar Password">
                            </div>
                            
                            <div class="col-md-12">
                                <label for="email" class="form-label headerr"><strong>Email</strong></label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="email" 
                                name="email"
                                placeholder="Digitar Email">
                            </div>
                    
                            <div class="modal-footer finalModal">
                                <button type="button" class="btn btn-danger b1" data-bs-dismiss="modal">Cerrar</button>
                                <input type="submit" class="btn btn-warning b2" data-bs-toggle="modal" value="Registrarse" name="Registrarse" data-bs-target="#exampleModal2">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="inicioSeccion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header color1">
                        <h1 class="modal-title fs-5 titulo3" id="exampleModalLabel"><strong>Iniciar Seccion</strong></h1>
                    </div>
                    <div class="modal-body" id="sesionL">
                        <form id="formulario" class="row g-3" method="POST" action="loguearse.php">
                            <div class="col-md-12">
                                <label for="user" class="form-label headerr"><strong>Usuario</strong></label>
                                <input 
                                type="text" 
                                class="form-control" 
                                id="user"
                                name="user" 
                                placeholder="Digitar Usuario">
                            </div>

                            <div class="col-md-12">
                                <label for="password" class="form-label headerr"><strong>Password</strong>
                                </label>
                                <input 
                                type="password" 
                                class="form-control" 
                                id="password" 
                                name="password"
                                placeholder="Digitar Password">
                            </div>

                            <div class="modal-footer finalModal">
                                <button type="button" class="btn btn-danger b1" data-bs-dismiss="modal">Cerrar</button>
                                <input type="submit" class="btn btn-warning b2" data-bs-toggle="modal" value="Loguearse" name="Loguearse" data-bs-target="#exampleModal2">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="/js/newRegistro.js" type="module"></script>
    </body>
</html>