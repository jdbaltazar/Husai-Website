SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `husai` ;
CREATE SCHEMA IF NOT EXISTS `husai` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `husai` ;

-- -----------------------------------------------------
-- Table `husai`.`Account`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `husai`.`Account` ;

CREATE  TABLE IF NOT EXISTS `husai`.`Account` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(100) NOT NULL ,
  `Address` VARCHAR(500) NOT NULL ,
  `Birthdate` DATE NOT NULL ,
  `Sex` VARCHAR(20) NOT NULL ,
  `Telephone` VARCHAR(50) NULL ,
  `Businesss_Address` VARCHAR(500) NULL ,
  `Business_Phone` VARCHAR(50) NULL ,
  `Civil_Status` VARCHAR(50) NULL ,
  `Occupation` VARCHAR(100) NULL ,
  `Referred_by` VARCHAR(100) NULL ,
  `Username` VARCHAR(50) NOT NULL ,
  `Password` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
