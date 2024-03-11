<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar</title>
<style>
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
</style>
</head>
<body>

<div class="container">
    <h1>EDITAR</h1>
    <form action="" method="get" class="form-container">
        <?php foreach($dato as $key => $value): ?>
            <?php foreach($value as $v): ?>
                <div class="form-group">
                    <input type="text" value="<?php echo $v['nombre'] ?>" name="nombre" class="form-control" placeholder="Nombre"> <br>
                </div>
                <div class="form-group">
                    <input type="text" value="<?php echo $v['precio'] ?>" name="precio" class="form-control" placeholder="Precio"> <br>
                </div>
                <input type="hidden" value="<?php echo $v['id'] ?>" name="id"> <br>
                <button type="submit" name="btn" class="btn">ACTUALIZAR</button> <br>
                <input type="hidden" name="m" value="actualizar">
            <?php endforeach; ?>
        <?php endforeach; ?>
    </form>
</div>

</body>
</html>
