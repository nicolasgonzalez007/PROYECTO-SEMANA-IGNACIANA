
CREATE TABLE Alumnos (
    puesto CHAR(2) not null ,
    nombre VARCHAR(100) NOT NULL, --Nombre carpeta .SIN ESPACIOS
    usuario varchar(20) NOT NULL,
    password  varchar (20)not null,
    nombreJesuita VARCHAR(100)not null,
    infoJesuita TEXT not null,
    web varchar(250) not null, --
    PRIMARY KEY (puesto)
);

CREATE TABLE Mensaje (
    idMensaje INT AUTO_INCREMENT,
    texto TEXT NOT NULL,
    idAlumno_emisor char (2),
    idAlumno_receptor char(2),
    PRIMARY KEY (idMensaje),
    CONSTRAINT fk_emisor FOREIGN KEY (idAlumno_emisor) REFERENCES ALUMNOS(puesto), 
    CONSTRAINT fk_receptor FOREIGN KEY (idAlumno_receptor) REFERENCES ALUMNOS(puesto)       
);






