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

![1  inicio_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/1f677e8f-42ea-4356-9bba-62d064eb8b0c)
**==========================================================================**
![1  inicio_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/21c8093a-8047-47a8-b3f8-78a18b84b68b)
**==========================================================================**
![1  inicio_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/291fe74f-8742-42e6-932a-70b847105909)
**==========================================================================**
![1  inicio_4](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/9de9a059-df18-4689-be51-2117647e6624)
**==========================================================================**
![1  inicio_5](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/89461845-61ff-48d3-9a75-3ef9c52f718a)
**==========================================================================**
![1  inicio_6](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/b8ae5df9-ae9d-4e85-8076-401eaa97ba14)
**==========================================================================**
![02  quienessomos_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/fac942ea-3d8c-4791-98b2-aaefff116e29)
**==========================================================================**
![02  quienessomos_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/7ab6154b-1c52-4fdb-8af6-f0d92ff8be59)
**==========================================================================**
![02  quienessomos_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/328aad17-3f1d-40a9-8600-bd1f920be3fa)
**==========================================================================**
![02  quienessomos_4](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/85d97702-7acc-4108-a65f-e23b03bd86b7)
**==========================================================================**
![02  quienessomos_5](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/b5ab68c1-ed70-4ade-be28-f8951363dc9e)
**==========================================================================**
![02  quienessomos_6](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/2e4c2713-9694-48e8-a6b0-011017946dce)
**==========================================================================**
![02  quienessomos_7](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/d3ef7bed-6ce4-4ea9-890f-dd8335f6eb31)
**==========================================================================**
![03  Reflexión_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/531cd9fb-e558-4ae9-bd83-9d81c4fa47fd)
**==========================================================================**
![03  Reflexión_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/1394d5c0-b64a-4767-b8c1-0a4aa9e5ff13)
**==========================================================================**
![03  Reflexión_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/c397b2fa-405c-4051-a0e3-6ed5a6a26471)
**==========================================================================**
![03  Reflexión_4](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/41e60d8b-4ca9-4e90-98a2-46db77d14021)
**==========================================================================**
![04  Noticias_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/0822cb45-6177-4154-9e2d-593ba6fa0dd8)
**==========================================================================**
![04  Noticias_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/88ecc143-836d-441a-8c6b-7be9c5d7a809)
**==========================================================================**
![04  Noticias_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/b5ff3033-11a4-424e-ae3f-9fa517c2a255)
**==========================================================================**
![05  Actividades_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/0b18ef9e-19fa-4452-910b-b5bb626c26c4)
**==========================================================================**
![05  Actividades_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/02c44907-8768-43c4-ab58-eae624352078)
**==========================================================================**
![05  Actividades_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/bcc8fa38-9fbc-426e-8fc6-aa82e5111803)
**==========================================================================**
![05  Actividades_4](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/d535b188-ec62-436d-820e-63fc5991bf14)
**==========================================================================**
![6  contacto_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/d31c73e8-2381-4cc0-94bf-db7fa639aaea)
**==========================================================================**
![6  contacto_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/4a9b9094-019f-47d1-8177-137d4e37263e)
**==========================================================================**
![6  contacto_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/2af91757-7d44-493d-8339-f829f64720d4)
**==========================================================================**
![6  contacto_4](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/540e7430-e558-4500-9563-e358f6640be3)
**==========================================================================**
![6  contacto_5](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/73c9b264-788f-4954-9653-42a9028a0bdd)
**==========================================================================**
![6  contacto_6](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/47f64227-903c-46ec-90eb-24c65be5f51b)
**==========================================================================**
![6  Contacto_7](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/c976a43e-57a5-4bb5-a3b6-e097eb364d5b)
**==========================================================================**
![6  Contacto_8](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/ae1ad482-79a7-442f-9ab7-aebb6662fee7)
**==========================================================================**
![6  Contacto_9](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/6bb9b1e4-78c8-4743-ad7e-3ae82c786503)
**==========================================================================**
