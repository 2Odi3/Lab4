function validarForm() {
    
    var noap = document.getElementById("noap").value;
    var dire = document.getElementById("dire").value;
    var ema = document.getElementById("ema").value;
    var eda = document.getElementById("eda").value;

    if (noap == "" || dire == "" || ema == "" || eda == "") {
        alert("Todos los campos son obligatorios");
        return false;
    }

    // Validar que la edad sea mayor o igual a 18
    if (eda < 18) {
        alert("Solo se admiten usuarios mayores de edad");
        return false;
    }

    return true;
}

function limpiar() {
    // Limpiar el formulario
    document.getElementById("noap").value = "";
    document.getElementById("dire").value = "";
    document.getElementById("ema").value = "";
    document.getElementById("eda").value = "";

    return false;
}