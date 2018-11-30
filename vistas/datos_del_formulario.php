<?php
$user = "no hay usuario";
if ($_POST["user"]){
    $user = (int) $_POST["user"];
}
$email = $_POST["email"];
$pass = $_POST["pass"];
$cars = $_POST["cars"];
$variableGet = $_GET["variable1"];
if ($pass != "contrseña"){
    $pass = "moviste el valor de la contraseña";
}

function nombre(){

}

include ('layouts/head.php');
?>
<div class="container">
    <label>Usuario: <?php echo $user; ?></label><br>
    <label>E-mail: <?php echo $email; ?></label><br>
    <label>Contraseña: <?php echo $pass; ?></label><br>
    <label>Carros: <?php echo $cars; ?></label><br>
    <label>Get: <?php echo $variableGet; ?></label><br>
</div>
<?php
include ('layouts/footer.php')
?>