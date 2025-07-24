create database db_oprq;
use db_oprq;

-- criando as tabelas
create table tb_adm(
	id bigint not null auto_increment,
    user varchar(255),
    senha varchar(20),
    primary key(id)
) ENGINE = InnoDB;

create table tb_avisos(
	id bigint not null auto_increment,
    titulo varchar(255),
    conteudo varchar(255),
    image varchar(255),
    primary key(id)
) ENGINE = InnoDB;

create table tb_objetivos(
	id bigint not null auto_increment,
    titulo varchar(255),
    conteudo varchar(255),
    image varchar(255),
    primary key(id)
) ENGINE = InnoDB;

create table tb_locaisDeProva(
	id bigint not null auto_increment,
    cidade varchar(255),
    escola varchar(255),
    localizacao varchar(255),
    dataProva date,
    primary key(id)
) ENGINE = InnoDB;

create table tb_resultadoPrimeiraFase(
	id bigint not null auto_increment,
    link varchar(2555),
    primary key(id)
) ENGINE = InnoDB;

create table tb_resultadoSegundaFase(
	id bigint not null auto_increment,
    link varchar(2555),
    primary key(id)
) ENGINE = InnoDB;

create table tb_contato(
	id bigint not null auto_increment,
    email varchar(255),
    instagram varchar(2555),
    celular varchar(2555),
    primary key(id)
) ENGINE = InnoDB;

create table tb_fotos(
	id bigint not null auto_increment,
    titulo varchar(255),
    conteudo varchar(255),
    image varchar(255),
    primary key(id)
) ENGINE = InnoDB;


-- inserindo valor na tabela adm
insert into tb_adm (user, senha)
values ('hostChemical', '3QPkGak23VF#');