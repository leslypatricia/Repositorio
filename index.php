<!doctype html>
<html lang="es">
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login con  PHP</title>

        <link rel="stylesheet" hsref="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        
    </head>
    
    <body>
     
      <div class="container-login">
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin" action="LOG/login.php" method="post">
                <span class="login-form-title">Iniciar Sesiòn</span>
                
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario" required value="">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password" required value="">
                    <span class="focus-efecto"></span>
                </div>
                <center> <p> <a class="link" href="olvi_contra.php">¿olvidaste la contraseña?</a></p></center>
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                    
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">Ingresar</button>
                        
                        
                    </div>

                   
<p><a class="link" href="registra.html">NO Tienes una Cuenta</a></p>
                </div>
            </form>
        </div>
    </div>     
  
        
   
    </body>
</html>