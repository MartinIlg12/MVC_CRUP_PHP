<?php require_once("modelo/index.php"); ?>

<?php 
class modeloController {
    private $model;

    public function __construct() {
        $this->model = new Modelo();
    }

    // Mostrar
    static function index() {
        $producto = new Modelo();
        $dato = $producto->mostrar("productos", "1");
        require_once("vista/index.php");
    }

    // Nuevo
    static function nuevo() {
        require_once("vista/nuevo.php");
    }

    // Guardar
    static function guardar() {
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $data = "'".$nombre."',".$precio;
        $producto = new Modelo();
        $dato = $producto->insertar("productos", $data);
        header("location:".urlsite);
    }

    // Editar
    static function editar() {
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->mostrar("productos", "id=".$id);
        require_once("vista/editar.php");
    }

    // Actualizar
    static function actualizar() {
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $data = "nombre='".$nombre."',precio=".$precio;
        $producto = new Modelo();
        $dato = $producto->actualizar("productos", $data, "id=".$id);
        header("location:".urlsite);
    }

    // Eliminar
    static function eliminar() {
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->eliminar("productos", "id=".$id);
        header("location:".urlsite);
    }
}
?>
