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