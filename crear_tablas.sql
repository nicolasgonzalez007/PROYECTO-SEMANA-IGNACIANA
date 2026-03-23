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
('01', 'Manuel Amigo Royan',               '1234', 'Pedro Arrupe',         'Pedro Arrupe fue Superior General de la Compañía de Jesús de 1965 a 1983, conocido por su labor humanitaria y renovación de la orden.',                'pedro_arrupe.jpg'),
('02', 'Samuel Barril Sosa',               '1234', 'Francisco Javier',     'San Francisco Javier fue misionero jesuita del siglo XVI, evangelizó Asia y es patrón de las misiones.',                                                   'francisco_javier.jpg'),
('03', 'Yehu Blanco Pinilla',              '1234', 'Ignacio de Loyola',    'San Ignacio de Loyola fundó la Compañía de Jesús en 1540, autor de los Ejercicios Espirituales y figura clave de la Contrarreforma.',                      'ignacio_loyola.jpg'),
('04', 'JoseAntonio Bodes Garcia',         '1234', 'José de Acosta',       'José de Acosta fue misionero y escritor jesuita del siglo XVI, conocido por su obra sobre la historia natural y moral de las Indias.',                    'jose_acosta.jpg'),
('05', 'Carlos Colorado Anselmo',          '1234', 'Juan de Mariana',      'Juan de Mariana fue teólogo e historiador jesuita español del siglo XVI, autor de la Historia General de España.',                                          'juan_mariana.jpg'),
('06', 'Francisco Javier Corchado Parejo', '1234', 'Mateo Ricci',          'Mateo Ricci fue misionero jesuita italiano que introdujo el cristianismo en China en el siglo XVI mediante el diálogo intercultural.',                     'mateo_ricci.jpg'),
('07', 'Javier Cumplido Barahona',         '1234', 'Roberto Bellarmino',   'Roberto Bellarmino fue cardenal y teólogo jesuita del siglo XVI, canonizado en 1930 y declarado Doctor de la Iglesia.',                                    'roberto_bellarmino.jpg'),
('08', 'Diego Evaristo Santiago',          '1234', 'Luis de Molina',       'Luis de Molina fue teólogo jesuita español del siglo XVI, conocido por su teoría de la gracia y el libre albedrío llamada Molinismo.',                     'luis_molina.jpg'),
('09', 'Sergio Fuente Fuentes',            '1234', 'Francisco Suarez',     'Francisco Suárez fue filósofo y teólogo jesuita del siglo XVI, considerado uno de los mayores escolásticos y padre del Derecho Internacional.',            'francisco_suarez.jpg'),
('10', 'Javier Garcia Silverio',           '1234', 'Eusebio Kino',         'Eusebio Kino fue misionero jesuita del siglo XVII que exploró y evangelizó el norte de México y el sur de Estados Unidos.',                               'eusebio_kino.jpg'),
('11', 'Abraham Garcia Nevado',            '1234', 'Jose Cardiel',         'José Cardiel fue misionero jesuita español del siglo XVIII que trabajó en las reducciones guaraníes de América del Sur.',                                  'jose_cardiel.jpg'),
('12', 'Angelo Gianpierre Gomez Cardoza',  '1234', 'Juan de Velasco',      'Juan de Velasco fue historiador y misionero jesuita del siglo XVIII, autor de la Historia del Reino de Quito.',                                            'juan_velasco.jpg'),
('13', 'Nicolas Manuel Gonzalez Morera',   'Nico2013#', 'Alberto Hurtado', 'Alberto Hurtado fue sacerdote jesuita chileno del siglo XX, canonizado en 2005, conocido por su incansable labor social con los más pobres.',             'alberto_hurtado.jpg'),
('14', 'Aitor Gragera Martin',             '1234', 'Miguel Pro',           'Miguel Pro fue sacerdote jesuita mexicano mártir del siglo XX, ejecutado en 1927 durante la persecución religiosa y beatificado en 1988.',                  'miguel_pro.jpg'),
('15', 'Hugo Hernandez Royano',            '1234', 'Teilhard de Chardin',  'Pierre Teilhard de Chardin fue sacerdote jesuita y paleontólogo francés del siglo XX, conocido por integrar ciencia y fe en su obra.',                     'teilhard_chardin.jpg'),
('16', 'Teresa Hernandez Sanchez',         '1234', 'Karl Rahner',          'Karl Rahner fue teólogo jesuita alemán del siglo XX, una de las figuras más influyentes del Concilio Vaticano II y la teología moderna.',                  'karl_rahner.jpg'),
('17', 'Lucas Hinchado Espina',            '1234', 'Jon Sobrino',          'Jon Sobrino es teólogo jesuita español radicado en El Salvador, referente de la Teología de la Liberación y defensor de los pobres.',                     'jon_sobrino.jpg'),
('18', 'Francisco Hurtado Guijarro',       '1234', 'Adolfo Nicolas',       'Adolfo Nicolás fue Superior General de la Compañía de Jesús de 2008 a 2016, conocido por su trabajo en educación y diálogo intercultural en Asia.',       'adolfo_nicolas.jpg'),
('19', 'FranciscoJavier Medina Gordillo',  '1234', 'Jorge Mario Bergoglio','Jorge Mario Bergoglio, antes de ser el Papa Francisco, fue Provincial jesuita en Argentina y referente de la Iglesia latinoamericana.',                  'bergoglio.jpg'),
('20', 'Laura Munoz Sanchez',              '1234', 'Bartolome de las Casas','Bartolomé de las Casas fue fraile defensor de los derechos de los indígenas americanos en el siglo XVI, pionero de los derechos humanos.',               'bartolome_casas.jpg'),
('21', 'Sergio Poves Camison',             '1234', 'Rutilio Grande',       'Rutilio Grande fue sacerdote jesuita salvadoreño mártir, asesinado en 1977 por su defensa de los campesinos, beatificado en 2022.',                       'rutilio_grande.jpg'),
('22', 'Sara Rivero Caminero',             '1234', 'Luis Espinal',         'Luis Espinal fue sacerdote jesuita español mártir en Bolivia, periodista y defensor de los derechos humanos, asesinado en 1980.',                         'luis_espinal.jpg'),
('23', 'Ivan Rodriguez Gomez-Landero',     '1234', 'Segundo Galilea',      'Segundo Galilea fue sacerdote y escritor espiritual jesuita chileno del siglo XX, referente de la espiritualidad latinoamericana.',                       'segundo_galilea.jpg'),
('24', 'Daniel Vega Garcia',               '1234', 'Juan Bautista Point',  'Juan Bautista de la Salle fue educador y santo del siglo XVII, fundador de los Hermanos de las Escuelas Cristianas y patrono de los maestros.',           'juan_bautista.jpg'),
('25', 'Rubi Villalon Arranz',             '1234', 'Cesar Jerez',          'César Jerez fue sacerdote jesuita guatemalteco del siglo XX, rector de la Universidad Centroamericana y defensor de los derechos humanos.',               'cesar_jerez.jpg'),
('26', 'Antonio Villareal Moreno',         '1234', 'Fernando Hurtado',     'Fernando Hurtado fue jesuita español del siglo XX dedicado a la educación en colegios de la Compañía de Jesús en España.',                              'fernando_hurtado.jpg');
