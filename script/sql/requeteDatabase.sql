-- --------------------------------------------------------
-- Author : Nathan Chauveau
-- Titre : Create the database
-- Date : 09.06.2022
-- Last Modification : 09.06.2022
-- --------------------------------------------------------


-- Creation of the database 
CREATE DATABASE IF NOT EXISTS `ProjWebLunar`;
USE `ProjWebLunar`;

-- Table Categories
	CREATE TABLE IF NOT EXISTS `ProjWebLunar`.`categories` (
  `idCategories` int NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(15) NOT NULL,
  
  PRIMARY KEY (`idCategories`),
  UNIQUE KEY (`name`) 
)ENGINE= INNODB;

-- Table Membres
CREATE TABLE IF NOT EXISTS `ProjWebLunar`.`members` (
  `idUsers` int NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `types_idTypes` int NOT NULL,
  PRIMARY KEY (`idUsers`),
  UNIQUE KEY (`email`) 
) ENGINE= INNODB;

-- Table Articles
CREATE TABLE IF NOT EXISTS `ProjWebLunar`.`articles` (
  `idArticles` int NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(30) NOT NULL,
  `description` VARCHAR(250) NOT NULL,
  `price` DECIMAL(3,2) NOT NULL,
  `image` VARCHAR(100) NOT NULL,
  `categories_ID` INT NOT NULL,
  `clients_ID` INT NOT NULL,
  `clients_ID_1` INT NULL, 
	PRIMARY KEY (`idArticles`),
	UNIQUE KEY (`title`,`description`),
  	
	INDEX `fk_Articles_Categories1_idx` (`categories_ID` ASC),
   CONSTRAINT `fk_Articles_Categories1_idx`
 		FOREIGN KEY (`categories_ID`)
		REFERENCES `ProjWebLunar`.`categories` (`idCategories`)
		ON DELETE NO ACTION 
		ON UPDATE NO ACTION,
		
	INDEX `fk_Articles_Clients1_idx` (`clients_ID` ASC),
   CONSTRAINT `fk_Articles_Clients1_idx`
 		FOREIGN KEY (`clients_ID`)
		REFERENCES `ProjWebLunar`.`members` (`idUsers`)
		ON DELETE NO ACTION 
		ON UPDATE NO ACTION,
	
	INDEX `fk_Articles_Clients2_idx` (`clients_ID_1` ASC),
   CONSTRAINT `fk_Articles_Clients2_idx`
 		FOREIGN KEY (`clients_ID_1`)
		REFERENCES `ProjWebLunar`.`members` (`idUsers`)
		ON DELETE NO ACTION 
		ON UPDATE NO ACTION
	) ENGINE= INNODB;
	

