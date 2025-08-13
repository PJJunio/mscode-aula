CREATE TABLE cliente (
	cpf_cnpj VARCHAR(14),
	nome VARCHAR(255),
	PRIMARY KEY (cpf_cnpj)
);

ALTER TABLE cliente MODIFY cpf_cnpj VARCHAR(14) NOT NULL;
ALTER TABLE cliente MODIFY nome VARCHAR(255) NOT NULL;

SELECT * FROM cliente;

CREATE TABLE produto (
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	quantidade_disponivel INT NOT NULL,
	valor_unitario INT NOT NULL,
	ativo BOOLEAN DEFAULT TRUE,
	PRIMARY KEY (id)
);

SELECT * FROM produto;

CREATE TABLE item (
	id INT NOT NULL AUTO_INCREMENT,
	produto_id INT NOT NULL,
	quantidade_total INT NOT NULL,
	valor_unitario INT NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (produto_id) REFERENCES produto(id)
);

SELECT * FROM item;

CREATE TABLE carrinho (
	id INT NOT NULL AUTO_INCREMENT,
	item_id INT,
	data DATE,
	cliente_cpf_cnpj VARCHAR(14),
	PRIMARY KEY (id),
	FOREIGN KEY (cliente_cpf_cnpj) REFERENCES cliente(cpf_cnpj)
);

SELECT * FROM carrinho;

INSERT INTO cliente (cpf_cnpj, nome) VALUES ("12345678912", "Paulo Dias");
INSERT INTO cliente (cpf_cnpj, nome) VALUES ("1234567891234", "LeP SErvices");
SELECT * FROM cliente;

INSERT INTO produto (nome, quantidade_disponivel, valor_unitario) VALUES ("Computador Pichau Gamer", 14, 2700);
SELECT * FROM produto;

INSERT INTO item (produto_id ,quantidade_total, valor_unitario) VALUES ("1", 17, 2400);
SELECT * FROM item;

INSERT INTO carrinho (item_id, data, cliente_cpf_cnpj) VALUES (1, "2025-08-13", "12345678912");
SELECT * FROM carrinho;
