DROP DATABASE IF EXISTS prestachope3;
CREATE DATABASE prestachope3;
USE prestachope3;

CREATE TABLE Clients(
        idClient Int  Auto_increment  NOT NULL ,
        nom      Varchar (30) NOT NULL ,
        prenom   Varchar (30) NOT NULL ,
        pseudo   Varchar (30) NOT NULL ,
        password Varchar (255) NOT NULL ,
        mail     Varchar (100) NOT NULL ,
        adresse  Varchar (50) NOT NULL ,
        cagnotte Float NOT NULL ,
        avatar   Text NOT NULL ,
        isAdmin  Int NOT NULL
	,CONSTRAINT Clients_PK PRIMARY KEY (idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produit
#------------------------------------------------------------

CREATE TABLE Produit(
        idProduit      Int  Auto_increment  NOT NULL ,
        prix           Float NOT NULL ,
        nom            VARCHAR(50) NOT NULL ,
        datePeremption Date NOT NULL ,
        quantite       Int NOT NULL
	,CONSTRAINT Produit_PK PRIMARY KEY (idProduit)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commande
#------------------------------------------------------------

CREATE TABLE Commande(
        idCommande   Int  Auto_increment  NOT NULL ,
        nbProduit    Int NOT NULL ,
        montant      Float NOT NULL ,
        dateCommande TimeStamp NOT NULL ,
        idClient     Int NOT NULL
	,CONSTRAINT Commande_PK PRIMARY KEY (idCommande)

	,CONSTRAINT Commande_Clients_FK FOREIGN KEY (idClient) REFERENCES Clients(idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

CREATE TABLE categorie(
        idCategorie Int  Auto_increment  NOT NULL ,
        nom         VARCHAR(50) NOT NULL
	,CONSTRAINT categorie_PK PRIMARY KEY (idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commentaire
#------------------------------------------------------------

CREATE TABLE commentaire(
        idCommentaire Int  Auto_increment  NOT NULL ,
        content       Text NOT NULL ,
        idProduit     Int NOT NULL ,
        idClient      Int NOT NULL
	,CONSTRAINT commentaire_PK PRIMARY KEY (idCommentaire)

	,CONSTRAINT commentaire_Produit_FK FOREIGN KEY (idProduit) REFERENCES Produit(idProduit)
	,CONSTRAINT commentaire_Clients0_FK FOREIGN KEY (idClient) REFERENCES Clients(idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Entreprise
#------------------------------------------------------------

CREATE TABLE Entreprise(
        idEntreprise Int  Auto_increment  NOT NULL ,
        Tresorie     Float NOT NULL ,
        nbCommande   Int NOT NULL
	,CONSTRAINT Entreprise_PK PRIMARY KEY (idEntreprise)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contient
#------------------------------------------------------------

CREATE TABLE contient(
        idProduit  Int NOT NULL ,
        idCommande Int NOT NULL
	,CONSTRAINT contient_PK PRIMARY KEY (idProduit,idCommande)

	,CONSTRAINT contient_Produit_FK FOREIGN KEY (idProduit) REFERENCES Produit(idProduit)
	,CONSTRAINT contient_Commande0_FK FOREIGN KEY (idCommande) REFERENCES Commande(idCommande)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Appartient
#------------------------------------------------------------

CREATE TABLE Appartient(
        idProduit   Int NOT NULL ,
        idCategorie Int NOT NULL
	,CONSTRAINT Appartient_PK PRIMARY KEY (idProduit,idCategorie)

	,CONSTRAINT Appartient_Produit_FK FOREIGN KEY (idProduit) REFERENCES Produit(idProduit)
	,CONSTRAINT Appartient_categorie0_FK FOREIGN KEY (idCategorie) REFERENCES categorie(idCategorie)
)ENGINE=InnoDB;

