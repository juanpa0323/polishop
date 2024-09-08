<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polishop - Página Principal</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--Estilos locales-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<div class="barra-superior">
    <div class="logo">
        <img src="{{ asset('assets/IMAGENES/logopolishop.png') }}" width="60" alt="Logo de Polishop">
    </div>
    <div class="barra-busqueda">
        <input type="text" placeholder="Buscar...">
        <button><img src="{{ asset('assets/IMAGENES/LUPA.png') }}" alt="Buscar"></button>
    </div>
    <div class="mi-cuenta">
        <button onclick="toggleRegistro()">Mi Cuenta</button>
    </div>
</div>

<div class="secciones mb-5">
    <button onclick="location.href='/'">INICIO</button>
    <button>MERCADO</button>
    <button>MODA</button>
    <!-- Nuevos botones -->
    <button class="ofertas">OFERTAS</button>
    <button class="compra-recoge">COMPRA Y RECOGE</button>
</div>

@yield('main')

<div class="footer">
    <h3>Footer</h3>
</div>
<!--  cuadro de registro de usuario -->
<div class="registro-usuario" id="registro-usuario">
    <span class="cerrar-registro" onclick="toggleRegistro()">X</span>

    <h2>Registro de Usuario</h2>
    <form action="conexion.php" method="post" onsubmit="return mostrarMensaje()">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Registrar">
    </form>
    <div id="mensaje-exito" style="display:none; color:green;">Registro exitoso</div>
</div>

<script>
    function toggleRegistro() {
        var registro = document.getElementById('registro-usuario');
        if (registro.style.display === 'none') {
            registro.style.display = 'block';
        } else {
            registro.style.display = 'none';
        }
    }

    function mostrarMensaje() {
        var mensajeExito = document.getElementById('mensaje-exito');
        mensajeExito.style.display = 'block';
        return false; // Esto evita que el formulario se envíe realmente
    }
</script>

</body>

</html>
