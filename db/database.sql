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
  `Username` VARCHAR(50) NOT NULL ,
  `Password` VARCHAR(50) NOT NULL ,
  `Account_Type` ENUM('Husai Administrator','Husai Customer') NOT NULL ,
  `Status` ENUM('Activated','Deactivated') NOT NULL ,
  `Name` VARCHAR(100) NOT NULL ,
  `Address` VARCHAR(500) NOT NULL ,
  `Birthdate` DATE NOT NULL ,
  `Sex` VARCHAR(20) NOT NULL ,
  `Telephone` VARCHAR(50) NULL ,
  `Business_Address` VARCHAR(500) NULL ,
  `Business_Phone` VARCHAR(50) NULL ,
  `Civil_Status` VARCHAR(50) NULL ,
  `Occupation` VARCHAR(100) NULL ,
  `Referred_by` VARCHAR(100) NULL ,
  PRIMARY KEY (`Username`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `husai`.`Product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `husai`.`Product` ;

CREATE  TABLE IF NOT EXISTS `husai`.`Product` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Product_Name` VARCHAR(500) NOT NULL ,
  `Description` VARCHAR(500) NOT NULL ,
  `Price` DECIMAL(50,2) NOT NULL ,
  `Status` ENUM('Available','Not Available') NOT NULL ,
  `Category` VARCHAR(100) NOT NULL ,
  `File_Path` VARCHAR(500) NULL ,
  `Discounted` TINYINT(1)  NULL ,
  `Discount_From` DATE NULL ,
  `Discount_To` DATE NULL ,
  `Discount` DECIMAL(10,2) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `husai`.`Service`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `husai`.`Service` ;

CREATE  TABLE IF NOT EXISTS `husai`.`Service` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Service_Name` VARCHAR(200) NOT NULL ,
  `Description` VARCHAR(500) NOT NULL ,
  `Status` VARCHAR(50) NOT NULL ,
  `Charge` DECIMAL(50,2) NOT NULL ,
  `Category` VARCHAR(100) NOT NULL ,
  `File_Path` VARCHAR(500) NULL ,
  `Discounted` TINYINT(1)  NULL ,
  `Discount_From` DATE NULL ,
  `Discount_To` DATE NULL ,
  `Discount` DECIMAL(10,2) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `husai`.`Availed_Service`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `husai`.`Availed_Service` ;

CREATE  TABLE IF NOT EXISTS `husai`.`Availed_Service` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Date_Availed` DATE NOT NULL ,
  `Therapist` VARCHAR(100) NULL ,
  `Remarks` VARCHAR(500) NULL ,
  `Username` VARCHAR(50) NOT NULL ,
  `Service_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Availed_Services_Service1` (`Service_id` ASC) ,
  INDEX `fk_Availed_Services_Account1` (`Username` ASC) ,
  CONSTRAINT `fk_Availed_Services_Service1`
    FOREIGN KEY (`Service_id` )
    REFERENCES `husai`.`Service` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Availed_Services_Account1`
    FOREIGN KEY (`Username` )
    REFERENCES `husai`.`Account` (`Username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `husai`.`Bought_Product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `husai`.`Bought_Product` ;

CREATE  TABLE IF NOT EXISTS `husai`.`Bought_Product` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Date_Bought` DATE NOT NULL ,
  `Quantity` INT NOT NULL ,
  `Remarks` VARCHAR(500) NULL ,
  `Username` VARCHAR(50) NOT NULL ,
  `Product_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_Bought_Products_Account1` (`Username` ASC) ,
  INDEX `fk_Bought_Product_Product1` (`Product_id` ASC) ,
  CONSTRAINT `fk_Bought_Products_Account1`
    FOREIGN KEY (`Username` )
    REFERENCES `husai`.`Account` (`Username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Bought_Product_Product1`
    FOREIGN KEY (`Product_id` )
    REFERENCES `husai`.`Product` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `husai`.`Husai`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `husai`.`Husai` ;

CREATE  TABLE IF NOT EXISTS `husai`.`Husai` (
  `Name` VARCHAR(200) NOT NULL ,
  `Address` VARCHAR(500) NOT NULL ,
  `Contact_Nos` VARCHAR(500) NOT NULL ,
  `Operating_Schedule` VARCHAR(200) NOT NULL ,
  `Email` VARCHAR(200) NOT NULL ,
  `Website` VARCHAR(200) NULL ,
  `Mission` VARCHAR(800) NULL ,
  `Vision` VARCHAR(800) NULL ,
  PRIMARY KEY (`Name`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `husai`.`Log`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `husai`.`Log` ;

CREATE  TABLE IF NOT EXISTS `husai`.`Log` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Description` VARCHAR(45) NOT NULL ,
  `Date` VARCHAR(45) NOT NULL ,
  `Username` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `husai`.`News`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `husai`.`News` ;

CREATE  TABLE IF NOT EXISTS `husai`.`News` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Title` VARCHAR(200) NOT NULL ,
  `Description` VARCHAR(500) NOT NULL ,
  `File_Path` VARCHAR(500) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `husai`.`Husai_Branch`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `husai`.`Husai_Branch` ;

CREATE  TABLE IF NOT EXISTS `husai`.`Husai_Branch` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(45) NOT NULL ,
  `Address` VARCHAR(500) NOT NULL ,
  `Contact_Nos` VARCHAR(200) NOT NULL ,
  `Operating_Schedule` VARCHAR(200) NOT NULL ,
  `Visibility` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `husai`.`Member_Get`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `husai`.`Member_Get` ;

CREATE  TABLE IF NOT EXISTS `husai`.`Member_Get` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Description` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `husai`.`Member_Avail`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `husai`.`Member_Avail` ;

CREATE  TABLE IF NOT EXISTS `husai`.`Member_Avail` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `Description` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO ACCOUNT VALUES('admin', 'admin', 'Husai Administrator', 'Activated', ' ', ' ', '2001-01-01', 'Male', '', '', '', 'Single', '', '' );

INSERT INTO MEMBER_GET(DESCRIPTION) VALUES
('10% Discount on food at Paru-Parong Bukid'),
('20% Discount on their Tree House and Rest House'),
('10% Discount on Kayaking');

INSERT INTO MEMBER_AVAIL(DESCRIPTION) VALUES
('30% Discount on Salon Services'),
('15% Discount on Salon Products'),
('40% Discount on other Facial and Massage Services'),
('40% Discount on Foot Spa');

INSERT INTO HUSAI(NAME, ADDRESS, CONTACT_NOS, OPERATING_SCHEDULE, EMAIL) VALUES
('Husai Health and Beauty Haven, Inc.',
'4th Flr. UYTINGKOC Bldg. Avenida Veteranos, 6500, Tacloban City, Philippines',
'(053)5238415 or 09088887230',
'Mon-Sun: (9:00am-9:00pm)',
' ');

INSERT INTO HUSAI_BRANCH(NAME, ADDRESS, CONTACT_NOS, OPERATING_SCHEDULE, VISIBILITY) VALUES
('Carigara Branch',
'Baybay, Real St., Carigara',
'(053)331-1218',
'Mon-Sun: (9:00am-8:00pm)',
'Visible ');
