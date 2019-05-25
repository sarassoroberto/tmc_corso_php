CREATE TABLE `app_scuola`.`Studente` 

( 
`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT , 
 `nome` VARCHAR(128) NOT NULL ,  
 `cognome` VARCHAR(128) NOT NULL , 
  `email` VARCHAR(128) NULL ,  
 `classe` INT NOT NULL ,  
 `sezione` CHAR(1) NOT NULL ,    
  PRIMARY KEY  (`id`)
 ) ENGINE = InnoDB;


CREATE TABLE Docente 
( 
id INT (10) UNSIGNED NOT NULL AUTO_INCREMENT , 
    nome VARCHAR(128) NOT NULL ,  
    cognome VARCHAR(128) NOT NULL , 
    email VARCHAR(128) NULL ,  
    classe INT NOT NULL ,  
    sezione CHAR(1) NOT NULL ,    
  
   PRIMARY KEY  (id)
 ) ENGINE = InnoDB;