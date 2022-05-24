# HOSPISOFT V1

El favicon se puede descargar cualquier icono en formato .ico

# AVANCE MAYO 14 2022

1. Organizar el menú del panel con usuario activo
2. implementar el sistema de mensajes de la app (Vaiables de sesión) validacion de datos del lado del servidor
3. Registro y encriptación del paciente (Algoritmos de Hashing)
4. Login del paciente
5. proteccion del directorio de la aplicacion
6. historias de usuarios (Territorium)-- SCRUM

# validacion php

trim() // limpia espacios en blannco all inicio y al final
filter_var() con los filtros
https:/www.php.net/manual/es/filter.filters.sanitize.php

# tipos de errores

notice = advertencia de posible error
warning = Error no tan grave, no rompe la ejecucion del script
error = fatales. paran el script (tumban el sistema)

# variables se session

debido a que el protocolo http es sin estado (stateless) no guarda las variables entre diferentes programas es nesesario crear variables de session ; estas se crean como un arreglo dentro del navegador para poderlas usar mientras el uso del navegdor este activo (sesion)
en php las defino con session_estar();.... $\_SESSION['NOMBRE VARIABLE']
le puedo asignar valores

# archivos htaccess

me sirven para configuar el servidor web (apache)oojo: existe otro servidor y es el nnginx (este coorre en linux) dicen que es mas rapido

# segundo sprint 24/05/2022

libreria de reportes en pdf fpdf
