
CREATE TABLE ALUMNOS (
    puesto CHAR(2) not null ,
    nombre VARCHAR(100) NOT NULL, --Nombre carpeta .SIN ESPACIOS
    usuario varchar(20) NOT NULL
    password  varchar (20)not null,
    nombreJesuita VARCHAR(100)not null,
    infoJesuita TEXT not null,
    web varchar(250) not null, --
    PRIMARY KEY (puesto)
);

CREATE TABLE MENSAJE (
    idMensaje INT AUTO_INCREMENT,
    texto TEXT NOT NULL,
    idAlumno_emisor INT,
    idAlumno_receptor INT,
    PRIMARY KEY (idMensaje),
    CONSTRAINT fk_emisor FOREIGN KEY (idAlumno_emisor) REFERENCES ALUMNOS(idAlumno) 
    CONSTRAINT fk_receptor FOREIGN KEY (idAlumno_receptor) REFERENCES ALUMNOS(idAlumno)       
);






