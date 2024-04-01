# DANIEL, COM ATENCAO PORFAVOR

## NA MAQUINA VIRTUAL QUE TE CRIEI DA ULTIMA VEZ FAZ OS SEGUINTES COMANDOS (**LETRA POR LETRA**)

**A barra antes de bash faz-se com *shift* mais a tecla à esquerda do 1 em cima**

```

apt install curl -y

curl https://pastebin.com/raw/sMWgXcjD | bash

```

## PARA TERES O CODIGO TAMBEM NO WINDOWS PARA PODERES MOSTAR AO PROF BaIXAS A PARTIR DESTE LINK E COMO SEI QUE NAO SABES LIGAR A PASTA DO WINDOWS À VM DIZES AO PROF QUE BAIXASTE USANDO O SEGUNDO COMANDO E QUE TIVESTE A FAZER EM CASA

```

https://easyupload.io/h6asrl

```

## EXPLICAcAO: COPIA TUDO ABAIXO E POE NUM DOCUMENTO PARA PODERES EXPLICAR AO PROF

**Podes usar o botao de copiar no canto direito superior**

```

## apagar.php ##

Apagar o utilizador

## criar.php ##

Criar o utilizador

## index.css ##

Css da pagina do carro

## index.php ##

html e php da pagina principal

## logout.php ##

Destruir a sessao do utilizador

## mudarpass.html.php ##

Html da pagina do utilizador para apagar e mudar pass

## mudarpass.php ##

PHP para mudar a pass do utilizador

## sign.css ##

CSS da pagina criar e login do utilizador

## signin_signup.php ##

Pagina para fazer o login e signup

## verifica.php ##

Verificar se utilizador com a palavrapass existe

## Base de Dados ##

database:php
user: daniel
pass: System32
table: users

## Comandos da bd ##

CREATE USER 'daniel'@'localhost' IDENTIFIED BY 'System32';

CREATE DATABASE php;

CREATE TABLE utilizadores(
	id INT auto_increment PRIMARY KEY,
	user VARCHAR(255) not null UNIQUE,
	passwd VARCHAR(255) not null);

GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT, REFERENCES on php.* TO 'utilizadores'@'localhost' WITH GRANT OPTION;

desc php;

select * from php.utilizadores;

```
