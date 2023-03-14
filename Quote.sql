#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: m2r64_users
#------------------------------------------------------------

CREATE TABLE m2r64_users(
        id        Int  Auto_increment  NOT NULL ,
        username  Varchar (20) NOT NULL ,
        birthdate Date ,
        email     Varchar (100) NOT NULL ,
        password  Varchar (255) NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: m2r64_categories
#------------------------------------------------------------

CREATE TABLE m2r64_categories(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (255) NOT NULL
	,CONSTRAINT categories_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: m2r64_authors
#------------------------------------------------------------

CREATE TABLE m2r64_authors(
        id             Int  Auto_increment  NOT NULL ,
        name           Varchar (50) NOT NULL ,
        biography      Text NOT NULL ,
        id_m2r64_users Int
	,CONSTRAINT authors_PK PRIMARY KEY (id)

	,CONSTRAINT authors_m2r64_users_FK FOREIGN KEY (id_m2r64_users) REFERENCES m2r64_users(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: m2r64_citations
#------------------------------------------------------------

CREATE TABLE m2r64_citations(
        id                  Int  Auto_increment  NOT NULL ,
        content             Text NOT NULL ,
        year                Int NOT NULL ,
        id_m2r64_categories Int NOT NULL ,
        id_m2r64_authors    Int NOT NULL
	,CONSTRAINT citations_PK PRIMARY KEY (id)

	,CONSTRAINT citations_m2r64_categories_FK FOREIGN KEY (id_m2r64_categories) REFERENCES m2r64_categories(id)
	,CONSTRAINT citations_m2r64_authors0_FK FOREIGN KEY (id_m2r64_authors) REFERENCES m2r64_authors(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: m2r64_images
#------------------------------------------------------------

CREATE TABLE m2r64_images(
        id                 Int  Auto_increment  NOT NULL ,
        link               Varchar (255) NOT NULL ,
        id_m2r64_citations Int NOT NULL
	,CONSTRAINT images_PK PRIMARY KEY (id)

	,CONSTRAINT images_m2r64_citations_FK FOREIGN KEY (id_m2r64_citations) REFERENCES m2r64_citations(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: m2r64_comments
#------------------------------------------------------------

CREATE TABLE m2r64_comments(
        id                 Int  Auto_increment  NOT NULL ,
        date               Datetime NOT NULL ,
        comment            Text NOT NULL ,
        id_m2r64_users     Int NOT NULL ,
        id_m2r64_citations Int NOT NULL
	,CONSTRAINT comments_PK PRIMARY KEY (id)

	,CONSTRAINT comments_m2r64_users_FK FOREIGN KEY (id_m2r64_users) REFERENCES m2r64_users(id)
	,CONSTRAINT comments_m2r64_citations0_FK FOREIGN KEY (id_m2r64_citations) REFERENCES m2r64_citations(id)
)ENGINE=InnoDB;

