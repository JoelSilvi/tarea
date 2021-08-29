const btnInsertar = document.getElementById("insertar");
const d = document;

const mensaje = (codigo, nombre, rut, edad, email) => {
  codigo = d.getElementById("cod").value;
  nombre = d.getElementById("name").value;
  rut = d.getElementById("rut").value;
  edad = d.getElementById("edad").value;
  email = d.getElementById("email").value;
  if (codigo === "") {
    alert("el código no puede estar vacio");
  } else if (codigo == 0) {
    alert("el código no puede ser cero");
  } else if (nombre === "") {
    alert("el nombre no puede estar vacío");
  } else if (rut === "") {
    alert("el rut no puede estar vacío");
  } else if (edad === "") {
    alert("la edad no puede estar vacía");
  } else {
    alert("el email no puede estar vacío");
  }
};
btnInsertar.addEventListener("click", mensaje, true);
