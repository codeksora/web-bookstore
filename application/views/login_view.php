<?php

echo '
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Ingresar tu cuenta</h2>
                    <form>
                        <input type="email" name="email" placeholder="Email" required/>
                        <input type="password" name="contrasena" placeholder="Contraseña" required/>
                        <button type="submit" class="btn btn-default">Ingresar</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">O</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Registrar usuario</h2>
                    <form>
                        <input type="text" name="nombre" placeholder="Nombre" required/>
                        <input type="text" name="apellido" placeholder="Apellido" required/>
                        <input type="text" name="direccion" placeholder="Dirección" required/>
                        <input type="email" name="email" placeholder="Email" required/>
                        <input type="password" name="contrasena" placeholder="Contraseña" required/>
                        <button type="submit" class="btn btn-default">Registrar</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->';
