<?php
$nombreDeUsuario = "admin";
$contraseniaDeUsuario = "1234";

if ($nombreDeUsuario == "admin" && $contraseniaDeUsuario == "1234"){
	echo "Bienvenido!";
}
else {
	echo "error en el login";
}

$persona=[
	"Nombre" => "Jon",
	"Apellido" => "Snow",
	"Edad" => "27",
	"Hobbies" => ["Netflix",
				  "futbol",
				  "programar"]
	];


$num = rand (1,5);
if ($num == 3 || $num == 5) {
echo $num;
}

/*Ejercicio 6
*/

$edad = 22;
$casado = False;
$sexo = "Femenino";
if ($sexo != "Masculino" || $sexo != "Femenino" || $sexo != "Otro") {
 echo "El valor ingresado es inválido";
}
if ($edad >= 18 && $casado == False) {
 echo "Bienvenido!";
}


/*Ejercicio 7
*/

$cantidadDeAlumnos = 0;

if ($cantidadDeAlumnos) {
	echo "true";
}
else {
	echo "false";
}


$numero
