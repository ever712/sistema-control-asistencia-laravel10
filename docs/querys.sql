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
  id_departamento int,
  created_at timestamp default current_timestamp,
  updated_at timestamp default current_timestamp,
  foreign key (id_departamento) references departamento(id)
);

insert into departamento (nombre,piso) values ('SERVICIOS Y REDES (DGR)','Cuarto Piso');
insert into departamento (nombre,piso) values ('SISTEMAS','Primer Piso');

update departamento set piso = 'UNO' where id = 1;
update departamento set piso = 'DOS' where id = 2;