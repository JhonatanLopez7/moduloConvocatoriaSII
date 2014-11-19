-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Convocatoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Convocatoria` (
  `tipo_convocatoria` VARCHAR(100) NULL,
  `subtipo_convocatoria` VARCHAR(100) NULL,
  `convocatoria_programa` VARCHAR(100) NULL,
  `tipo_financiacion` VARCHAR(100) NOT NULL,
  `fecha_apertura` DATE NOT NULL,
  `fecha_cierre` DATE NOT NULL,
  `fecha_resultado_preliminar` DATE NULL,
  `fecha_resultado_definitivo` DATE NULL,
  `convocatoria` VARCHAR(100) NOT NULL,
  `codigo_convocatoria` INT NOT NULL,
  `descripcion` VARCHAR(250) NULL,
  `objeto` VARCHAR(150) NULL,
  `dirigido_a` VARCHAR(100) NULL,
  `programa_base` VARCHAR(100) NULL,
  `instituciones_financiadoras` VARCHAR(100) NULL,
  `maximo_porcentaje_financiar` DOUBLE NULL,
  `minimo_porcentaje_financiar` DOUBLE NULL,
  `minimo_porcentaje_contrapartida_dinero` DOUBLE NULL,
  `minimo_porcentaje_contrapartida_especie` DOUBLE NULL,
  `monto_maximo_financiar` DOUBLE NULL,
  `numero_maximo_meses_proyecto` INT NULL,
  `monto_total_convocatoria` DOUBLE NULL,
  `convenio` VARCHAR(100) NULL,
  `cdp` VARCHAR(100) NULL,
  `fecha_cdp` DATE NULL,
  `cdr` VARCHAR(100) NULL,
  `fecha_cdr` DATE NULL,
  `url` VARCHAR(100) NULL,
  `linea_investigacion` VARCHAR(100) NULL,
  `postulacion_anticipada` VARCHAR(100) NULL,
  `definir_estructura_convocatoria` VARCHAR(100) NULL,
  `numero_proyecto_inversion` INT NULL,
  `vigencia` VARCHAR(100) NULL,
  PRIMARY KEY (`codigo_convocatoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Anexo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Anexo` (
  `nombre` VARCHAR(100) NULL,
  `ruta` VARCHAR(200) NULL,
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `convoctoria` INT NULL,
  `fecha` DATE NULL,
  PRIMARY KEY (`codigo`),
  INDEX `convocatoria_idx` (`convoctoria` ASC),
  CONSTRAINT `convocatoria`
    FOREIGN KEY (`convoctoria`)
    REFERENCES `mydb`.`Convocatoria` (`codigo_convocatoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Palabras_clave`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Palabras_clave` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `estado` VARCHAR(100) NULL,
  `cantidad` INT NULL,
  `convocatoria_fk` INT NULL,
  PRIMARY KEY (`codigo`),
  INDEX `convocatoria_idx` (`convocatoria_fk` ASC),
  CONSTRAINT `convocatoria_FK`
    FOREIGN KEY (`convocatoria_fk`)
    REFERENCES `mydb`.`Convocatoria` (`codigo_convocatoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Rubro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Rubro` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `rubro` VARCHAR(100) NULL,
  `operacion` VARCHAR(45) NULL,
  `porcentaje` DOUBLE NULL,
  `variable_de_control` VARCHAR(100) NULL,
  `rubro_convocatoria` INT NULL,
  PRIMARY KEY (`codigo`),
  INDEX `rubro_convocatoria_idx` (`rubro_convocatoria` ASC),
  CONSTRAINT `rubro_convocatoria`
    FOREIGN KEY (`rubro_convocatoria`)
    REFERENCES `mydb`.`Convocatoria` (`codigo_convocatoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
