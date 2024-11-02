<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/gestion-documental/resources/css/UsuarioFuncionario.css">
    <link rel="stylesheet" href="/gestion-documental/resources/css/animate.css">
    <title>Login SGD</title>
</head>
<body>
    <div class="login-container animated bounce">
        <div class="image-container">
            <img src="/gestion-documental/resources/img/Imagen.png" alt="Descripción de la imagen">
        </div>
        <div class="form-container">
            <h2 align="center">BIENVENIDO FUNCIONARIO</h2>
            
            <form id="login-form" method="POST" action="{{ route('funcionario.auth') }}">
                @csrf <!-- Esto es importante para la seguridad -->
                <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required placeholder="Ingrese su DNI">
                

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required placeholder="Ingrese su contraseña">
                <button type="submit" id="continuar">Continuar</button>
                
                
            </form>
            <br>
            <br>
            <br>
            <a href="{{ route('funcionario.register') }}">¿NO TIENES UNA CUENTA? REGÍSTRATE</a>
        </div>
    </div>
</body>
</html>
