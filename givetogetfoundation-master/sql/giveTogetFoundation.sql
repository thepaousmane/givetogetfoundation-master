
CREATE DATABASE giveTogetFoundation;
USE giveTogetFoundation;

CREATE TABLE utilisateur (
    id INT auto_increment  PRIMARY KEY ,
    nomComplet VARCHAR(100),
    pseudo VARCHAR(50),
    motDePasse TEXT,
    numeroTel VARCHAR(9),
    email VARCHAR(50),
    userType VARCHAR(20)

);

CREATE TABLE projet(
    id INT auto_increment PRIMARY KEY,
    libelle VARCHAR(100),
    descriptionProjet TEXT,
    montantCollecte BIGINT,
    dateLimit DATE,
    montantNecessaire BIGINT,
    revenuDuProjet BIGINT,
    photo TEXT,
    etatProjet VARCHAR(50),
    idResponsableProjet INT,
    Village VARCHAR(100),
    CONSTRAINT fk_projet_utilisateur FOREIGN KEY (idResponsableProjet) REFERENCES utilisateur(id)

);

CREATE TABLE avancementProjet(
    id INT auto_increment PRIMARY KEY,
    libelle VARCHAR(100),
    descriptionAnnonce TEXT,
    dateAnnonce DATE,
    photo TEXT,
    idProjet INT,
    CONSTRAINT fk_avancementProjet_idProjet FOREIGN KEY (idProjet) REFERENCES projet(id)
);

CREATE TABLE investissement(
    id INT auto_increment PRIMARY KEY,
    montant BIGINT,
    typeInvestissement VARCHAR(20),
    etat VARCHAR(20),
    idInvestisseur INT,
    idProjet INT,
    CONSTRAINT fk_investissement_idProjet FOREIGN KEY (idProjet) REFERENCES projet(id),
    CONSTRAINT fk_investissement_utilisateur FOREIGN KEY (idInvestisseur) REFERENCES utilisateur(id)

);

CREATE TABLE administrateur (
    id int auto_increment PRIMARY KEY  ,
    pseudo VARCHAR(100) ,
    motDePasse TEXT 

);
 INSERT INTO administrateur (id , pseudo , motDePasse) VALUES (1 , "admin" , SHA1("admin"));
/*
--Insertion de donnees dans utilisateur
INSERT INTO utilisateur ( nomComplet, pseudo,motDePasse, numeroTel, email, userType )
VALUES ('Bamba Fall','Bamba',SHA1('passer'), '772013648', 'bambaFall@gmail.com', 'investisseur');
 
 --Insertion de village
 insert into village (libelle, lattitude, longitude)
 values ('Loboudou', 15.9275919, -15.9950316);

  insert into village (libelle, lattitude, longitude)
 values ('Keur Madiabel', 13.8477051, -16.0652304);

 
  insert into village (libelle, lattitude, longitude)
 values ('Dioral', 14.3383211, -16.5021266);

  
  insert into village (libelle, lattitude, longitude)
 values ('Sokone', 13.8793081, -16.3791025);

 
  insert into village (libelle, lattitude, longitude)
 values ('kelkom', 13.8793081, -16.3791025);

 --insertion projet
 insert into projet (libelle, descriptionProjet, montantCollecte, dateLimit, montantNecessaire, revenuDuProjet, photo, etatProjet, idResponsableProjet, Village)
 values ('test', 'for test', 0, 2019-09-08, 100, 500, 'niceTof.png', 'en cours ...', 1, 'sokone');

 --insertion investissement
 insert into investissement (libelle, descriptionProjet, montantCollecte, dateLimit, montantNecessaire, revenuDuProjet, photo, etatProjet, idResponsableProjet, Village)
 values ('test', 'for test', 0, 2019-09-08, 100, 500, 'niceTof.png', 'en cours ...', 1, 'sokone');


 --insertion investissement
 insert into investissement (montant, typeInvestissement, etat, idInvestisseur, idProjet)
 values (100000, "avec retour", "recu", 6, 3);

  insert into investissement (montant, typeInvestissement, etat, idInvestisseur, idProjet)
 values (50000, "sans retour", "recu", 6, 4);


---------------------------------Select client Projects--------------
select *
from projet
WHERE( idResponsableProjet = 2);

---------------------------------Select detail Project--------------
select projet.*, responsable.nomComplet
from projet , utilisateur as responsable
WHERE( projet.id = 1 AND responsable.id = projet.idResponsableProjet  );

---------------------------------Select annonces Project--------------
select annonce.*
from avancementprojet as annonce
WHERE( annonce.idProjet = 1);

<<<<<<< HEAD
*/


=======

---------------------------------Select investissement and Project--------------
select projet.*, investissement.*
from projet , investissement 
WHERE( investissement.idInvestisseur = 6 AND investissement.idProjet = projet.id);
>>>>>>> 1ba627e6313f9933fd3e565e87eba7c2c4bafea7
