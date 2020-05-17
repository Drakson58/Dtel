-- Create table amd
CREATE TABLE usuario(
	id_usuario int not null PRIMARY KEY AUTO_INCREMENT,
    nome_usuario varchar(32) not null,
    email_usuario varchar(32) not null,
    senha_usuario varchar(32) not null
)

INSERT INTO `usuario`( `nome_usuario`, `email_usuario`, `senha_usuario`) VALUES ('Silvana', 'silvana@gmail.com', 1234);
INSERT INTO `usuario`( `nome_usuario`, `email_usuario`, `senha_usuario`) VALUES ('David', 'david@gmail.com', 1234);

-- Create table bolsista
CREATE TABLE bolsistas(
	id_bolsista int not null PRIMARY KEY AUTO_INCREMENT,
    turno varchar(32) not null,
    nome_bolsista varchar(150) not null,
    email_bolsista varchar(150) not null,
    senha_bolsista varchar(32) not null,
    situação_presenca varchar(32)
)



-- Create table cadastro de professores
CREATE TABLE tabela_de_aulas(
	id_aula int not null PRIMARY KEY AUTO_INCREMENT,
    dia_aula varchar(100) not null,
    laboratorio varchar(32),
    turno varchar(100) not null,
    horario varchar(32) not null,
    nome_professor varchar(150) not null,
    turma varchar(100) not null,
    disciplina varchar(150) not null
)

-- Segunda
CREATE TABLE tabela_de_aulas_segunda(
	id_aula int not null PRIMARY KEY AUTO_INCREMENT,
    dia_aula varchar(100) not null,
    laboratorio varchar(32),
    turno varchar(100) not null,
    horario varchar(32) not null,
    nome_professor varchar(150) not null,
    turma varchar(100) not null,
    disciplina varchar(150) not null,
    bolsista varchar(100),
    situacao varchar(100)
)

-- Terça
CREATE TABLE tabela_de_aulas_terca(
	id_aula int not null PRIMARY KEY AUTO_INCREMENT,
    dia_aula varchar(100) not null,
    laboratorio varchar(32),
    turno varchar(100) not null,
    horario varchar(32) not null,
    nome_professor varchar(150) not null,
    turma varchar(100) not null,
    disciplina varchar(150) not null,
    bolsista varchar(100),
    situacao varchar(100)
)


-- Quarta
CREATE TABLE tabela_de_aulas_quarta(
	id_aula int not null PRIMARY KEY AUTO_INCREMENT,
    dia_aula varchar(100) not null,
    laboratorio varchar(32),
    turno varchar(100) not null,
    horario varchar(32) not null,
    nome_professor varchar(150) not null,
    turma varchar(100) not null,
    disciplina varchar(150) not null,
    bolsista varchar(100),
    situacao varchar(100)
)


-- Quinta
CREATE TABLE tabela_de_aulas_quinta(
	id_aula int not null PRIMARY KEY AUTO_INCREMENT,
    dia_aula varchar(100) not null,
    laboratorio varchar(32),
    turno varchar(100) not null,
    horario varchar(32) not null,
    nome_professor varchar(150) not null,
    turma varchar(100) not null,
    disciplina varchar(150) not null,
    bolsista varchar(100),
    situacao varchar(100)
)


-- Sexta
CREATE TABLE tabela_de_aulas_sexta(
	id_aula int not null PRIMARY KEY AUTO_INCREMENT,
    dia_aula varchar(100) not null,
    laboratorio varchar(32),
    turno varchar(100) not null,
    horario varchar(32) not null,
    nome_professor varchar(150) not null,
    turma varchar(100) not null,
    disciplina varchar(150) not null,
    bolsista varchar(100),
    situacao varchar(100)
)