create database agenda;
use agenda;

create table areas(
cod_area int not null auto_increment,
nome_area varchar(100) not null,
primary key(cod_area)
);
create table prioridade(
cod_prioridade int not null auto_increment,
nome_prioridade varchar(100) not null,
desc_prioridade text(400),
primary key(cod_prioridade)
);
create table status(
cod_status int not null auto_increment,
nome_status varchar(100) not null,
desc_status text(400) not null,
primary key(cod_status)
);
create table observacoes(
cod_obs int not null auto_increment,
nome_obs varchar(100) not null,
desc_obs text(400) not null,
primary key(cod_obs)
);
create table objetivos(
cod_objetivo int not null auto_increment,
nome_objetivo varchar(100) not null,
desc_objetivo text(400)not null,
cod_status int,
primary key(cod_objetivo),
foreign key(cod_status) references status(cod_status)
);
create table lista_areas(
cod_area int,
cod_objetivo int,
foreign key(cod_area)references areas(cod_area),
foreign key(cod_objetivo) references objetivos(cod_objetivo),
primary key(cod_area, cod_objetivo)
);
create table tarefas(
cod_tarefa int not null auto_increment,
nome_tarefa varchar(100) not null,
desc_tarefa text(400) not null,
data_inicio datetime,
data_termino datetime,
cod_area int,
cod_prioridade int,
cod_status int,
primary key(cod_tarefa),
foreign key(cod_area) references areas(cod_area),
foreign key(cod_prioridade) references prioridade(cod_prioridade),
foreign key(cod_status) references status(cod_status)
);
create table lista_tarefas(
cod_tarefa int,
cod_objetivo int,
foreign key(cod_tarefa) references tarefas(cod_tarefa),
foreign key(cod_objetivo) references objetivos(cod_objetivo),
primary key(cod_tarefa, cod_objetivo)
);
create table agenda(
cod_agenda int not null auto_increment,
nome_dono_agenda varchar(100) not null,
senha_dono_agenda varchar(250) not null,
cod_tarefa int,
cod_obs int,
primary key(cod_agenda),
foreign key(cod_tarefa) references tarefas(cod_tarefa),
foreign key(cod_obs) references observacoes(cod_obs)
);
 
