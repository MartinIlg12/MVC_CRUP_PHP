<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Barra de Navegación</title>
<style>
/* Estilos para la barra de navegación */
.navbar {
  background-color: #333; /* Color de fondo de la barra de navegación */
  overflow: hidden; /* Para manejar los elementos flotantes */
}

/* Estilos para los enlaces dentro de la barra de navegación */
.navbar a {
  float: left; /* Hace que los enlaces estén en línea uno al lado del otro */
  display: block; /* Hace que los enlaces ocupen todo el ancho disponible */
  color: #f2f2f2; /* Color del texto de los enlaces */
  text-align: center; /* Alineación del texto */
  padding: 14px 20px; /* Espacio interno de los enlaces */
  text-decoration: none; /* Quita el subrayado de los enlaces */
}

/* Estilos para cambiar el color de fondo del enlace cuando se pasa el cursor sobre él */
.navbar a:hover {
  background-color: #ddd; /* Color de fondo al pasar el cursor sobre el enlace */
  color: black; /* Cambia el color del texto al pasar el cursor sobre el enlace */
}

</style>
</head>
<body>

<!-- Barra de Navegación -->
<div class="navbar">
  <a href="#">Inicio</a>
  <a href="#">Productos</a>
  <a href="#">Servicios</a>
  <a href="#">Acerca de</a>
  <a href="#">Contacto</a>
</div>

</body>
</html>

