CREATE TABLE alumnos (
	equipo char(2) NOT NULL PRIMARY KEY,
	nombre varchar(40) NOT NULL,
	usuario varchar(20) NOT NULL UNIQUE, 
	password varchar(20) NOT NULL,
	nombreJesuita varchar(100) NOT NULL,
	infoJesuita varchar(250)NOT NULL,
	web varchar(30) NOT NULL UNIQUE 	
);

CREATE TABLE agradecimientos (
    idAgradecimiento smallint  NOT NULL PRIMARY KEY IDENTITY,
	mensaje varchar(300) NOT NULL,
	idEmisor char(2) NOT NULL,
	idReceptor char(2) NOT NULL,
	fecha_hora datetime default GETDATE(),
	CONSTRAINT CK_diferentes CHECK (idEmisor!=idReceptor ),
	CONSTRAINT FK_emisor FOREIGN KEY (idEmisor) REFERENCES alumnos (equipo),
	CONSTRAINT FK_receptor FOREIGN KEY (idReceptor) REFERENCES alumnos (equipo)

);
