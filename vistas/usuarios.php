<?php
require_once '../php/conexion.php';
$sql = 'SELECT * FROM usuario';
$result = $conn->query($sql);
$usuarios = $result->fetchAll();
include 'layouts/head.php';
?>

<div class="container">
    <hi>Listado de usuarios</hi>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Paterno</th>
            <th>Materno</th>
            <th>Acciones</th>
        </tr>
        <tbody>
        <?php
            foreach ($usuarios as $usuario){
                echo "<tr>";
                echo "<td>".$usuario['id']."</td>";
                echo "<td>".$usuario['nombre']."</td>";
                echo "<td>".$usuario['paterno']."</td>";
                echo "<td>".$usuario['materno']."</td>";
                echo "<td>
                        <a><button>Eliminar</button></a>
                        <a><button>Actualizar</button></a>
                       </td>";
                echo "</tr>";
            }
        ?>
        </tbody>
    </table>
</div>

<?php
include 'layouts/footer.php';
?>
