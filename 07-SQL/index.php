<?php

//SQL Select
// SELECT nombre FROM profesores;
// Al colocar nombre aparece una columna con los nombres de los profesores

//SQL Select Distinc
// SELECT DISTINCT ID FROM profesores;
// Colocando el valor ID  aparece la columna con los ID de los profesores

//SQL Where
// SELECT * FROM profesores WHERE Materia='Sociales';
//Poniendo el valor materia aparece la columna del profesor de sociales 

//SQL Orden By
//SELECT * FROM profesores ORDER BY Edad;
//Al colocar edad las columnas se ordenan de menor a mayor 

//SQL And
//SELECT * FROM estudiantes WHERE Grado = '10' AND nombre LIKE 'S%';
//Si se coloca el valor grado '10' sale la información de ese estudiante, ya que también se puso la inicial de su nombre, la cual es S

//SQL Or
//SELECT * FROM `estudiantes` WHERE `Media técnica` = 'Sistemas' OR `Nombre` = 'Simon';
//Al poner el valor media técnica 'sistemas' aparecen los estudiantes que están en esta media técnica y si ponemos el valor nombre 'simón' aparece este estudiante si o si porque es el único que se llmaa así en la columna

//SQL Not
//SELECT * FROM estudiantes WHERE NOT Grado = '11';
//Ponemos el valor grado '11' y filtra los estudiantes que no son de grado 11

//SQL Insert Into
//INSERT INTO `estudiantes`(`ID`, `Nombre`, `Edad`, `Grado`, `Media técnica`, `Documento`) VALUES ('7','Aleison','19','11','Software','241914');
//Al insertar nuevos valores se crea una nueva columna en la información de los estudiantes

//SQL Null Values
//SELECT Edad FROM profesores WHERE Edad IS NOT NULL;
//Selecciona sólo los valores que no son anulados, en este caso, la edad

//SQL Update
//UPDATE `profesores` SET `Edad` = '50' WHERE `ID` = 3;
//Se encarga de actualizar los datos que ya están en la tabla

//SQL Delete
//DELETE FROM `profesores` WHERE `Nombre`='Juan';}
//Se encarga de eliminar los datos seleccionados de la tabla

?>