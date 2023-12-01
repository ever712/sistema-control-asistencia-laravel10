-- CREAR TABLAS
-- NOTA: PARA CREAR TABLAS RELACIONALES SIEMPRE USAR nombre_de_la_tabla_id EJEMPLO departamento_id
-- NOTA: SI CREAS POR EJEMPLO id_departamento EN LOS MODELOS TIENEN QUE ESTAS ESPECIFICADOS EJEMPLO return $this->hasMany(Supervisor::class, 'id_departamento');return $this->belongsTo(Departamento::class, 'id_departamento'); EN LAS DOS TABLAS QUE SE ESTAN RELACIONANDO
create table departamento(
  id int primary key auto_increment,
  nombre varchar(255),
  piso varchar(255),
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);

create table institucion(
  id int primary key auto_increment,
  nombre varchar(255),
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);

create table supervisor(
  id int primary key auto_increment,
  nombre varchar(255),
  cargo varchar(255),
  departamento_id int,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp,
  foreign key (id_departamento) references departamento(id)
);

insert into departamento (nombre,piso) values ('SERVICIOS Y REDES (DGR)','Cuarto Piso');
insert into departamento (nombre,piso) values ('SISTEMAS','Primer Piso');

update departamento set piso = 'UNO' where id = 1;
update departamento set piso = 'DOS' where id = 2;

insert into supervisor (nombre,cargo,departamento_id) values ('Juan Apaza Robles','Jefe Recursos Tecnicos DSR',1);
insert into supervisor (nombre,cargo,departamento_id) values ('Maju Rioja Perez','Jefe de Soporte y Mantenimiento',2);
insert into supervisor (nombre,cargo,departamento_id) values ('Pepe Sancho Pancho','Jefe de Marketing',4);
insert into supervisor (nombre,cargo,departamento_id) values ('Rosa Sancho Pancho','Jefe de Marketing',1);

-- ES COMO SE CAMBIA EL NOMBRE DE UNA COLUMNA DE UNA TABLA
alter table supervisor change id_departamento departamento_id int;
-- CAMBIAR NOMBRE A LAS TABLAS
rename table departamento to departamentos;
rename table supervisor to supervisores;

create table instituciones(
  id int primary key auto_increment,
  nombre varchar(255),
  direccion varchar(255),
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp
);

insert into instituciones (nombre,direccion) value ('UNIVERSIDAD PÚBLICA DE EL ALTO','VILLA ESPERANZA EL ALTO');
insert into instituciones (nombre,direccion) value ('UNIVERSIDAD MAYOR DE SAN ANDRÉS','PLAZA DE EL ESTUDIANTE');

create table pasantes(
  id int primary key auto_increment,
  nombre varchar(255),
  email varchar(255),
  password varchar(255),
  departamento_id int,
  supervisor_id int,
  institucion_id int,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp,
  foreign key (departamento_id) references departamentos(id),
  foreign key (supervisor_id) references supervisores(id),
  foreign key (institucion_id) references instituciones(id)
);

insert into pasantes (nombre,email,departamento_id,supervisor_id,institucion_id) value ('LEO CHARLY QUISPE MARQUEZ','leo@gmail.com',2,2,1);
insert into pasantes (nombre,email,departamento_id,supervisor_id,institucion_id) value ('ALEJANDRA QUISPE CHOQUECALLO','ale@gmail.com',3,11,3);

create table asistencias(
  id int primary key auto_increment,
  pasante_id int,
  observacion varchar(255),
  ingreso timestamp default current_timestamp null,
  salida timestamp default current_timestamp null,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp,
  foreign key (pasante_id) references pasantes(id)
);

insert into asistencias (pasante_id,observacion) value (1,'Incoveniente en el bloqueo de los mineros');
insert into asistencias (pasante_id,observacion) value (2,'Marcado de asistencia en El Alto');

ALTER TABLE pasantes ADD COLUMN ci varchar(255) null AFTER email;

alter table pasantes drop column ci;

insert into asistencias (pasante_id,observacion) value (1,'Cell sintio el verdadero terror');

delete from asistencias;

alter table asistencias auto_increment = 1;

alter table pasantes drop column password;

alter table users add column image varchar(255) default 'avatar-1.jpg' after email;

alter table pasantes add column image varchar(255) default 'avatar-2.jpg' after ci;

alter table pasantes add column password varchar(255) not null after image;


