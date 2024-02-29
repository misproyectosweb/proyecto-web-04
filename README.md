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
![02  quienessomos_1](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/3ceb46b3-9f3c-40cd-8cc8-cb28395172cb)
**==========================================================================**
![02  quienessomos_2](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/2ac887c1-a16a-48b2-820e-b10526e49440)
**==========================================================================**
![02  quienessomos_3](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/328aad17-3f1d-40a9-8600-bd1f920be3fa)
**==========================================================================**
![02  quienessomos_4](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/85d97702-7acc-4108-a65f-e23b03bd86b7)
**==========================================================================**
![02  quienessomos_5](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/b5ab68c1-ed70-4ade-be28-f8951363dc9e)
**==========================================================================**
![02  quienessomos_6](https://github.com/misproyectosweb/proyecto-web-04/assets/98922137/2e4c2713-9694-48e8-a6b0-011017946dce)
**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**

**==========================================================================**













