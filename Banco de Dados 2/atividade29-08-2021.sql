CREATE DATABASE atividadeBD_29Agosto2021;

DROP DATABASE atividadeBD_29Agosto2021;

SHOW DATABASES;

USE atividadeBD_29Agosto2021;

SHOW TABLES;

DROP TABLE telefone;
DROP TABLE pedido;
DROP TABLE pedidoProduto;
DROP TABLE cliente;
DROP TABLE produto;

DESC telefone;
DESC pedido;
DESC pedidoProduto;
DESC cliente;
DESC produto;

CREATE TABLE cliente(
	nome VARCHAR(30),
	codigo INT(5) PRIMARY KEY,
	STATUS CHAR(5),
	limite_credito VARCHAR(10),
	cpf CHAR(11),
	rua VARCHAR(30),
	numero CHAR(5),
	cep INT(8),
	bairro VARCHAR(15),
	cidade VARCHAR(15),
	UF CHAR(2),
	complemento VARCHAR(20)
);

CREATE TABLE telefone(
	numero INT(12),
	codigo INT(3) PRIMARY KEY,
	tipo VARCHAR(10),
	DDD CHAR(3),
	codCliente INT(5),
	FOREIGN KEY(codCliente)	REFERENCES cliente(codigo)
);

CREATE TABLE pedido(
	codigo INT(5) PRIMARY KEY,
	DATA DATE,
	numero INT(5),
	codCliente INT(5),
	FOREIGN KEY(codCliente) REFERENCES cliente(codigo)
);

CREATE TABLE produto(
	nome VARCHAR(20),
	codigo INT(5) PRIMARY KEY,
	categoria VARCHAR(20),
	preco VARCHAR(10),
	quantidade INT(2)
);

CREATE TABLE pedidoProduto(
	codigo INT(5) PRIMARY KEY,
	codPedido INT(5),
	codProduto INT(5),
	FOREIGN KEY(codPedido) REFERENCES pedido(codigo),
	FOREIGN KEY(codProduto) REFERENCES produto(codigo)
);
