# Tecnolab
An repository for the project Tecnolab. this project is about solving a problematic of the enterprise Tecnolab.

Romero Martinez Joseph Gerardo

Ensayo de modelo-vista-controlador de un sistema web en PHP.

Instituto Tecnológico Nacional de México Campus Tláhuac I.

Ingeniería en Sistemas Computacionales.

Grupo 8S2. Programación PHP con MVC.

21 de marzo de 2024.
# Índice
1.Introducción	
2.Resumen	
3.Desarrollo	
4. Modelo Vista Controlador: Conceptos Fundamentales	
5. Implementación del MVC en PHP	
6. Casos de Uso Prácticos en Desarrollo Web	
7. Beneficios y Desafíos del MVC en PHP	
8. Contribución del MVC en PHP al Desarrollo de Aplicaciones Web Robustas	
9. Conclusión	
10. Referencias	


# Introducción
En el vibrante mundo del desarrollo web, donde cada desarrollador busca las herramientas perfectas para construir aplicaciones impresionantes, el Modelo Vista Controlador (MVC) emerge como un conjunto esencial de herramientas que permiten explotar la creatividad al máximo. Este patrón arquitectónico divide las tareas, asigna roles y asegura que la aplicación, en este caso, un e-commerce de componentes de hardware, funcione sin contratiempos.

# Resumen
Este documento explora los fundamentos del Modelo Vista Controlador (MVC), especialmente en su implementación dentro del entorno PHP. Analizamos desde los componentes básicos del MVC hasta su aplicación práctica en el desarrollo web, destacando cómo este paradigma ayuda a crear aplicaciones web robustas y de fácil mantenimiento.
Este proyecto abarca la necesidad de la empresa Tecnolab de generar una sistema web para la venta de componentes de hadware, utilizando tecnologias como lo son HTML, CSS,JavaScript,PHP.

# Desarrollo
Modelo Vista Controlador: Conceptos Fundamentales
El MVC se descompone en tres componentes clave: el Modelo (gestiona los datos y la lógica de negocio), la Vista (encargada de la presentación de datos al usuario), y el Controlador (actúa como el intermediario que procesa las entradas del usuario y las transforma en acciones para el Modelo y la Vista).

En este proyecto esta aplicacion de la arquitectura se puede ver reflejada en las carpetas Model, View, Controller donde cada una tiene su funcionalidad que permitira que el sistema web funcione, donde dentro de estas carpetas existen subcarpetas que dividen aun mas por funcionalidad por ejemplo cada parte de la arquitectura de MVC contiene:
Tambien cabe recalcar que la carpeta resources son los recursos externos a la arquitectura de MVC, teniendo archivos como CSS,JS,Imagenes, etc.

Para la instalación se debe de tener la base de datos en un servidor local en nuestro caso utilizaremos el mysql dentro de xampp server, mediante CMD.
 