update asistencias set ingreso = '2023-11-09 08:33:14' , salida = '2023-11-09 16:30:45' where id = 1;
update asistencias set ingreso = '2023-11-10 08:35:32' , salida = '2023-11-10 16:32:23' where id = 2;
update asistencias set ingreso = '2023-11-13 08:32:41' , salida = '2023-11-13 16:35:13' where id = 3;
update asistencias set ingreso = '2023-11-14 08:36:34' , salida = '2023-11-14 16:30:43' where id = 4;
update asistencias set ingreso = '2023-11-15 08:33:53' , salida = '2023-11-15 16:30:32' where id = 5;
update asistencias set ingreso = '2023-11-16 08:32:44' , salida = '2023-11-16 16:29:55' where id = 6;
update asistencias set ingreso = '2023-11-17 08:30:38' , salida = '2023-11-17 16:31:44' where id = 7;
update asistencias set ingreso = '2023-11-20 08:32:42' , salida = '2023-11-20 16:32:15' where id = 8;
update asistencias set ingreso = '2023-11-21 08:38:22' , salida = '2023-11-21 16:30:43' where id = 9;
update asistencias set ingreso = '2023-11-22 08:35:53' , salida = '2023-11-22 16:30:12' where id = 10;
update asistencias set ingreso = '2023-11-23 08:39:14' , salida = '2023-11-23 16:35:32' where id = 11;
update asistencias set ingreso = '2023-11-24 08:30:18' , salida = '2023-11-24 16:34:54' where id = 12;
update asistencias set ingreso = '2023-11-09 08:29:32' , salida = '2023-11-09 16:30:35' where id = 13;
update asistencias set ingreso = '2023-11-10 08:28:22' , salida = '2023-11-10 16:30:43' where id = 14;
update asistencias set ingreso = '2023-11-13 08:28:11' , salida = '2023-11-13 16:35:23' where id = 15;
update asistencias set ingreso = '2023-11-14 08:31:18' , salida = '2023-11-14 16:38:24' where id = 16;
update asistencias set ingreso = '2023-11-15 08:33:38' , salida = '2023-11-15 16:37:42' where id = 17;
update asistencias set ingreso = '2023-11-16 08:34:44' , salida = '2023-11-16 16:33:54' where id = 18;
update asistencias set ingreso = '2023-11-17 08:29:32' , salida = '2023-11-17 16:31:53' where id = 19;
update asistencias set ingreso = '2023-11-20 08:30:21' , salida = '2023-11-20 16:32:42' where id = 20;
update asistencias set ingreso = '2023-11-21 08:33:32' , salida = '2023-11-21 16:30:14' where id = 21;
update asistencias set ingreso = '2023-11-22 08:35:13' , salida = '2023-11-22 16:30:15' where id = 22;
update asistencias set ingreso = '2023-11-23 08:31:34' , salida = '2023-11-23 16:35:19' where id = 23;


update asistencias set ingreso = '2023-11-24 08:32:22' , salida = '2023-11-24 16:34:24' where id = 24;
update asistencias set ingreso = '2023-11-09 08:31:54' , salida = '2023-11-09 16:30:49' where id = 25;
update asistencias set ingreso = '2023-11-10 08:33:43' , salida = '2023-11-10 16:31:12' where id = 26;
update asistencias set ingreso = '2023-11-13 08:32:42' , salida = '2023-11-13 16:35:10' where id = 27;
update asistencias set ingreso = '2023-11-14 08:30:45' , salida = '2023-11-14 16:38:30' where id = 28;
update asistencias set ingreso = '2023-11-15 08:33:54' , salida = '2023-11-15 16:37:35' where id = 29;
update asistencias set ingreso = '2023-11-16 08:35:12' , salida = '2023-11-16 16:34:11' where id = 30;
update asistencias set ingreso = '2023-11-17 08:29:32' , salida = '2023-11-17 16:30:53' where id = 31;
update asistencias set ingreso = '2023-11-20 08:34:38' , salida = '2023-11-20 16:32:32' where id = 32;
update asistencias set ingreso = '2023-11-21 08:31:24' , salida = '2023-11-21 16:30:34' where id = 33;
update asistencias set ingreso = '2023-11-22 08:32:13' , salida = '2023-11-22 16:30:25' where id = 34;
update asistencias set ingreso = '2023-11-23 08:35:34' , salida = '2023-11-23 16:32:29' where id = 35;
update asistencias set ingreso = '2023-11-24 08:31:31' , salida = '2023-11-24 16:33:14' where id = 36;
update asistencias set ingreso = '2023-11-09 08:30:04' , salida = '2023-11-09 16:33:22' where id = 37;
update asistencias set ingreso = '2023-11-10 08:33:39' , salida = '2023-11-10 16:31:11' where id = 38;

update asistencias set ingreso = '2023-11-13 08:31:23' , salida = '2023-11-13 16:32:31' where id = 39;
update asistencias set ingreso = '2023-11-14 08:37:43' , salida = '2023-11-14 16:33:38' where id = 40;
update asistencias set ingreso = '2023-11-15 08:34:21' , salida = '2023-11-15 16:31:21' where id = 41;
update asistencias set ingreso = '2023-11-16 08:30:43' , salida = '2023-11-16 16:33:29' where id = 42;
update asistencias set ingreso = '2023-11-17 08:36:38' , salida = '2023-11-17 16:30:10' where id = 43;

update asistencias set ingreso = '2023-11-20 08:34:38' , salida = '2023-11-20 16:30:42' where id = 44;
update asistencias set ingreso = '2023-11-21 08:32:24' , salida = '2023-11-21 16:30:34' where id = 45;
update asistencias set ingreso = '2023-11-22 08:30:43' , salida = '2023-11-22 16:33:31' where id = 46;
update asistencias set ingreso = '2023-11-23 08:35:32' , salida = '2023-11-23 16:31:42' where id = 47;
update asistencias set ingreso = '2023-11-24 08:32:11' , salida = '2023-11-24 16:33:24' where id = 48;


