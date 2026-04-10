Herencia y reutilización de código en PHP
Implementar herencia mediante la extensión de clases en PHP, reutilizando atributos y métodos de una clase base.
En esta práctica se utilizó la clase Usuario como clase base.  
Posteriormente se creó la clase Admin que extiende a Usuario utilizando la palabra clave extends.
Esto permite reutilizar los atributos y métodos de la clase Usuario sin tener que volver a escribir el mismo código.

Usuario:
Tiene los atributos nombre y correo.
Incluye métodos getters y setters.

Admin:
Hereda todos los atributos y métodos de Usuario.
Añade el método getRol() que devuelve Administrador.

Iniciar Apache en XAMPP.
Colocar la carpeta del proyecto dentro de htdocs.
Abrir el navegador y entrar a:

http://localhost/desarrollo-web-avanzado-fimaz-uas/parcial-1-poo/practica-2/

Se mostrará el nombre, correo y rol del administrador.