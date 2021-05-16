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
                        cagnotte Float NOT NULL DEFAULT 500 ,
                        isAdmin  Int NOT NULL DEFAULT 0
    ,CONSTRAINT Clients_PK PRIMARY KEY (idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

CREATE TABLE categorie(
                          idCategorie Int  Auto_increment  NOT NULL ,
                          nom         Varchar (20) NOT NULL
    ,CONSTRAINT categorie_PK PRIMARY KEY (idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produit
#------------------------------------------------------------

CREATE TABLE Produit(
                        idProduit   Int  Auto_increment  NOT NULL ,
                        nom         Text NOT NULL ,
                        photo       Text NOT NULL ,
                        prix        Float NOT NULL ,
                        quantite    Int NOT NULL ,
                        description Text NOT NULL ,
                        idCategorie Int NOT NULL
    ,CONSTRAINT Produit_PK PRIMARY KEY (idProduit)
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
# Table: Commande
#------------------------------------------------------------

CREATE TABLE Commande(
                         idCommande Int  Auto_increment  NOT NULL ,
                         idClient   Int NOT NULL
    ,CONSTRAINT Commande_PK PRIMARY KEY (idCommande)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: facture
#------------------------------------------------------------

CREATE TABLE facture(
                        idFacture  Int  Auto_increment  NOT NULL ,
                        montant    Float NOT NULL ,
                        idCommande Int NOT NULL,
                        date            DATETIME NOT NULL
    ,CONSTRAINT facture_PK PRIMARY KEY (idFacture)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ProduitCommande
#------------------------------------------------------------

CREATE TABLE ProduitCommande(
                                idProduit  Int NOT NULL ,
                                idCommande Int NOT NULL ,
                                quantite   Int NOT NULL
    ,CONSTRAINT ProduitCommande_PK PRIMARY KEY (idProduit,idCommande)
)ENGINE=InnoDB;




ALTER TABLE Produit
    ADD CONSTRAINT Produit_categorie0_FK
        FOREIGN KEY (idCategorie)
            REFERENCES categorie(idCategorie);

ALTER TABLE commentaire
    ADD CONSTRAINT commentaire_Produit0_FK
        FOREIGN KEY (idProduit)
            REFERENCES Produit(idProduit);

ALTER TABLE commentaire
    ADD CONSTRAINT commentaire_Clients1_FK
        FOREIGN KEY (idClient)
            REFERENCES Clients(idClient);

ALTER TABLE Commande
    ADD CONSTRAINT Commande_Clients0_FK
        FOREIGN KEY (idClient)
            REFERENCES Clients(idClient);

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


INSERT INTO categorie(idcategorie, nom)
VALUES('1','biere');

INSERT INTO categorie(idcategorie, nom)
VALUES('2','encas');

INSERT INTO Produit (nom, prix, quantite, photo, description,idCategorie)
VALUES ('Chouffe', '8', '50', 'assets/img/chouffe.png', 'une chouffe de region','1'),
('Blonde', '7', '50', 'assets/img/blonde.png', 'une chouffe de region','1');

INSERT INTO Produit (nom, prix, quantite, photo, description,idCategorie)
VALUES ('Springles', '2', '50', 'assets/img/pringles.png', 'Vous vous laisserez tenter','2');

INSERT INTO clients (nom,prenom,pseudo,password,mail,adresse,cagnotte,isAdmin)
VALUES ('admin','admin','admin','d033e22ae348aeb5660fc2140aec35850c4da997','admin@gmail.com','12 rue Leon Blum',500,1),
       ('user','user','user','12dea96fec20593566ab75692c9949596833adc9','user@gmail.com','11 rue Leon Blum',500,0);




