DROP DATABASE IF EXISTS PROPONTO;

CREATE DATABASE PROPONTO;

USE PROPONTO;

CREATE TABLE TB_CLIENT (
	CL_ID INTEGER PRIMARY KEY AUTO_INCREMENT,
	
	CL_NAME VARCHAR(100) NOT NULL,
	CL_EMAIL VARCHAR(200) NOT NULL UNIQUE,
	CL_BIRTH DATE NOT NULL,
	CL_PHONE VARCHAR(11) NOT NULL,
	CL_GROUP ENUM('Bronze', 'Prata', 'Ouro', 'Diamante')
);

INSERT INTO TB_CLIENT (
	CL_NAME, CL_EMAIL, CL_BIRTH, CL_PHONE, CL_GROUP
) VALUES (
	'Pedro', 'contatopedrohalves@gmail.com',
	'2000-10-10', '14981838507', 'Bronze'
);