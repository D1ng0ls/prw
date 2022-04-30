USE projeto01;

INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
VALUES ("Eduardo Santos", "4b4c4t3666@gmail.com", "18 99816-1382");

SELECT * FROM usuario;

UPDATE usuario SET
	nome_usuario= "Carlos",
	email_usuario= "carlao.com",
	telefone_usuario= "5000"
	WHERE id_usuario=1;
    