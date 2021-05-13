DROP DATABASE IF EXISTS prestachope3;
CREATE DATABASE prestachope3;
USE prestachope3;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------

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
                        datePeremption Date NOT NULL ,
                        quantite       Int NOT NULL
    ,CONSTRAINT Produit_PK PRIMARY KEY (idProduit)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

CREATE TABLE categorie(
                          idCategorie Int  Auto_increment  NOT NULL
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
# Table: Appartient
#------------------------------------------------------------

CREATE TABLE Appartient(
                           idProduit   Int NOT NULL ,
                           idCategorie Int NOT NULL
    ,CONSTRAINT Appartient_PK PRIMARY KEY (idProduit,idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commande
#------------------------------------------------------------

CREATE TABLE Commande(
                         idCommande   Int  Auto_increment  NOT NULL ,
                         nbProduit    Int NOT NULL ,
                         montant      Float NOT NULL ,
                         dateCommande TimeStamp NOT NULL ,
                         idClient     Int NOT NULL ,
                         idFacture    Int NOT NULL
    ,CONSTRAINT Commande_PK PRIMARY KEY (idCommande)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: facture
#------------------------------------------------------------

CREATE TABLE facture(
                        idFacture  Int  Auto_increment  NOT NULL ,
                        montant    Float NOT NULL ,
                        idCommande Int NOT NULL
    ,CONSTRAINT facture_PK PRIMARY KEY (idFacture)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ProduitCommande
#------------------------------------------------------------

CREATE TABLE ProduitCommande(
                                idProduit  Int NOT NULL ,
                                idCommande Int NOT NULL
    ,CONSTRAINT ProduitCommande_PK PRIMARY KEY (idProduit,idCommande)
)ENGINE=InnoDB;




ALTER TABLE commentaire
    ADD CONSTRAINT commentaire_Produit0_FK
        FOREIGN KEY (idProduit)
            REFERENCES Produit(idProduit);

ALTER TABLE commentaire
    ADD CONSTRAINT commentaire_Clients1_FK
        FOREIGN KEY (idClient)
            REFERENCES Clients(idClient);

ALTER TABLE Appartient
    ADD CONSTRAINT Appartient_Produit0_FK
        FOREIGN KEY (idProduit)
            REFERENCES Produit(idProduit);

ALTER TABLE Appartient
    ADD CONSTRAINT Appartient_categorie1_FK
        FOREIGN KEY (idCategorie)
            REFERENCES categorie(idCategorie);

ALTER TABLE Commande
    ADD CONSTRAINT Commande_Clients0_FK
        FOREIGN KEY (idClient)
            REFERENCES Clients(idClient);

ALTER TABLE Commande
    ADD CONSTRAINT Commande_facture1_FK
        FOREIGN KEY (idFacture)
            REFERENCES facture(idFacture);

ALTER TABLE Commande
    ADD CONSTRAINT Commande_facture0_AK
        UNIQUE (idFacture);

ALTER TABLE facture
    ADD CONSTRAINT facture_Commande0_FK
        FOREIGN KEY (idCommande)
            REFERENCES Commande(idCommande);

ALTER TABLE facture
    ADD CONSTRAINT facture_Commande0_AK
        UNIQUE (idCommande);

ALTER TABLE ProduitCommande
    ADD CONSTRAINT ProduitCommande_Produit0_FK
        FOREIGN KEY (idProduit)
            REFERENCES Produit(idProduit);

ALTER TABLE ProduitCommande
    ADD CONSTRAINT ProduitCommande_Commande1_FK
        FOREIGN KEY (idCommande)
            REFERENCES Commande(idCommande);
