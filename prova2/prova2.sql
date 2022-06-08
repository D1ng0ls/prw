create database prova2;

use prova2;
drop table if exists fluxo_caixa;
create table fluxo_caixa (
	id 			int 		not null auto_increment,
    data 		date		not null,
    tipo 		varchar(10) not null,
    valor 		varchar(10.2) not null,
    historico	varchar(150) not null,
    cheque		varchar(3) not null,
    PRIMARY KEY (id)
);

select * from  fluxo_caixa;
SELECT SUM(valor) valor FROM fluxo_caixa WHERE tipo = 'Saída';