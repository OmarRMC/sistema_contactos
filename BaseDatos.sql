
-- persona --
CREATE TABLE persona(
    id_persona INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    paterno VARCHAR(50) NOT NULL,
    materno VARCHAR(50),
    imagen VARCHAR(100) NOT NULL ,
    creado_el TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    estado VARCHAR(15) NOT NULL DEFAULT 'REGISTRADO',
    PRIMARY KEY(id_persona)
    
);



-- usuario --
CREATE TABLE usuario(
    id_usuario INT NOT NULL,
    usuario VARCHAR(50) NOT NULL,
    clave VARCHAR(254) NOT NULL,
    rol VARCHAR(25) NOT NULL,
    creado_el TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    estado VARCHAR(15) NOT NULL DEFAULT 'REGISTRADO',
     PRIMARY KEY(id_usuario),
     CONSTRAINT fk_persona_usuario FOREIGN KEY(id_usuario) REFERENCES persona(id_persona)
);

-- Contactos --

CREATE TABLE contacto(
    id_contacto INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(256) NOT NULL,
    apellido VARCHAR(256) NOT NULL,
    nota TEXT,
    imagen VARCHAR(100) NOT NULL ,
    telefono VARCHAR(10) NOT NULL , 
    id_usuario INT NOT NULL,
    creado_el TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    estado VARCHAR(15) NOT NULL DEFAULT 'REGISTRADO',
    PRIMARY KEY(id_contacto),
    CONSTRAINT fk_contacto_usuario FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario)
);



-- Limpiesa de datos 
--TRUNCATE TABLE tbl_usuarios;

