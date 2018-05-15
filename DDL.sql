-- DATA DESCRIPTION LANGUAGE :

drop table database hertz2;
create database hertz2;
use hertz2;

create table Categorie(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	nom varchar(50),
	referenceCateg int null,
	foreign key (referenceCateg) references Categorie(ID)
)Engine=InnoDB;

create table Vehicule(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	nom varchar(250),
	pu decimal(10,2),
	idCategorie int,
	idSousCategorie int,
	datyAjout date,
	place int,
	kilometre varchar(50),
	image varchar(50),
	foreign key (idSousCategorie) references Categorie(ID),
	foreign key (idCategorie) references Categorie(ID)
)Engine=InnoDB;

create table Agence(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	nom varchar(50)
)Engine=InnoDB;
	
create table Users(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	nomUser varchar(50),
	prenomUser varchar(50),
	emailUser varchar(50),
	mdpUser varchar(50),
	statusAdmin int
)Engine=InnoDB;

create table Location(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idUser int,
	daty date,
	foreign key (idUser) references Users(ID)
)Engine=InnoDB;

create table LocationDetail(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idLocation int,
	quantite int,
	dateDebut date,
	dateFin date,
	pu decimal(10, 2),
	idVehicule int,
	foreign key (idLocation) references Location(ID),
	foreign key (idVehicule) references Vehicule(ID)
)Engine=InnoDB;

create table BonCommande(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idUser int,
	dateCommande date,
	foreign key (idUser) references Users(ID)
)Engine=InnoDB;

create table BonCommandeDetail(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idBonCommande int,
	idVehicule int,
	quantite int,
	pu decimal(10,2),
	dateDebut date,
	dateFin date,
	idAgenceRetirement int,
	idAgenceRetour int,
	foreign key (idBonCommande) references BonCommande(ID),
	foreign key (idAgenceRetirement) references Agence(ID),
	foreign key (idAgenceRetour) references Agence(ID)
)Engine=InnoDB;

create table BonLivraison(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idUser int,
	idLocation int,
	status int,
	daty date,
	foreign key (idUser) references Users(ID),
	foreign key (idLocation) references Location(ID)
)Engine=InnoDB;

create table BonLivraisonDetail(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idBonLivraison int,
	idAgenceRetirement int,
	prix decimal(10,2),
	dateLivraison date,
	foreign key (idBonLivraison) references BonLivraison(ID),
	foreign key (idAgenceRetirement) references Agence(ID)
)Engine=InnoDB;

create table TVA(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	valeur int
)Engine=InnoDB;

create table TVAHistorique(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idTVA int,
	valeur int,
	daty date,
	foreign key (idTVA) references TVA(ID)
)Engine=InnoDB;

create table Facture(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idBonLivraison int,
	idUser int,
	dateFacture date,
	status int,
	foreign key (idUser) references Users(ID),
	foreign key (idBonLivraison) references BonLivraison(ID)
)Engine=InnoDB;

create table FactureDetail(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idFacture int,
	montantTotal decimal(10,2),
	idTVA int,
	remise int,
	foreign key (idFacture) references Facture(ID),
	foreign key (idTVA) references TVA(ID)
)Engine=InnoDB;

CREATE TABLE ModeDePaiement(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	description varchar(50)
)Engine=InnoDB;

INSERT INTO ModeDePaiement VALUES(0,'Mobile Money');
INSERT INTO ModeDePaiement VALUES(0,'Chèque');
INSERT INTO ModeDePaiement VALUES(0,'Carte');
INSERT INTO ModeDePaiement VALUES(0,'Espèce');

CREATE TABLE ModeDePaiement2(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idmodedepaiement int not null,
	description varchar(50),
	FOREIGN KEY(idmodedepaiement)REFERENCES ModeDePaiement(ID)
)Engine=InnoDB;

INSERT INTO ModeDePaiement2 VALUES(0,1,'Mvola');
INSERT INTO ModeDePaiement2 VALUES(0,2,'Orange money');
INSERT INTO ModeDePaiement2 VALUES(0,3,'Airtel money');

INSERT INTO ModeDePaiement2 VALUES(0,1,'BOA');
INSERT INTO ModeDePaiement2 VALUES(0,2,'BNI');
INSERT INTO ModeDePaiement2 VALUES(0,3,'BMOI');

create table Payement(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idFacture int,
	idUser int,
	daty int,
	status int,
	foreign key (idFacture) references Facture(ID),
	foreign key (idUser) references Users(ID)
)Engine=InnoDB;

create table PayementDetail(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idPayement int,
	idmodedepaiement int,
	idmodedepaiement2 int,
	montant decimal(10,2),
	daty date,
	foreign key (idPayement) references Payement(ID),
	foreign key (idmodedepaiement) references ModeDePaiement(ID),
	foreign key (idmodedepaiement2) references ModeDePaiement2(ID)
)Engine=InnoDB;