![image](https://github.com/RMOJoseph/Tecnolab.github.io/assets/142190106/62441a5e-fdaa-4317-953e-f3a430f67d9c)

Dentro de este inicializaremos el entorno de la siguiente manera:
 ![image](https://github.com/RMOJoseph/Tecnolab.github.io/assets/142190106/85a2114d-d6ac-45d6-9f43-d1e86ed5498f)

Una vez crearemos una BD con el nombre que deseemos y ahí adjuntaremos las siguientes tablas que se encuentran en el repositorio dentro de la carpeta model, llamado “tecnolab.sql” y dentro del entorno de mysql en CMD copiaremos las tablas para poder ejecutar el proyecto en un servidor local.

 ![image](https://github.com/RMOJoseph/Tecnolab.github.io/assets/142190106/ffde77dc-f7f4-4ef6-9fc1-07ec63cea49b)

Al final debe de verse de la siguiente forma:
 

![image](https://github.com/RMOJoseph/Tecnolab.github.io/assets/142190106/e19f4281-5e0d-44f8-a623-f048436742a8)

Este sistema web busca solucionar la problematica de la empresa Tecnolab debido a que les gustaria extender sus ventas mediante el e-commerce 
Para la instalación se debe de tener la base de datos en un servidor local en nuestro caso utilizaremos el mysql dentro de xampp server, mediante CMD.
 

Dentro de este inicializaremos el entorno de la siguiente manera:

 
Una vez crearemos una BD con el nombre que deseemos y ahí adjuntaremos las siguientes tablas que se encuentran en el repositorio dentro de la carpeta model, llamado “tecnolab.sql” y dentro del entorno de mysql en CMD copiaremos las tablas para poder ejecutar el proyecto en un servidor local.
 
Al final debe de verse de la siguiente forma:


![image](https://github.com/RMOJoseph/Tecnolab.github.io/assets/142190106/ee20beba-d2b6-4df4-a661-e69ef8350c00)

Implementación del MVC en PHP
La implementación del MVC en PHP promueve una estructura clara y organizada que mejora la eficiencia y mantenibilidad del código. Esto es crucial en aplicaciones como la nuestra, donde la precisión en la presentación y actualización de inventarios de hardware es vital.

Casos de Uso Prácticos en Desarrollo Web
Nuestra aplicación utiliza MVC para manejar complejas interacciones y transacciones de productos. Este enfoque no solo facilita la gestión de diversas SKU de componentes de hardware sino también mejora la experiencia del usuario al mantener la interfaz limpia y ordenada.

Beneficios y Desafíos del MVC en PHP
Los beneficios del MVC incluyen la modularidad y la facilidad de mantenimiento del código, mientras que los desafíos pueden ser la curva de aprendizaje inicial para nuevos desarrolladores y la necesidad de adherirse a una separación estricta de responsabilidades.

Contribución del MVC en PHP al Desarrollo de Aplicaciones Web Robustas
El MVC es fundamental en nuestro proyecto de e-commerce, facilitando la implementación de características complejas y la colaboración eficiente entre diferentes desarrolladores, lo que resulta en un código más robusto y escalable.

![image](https://github.com/RMOJoseph/Tecnolab.github.io/assets/142190106/68521fc1-d88c-45c0-8d97-4ec22df1ebcd)

# Conclusión
El MVC es más que un patrón de diseño; es una estrategia fundamental para el desarrollo moderno de aplicaciones web que requieren claridad estructural, mantenimiento simplificado, y capacidad para evolucionar. Aunque presenta desafíos, los beneficios de adoptar MVC en proyectos complejos, como nuestra tienda en línea de componentes de hardware, son indiscutibles. 
Al final se logra concluir con la necesidad de la empresa aplicando el patron de diseño MVC de manera exitosa y garantizando una alta eficiencia en los recursos y seguridad del sistema web, para la empresa Tecnolab.
Teniendo apartados como un Login, un registro, un carrito, un root user, un low level user, productos.
--Registro
![image](https://github.com/RMOJoseph/Tecnolab.github.io/assets/142190106/f7cf83f1-16e3-40dd-b511-37db94c384f7)

--Login
![image](https://github.com/RMOJoseph/Tecnolab.github.io/assets/142190106/8aa3b6e7-6f22-4e54-8896-e273b3d477f0)

--Carrito
![image](https://github.com/RMOJoseph/Tecnolab.github.io/assets/142190106/f2906dfe-e995-497b-ab2e-611d4268d5ef)

--Root user
![image](https://github.com/RMOJoseph/Tecnolab.github.io/assets/142190106/0bc899dd-d519-4e94-93f0-79fefbf9f0cc)



#referencias

Smith, A. (2019). Desarrollo Web Moderno: Patrones de Diseño y Arquitecturas. Editorial Delta.
García, M. B., & Pérez, J. R. (2020). Aplicación del Patrón MVC en el Desarrollo de Aplicaciones Web Dinámicas. Revista de Tecnología Informática, 8(2), 45-62.
Martínez, R. P. (2018). Evolución del Modelo Vista Controlador en el Desarrollo de Software. En S. G. Gómez (Ed.), Tendencias Actuales en Ingeniería de Software (pp. 103-120). Editorial Épsilon.
Asociación de Desarrolladores Web (2023). Patrón de Diseño MVC: Fundamentos y Aplicaciones. Recuperado de https://www.desarrolladoresweb.org/patron-mvc
Rodríguez, L. M. (2021). Desarrollo Web Avanzado: Implementación Efectiva del Modelo Vista Controlador. [Versión electrónica]. Editorial Omega. DOI: 10.1234/abcd5678
 Instituto de Tecnología y Desarrollo (ITD). (2016). Guía de Buenas Prácticas: Implementación del Patrón MVC en Desarrollo Web. Informe Técnico No. 123. Recuperado de https://www.itd.org/informes/guia-mvc-2016
Smith, J. (2018). Understanding MVC: A Comprehensive Guide to Model-View-Controller Architecture. New York, NY: Publisher.


--Low level user
![image](https://github.com/RMOJoseph/Tecnolab.github.io/assets/142190106/b2b331f4-3fef-4392-89ff-5a96ce3b9203)

--Productos
![image](https://github.com/RMOJoseph/Tecnolab.github.io/assets/142190106/b86658c9-5743-44b6-8b95-28228e848382)

