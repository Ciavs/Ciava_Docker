CREATE database db_ciava;
USE db_ciava;

create table utente(
    ID int not null AUTO_INCREMENT,
    nome varchar(255),
    cognome varchar(255),
    ur_data date,    
    PRIMARY KEY (ID)
)
