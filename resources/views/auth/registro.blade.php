<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/gestion-documental/resources/css/UsuarioFuncionario.css">
    <link rel="stylesheet" href="/gestion-documental/resources/css/animate.css">
    <title>Registro SGD</title>
</head>
<body>
    <div class="registration-container animated bounce">
        <div class="form-container">
            <h2 align="center">REGÍSTRATE COMO FUNCIONARIO</h2>
            
            <form id="registration-form" method="POST" action="{{ route('funcionario.register') }}">
                @csrf
                <label for="dni">DNI:</label>
                <input type="text" id="dni" name="dni" required placeholder="Ingrese su DNI">
            
                <label for="nombre_completo">Nombre Completo:</label>
                <input type="text" id="nombre_completo" name="nombre_completo" required placeholder="Ingrese su nombre completo">
            
                <label for="cargo">Cargo:</label>
                <input type="text" id="cargo" name="cargo" placeholder="Ingrese su cargo">
            
                <label for="area">Área:</label>
                <input type="text" id="area" name="area" placeholder="Ingrese su área">
            
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required placeholder="Ingrese su contraseña">
            
                <label for="correo_electronico">Correo Electrónico:</label>
                <input type="email" id="correo_electronico" name="correo_electronico" required placeholder="Ingrese su correo electrónico">
            
                <label for="rol">Rol:</label>
                <input type="text" id="rol" name="rol" placeholder="Ingrese su rol">
            
                <button type="submit" id="registrar">Registrarse</button>
            </form>
            
        </div>
    </div>
</body>
</html>
