<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nuevo Producto</title>
<style>
    /* Estilos CSS */
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .btn {
        display: inline-block;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .btn:hover {
        background-color: #0056b3;
    }
    .error {
        color: #dc3545; /* Color rojo para indicar error */
        font-size: 12px;
    }
</style>
</head>
<body>

<div class="container">
    <h1>NUEVO PRODUCTO</h1>
    <form action="" method="get" class="form-container" onsubmit="return validateForm()">
        <div class="form-group">
            <input type="text" placeholder="INGRESE NOMBRE:" name="nombre" id="nombre" class="form-control"> <br>
            <span id="error-nombre" class="error"></span> <!-- Mensaje de error -->
        </div>
        <div class="form-group">
            <input type="text" placeholder="INGRESE PRECIO:" name="precio" id="precio" class="form-control"> <br>
            <span id="error-precio" class="error"></span> <!-- Mensaje de error -->
        </div>
        <input type="submit" name="btn" value="GUARDAR" class="btn"> <br>
        <input type="hidden" name="m" value="guardar">
    </form>
</div>

<script>
function validateForm() {
    var nombre = document.getElementById("nombre").value.trim();
    var precio = document.getElementById("precio").value.trim();
    var nombreError = document.getElementById("error-nombre");
    var precioError = document.getElementById("error-precio");

    // Validar que el nombre no esté vacío y sea alfabético
    if (nombre == "" || !/^[A-Za-z\s]+$/.test(nombre)) {
        nombreError.innerHTML = "Por favor, ingrese un nombre válido.";
        return false;
    } else {
        nombreError.innerHTML = "";
    }

    // Validar que el precio no esté vacío y sea numérico
    if (precio == "" || isNaN(precio)) {
        precioError.innerHTML = "Por favor, ingrese un precio numérico válido.";
        return false;
    } else {
        precioError.innerHTML = "";
    }

    return true;
}
</script>

</body>
</html>
