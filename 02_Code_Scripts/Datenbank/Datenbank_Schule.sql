drop database if exists schule;
create database if not exists schule;
use schule;

drop table if exists profil;
create table if not exists profil  
(
profil_id int not null auto_increment,
profilVorname varchar(45),
profilNachname varchar(45),
profilPicture varchar(45),
profilType varchar(45),
Primary key (profil_id)
);

Insert into profil 
(profilName, profilNachname, profilPicture, profilType)
Values 
("Michael", "Bodenmatter" ,"@/assets/Profilpictures/profilePicture (1).jpg"),
("Michaela", "Bodenmatter" , "@/assets/Profilpictures/profilePicture (2).jpg"),
("Hans", "Geiger" , "@/assets/Profilpictures/profilePicture (3).jpg"),
("Anton", "Felix" , "@/assets/Profilpictures/profilePicture (4).jpg"),
("Brigitte", "Geiger" , "@/assets/Profilpictures/profilePicture (5).jpg"),
("Melanie", "Felix", "@/assets/Profilpictures/profilePicture (6).jpg");

/* Datenbank für Storys und Posts*/
drop table if exists Post;
create table if not exists Post 
(
Post_id int not null auto_increment,
Posttitel varchar(45),
Posttext varchar(1000),
Posttitel int,
Postdate varchar(45),
Primary key (Post_id)
);

Insert into Post
(Postname, Posttext, Posttitel, Postdate)
Values 
("Hallo", "Lorem","Projekt",789),
("Hi", "Morel","Schlaf",45),
("Hola", "Remlo","schlechter Schlaf",13)