drop database if exists gestion_staff;
create database if not exists gestion_staff;
use gestion_staff;

create table gestionnaire(
    idGestionnaire int(4) auto_increment primary key,
    nom varchar(50),
    prenom varchar(50),
	date varchar(50),
    civilite varchar(1),
    photo varchar(100),
    nomEmploi varchar(50),
    specialite varchar(50),
	tel int(9)

    
);

create table emploi(
    idEmploi int(4) auto_increment primary key,
    nomEmploi varchar(50),
    specialite varchar(50)
);

create table utilisateur(
    iduser int(4) auto_increment primary key,
    login varchar(50),
    email varchar(255),
    role varchar(50), -- admin ou visiteur
    etat int(1),      -- 1:activé et 0: desactivé
    pwd varchar(255)

);
Alter table gestionnaire add constraint foreign key (idEmploi) references emploi(idEmploi);
INSERT INTO emploi(nomEmploi,specialite) VALUES
	('directeur',''),
	('secretaire',''),
	('medicin','T'),
	('infermiere',''),
	('surveillante',''),
    ('responsable du bloc',''),
    ('directeur',''),
	('secretaire',''),
	('medicin','T'),
	('infermiere',''),
	('surveillante',''),
    ('responsable du bloc',''),
    ('directeur',''),
	('secretaire',''),
	('medicin','T'),
	('infermiere',''),
	('surveillante',''),
    ('responsable du bloc',''),
    ('directeur',''),
	('secretaire',''),
	('medicin','T'),
	('infermiere',''),
	('surveillante',''),
    ('responsable du bloc','');

	
	
INSERT INTO utilisateur(login,email,role,etat,pwd) VALUES 
    ('admin','admin@gmail.com','ADMIN',1,md5('123')),
    ('user1','user1@gmail.com','VISITEUR',0,md5('123')),
    ('user2','user2@gmail.com','VISITEUR',1,md5('123'));	

INSERT INTO gestionnaire(nom,prenom,date,civilite,photo,nomEmploi,specialite,tel) VALUES
    ('BEN RJAB','MARIEM','25/05/1981','F','5.jpg','directeur','sans specialite' ,'96325425'),
	('CHERIF','MOADH','03/01/1975','M','1.jfif','surveillante','sans specialite' ,'23654896'),
	('CHERIF','CHAIMA','29/08/1980','F','4.jpg','infermiere', 'sans specialite','23645987'),
	('FAOUZI','NABILA','03/02/1973','F','9.jfif','medicin','chirurgie','53624856'),
	('ETTAOUSSI','KAMAL','30/01/1971','M','3.jfif','medicin','cancérologie médicale','56324582'),
	('EZZAKI','ABDELKARIM','03/01/1968','M','2.jfif','secreteire', 'sans specialite','55632248'),
    ('SAADAOUI','MOHAMMED','03/01/1979','M','6.jfif','medicin','gériatie','56325486'),
	('CHAABI','OMAR','03/01/1975','M','7.jpg','responsable du bloc','sans specialite' ,'96325486'),
	('SALIM','RACHIDA','03/03/1985','F','8.jfif','medicin','anesthésie','99632254'),
	('BEN RJAB','MARIEM','25/05/1981','F','5.jpg','medicin','gynécologie','97563215'),
    ('BEN RJAB','MARIEM','25/05/1981','F','5.jpg','directeur', 'sans specialite','96325425'),
	('CHERIF','MOADH','03/01/1975','M','1.jfif','surveillante','sans specialite' ,'23654896'),
	('CHERIF','CHAIMA','29/08/1980','F','4.jpg','infermiere','sans specialite' ,'23645987'),
	('FAOUZI','NABILA','03/02/1973','F','9.jfif','medicin','orthopédie','53624856'),
	('ETTAOUSSI','KAMAL','30/01/1971','M','3.jfif','medicin','hématologie','56324582'),
	('EZZAKI','ABDELKARIM','03/01/1968','M','2.jfif','secreteire','sans specialite' ,'55632248'),
    ('SAADAOUI','MOHAMMED','03/01/1979','M','6.jfif','medicin','chirurgie','56325486'),
	('CHAABI','OMAR','03/01/1975','M','7.jpg','responsable du bloc','sans specialite' ,'96325486'),
	('SALIM','RACHIDA','03/03/1985','F','8.jfif','medicin','gériatie','99632254'),
	('BEN RJAB','MARIEM','25/05/1981','F','5.jpg','medicin','chirurgie','97563215');
;


	
    
select * from emploi;
select * from gestionnaire;
select * from utilisateur;
select login,pwd from utilisateur;



-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
