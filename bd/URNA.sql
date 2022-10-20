-- MySQL Script generated by MySQL Workbench
-- Thu Oct 20 12:13:04 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Urna
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Urna
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Urna` DEFAULT CHARACTER SET utf8 ;
USE `Urna` ;

-- -----------------------------------------------------
-- Table `Urna`.`acessos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Urna`.`acessos` (
  `AcessoID` INT NOT NULL,
  `Nome` VARCHAR(150) NOT NULL,
  `Usuario` VARCHAR(45) NOT NULL,
  `Senha` VARCHAR(255) NOT NULL,
  `Excluido` CHAR(1) NOT NULL,
  PRIMARY KEY (`AcessoID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Urna`.`Partidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Urna`.`Partidos` (
  `partidosID` INT NOT NULL,
  `Nome` VARCHAR(160) NOT NULL,
  `Numero` INT NOT NULL,
  `Sigla` VARCHAR(7) NOT NULL,
  PRIMARY KEY (`partidosID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Urna`.`cargos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Urna`.`cargos` (
  `CargoID` INT NOT NULL,
  `Nome` VARCHAR(255) NOT NULL,
  `Digitos` INT NOT NULL,
  `Suplente` CHAR(1) NOT NULL,
  `Vice` CHAR(1) NOT NULL,
  `Excluido` CHAR(1) NOT NULL,
  PRIMARY KEY (`CargoID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Urna`.`candidatos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Urna`.`candidatos` (
  `CandidatosID` INT NOT NULL,
  `Nome` VARCHAR(200) NOT NULL,
  `Datadenascimento` DATETIME NOT NULL,
  `Numero` INT(5) NOT NULL,
  `ViceSuplente1Nome` VARCHAR(255) NOT NULL,
  `ViceSuplente1Foto` VARCHAR(255) NULL,
  `ViceSuplente2Nome` VARCHAR(255) NULL,
  `ViceSuplente2Foto` VARCHAR(255) NOT NULL,
  `Ano` YEAR NOT NULL,
  `Excluido` TINYINT NOT NULL,
  PRIMARY KEY (`CandidatosID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Urna`.`eleitores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Urna`.`eleitores` (
  `EleitorID` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(400) NOT NULL,
  `Estado` VARCHAR(2) NOT NULL,
  `Zona` VARCHAR(4) NOT NULL,
  `Secao` VARCHAR(4) NOT NULL,
  `Incricao` VARCHAR(12) NOT NULL,
  `Datadenascimento` DATETIME NOT NULL,
  `Morto` CHAR(1) NOT NULL,
  `Cancelado` CHAR(1) NOT NULL,
  PRIMARY KEY (`EleitorID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Urna`.`eleicoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Urna`.`eleicoes` (
  `EleicaoID` INT NOT NULL,
  `Ano` DATE NOT NULL,
  `Tipo` CHAR(1) NOT NULL,
  `Data` DATE NOT NULL,
  `HoraInicio` TIME NOT NULL,
  `HoraFim` TIME NOT NULL,
  `Excluido` TINYINT(1) NOT NULL,
  PRIMARY KEY (`EleicaoID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Urna`.`votoeleitor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Urna`.`votoeleitor` (
  `VotoEleitorID` INT NOT NULL AUTO_INCREMENT,
  `Eleitorincricao` VARCHAR(12) NOT NULL,
  `DataHora` DATETIME NOT NULL,
  `Ano` YEAR NOT NULL,
  `Zona` VARCHAR(4) NOT NULL,
  `Estado` CHAR(2) NOT NULL,
  `Secao` VARCHAR(4) NOT NULL,
  `EleicaoID` INT NOT NULL,
  `ImportadorID` INT NOT NULL,
  PRIMARY KEY (`VotoEleitorID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Urna`.`votocandidato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Urna`.`votocandidato` (
  `votocandidatoID` INT NOT NULL,
  `VotoDepestadual` VARCHAR(4) NOT NULL,
  `VotoDepfederal` VARCHAR(5) NOT NULL,
  `Votogovernador` VARCHAR(2) NOT NULL,
  `Votosenador` VARCHAR(3) NOT NULL,
  `Votopresidente` VARCHAR(2) NOT NULL,
  `Estado` VARCHAR(45) NOT NULL,
  `Zona` VARCHAR(45) NOT NULL,
  `Secao` VARCHAR(45) NOT NULL,
  `EleicaoID` INT NOT NULL,
  `DataHora` DATETIME NOT NULL,
  `ImportadorID` INT NOT NULL,
  PRIMARY KEY (`votocandidatoID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Urna`.`importador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Urna`.`importador` (
  `ImportadorID` INT NOT NULL AUTO_INCREMENT,
  `DataHora` DATETIME NOT NULL,
  `Arquivo` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`ImportadorID`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
