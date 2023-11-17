### SISTEMA DE CONTROL DE ASISTENCIA
- Instalación de Laravel 10, php, mysql
- Integracion de Plantillas
 - dashboard
 - login
 - register
- Creación de modelo y recurso de departamento
- Vista departamento
  - index
  - create
- Vista Home
 - home
 - bloque contador de departamentos
 - ultima fecha agregado un registro

### Errores

- revisar el crud de supervisor
- no envia el objeto del index al controlador

#### Continuacion

- se realizo el crud para supervisores usando otro metodo para editar y actualizar un registro de la tabla de supervisores

- Se realizo el crud completo para la tabla de instituciones mas el recuento y la ultima fecha de registro en la vista home

- Se realizo el crud completo de la tabla pasantes mas el recuento y la ultima fecha de registro en la vista home

- Se realizo el show de asistencia y el edit de asistencia solo para el campo de observaciones por cuestiones de la aplicacion mas el recuento y la ultima fecha de la vista home

- Se trabajo en la vista de los pasantes es un panel donde le permite al pasante ingresar su número de carnet y la observacion este último es opcional, inmediatamente le mostrará un mensaje que le indica que fue registrada su entrada, y para la salida sera el mismo panel que nuevamente tendra que introducir su nro de carnet y esta vez le mostrar un mensaje su salida se ha registrado correctamente

- se incorporo la opcion de cambiar contraseña y actualizar imagen de perfil para los administradores del sistema

- se incorporo los sweet alert revisar el de confirmacion para eliminar, se realizo el panel dashboard para los pasantes se creo un middleware para pasantes esto es para que cuando ingresen por el enlace a login de pasante te dirija a sesion ya creada, se soluciono el problema de cuando cerrabas session se cerraban tanto de administradores y de pasantes se logro haciendolo manual

### IMPORTANTE

- Tener la hora siempre sincronizado y a la hora correcta 24/7 el sistema se basa en el tiempo real
- El servidor debe tener la hora adecuada y bien configurada America/La Paz 
- Si la hora no esta correcta del servidor tendra errores a la hora de registrar las asistencias

### LIBRERIAS
- para la libreria Intervention Image se debe tener instalado la extension de php "gd" en caso de windows se debe descomentar la linea "extension:gd"
- en kali linux se instala la extension de gd "sudo apt-get install php-gd"