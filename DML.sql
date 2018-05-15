-- DATA MANIPULATION LANGUAGE :

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