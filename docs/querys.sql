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