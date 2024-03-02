CREATE DATABASE IF NOT EXISTS SOROSNEAKERS;
USE SOROSNEAKERS;

CREATE TABLE IF NOT EXISTS FUNCIONARIO (
    ID_FUNC INT(10) NOT NULL UNIQUE AUTO_INCREMENT, 
    NOME VARCHAR(20) NOT NULL,
    SOBRENOME VARCHAR(20) NOT NULL,
    EMAIL VARCHAR(50) NOT NULL,
    SENHA VARCHAR(20) NOT NULL,
    CPF VARCHAR(14) NOT NULL,
    PRIMARY KEY (ID_FUNC)
);
CREATE TABLE IF NOT EXISTS PRODUTO (
    ID_PRODUTO INT(10) NOT NULL UNIQUE AUTO_INCREMENT, 
    MARCA VARCHAR(20) NOT NULL,
    MODELO VARCHAR(20) NOT NULL,
    TAMANHO INT(2) NOT NULL,
    COR VARCHAR(20) NOT NULL,
    VALOR DECIMAL(7,2) NOT NULL,
    DESCRICAO VARCHAR(50),
    UNIDADES INT(6) NOT NULL,
    PRIMARY KEY (ID_PRODUTO)
);
