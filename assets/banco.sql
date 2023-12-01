/*info TABELA sobre usuario do sistema LOGIN */
CREATE TABLE usuario_admin ( 
    id INT PRIMARY KEY NOT NULL  AUTO_INCREMENT,
    nome VARCHAR(45),
    cpf VARCHAR(45),
    senha VARCHAR(45) 
);
/* inserir infos*/
INSERT INTO usuario_admin (nome,cpf,senha)
VALUES ('joaquim','09488590340','12324');
VALUES ('paulinho','09488590310','12524');




/* TABELA relacionada a funcao do funcionario a  profisao */
CREATE TABLE funcao_profissao ( 
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
   decricao VARCHAR(45),
   obs VARCHAR(255) );

INSERT INTO funcao_profissao ( decricao, obs)
VALUES ('Programador', 'junior');




/* TABELA Sobre funcionario */
CREATE TABLE funcionario (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45),
    salario VARCHAR(45),
    data_nascimento VARCHAR(45),
    cpf VARCHAR(45),
    funcao  INT
);
INSERT INTO funcionario ( nome, salario, data_nascimento, cpf, funcao)
VALUES ('rodolf', '5000' , '09/08/93', '08455586565', '1' )


