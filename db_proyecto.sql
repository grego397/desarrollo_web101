create table categoria(
cat_id int auto_increment not null,
cat_nombre text,
primary key (cat_id)
);


create table red(
red_id int auto_increment not null,
red_nombre text,
red_imagen_class text,
primary key (red_id)
);

create table usuario(
usu_id int auto_increment not null,
usu_usr text,
usu_password text,
usu_nombres text,
usu_primer_apellido text,
usu_segundo_apellido text,
usu_descripcion_usuario text,
usu_descripcion_contacto text,
primary key (usu_id)
);

create table proyecto(
pro_id int auto_increment not null,
usu_id int not null,
pro_titulo text,
pro_descripcion text,
pro_anio int,
pro_imagen text,
primary key (pro_id),
foreign key (usu_id) references usuario (usu_id)
);

create table articulo(
art_id int auto_increment not null,
usu_id int not null,
cat_id int not null,
art_titulo text,
art_resumen text,
art_detalle text,
art_foto text,
primary key (art_id),
foreign key (usu_id) references usuario (usu_id),
foreign key (cat_id) references categoria (cat_id)
);

create table habilidad(
hab_id int auto_increment not null,
usu_id int not null,
hab_descripcion text,
primary key (hab_id),
foreign key (usu_id) references usuario (usu_id)
);

create table curso(
cur_id int auto_increment not null,
usu_id int not null,
cur_descripcion text,
cur_fecha_ini date,
cur_fecha_fin date,
primary key (cur_id),
foreign key (usu_id) references usuario (usu_id)
);

create table experiencia_laboral(
exp_id int auto_increment not null,
usu_id int not null,
exp_descripcion text,
exp_institucion text,
exp_fecha_ini date,
exp_fecha_fin date,
primary key (exp_id),
foreign key (usu_id) references usuario (usu_id)
);

create table contacto(
con_id int auto_increment not null,
usu_id int not null,
red_id int not null,
con_nombre text,
con_url text,
primary key (con_id),
foreign key (usu_id) references usuario (usu_id),
foreign key (red_id) references red (red_id)
);
