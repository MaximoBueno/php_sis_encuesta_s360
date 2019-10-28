<style>
    .uTreen{
        background-image: url('<?php echo $ruta ?>assets/img/Imagen1.png');
        background-repeat: repeat;
    }
</style>
<div class="contensMenuLat">
    <div class="uCentrarCustom p-1">
        <input class="form-control form-control-sm border-0" style="background-color:;color:#333 !important;"
            placeholder="NAVEGACIÓN (deshabilitado)" id="" disabled>
        <input type="checkbox" id="uCheck" onclick="check();" autocomplete="off" class="d-none">
        <label for="uCheck" class="uCentrarCustom my-0 " id="uLabel" onclick="clickLabel();">
            <i class="fa fa-angle-double-left border text-white rounded p-1 px-2 m-1" style="cursor:pointer"></i>
        </label>
    </div>
    <ul class="border-top border-warning pt-2 mb-4">
        <li class="fiList">
            <a class="btnList" onclick="desplega('uListRegistro');">
                <div class="d-flex">
                    <i class="text-warning material-icons iconMenu mr-1">location_city</i>
                    <h5 class="text-warning m-0 textMenu">PERSONAL</h5>
                </div>
            </a>
            <ul class="ulistMenu noneCustom" id="uListRegistro">
                <a href="/SIGA/Docente/datos/misDatos.xhtml" style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Mi Perfil</h6>
                    </li>
                </a>
                <a href="/SIGA/Docente/datos/cambiarClave.xhtml" style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Cambiar Clave</h6>
                    </li>
                </a>
                <a href="http://siga.usdg.edu.pe:8080/imagen/java/manual/MANUAL%20DE%20INTRANET%20DOCENTE%20USDG.pdf" style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Manual De Usuario</h6>
                    </li>
                </a>
            </ul>
        </li>
        <li class="fiList">
            <a class="btnList" onclick="desplega('uListAdmision');">
                <div class="d-flex">
                    <i class="text-warning material-icons iconMenu mr-1">person_add</i>
                    <h5 class="text-warning m-0 textMenu">ACADÉMICO</h5>
                </div>
            </a>
            <ul class="ulistMenu noneCustom" id="uListAdmision">
                <a href="/SIGA/Docente/portafolio/asistenciaAlumno.xhtml" style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Registro De Asistencia</h6>
                    </li>
                </a>
                <a href="/SIGA/Docente/notas/registroNota.xhtml" style="text-decoration: none;">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Registro De Notas</h6>
                    </li>
                </a>
                <a href="/SIGA/Docente/portafolio/silabus.xhtml" style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Cargar Silabus</h6>
                    </li>
                </a>
                <a href="/SIGA/Docente/academico/manuales.xhtml" style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Manuales</h6>
                    </li>
                </a>
                <a href="/SIGA/Docente/portafolio/horario.xhtml" style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Horario De Clases</h6>
                    </li>
                </a>
                <a href="/SIGA/Docente/portafolio/cronogramaAcademico.xhtml" style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Cronograma Académico</h6>
                    </li>
                </a>
                <a href="/SIGA/Docente/foro/foro.xhtml" style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Foro</h6>
                    </li>
                </a>
            </ul>
        </li>
        <li class="fiList d-none">
            <a class="btnList" onclick="desplega('uListPersonal');">
                <div class="d-flex">
                    <i class="text-warning material-icons iconMenu mr-1">how_to_reg</i>
                    <h5 class="text-warning m-0 textMenu">PERSONAL RRHH</h5>
                </div>
            </a>
            <ul class="ulistMenu noneCustom" id="uListPersonal">
                <a href="<?php echo $ruta; ?>administrador/Personal/RegistroDocente" style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Registro Docente</h6>
                    </li>
                </a>
                <a style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Registro administrador</h6>
                    </li>
                </a>
                <a style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Registro Horario</h6>
                    </li>
                </a>
                <a style="text-decoration:none">
                    <li class="listMenu">
                        <h6 class="text-white m-0 textMenu">Reportes</h6>
                    </li>
                </a>

            </ul>

        </li>
    </ul>
</div>