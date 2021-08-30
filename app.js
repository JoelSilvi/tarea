const d = document;
const btnInsertar = d.getElementById("insertar");

const mensaje = (codigo, nombre, rut, edad, email) => {
  codigo = d.getElementById("cod").value;
  nombre = d.getElementById("name").value;
  rut = d.getElementById("rut").value;
  edad = d.getElementById("edad").value;
  email = d.getElementById("email").value;
  if (codigo.length < 1) {
    alert("código no puede estar vacío");
  } else if (codigo == 0) {
    alert("el código no puede ser cero");
  } else if (nombre.length < 3) {
    alert("nombre por lo menos debe contener 3 caracteres");
  } else if (rut.length < 8) {
    alert("el rut por lo menos debe tener 8 caracteres");
  } else if (edad === "") {
    alert("la edad no puede estar vacía");
  } else if (email.length < 7) {
    alert("el email no puede contener menos de 7 caracteres");
  } else if (!email.includes("@")) {
    alert("el correo debe contener arroba");
  } else if (!email.includes(".")) {
    alert("el correo debe contener punto");
  }
};
btnInsertar.addEventListener("click", mensaje, true);
