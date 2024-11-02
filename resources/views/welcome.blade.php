<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/gestion-documental/resources/css/Loginprincipal.css">
    <title>Sistema de Gestión Documental - Municipalidad de Huariaca</title>
    
</head>
<body>

    <div class="header">
        <img src="/gestion-documental/resources/img/logo_tramite.png" alt="Logo Municipalidad" width="180">
    </div>

    <div class="nav-bar">
        <a href="#">Documentos</a> |
        <a href="#">Buscar</a> |
        <a href="{{route('funcionario.login')}}" class="btn-funcionario">Iniciar Sesion</a>
    </div>

    <div class="content">
        <h2>¿Deseas ubicar un EXPEDIENTE?</h2>
        <p>INGRESA EL NÚMERO DE EXPEDIENTE</p>
        <input type="text" placeholder="Número de expediente">
        
        <button type="submit" class="search-button" >Buscar</button>
        <div>
            <p><strong>¿No recuerdas el número de tu EXPEDIENTE?</strong></p>
            <br>
            <div class="nav-bar-dos">
                <div class="container">
                <button class="search-trigger" onclick="toggleSearchPanel()">Búsqueda Avanzada</button>
                <div id="searchPanel" class="search-panel">
                    <form class="search-form">
                        <div class="form-group">
                            <label for="fechaDesde">Fecha desde:</label>
                            <input type="date" id="fechaDesde" name="fechaDesde">
                        </div>
                        <div class="form-group">
                            <label for="fechaHasta">Fecha hasta:</label>
                            <input type="date" id="fechaHasta" name="fechaHasta">
                        </div>
                        <div class="form-group">
                            <label for="firma">Firma:</label>
                            <input type="text" id="firma" name="firma" placeholder="Ingrese firma">
                        </div>
                        <div class="form-group">
                            <label for="asunto">Asunto:</label>
                            <input type="text" id="asunto" name="asunto" placeholder="Ingrese asunto">
                        </div>
                        <button type="submit" class="search-button">Buscar</button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="footer">
        <p>¿No has podido ubicar tu expediente? Comunícate con nosotros por el <a href="#">MessengerRL</a></p>
        <p>Usted es el visitante: 0010</p>
    </div>
    <script>
         function toggleSearchPanel() {
            var panel = document.getElementById('searchPanel');
            var content = document.querySelector('.container');
            if (panel.style.display === 'none' || panel.style.display === '') {
                content.innerHTML = ''; // Limpiar todo el contenido
                panel.style.display = 'block';
                content.appendChild(panel);
            } else {
                panel.style.display = 'none';
            }
        }
    </script>
</body>
</html>