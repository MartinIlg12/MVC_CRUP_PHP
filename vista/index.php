<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Martin</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }
    .container {
        margin: 20px auto;
        width: 80%;
        max-width: 1200px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 12px 20px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
    th {
        background-color: #333;
        color: white;
    }
    .btn {
        background-color: #008CBA;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }
    .btn:hover {
        background-color: #005F6B;
    }
</style>
</head>
<body>

<div class="container">
    <table>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>BOTONES DE ACCIONES</th>        
        </tr>
        <tbody>
            <?php
            if(!empty($dato)):
                foreach($dato as $key => $value)
                    foreach($value as $v):?>
                    <tr>
                        <td><?php echo $v['id'] ?> </td>
                        <td><?php echo $v['nombre'] ?> </td>
                        <td><?php echo $v['precio'] ?> </td>
                        <td>
                            <a href="index.php?m=nuevo" class="btn">NUEVO</a>
                            <a class="btn" href="index.php?m=editar&id=<?php echo $v['id']?>">EDITAR</a>
                            <a class="btn" href="index.php?m=eliminar&id=<?php echo $v['id']?>" onclick="return confirm('¿Está seguro de eliminar este elemento?')" style="background-color: #dc3545; color: #fff; border-color: #dc3545;">ELIMINAR</a>

                        </td>
                    </tr>
                    <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">data vacia, ingresar datos</td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
</div>

</body>
</html>
