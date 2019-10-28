<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <head>
        <title>Encuesta S360</title>
        <?php 
            $ruta='../../';
            require($ruta.'assets/include/links.php');
        ?>
        <script src="./procesos/jPages.js"></script>
       
    </head>
    <body>
        <div class="alturaClass">
            <div class="col-sm-6 border border-danger">
                <div class="col-sm-12 my-3 text-center">
                  
                </div>
                <div class="col-sm-12 my-3">
                    <div class="holder text-uppercase text-center">
                   
                    </div>
                </div>
                <div class="col-sm-12 pb-2">
                    <div id="myIdEncuesta">
                        <form id="myFormEncuesta" name="myFormEncuesta" onsubmit="return false" action="" autocomplete="off">
                            <?php require("./procesos/visualizarEncuesta.php"); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="./procesos/respuesta.js"></script>
        <script>
        $(document).ready(function () {
            $(function () {
                $("div.holder").jPages({
                    containerID: "myFormEncuesta",
                    perPage: 1
                });
            });
        });
        </script>
        <style>
            .holder{
                width: 100% !important;
            }
            .jp-disabled{
                background-color: gray !important;
            }
            .jp-previous{
                color:white !important;
                background-color:#1e88e5  !important;
                border-radius:5px 0px 0px 5px;
                padding: 15px;
                margin-right: 30px;
            }
            .jp-next{
                color:white !important;
                background-color:#1e88e5  !important;
                border-radius:0px 5px 5px 0px;
                padding: 15px;
                margin-left: 30px;
            }
            .jp-previous:hover{
                cursor: pointer !important;
                background-color: #1164aa !important;
            }
            .jp-next:hover{
                cursor: pointer !important;
                background-color: #1164aa !important;
            }
            .jp-current{
                display: none;
            }
            .myPruebita{
                display:none;
            }
    </style>
   <!-- Modal OKI-->
   <div class="modal fade" id="miModalOKI" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header py-1 bg-info">
                        <h5 class="modal-title text-white" id="exampleModalCenterTitle">Información</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body pb-0">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-3 p-0 text-center OKIcono"></div>
                                <div class="col-sm-9 p-0 text-center">
                                    <h5 id="OKIconcepto">--</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-1 border-0 align-self-center"></div>
                </div>
            </div>
        </div>
        <!-- Fin Modal OKI-->
    </body>
</html>