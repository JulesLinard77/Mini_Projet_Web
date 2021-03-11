DROP TABLE IF EXISTS proprietaire;
DROP TABLE IF EXISTS lego;

CREATE TABLE proprietaire(
	id_proprio INTEGER,
	prenom_proprio VARCHAR(20) CONSTRAINT nn_prenom NOT NULL,
	nom_proprio VARCHAR(20) CONSTRAINT nn_nom NOT NULL,
	ville_proprio VARCHAR(20) CONSTRAINT nn_ville NOT NULL,
	CONSTRAINT pos_id_proprio CHECK(id_proprio > 0),
	CONSTRAINT pk_id_proprio PRIMARY KEY(id_proprio));
	
CREATE TABLE lego(
	id_lego INTEGER,
	nom_lego VARCHAR(40) CONSTRAINT nn_nom_lego NOT NULL,
	type_lego VARCHAR(40) CONSTRAINT nn_type_lego NOT NULL,
	nb_pieces INTEGER CONSTRAINT nn_nb_pieces NOT NULL,
	id_proprio INTEGER CONSTRAINT nn_id_proprio NOT NULL,
	CONSTRAINT pk_id_lego PRIMARY KEY(id_lego),
	CONSTRAINT pos_id_lego CHECK(id_lego > 0),
	CONSTRAINT fk_lego_id_proprio FOREIGN KEY(id_proprio) REFERENCES proprietaire(id_proprio),
	CONSTRAINT pos_nb_pieces CHECK(nb_pieces > 0));
	
INSERT INTO proprietaire VALUES(1,'Agathe','Zeblouse','Mulhouse');
INSERT INTO proprietaire VALUES(2,'Alban','Bou','Nice');
INSERT INTO proprietaire VALUES(3,'Ali','Gator','Dijon');
INSERT INTO proprietaire VALUES(4,'Aude','Javel','Brest');
INSERT INTO proprietaire VALUES(5,'Beth','Rave','La Rochelle');
INSERT INTO proprietaire VALUES(6,'Cécile','Onxa','Clermont-Ferrand');
INSERT INTO proprietaire VALUES(7,'Daisy','Draté','Vittel');
INSERT INTO proprietaire VALUES(8,'Eddy','Moitou','Crottoy');
INSERT INTO proprietaire VALUES(9,'Elmer','Itmieu','Lille');
INSERT INTO proprietaire VALUES(10,'Félicie','Tation','Colmar');
INSERT INTO proprietaire VALUES(11,'Guy','Liguili','Valras');
INSERT INTO proprietaire VALUES(12,'Harry','Cover','Bayonne');
INSERT INTO proprietaire VALUES(13,'Ines','Spéré','Dammarie-les-Lys');
INSERT INTO proprietaire VALUES(14,'Jade','Or','Paris');
INSERT INTO proprietaire VALUES(15,'Jean','Bon','Bayonne');
INSERT INTO proprietaire VALUES(16,'Jules','Hule','Versailles');
INSERT INTO proprietaire VALUES(17,'Kelly','Diossi','Caen');
INSERT INTO proprietaire VALUES(18,'Lili','Coptère','Bordeaux');
INSERT INTO proprietaire VALUES(19,'Lucie','Fer','Mulhouse');
INSERT INTO proprietaire VALUES(20,'Marc','Assin','Arbonne-la-Forêt');
INSERT INTO proprietaire VALUES(21,'Mehdi','Cament','Savyberlette');
INSERT INTO proprietaire VALUES(22,'Nordine','Ateur','Montpellier');
INSERT INTO proprietaire VALUES(23,'Oscar','Abbé','Angers');
INSERT INTO proprietaire VALUES(24,'Pat','Icier','Poitiers');
INSERT INTO proprietaire VALUES(25,'Paula','Roïd','Paris');
INSERT INTO proprietaire VALUES(26,'Remy','Fasol','Avignon');
INSERT INTO proprietaire VALUES(27,'Sacha','Touille','Béziers');
INSERT INTO proprietaire VALUES(28,'Sophie','Fonfec','Saint-Cyprien');
INSERT INTO proprietaire VALUES(29,'Terry','Golo','Annecy');
INSERT INTO proprietaire VALUES(30,'Usama','Fémale','Mulhouse');
INSERT INTO proprietaire VALUES(31,'Vishnou','Lapaix','Saumure');
INSERT INTO proprietaire VALUES(32,'Will','Fride','Toulouse');
INSERT INTO proprietaire VALUES(33,'Xavier','Kapaêtrela','Oradour-sur-Glâne');
INSERT INTO proprietaire VALUES(34,'Yves','Remord','Rodez');
INSERT INTO proprietaire VALUES(35,'Zackary','Amablag','Strasbourg');


INSERT INTO lego VALUES(1,'La maison de Mia','Lego Friends',1023,6);
INSERT INTO lego VALUES(2,'Un 4x4','Lego Mecano',3204,34);
INSERT INTO lego VALUES(3,'Un Faucon Millenium','Lego Star Wars',10413,13);
INSERT INTO lego VALUES(4,'Le salon de Sheldon et Leonard','Lego The Big Bang Theory',1684,34);
INSERT INTO lego VALUES(5,'La prison','Lego City',2800,8);
INSERT INTO lego VALUES(6,'Mini-Figurine Dark Vador','Lego Star Wars',1,2);
INSERT INTO lego VALUES(7,'Une grue','Lego Mecano',5473,27);
INSERT INTO lego VALUES(8,'Le parc animalier','Lego Friends',3681,32);
INSERT INTO lego VALUES(9,'Métalosse','Création Personelle',7105,26);
INSERT INTO lego VALUES(10,'Une armure robot de Thor','Lego Marvel',971,24);
INSERT INTO lego VALUES(11,'Le labo des super héros','Lego Marvel',51,21);
INSERT INTO lego VALUES(12,'Le train de Mickey et Minnie','Lego Duplo',24,17);
INSERT INTO lego VALUES(13,'La licorne','Lego Duplo',4,11);
INSERT INTO lego VALUES(14,'Le dragon Overlord','Lego Ninjago',487,22);
INSERT INTO lego VALUES(15,'Le jet multi-missiles','Lego Ninjago',1401,1);
INSERT INTO lego VALUES(16,'Le carrosse royal de Cendrillon','Lego Disney',819,4);
INSERT INTO lego VALUES(17,'Flash McQueen','Lego Disney',5870,6);
INSERT INTO lego VALUES(18,'Le château de Poudlard','Lego Harry Potter',10742,7);
INSERT INTO lego VALUES(19,'La tour Eiffel','Lego Architecture',4286,31);
INSERT INTO lego VALUES(20,'La statue de la Liberté','Lego Architecture',3099,32);
INSERT INTO lego VALUES(21,'Tokyo','Lego Architecture',2710,33);
INSERT INTO lego VALUES(22,'Le camion poubelle','Lego Mecano',4937,27);
INSERT INTO lego VALUES(23,'Le cinéma de Heartlake City','Lego Friends',2648,11);
INSERT INTO lego VALUES(24,'La garderie pour chiens','Lego Friends',1423,16);
INSERT INTO lego VALUES(25,'Le récif corallien','Lego Minecraft',284,7);
INSERT INTO lego VALUES(26,'La mine du Creeper','Lego Minecraft',476,14);

