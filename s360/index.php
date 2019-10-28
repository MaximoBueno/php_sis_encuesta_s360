<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Prueba</title>
        <?php 
        session_start();
        $ruta = './';
        require($ruta.'assets/include/links.php');
        ?>
    </head>

    <body class="my-body-style">
        <div class="alturaClass centrar-custom" >
                <div class="col-lg-4 my-login py-3" >
                    <h6 class="text-center font-weight-bold my-titulo-texto py-3">
                        BIENVENIDO (A) AL SISTEMA DE ENCUESTA
                    </h6>
                    
                    <?php
                    if (!empty($_GET['v']) && !empty($_GET['t']))
                    {
                        if ($_GET['v']=='fallo') 
                        {
                            echo '<div class="alert alert-danger p-2 alert-dismissible fade show" role="alert">
                            Falta Ingresar <strong>Datos</strong>.
                          </div>';
                        }
                        elseif ($_GET['v']=='falloClave')
                        {
                            echo '<div class="alert alert-danger p-2 alert-dismissible fade show" role="alert">
                            Usuario o Contraseña <strong>Incorrecta</strong>.
                          </div>';
                        }
                    }
                    ?>
                    <form action="./logearse/index.php" method="post" autocomplete="off">
                        <div class="">
                            <input name="usuario" class="form-control form-control-sm my-2 " 
                                type="text" placeholder="Escribe tu usuario"
                                title="Escribe tu usuario">
                            <input name="clave" class="form-control form-control-sm my-2 " 
                                type="password" 
                                placeholder="Escribe tu contraseña"
                                title="Escribe tu contraseña">
                        </div>

                        <input type="submit"
                         class="btn btn-block btn-success text-white font-weight-bold mt-2" 
                         title="Ingresar"
                         value="INGRESAR">
                        <h6 class="mt-2 colorTexto">Comuniquese al correo
                            <strong>maxhugobueno@gmail.com</strong> si no ha podido acceder.
                        </h6>
                    </form>
                </div>
        </div>

        <div class="fixed-bottom centrar-custom">
                <div class="alert alert-info alert-dismissible fade show mb-0 text-center">
                    <strong>Copyright ©maxhugobueno@gmail.com
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        </div>
    </body>
</html>