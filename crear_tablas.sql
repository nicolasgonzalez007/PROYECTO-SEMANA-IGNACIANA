CREATE TABLE Alumno (
    idAlumno CHAR(2) NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    contrasenia VARCHAR(20) NOT NULL,
    nombre_jesuita VARCHAR(30) NOT NULL,
    info_jesuita VARCHAR(400) NOT NULL,
    foto_jesuita VARCHAR(100) NOT NULL,
    PRIMARY KEY (idAlumno)
);

CREATE TABLE Mensaje (
    idMensaje SMALLINT NOT NULL AUTO_INCREMENT,
    texto TEXT NOT NULL,
    idAlumno_emisor CHAR(2) NOT NULL,
    idAlumno_receptor CHAR(2) NOT NULL,
    PRIMARY KEY (idMensaje),
    CONSTRAINT FK_Emisor FOREIGN KEY (idAlumno_emisor) REFERENCES Alumno(idAlumno),
    CONSTRAINT FK_Receptor FOREIGN KEY (idAlumno_receptor) REFERENCES Alumno(idAlumno)
);

--Insercion masiva
INSERT INTO Alumno (idAlumno, nombre, contrasenia, nombre_jesuita, info_jesuita, foto_jesuita) VALUES
('00', 'Juan Pérez', 'pass123', 'Ignacio de Loyola', 'Fundador de la Compañía de Jesús.', 'ignacio.jpg'),
('01', 'Ana García', 'ana88', 'Francisco Javier', 'Misionero en el lejano oriente.', 'javier.jpg'),
('02', 'Carlos Ruiz', 'carlitos', 'Pedro Claver', 'Defensor de los derechos humanos.', 'claver.jpg'),
('03', 'Lucía Fernández', 'lucia_99', 'Alberto Hurtado', 'Conocido por su labor social en Chile.', 'hurtado.jpg'),
('04', 'Diego Sosa', 'dieg0', 'Roque González', 'Mártir de las misiones guaraníes.', 'roque.jpg'),
('05', 'Marta López', 'marta_psw', 'José de Anchieta', 'Apóstol de Brasil.', 'anchieta.jpg'),
('06', 'Luis Torres', 'luis_1', 'Estanislao Kostka', 'Patrono de los novicios.', 'estanislao.jpg'),
('07', 'Elena Sanz', 'elena_s', 'Luis Gonzaga', 'Patrono de la juventud cristiana.', 'gonzaga.jpg'),
('08', 'Roberto Díaz', 'rob_08', 'Juan Berchmans', 'Santo belga de la Compañía.', 'berchmans.jpg'),
('09', 'Sofía Castro', 'sofi_c', 'Alonso Rodríguez', 'Portero del colegio de Palma.', 'alonso.jpg'),
('10', 'Javier Gil', 'javigil', 'Edmund Campion', 'Mártir jesuita inglés.', 'campion.jpg');
