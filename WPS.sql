DROP TABLE IF EXISTS Customer;
DROP TABLE IF EXISTS Reseller;

CREATE TABLE Customer (
       cUserName VARCHAR(20) NOT NULL,
       cName VARCHAR(255) NOT NULL, 
       cTelephone INT NOT NULL, 
       cEmail VARCHAR(255) NOT NULL,
       cAddress VARCHAR(255) NOT NULL,
       cPostCode CHAR(7) NOT NULL,
       cSpecialisation VARCHAR(255) NOT NULL,
       CONSTRAINT pk_customer PRIMARY KEY (cUserName)
) ENGINE = InnoDB;
CREATE TABLE Reseller (
       rUserName VARCHAR(20) NOT NULL,
       rName VARCHAR(255) NOT NULL, 
       rTelephone INT NOT NULL, 
       rEmail VARCHAR(255) NOT NULL,
       rAddress VARCHAR(255) NOT NULL,
       rPostCode CHAR(7) NOT NULL,
       rSpecialisation VARCHAR(255) NOT NULL,
       CONSTRAINT pk_assessment PRIMARY KEY (rUserName)
) ENGINE = InnoDB;