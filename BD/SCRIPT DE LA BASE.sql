-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema seraptiket
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema seraptiket
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `seraptiket` DEFAULT CHARACTER SET latin1 ;
USE `seraptiket` ;

-- -----------------------------------------------------
-- Table `seraptiket`.`ticket_prioridades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seraptiket`.`ticket_prioridades` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT,
  `Prioridad` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE INDEX `Nivel` (`Prioridad` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `seraptiket`.`empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seraptiket`.`empresas` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(32) NOT NULL,
  `Direccion` VARCHAR(100) NULL,
  `Telefono` VARCHAR(16) NULL,
  `Sitio_Web` VARCHAR(60) NULL,
  `Representante` VARCHAR(100) NULL,
  PRIMARY KEY (`Id`),
  UNIQUE INDEX `IdEmpresa` (`Id` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `seraptiket`.`ticket_estados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seraptiket`.`ticket_estados` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT,
  `Estado` VARCHAR(64) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE INDEX `ID` (`Id` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `seraptiket`.`Roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seraptiket`.`Roles` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT,
  `Rol` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `seraptiket`.`ticket_tipos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seraptiket`.`ticket_tipos` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT,
  `Tipo` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE INDEX `Tipo` (`Tipo` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `seraptiket`.`departamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seraptiket`.`departamentos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` INT NOT NULL,
  `empresas_Id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_departamentos_empresas1_idx` (`empresas_Id` ASC),
  CONSTRAINT `fk_departamentos_empresas1`
    FOREIGN KEY (`empresas_Id`)
    REFERENCES `seraptiket`.`empresas` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `seraptiket`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seraptiket`.`usuarios` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(64) NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `Apellido` VARCHAR(100) NOT NULL,
  `cargo` VARCHAR(100) NULL,
  `correo` VARCHAR(100) NOT NULL,
  `telefono` VARCHAR(16) NULL,
  `fecha_creacion` DATETIME NOT NULL,
  `Roles_Id` INT(11) NOT NULL,
  `departamentos_id` INT NOT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_usuarios_Roles1_idx` (`Roles_Id` ASC),
  INDEX `fk_usuarios_departamentos1_idx` (`departamentos_id` ASC),
  CONSTRAINT `fk_usuarios_Roles1`
    FOREIGN KEY (`Roles_Id`)
    REFERENCES `seraptiket`.`Roles` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_departamentos1`
    FOREIGN KEY (`departamentos_id`)
    REFERENCES `seraptiket`.`departamentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `seraptiket`.`tickets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seraptiket`.`tickets` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT,
  `Creado` DATETIME NOT NULL,
  `Asunto` VARCHAR(100) NOT NULL,
  `Descripcion` VARCHAR(300) NOT NULL,
  `Solucion` VARCHAR(255) NULL,
  `Tecnico` VARCHAR(15) NULL,
  `Acepta` VARCHAR(32) NULL,
  `Modificado` DATETIME NULL,
  `Ultima_Actualizacion` DATETIME NULL,
  `Cerrado` DATETIME NULL,
  `Re_Abierto` DATETIME NULL,
  `Origen` ENUM('Web','Email','Phone','API','Other') NULL,
  `ticket_prioridades_Id` INT(11) NOT NULL,
  `ticket_estados_Id` INT(11) NOT NULL,
  `ticket_tipos_Id` INT(11) NOT NULL,
  `usuarios_Id` INT(11) NOT NULL,
  `departamentos_id` INT NOT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_tickets_ticket_prioridades1_idx` (`ticket_prioridades_Id` ASC),
  INDEX `fk_tickets_ticket_estados1_idx` (`ticket_estados_Id` ASC),
  INDEX `fk_tickets_ticket_tipos1_idx` (`ticket_tipos_Id` ASC),
  INDEX `fk_tickets_usuarios1_idx` (`usuarios_Id` ASC),
  INDEX `fk_tickets_departamentos1_idx` (`departamentos_id` ASC),
  CONSTRAINT `fk_tickets_ticket_prioridades1`
    FOREIGN KEY (`ticket_prioridades_Id`)
    REFERENCES `seraptiket`.`ticket_prioridades` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tickets_ticket_estados1`
    FOREIGN KEY (`ticket_estados_Id`)
    REFERENCES `seraptiket`.`ticket_estados` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tickets_ticket_tipos1`
    FOREIGN KEY (`ticket_tipos_Id`)
    REFERENCES `seraptiket`.`ticket_tipos` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tickets_usuarios1`
    FOREIGN KEY (`usuarios_Id`)
    REFERENCES `seraptiket`.`usuarios` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tickets_departamentos1`
    FOREIGN KEY (`departamentos_id`)
    REFERENCES `seraptiket`.`departamentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 959
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `seraptiket`.`ticket_progresos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `seraptiket`.`ticket_progresos` (
  `Id` INT(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` VARCHAR(255) NOT NULL,
  `Fecha_Progreso` DATETIME NOT NULL,
  `tickets_Id` INT(11) NOT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_ticket_progresos_tickets1_idx` (`tickets_Id` ASC),
  CONSTRAINT `fk_ticket_progresos_tickets1`
    FOREIGN KEY (`tickets_Id`)
    REFERENCES `seraptiket`.`tickets` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 42
DEFAULT CHARACTER SET = latin1;

CREATE USER 'admin' IDENTIFIED BY 'admin';

GRANT ALL ON `seraptiket`.* TO 'admin';

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
