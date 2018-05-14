drop database hertz2;
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
	foreign key (idUser) references Users(ID)
)Engine=InnoDB;

create table LocationDetail(
	ID INTEGER NOT NULL AUTO_INCREMENT primary key,
	idLocation int,
	quantite int,
	dateDebut date,
	dateFin date,
	idAgenceRetirement int,
	idAgenceRetour int,
	pu decimal(10, 2),
	idVehicule int,
	foreign key (idLocation) references Location(ID),
	foreign key (idVehicule) references Vehicule(ID),
	foreign key (idAgenceRetirement) references Agence(ID),
	foreign key (idAgenceRetour) references Agence(ID)
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

insert into Categorie values(0,'locations',null);
insert into Categorie values(0,'ventes',null);	
	
insert into Categorie values(0,'Voiture de tourisme',1);
insert into Categorie values(0,'Modele Fun',1);
insert into Categorie values(0,'Green collection',1);
insert into Categorie values(0,'Prestige',1);
insert into Categorie values(0,'Family collection',1);
insert into Categorie values(0,'Utilitaire',1);
insert into Categorie values(0,'Special',1);

insert into Categorie values(0,'Prestige',2);
insert into Categorie values(0,'Family collection',2);
insert into Categorie values(0,'Utilitaire',2);
insert into Categorie values(0,'Special',2);



insert into Vehicule values(0,'Fiat 500', 10000, 1, 3, '2018-11-09', 4, '16000km','vt1.jpg');
insert into Vehicule values(0,'Renault Clio', 11000, 1, 3, '2017-11-09', 4, '120000km', 'vt2.jpg');
insert into Vehicule values(0,'Nissan Juke Winter', 13000, 1, 3, '2017-11-19', 4, '122000km', 'vt3.jpg');
insert into Vehicule values(0,'Renault Captur', 20000, 1, 3, '2017-12-29', 5, '50000km', 'vt4.jpg');
insert into Vehicule values(0,'Volkswagen Golf', 21000, 1, 3, '2017-11-19', 4, '30000km', 'vt5.jpg');
insert into Vehicule values(0,'Peugeot 508', 23000, 1, 3, '2017-12-10', 7, '129000km', 'vt6.jpg');
insert into Vehicule values(0,'Peugeot 2008', 23000, 1, 3, '2017-11-22', 5, '120000km', 'vt7.jpg');


insert into Vehicule values(0,'Fiat 500C', 120000, 1, 4, '2018-01-23', 4, '220000km', 'vf1.jpg');
insert into Vehicule values(0,'Citroen DS3 Softroof', 50000, 1, 4, '2017-10-12', 4, '320000km', 'vf2.jpg');
insert into Vehicule values(0,'Mini Cooper 5', 20000, 1, 4, '2018-01-12', 4, '90000km', 'vf3.jpg');
insert into Vehicule values(0,'Mercedes Class ', 300000, 1, 4, '2017-11-02', 4, '12000km', 'vf4.jpg');
insert into Vehicule values(0,'Audi Q2', 50000, 1, 4, '2017-12-15', 4, '110000km', 'vf5.jpg');

INSERT INTO Users values(0,'Lock to hang', 'Angelo','parkedenne@gmail.com',sha1('qwerty'), 0);
INSERT INTO Users values(0,'Lock', 'Julio','julio@gmail.com',sha1('azerty'), 0);
INSERT INTO Users values(0,'Admin', 'admin','admin@gmail.com',sha1('admin'), 1);

INSERT INTO Agence VALUES(0,'Andoharanofotsy');
INSERT INTO Agence VALUES(0,'Ambanidia');
INSERT INTO Agence VALUES(0,'Ambohipo');
INSERT INTO Agence VALUES(0,'Analakely');
INSERT INTO Agence VALUES(0,'Tamjobato');
INSERT INTO Agence VALUES(0,'Soarano');
INSERT INTO Agence VALUES(0,'Mahamasina');
INSERT INTO Agence VALUES(0,'Itaosy');

INSERT INTO TVA values(0, 20);

