CREATE SCHEMA `lista` DEFAULT CHARACTER SET utf8mb4 ;

CREATE TABLE `lista`.`t_lista` (
  `id_persona` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(245) NOT NULL,
  `apellidoPaterno` VARCHAR(245) NOT NULL,
  `apellidoMaterno` VARCHAR(245) NOT NULL,
  `sexo` VARCHAR(245) NOT NULL,
  `fechaNacimiento` DATE NOT NULL,
  `fechaInsert` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id_persona`));