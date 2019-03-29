CREATE TABLE IF NOT EXISTS usuario(
	usuario_id INT AUTO_INCREMENT,
    nome varchar(255)  NOT NULL,
    sobrenome varchar(255) NOT NULL,
    endereco varchar(255),
    cargo varchar(255),
    PRIMARY KEY (usuarios_id)
    );
