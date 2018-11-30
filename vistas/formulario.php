<?php include ('layouts/head.php');?>
<div class="container">
    <h1>Este es un formulario</h1>
    <form action="datos_del_formulario.php?variable1=valor1" method="post" >
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="user">Usuario:</label>
                <input type="text" class="form-control" name="user" id="user" placeholder="usuario">
            </div>
            <div class="form-group col-md-6">
                <label for="email">e-mail:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="e-mail">
            </div>
            <div class="form-group col-md-6">
                <label for="pass">Contraseña:</label>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" value="contrseña" hidden>
            </div>
            <div class="form-group col-md-6">
                <label for="carro">Carro:</label>
                <select class="form-control" name="cars" id="carro">
                    <option value="">selecciona un carro...</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                </select><br>
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="Guardar">
        <input type="reset" class="btn btn-secondary" value="Borrar">
    </form>
</div>
<?php
include ('layouts/footer.php')
?>