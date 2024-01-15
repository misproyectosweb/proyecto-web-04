# Proyecto web 04
Sitio web que muestra y describe la información de los servicios que ofrece una iglesia

Sitio web creado con las siguientes herramientas a nivel de front-end y back-end:

- **HTML:** 	Permite crear la estructura del sitio web mediante etiquetas
- **CSS:** 	Para definir y crear la presentación o estética del sitio web
- **Bootstrap:**	Herramienta utilizada para complementar las hojas de estilo CSS y personalizar la apariencia del sitio
- **JavaScript:** 	Añade características que permite agregar e implementar acciones interactivas al sitio web
- **PHP:** 	Favorece la conexión entre el servidor, base de datos con la interfaz de usuario del sitio web
- **PHP** Mailer:	Es una clase que trata de facilitar la funcionalidades asociadas a los envíos y manejos de emails
- **SweetAlert2:**	Es una forma personalizada de mostrar alertas en un sitio web
- **MySQL:**	Gestor de bases de datos para almacenar los datos del usuario después de completar el formulario

Este sitio web fue creado y desarrollado usando la plataforma **NetBeans 12.0.** Además está adaptado para ejecutarse en dispositivos móviles. El archivo **index.php** es el que contiene la página de inicio o página principal del sitio web.

La página de inicio o principal consta de tres secciones: 

1.	Un encabezado: donde se muestra el logotipo de la organización
2.	Una sección principal: integra los contenidos más relevantes de presentación de la organización. En esta sección viene incluido el menú principal del sitio web
3.	Un pie de página: muestra la información de contacto de la organización

El menú principal consta de cuatro opciones: 

1.	Quienes somos: muestra la información que define la identidad de la organización. Integra un submenú con seis opciones adicionales, las cuales describen aspectos tales como la visión, la misión, los valores, entre otros.
2.	Reflexiones: página dedicada a publicar artículos, noticias, mensajes y/o reflexiones con contenido bíblico
3.	Noticias: muestra una serie de artículos relacionados con acontecimientos del mundo cristiano actual tanto a nivel nacional como internacional 
4.	Actividades: muestra las actividades que va a realizar la organización durante el mes en curso; así como las que se van a realizar en fechas posteriores 
5.	Contáctenos: consta de varias secciones, entre ellas, un formulario de contacto para que la persona pueda ponerse en contacto con la organización.

En el sitio web se han creado dos archivos de contacto **(contacto_1.php y contacto_2.php).** Ambos contienen un formulario de contacto y los datos que el usuario ingrese en estos se almacenan de dos formas diferentes: en el archivo **contacto_1** la información se envía a un buzón de correo electrónico y en el archivo **contacto_2** la información se envía a una base de datos creada en **MySQL Server.**

En contacto_1 los datos se envían utilizando una herramienta llamada **PHPMailer.** Esta es una clase o extensión de PHP de código abierto para enviar correos electrónicos de forma segura y sencilla a través de código PHP desde un servidor web. Además está basada en el componente active server ASPMail y permite de una forma sencilla tareas complejas como por ejemplo:

-	Enviar mensajes de correo con ficheros adjuntos (attachments) 
-	Enviar mensajes de correo en formato HTML 
-	Enviar emails vía sendmail, PHP mail(), o con SMTP.

Además, se ha implementado una librería JavaScript llamada **SweetAlert2** para mostrar al usuario mensajes personalizados que le van a indicar si los datos digitados por el cliente fueron enviados al buzón de correo de manera correcta o incorrecta.

En contacto_2 los datos se envían utilizando la extensión **PHP Data Objects (PDO).** Esta define una interfaz ligera y consistente para acceder a bases de datos en PHP, lo que significa que, independientemente de la base de datos que se esté utilizando, se emplean las mismas funciones para realizar consultas y obtener datos con un controlador específico.

Entre otras características que permite llevar a cabo esta interfaz podemos mencionar:

-	Se encarga de mantener la conexión a la base de datos y otro tipo de conexiones específicas como transacciones
-	Crea instancias de la clase PDOStatement, la cual maneja las sentencias SQL y devuelve los resultados. 
-	La clase PDOException se utiliza para manejar los errores.

Además, se ha implementado un mensaje de aviso personalizado para mostrar al usuario si su solicitud fue enviada con éxito o, por el contrario, tuvo un inconveniente y no se pudo enviar.

