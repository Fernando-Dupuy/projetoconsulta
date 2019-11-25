create database clinicamuitolouca;
use clinicamuitolouca;




create table pacientes (
	pacienteID int not null auto_increment,
    nome varchar(45) not null,
    cpf varchar(11) not null unique,
    telefone varchar(12),
    primary key(pacienteID)
);

create table medicos (
	medicoID int not null auto_increment,
    nome varchar(45) not null,
    cpf varchar(11) not null unique,
    crm varchar(6),
    ramal varchar(4),
    primary key(medicoID)    
);

alter table medicos add usuarioID int;
alter table medicos add foreign key(usuarioID) references usuario(usuarioID);

alter table pacientes add usuarioID int;
alter table pacientes add foreign key(usuarioID) references usuario(usuarioID);


create table consultas (
	consultaID int not null auto_increment,
    pacienteID int,
    medicoID int,
    primary key(consultaID),
    foreign key (pacienteID) references pacientes(pacienteID),
    foreign key (medicoID) references medicos(medicoID)
);

alter table consultas add agendamento datetime not null;

select * from pacientes;
select * from medicos;
select * from consultas;


insert into medicos(nome, cpf, crm, ramal) values('fulano', '1245478', '098765', '1234');

create table usuario (
	usuarioID int not null auto_increment,
    login varchar(12) not null unique,
	senha varchar(16) not null,
    tipo bool not null,
    primary key (usuarioID)
);



select tipo as 'Perfil', pacientes.nome as 'Nome Paciente', medicos.nome as 'Nome Medico'
	from usuario u 
		inner join pacientes using(usuarioID)
        inner join medicos using(usuarioID); 
        
        
delete from pacientes;
delete from medicos;
        
set sql_safe_updates = 1;



select tipo as 'Perfil', pacientes.nome as 'Nome Paciente'
	from usuario u 
		inner join pacientes using(usuarioID);

select pacientes.nome, medicos.nome, tipo
	from pacientes
    inner join usuario using(usuarioID)
    inner join medicos using(usuarioID);
    
select login as 'user name'
	from usuario u 
    inner join pacientes p using(usuarioID)
    where p.nome = '';
        
##drop database clinicamuitolouca;



