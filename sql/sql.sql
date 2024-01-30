#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
# Table: Contact
#------------------------------------------------------------

CREATE TABLE Contact(
    id      Int Auto_increment NOT NULL,
    name    Varchar(50) NOT NULL,
    email   Varchar(50),  -- Ajout de la colonne email
    message Text NOT NULL,
    CONSTRAINT Contact_PK PRIMARY KEY (id)
) ENGINE=InnoDB;

