-- Drop banco de dados
-- drop database projeto02;

-- Criação do banco de dados
create database aula13;

-- Selecionar banco de dados
use aula13;

-- Criação da tabela usuario
create table usuario (
	id_usuario   		int 			not null auto_increment,
    nome_usuario 		varchar(100)	not null,
    email_usuario 		varchar(100)	not null, 
    telefone_usuario	varchar(30)		not null, 
    foto_blob           blob,
    foto_nome           varchar(100),
    primary key (id_usuario)
);