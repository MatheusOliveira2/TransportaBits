-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema TransportaBits
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema TransportaBits
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `TransportaBits` DEFAULT CHARACTER SET utf8 ;
USE `TransportaBits` ;

-- -----------------------------------------------------
-- Table `TransportaBits`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TransportaBits`.`Cliente` (
  `CNPJ` BIGINT(14) NOT NULL,
  `Email` VARCHAR(40) NULL DEFAULT NULL,
  `Endereco` VARCHAR(45) NULL DEFAULT NULL,
  `Senha` VARCHAR(20) NULL DEFAULT NULL,
  PRIMARY KEY (`CNPJ`),
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `TransportaBits`.`Veiculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TransportaBits`.`Veiculo` (
  `Placa` CHAR(7) NOT NULL,
  `Modelo` VARCHAR(20) NOT NULL,
  `Chassi` CHAR(17) NOT NULL,
  `Cor` VARCHAR(12) NOT NULL,
  `Ano` YEAR NOT NULL,
  PRIMARY KEY (`Placa`),
  UNIQUE INDEX `Chassi_UNIQUE` (`Chassi` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `TransportaBits`.`Motorista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TransportaBits`.`Motorista` (
  `CNH` BIGINT(11) NOT NULL,
  `Nome` VARCHAR(40) NOT NULL,
  `Veiculo_Placa` CHAR(7) NOT NULL,
  `Cliente_CNPJ` BIGINT(14) NOT NULL,
  PRIMARY KEY (`CNH`, `Veiculo_Placa`, `Cliente_CNPJ`),
  INDEX `fk_Motorista_Veiculo1_idx` (`Veiculo_Placa` ASC),
  INDEX `fk_Motorista_Cliente1_idx` (`Cliente_CNPJ` ASC),
  CONSTRAINT `fk_Motorista_Veiculo1`
    FOREIGN KEY (`Veiculo_Placa`)
    REFERENCES `TransportaBits`.`Veiculo` (`Placa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Motorista_Cliente1`
    FOREIGN KEY (`Cliente_CNPJ`)
    REFERENCES `TransportaBits`.`Cliente` (`CNPJ`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `TransportaBits`.`Rastreador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TransportaBits`.`Rastreador` (
  `NSerie` INT(10) NOT NULL,
  `Modelo` VARCHAR(12) NULL DEFAULT NULL,
  `Veiculo_Placa` CHAR(7) NOT NULL,
  `Cliente_CNPJ` BIGINT(14) NOT NULL,
  PRIMARY KEY (`NSerie`, `Veiculo_Placa`, `Cliente_CNPJ`),
  INDEX `fk_Rastreador_Veiculo1_idx` (`Veiculo_Placa` ASC),
  INDEX `fk_Rastreador_Cliente1_idx` (`Cliente_CNPJ` ASC),
  CONSTRAINT `fk_Rastreador_Veiculo1`
    FOREIGN KEY (`Veiculo_Placa`)
    REFERENCES `TransportaBits`.`Veiculo` (`Placa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Rastreador_Cliente1`
    FOREIGN KEY (`Cliente_CNPJ`)
    REFERENCES `TransportaBits`.`Cliente` (`CNPJ`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
