<div class="card w-75 p-0 my-5 mx-auto">
    <div class="card-header bg-light p-5">
        <div class="container">
            <div class="">
                <div class="">
                    <h2>Editar usuario</h2>
                </div>

                <form action="?u=crear" method="post" id="formulario">

                    <div class="row">

                        <div class="col m-3">

                            <input type="hidden" name="idU" value="<?php echo $alm->idUsuario; ?>">

                            <div class="grupo" id="grupo_nombre">
                                <label for="nombre">Nombre</label>
                                <div class="inputs">
                                    <input type="text" name="nombre" id="nombre" class="f__input form-control m-1"  value="<?php echo $alm->nombres; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Nombre incorrecto. solo se permiten letras (A-Z).</p>
                            </div>

                            <div class="grupo" id="grupo_apellido">
                                <label for="apellido">Apellido</label>
                                <div class="inputs">
                                    <input type="text" name="apellido" id="apellido" class="f__input form-control m-1"  value="<?php echo $alm->apellidos; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Apellido incorrecto. solo se permiten letras (A-Z).</p>
                            </div>

                            <div class="grupo" id="grupo_tel">
                                <label for="tel">Teléfono</label>
                                <div class="inputs">
                                    <input type="number" name="tel" id="tel" class="f__input form-control m-1"  value="<?php echo $alm->telefono; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Teléfono incorrecto. solo se permiten números y tener 10 caracteres.</p>
                            </div>

                            <div class="grupo" id="grupo_email">
                                <label for="email">Email</label>
                                <div class="inputs">
                                    <input type="email" name="email" id="email" class="f__input form-control m-1"  value="<?php echo $alm->email;?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Correo incorrecto. solo se permiten letras (a-z), números y signos de puntuación (.).</p>
                            </div>

                        </div>
                        <div class="col m-3">
                            <div class="grupo" id="grupo_pass">
                                <label for="pass">Contraseña</label>
                                <div class="inputs">
                                    <input type="password" name="pass" id="pass" class="f__input form-control m-1" disabled  value="<?php echo $alm->clave; ?>">
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Contraseña incorrecta. la contraseña debe tener 8 a 14 caracteres.</p>
                            </div>

                            <div class="grupo" id="grupo_rol">
                                <label for="rol">Rol</label> 
                                <div class="inputs">
                                    <select name="rol" id="rol" class="f__input form-control m-1">
                                        <?php foreach($this->usuario->listarRol() as $td): ?>
                                            <option value="<?php echo $td->idRol ?>" <?php echo $td->idRol == $alm->idRol ? 'selected' : '' ?>> <?php echo $td->rol ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Escoja un rol.</p>
                            </div>

                            <div class="grupo" id="grupo_estado">
                                <label for="estado">Estado</label>
                                <div class="inputs">
                                    
                                    <select name="estado" id="estado" class="form-control m-1">

                                        <option value="<?php echo $alm->estado ?>" selected> <?php echo ucfirst($alm->estado) ?> </option>
                                        
                                        <?php if($alm->estado == 'activo'){ ?>

                                            <option value="inactivo">Inactivo</option>

                                        <?php }elseif($alm->estado == 'inactivo'){ ?>

                                            <option value="activo">Activo</option>

                                        <?php } ?>

                                    </select>
                                    <i class="estado fas fa-times-circle"></i>
                                </div>
                                <p class="error">Escoja un estado</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col m-3">
                        <input type="submit" value="Editar" class="btn btn-danger m-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script  src="http://localhost/Emi/assets/js/validacionUsuarioEditar.js"></script>