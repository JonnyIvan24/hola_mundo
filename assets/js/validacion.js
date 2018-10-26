function validacion() {
    var user = document.getElementById("user").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var carro = document.getElementById("carro").value;

    if( user == null || user.length == 0 || /^\s+$/.test(user) ) {  //isNaN(user) que sea solo numeros
        alert('[ERROR] El campo user debe tener un valor de...');
        return false;
    }else if ( email == null || email.length == 0 || /^\s+$/.test(email) ) {  //isNaN(user) que sea solo numeros
        alert('[ERROR] El campo em debe tener un valor de...');
        return false;
    }

    return true;
}
