-- Create table amd
CREATE TABLE usuario(
	id_usuario int not null PRIMARY KEY AUTO_INCREMENT,
    nome_usuario varchar(32) not null,
    email_usuario varchar(32) not null,
    senha_usuario varchar(32) not null
)

INSERT INTO `usuario`( `nome_usuario`, `email_usuario`, `senha_usuario`) VALUES ('Silvana', 'silvana@gmail.com', @dtel1234);
INSERT INTO `usuario`( `nome_usuario`, `email_usuario`, `senha_usuario`) VALUES ('David', 'david@gmail.com', @dtel1234);

-- Create table bolsista
CREATE TABLE bolsistas(
	id_bolsista int not null PRIMARY KEY AUTO_INCREMENT,
    turno varchar(32) not null,
    nome_bolsista varchar(150) not null,
    email_bolsista varchar(150) not null,
    senha_bolsista varchar(32) not null,
    situação_presenca varchar(32)
)