Para ambos formularios se programaron validaciones tanto del lado del cliente, implementando mensajes personalizados con clases integradas en Bootstrap, los cuales brindan acceso a las API de validación de formularios en JavaScript como validaciones del lado del servidor programadas con el lenguaje de programación PHP.

A continuación se presentan algunas imágenes del sitio web brevemente descrito anteriormente:

![1  inicio_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/5a4b4167-6132-4beb-8c1d-90cc031a8d58)
**====================================================================================**
![1  inicio_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/fb6123d8-8844-442c-9110-db5abb4782b9)
**==========================================================================**
![1  inicio_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/df23a7f4-cbe2-4ce8-a615-68771fff43e3)
**==========================================================================**
![1  inicio_4](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/9f873f6f-b344-4192-a766-e27c9c54c20d)
**==========================================================================**
![1  inicio_5](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/8bf7a642-3e62-467a-be80-9c99fca17ac5)
**==========================================================================**
![1  inicio_6](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/0a7fed79-62fb-4ae7-a10a-42a0ecc16a02)
**==========================================================================**
![2  quienessomos_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/a1f9d182-d2ad-4cd1-b748-f73ec8e8345d)
**==========================================================================**
![2  quienessomos_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/8493f172-2382-486f-b8a3-8548c1bbe933)
**==========================================================================**
![2  quienessomos_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/ce32336e-5d74-4f5b-af23-4edd70ca2f91)
**==========================================================================**
![2  quienessomos_4](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/8554123a-c22e-40d4-a745-5eb8233210e1)
**==========================================================================**
![2  quienessomos_5](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/e9baded0-ad17-4caa-9350-06893b46ec02)
**==========================================================================**
![2  quienessomos_6](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/30596312-f598-4caa-91db-89d9e9debb9f)
**==========================================================================**
![2  quienessomos_7](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/3c486ab1-e339-4168-8dec-07a62b6f998c)
**==========================================================================**
![3  reflexiones_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/894ca39c-9039-4a85-a4a7-9646617bda0c)
**==========================================================================**
![3  reflexiones_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/96678150-886f-4930-9bbe-a8d7c06b94cb)
**==========================================================================**
![3  reflexiones_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/44392784-18e3-4915-bdd2-5f1ad6f4c859)
**==========================================================================**
![4  noticias_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/b52069bc-955b-4708-8fbc-71f78f832b1b)
**==========================================================================**
![4  noticias_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/77b4375a-9374-4336-a71a-3df5169144b8)
**==========================================================================**
![4  noticias_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/d676645a-8078-4823-b138-d584dbadea9f)
**==========================================================================**
![4  noticias_4](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/f90da261-7578-46fb-a1fd-1058b681ae1a)
**==========================================================================**
![5  actividades_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/f1798a3c-5d91-4eda-976e-0dc88db51da4)
**==========================================================================**
![5  actividades_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/8c500e13-2fab-4b14-9360-673d0b87af7e)
**==========================================================================**
![5  actividades_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/8a3d2b9d-a109-4bc6-a52d-49dc5b1f1c75)
**==========================================================================**
![6  contacto_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/fde8f80d-efb8-45d0-8f56-0fc4929b196c)
**==========================================================================**
![6  contacto_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/a98eff68-7040-4410-a759-d26844680ea3)
**==========================================================================**
![6  contacto_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/101bc19c-53c3-4755-8e1f-764ea7a3708d)
**==========================================================================**
![6  contacto_4](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/7b914597-ade5-4cde-adaf-fb1d7ba68daa)
**==========================================================================**
![6  contacto_5](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/f5586670-b783-407c-ad34-7e7e2e46aaa1)
**==========================================================================**
![6  contacto_6](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/bac733ad-2bd5-45c5-9b4f-d0e79ff3f55f)
**==========================================================================**
![6  contacto_7](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/6d3a5210-0bd8-48a2-97ff-ca60ab0708ab)
**==========================================================================**
![6  contacto_8](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/d6a23c23-034e-428b-a5cc-cae833eab4b0)
**==========================================================================**
![6  Contacto_9](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/e82e2ab6-1f06-486b-a79d-1347416263a8)
**==========================================================================**
![6  Contacto_10](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/53a19ce3-189c-4939-b4a9-cc0edcf8de28)
**==========================================================================**
![6  Contacto_11](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/ca269daf-7961-413c-947b-fa8e006d52f6)
