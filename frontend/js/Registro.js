document.getElementById("formRegistro").addEventListener("submit", function (e) {
    e.preventDefault();


    const nombre = document.getElementById("nombre").value;
    const correo = document.getElementById("correo").value;
    const contraseña = document.getElementById("contraseña").value;
    let Contraseña = document.getElementById("Contraseña").value;


    if (contraseña === Contraseña) {
        console.log("Nombre", nombre);
        console.log("Coerro", correo);
        console.log("contraseña", contraseña);
        alert("Usuario registrado")

    } else {
        alert("Contraseña es incorrecta")
    } 
});

