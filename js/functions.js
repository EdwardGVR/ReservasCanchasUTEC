let formDetallesReserva = document.getElementById("detallesReserva"),
    botonEliminar = document.getElementById("borrarReserva"),
    horaInicio = document.getElementById("horaInicio"),
    horaFin = document.getElementById("horaFin");

let password = document.getElementById("pass"),
    confirmPassword = document.getElementById("confirmPass"),
    guardarBtn = document.getElementById("guardarBtn"); 

botonEliminar.addEventListener('click', (e) => {
    // formDetallesReserva.preventDefault();
    if (confirm('¿Realmente desea continuar?')){
        document.formDetallesReserva.submit()
    } else {
        e.preventDefault();
    }
});

if (horaInicio != null) {
    horaInicio.addEventListener('change', (e) => {
        let inicioValue = e.target.value;
    
        document.querySelector("select[name=\"horaFin\"]").value = "0";
    
        for (let i = 1; i <= 14; i++) {
            let option = document.querySelector("select[name=\"horaFin\"] option[value=\"" + i + "\"]");
            option.removeAttribute("disabled");
        }
    
        horaFin.removeAttribute("disabled");
        
        for (let i = 1; i <= inicioValue; i++) {
            let option = document.querySelector("select[name=\"horaFin\"] option[value=\"" + i + "\"]");
            option.setAttribute("disabled", "true");
        }
    });
}

if (password != null) {
    confirmPassword.addEventListener("keyup", () => {
        let passValue = password.value;
        let confirmPasswordValue = confirmPassword.value;

        if (passValue == confirmPasswordValue) {
            guardarBtn.removeAttribute("disabled");
        } else {
            guardarBtn.setAttribute("disabled", "true");
        }
    });
}