--- EVER

update asistencias set ingreso = '2023-11-01 08:33:14' , salida = '2023-11-01 12:00:45' where id = 1;
update asistencias set ingreso = '2023-11-02 08:35:32' , salida = '2023-11-02 16:32:23' where id = 2;
update asistencias set ingreso = '2023-11-03 08:32:41' , salida = '2023-11-03 16:35:13' where id = 3;

update asistencias set ingreso = '2023-11-06 08:36:34' , salida = '2023-11-06 16:30:43' where id = 4;
update asistencias set ingreso = '2023-11-07 08:33:53' , salida = '2023-11-07 16:30:32' where id = 5;
update asistencias set ingreso = '2023-11-08 08:32:44' , salida = '2023-11-08 16:29:55' where id = 6;
update asistencias set ingreso = '2023-11-09 08:30:38' , salida = '2023-11-09 16:31:44' where id = 7;
update asistencias set ingreso = '2023-11-10 08:32:42' , salida = '2023-11-10 16:32:15' where id = 8;

update asistencias set ingreso = '2023-11-13 08:38:22' , salida = '2023-11-13 16:30:43' where id = 9;
update asistencias set ingreso = '2023-11-14 08:35:53' , salida = '2023-11-14 16:30:12' where id = 10;
update asistencias set ingreso = '2023-11-15 08:39:14' , salida = '2023-11-15 16:35:32' where id = 11;
update asistencias set ingreso = '2023-11-16 08:30:18' , salida = '2023-11-16 16:34:54' where id = 12;
update asistencias set ingreso = '2023-11-17 08:29:32' , salida = '2023-11-17 16:30:35' where id = 13;

update asistencias set ingreso = '2023-11-20 08:28:22' , salida = '2023-11-20 16:30:43' where id = 14;
update asistencias set ingreso = '2023-11-21 08:28:11' , salida = '2023-11-21 16:35:23' where id = 15;
update asistencias set ingreso = '2023-11-22 08:31:18' , salida = '2023-11-22 16:38:24' where id = 16;
update asistencias set ingreso = '2023-11-23 08:33:38' , salida = '2023-11-23 16:37:42' where id = 17;
update asistencias set ingreso = '2023-11-24 08:34:44' , salida = '2023-11-24 16:33:54' where id = 18;

update asistencias set ingreso = '2023-11-27 08:29:32' , salida = '2023-11-27 16:31:53' where id = 19;
update asistencias set ingreso = '2023-11-28 08:30:21' , salida = '2023-11-28 16:32:42' where id = 20;
update asistencias set ingreso = '2023-11-29 08:33:32' , salida = '2023-11-29 16:30:14' where id = 21;
update asistencias set ingreso = '2023-11-30 08:35:13' , salida = '2023-11-30 16:30:15' where id = 22;
update asistencias set ingreso = '2023-12-01 08:31:34' , salida = '2023-12-01 16:35:19' where id = 23;

-- JOSE LUIS



update asistencias set ingreso = '2023-11-13 08:32:22' , salida = '2023-11-13 16:34:24' where id = 24;
update asistencias set ingreso = '2023-11-14 08:31:54' , salida = '2023-11-14 16:30:49' where id = 25;
update asistencias set ingreso = '2023-11-15 08:33:43' , salida = '2023-11-15 16:31:12' where id = 26;
update asistencias set ingreso = '2023-11-16 08:32:42' , salida = '2023-11-16 16:35:10' where id = 27;
update asistencias set ingreso = '2023-11-17 08:30:45' , salida = '2023-11-17 16:38:30' where id = 28;

update asistencias set ingreso = '2023-11-20 08:33:54' , salida = '2023-11-20 16:37:35' where id = 29;
update asistencias set ingreso = '2023-11-21 08:35:12' , salida = '2023-11-21 16:34:11' where id = 30;
update asistencias set ingreso = '2023-11-22 08:29:32' , salida = '2023-11-22 16:30:53' where id = 31;
update asistencias set ingreso = '2023-11-23 08:34:38' , salida = '2023-11-23 16:32:32' where id = 32;
update asistencias set ingreso = '2023-11-24 08:31:24' , salida = '2023-11-24 16:30:34' where id = 33;

update asistencias set ingreso = '2023-11-27 08:32:13' , salida = '2023-11-27 16:30:25' where id = 34;
update asistencias set ingreso = '2023-11-28 08:35:34' , salida = '2023-11-28 16:32:29' where id = 35;
update asistencias set ingreso = '2023-11-29 08:31:31' , salida = '2023-11-29 16:33:14' where id = 36;
update asistencias set ingreso = '2023-11-30 08:30:04' , salida = '2023-11-30 16:33:22' where id = 37;
update asistencias set ingreso = '2023-12-01 08:33:39' , salida = '2023-12-01 16:31:11' where id = 38;


delete from asistencias where id = 2;

ALTER TABLE pasantes ADD COLUMN ci varchar(255) null AFTER email;