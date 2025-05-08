# Proyecto web 04: iglesia cristiana

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

![1  inicio_01](https://github.com/user-attachments/assets/76f375d7-7015-4093-97b7-41e3b62d4caa)
**==========================================================================**
![1  inicio_02](https://github.com/user-attachments/assets/87269a2c-d1a1-45da-86b0-600cac730043)
**==========================================================================**
![1  inicio_03](https://github.com/user-attachments/assets/d4fa92e3-6ac1-45b9-bb54-35bb1d85ac92)
**==========================================================================**
![1  inicio_04](https://github.com/user-attachments/assets/6323420d-3344-418d-a6d0-2ef169fd0b4f)
**==========================================================================**
![1  inicio_05](https://github.com/user-attachments/assets/5b4c3d30-efdd-407a-939c-9fd52ffde890)
**==========================================================================**
![1  inicio_06](https://github.com/user-attachments/assets/92194c39-9f47-4cd4-be41-ddd04845fbf2)
**==========================================================================**
![02  quienessomos_1](https://github.com/user-attachments/assets/404e7889-e0a5-4760-9e6f-0714c771763e)
**==========================================================================**
![02  quienessomos_2](https://github.com/user-attachments/assets/cc898253-5cdf-41d9-b920-ccee58a97108)
**==========================================================================**
![02  quienessomos_3](https://github.com/user-attachments/assets/b692b67b-ca57-471f-8e02-769f28cde2cd)
**==========================================================================**
![02  quienessomos_4](https://github.com/user-attachments/assets/57f71012-7c6e-41a7-b39d-d9073509f608)
**==========================================================================**
![02  quienessomos_5](https://github.com/user-attachments/assets/401226dc-1227-4f9d-91c7-db3fe14d8fc8)
**==========================================================================**
![02  quienessomos_6](https://github.com/user-attachments/assets/faca5024-d33b-4ca2-9b29-ceeaca1284e7)
**==========================================================================**
![02  quienessomos_7](https://github.com/user-attachments/assets/8bbb021f-a4ca-41c7-8c10-596f05f0222c)
**==========================================================================**
![03  Reflexión_1](https://github.com/user-attachments/assets/b984b80d-bbcb-4e58-ab6a-5f01e3211160)
**==========================================================================**
![03  Reflexión_2](https://github.com/user-attachments/assets/f376bf71-c502-4546-ba9c-09dc98b6d999)
**==========================================================================**
![03  Reflexión_3](https://github.com/user-attachments/assets/603e285f-7f60-49f7-a250-417aa3ca291f)
**==========================================================================**
![03  Reflexión_4](https://github.com/user-attachments/assets/ac763e2a-cd6c-4a0b-ad4d-6eb955e3a306)
**==========================================================================**
![04  Noticias_1](https://github.com/user-attachments/assets/b8ffd2ef-bf6a-4595-805e-4f7169390f1e)
**==========================================================================**
![04  Noticias_2](https://github.com/user-attachments/assets/d6d5299f-94d1-4bb6-9cb5-8a42ca21fca4)
**==========================================================================**
![04  Noticias_3](https://github.com/user-attachments/assets/169c26d1-926c-46ac-bd85-d5b95fc26480)
**==========================================================================**
![05  Actividades_1](https://github.com/user-attachments/assets/5b1b7348-5853-47ec-9aeb-da3d16f84153)
**==========================================================================**
![05  Actividades_2](https://github.com/user-attachments/assets/8c89d5cb-5f30-4a2f-995f-c367b76eeb3d)
**==========================================================================**
![05  Actividades_3](https://github.com/user-attachments/assets/ec1391bc-6179-48aa-ad06-2505290702c4)
**==========================================================================**
![05  Actividades_4](https://github.com/user-attachments/assets/69112fad-e699-4da3-b738-04a2e1e360bd)
**==========================================================================**
![6  contacto_1](https://github.com/user-attachments/assets/f1b5293a-a8e1-4a27-8a78-3f84e1ab14a5)
**==========================================================================**
![6  contacto_2](https://github.com/user-attachments/assets/3b301ebb-1812-444b-af72-299654e6b0a1)
**==========================================================================**
![6  contacto_3](https://github.com/user-attachments/assets/a96537b0-1912-4a2b-a6e0-d989792138ed)
**==========================================================================**
![6  contacto_4](https://github.com/user-attachments/assets/27852c34-0720-4e2f-b3ae-3574a928f4db)
**==========================================================================**
![6  contacto_5](https://github.com/user-attachments/assets/18245f4d-f4ac-48ad-994f-79764c35c818)
**==========================================================================**
![6  contacto_6](https://github.com/user-attachments/assets/224e4282-24b0-463a-bd14-67641a00fc20)
**==========================================================================**
![6  Contacto_9](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/e82e2ab6-1f06-486b-a79d-1347416263a8)
**==========================================================================**
![6  Contacto_10](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/53a19ce3-189c-4939-b4a9-cc0edcf8de28)
**==========================================================================**
![6  Contacto_11](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/ca269daf-7961-413c-947b-fa8e006d52f6)
