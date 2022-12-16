function checkFields(){

    var nome = document.getElementById("nome").value;
    var cognome = document.getElementById("cognome").value;
    var email = document.getElementById("email").value;

    if (nome === "" ){
        document.getElementById("submit").disabled=true;
        return;
    }
    if (cognome === ""){
        document.getElementById("submit").disabled=true;
        return;
    }
    if (email === ""){
        document.getElementById("submit").disabled=true;
        return;
    }

    document.getElementById("submit").disabled=false;

}