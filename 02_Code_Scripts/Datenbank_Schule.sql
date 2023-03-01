drop database if exists schule;
create database if not exists schule;
use schule;

drop table if exists Faecher;
create table if not exists Faecher 
(
Fach_id int not null auto_increment,
Fachname varchar(45),
Fachstunden int,
Fachtype varchar(100),
Primary key (Fach_id)
);

Insert into Faecher 
(Fachname, Fachstunden, Fachtype)
Values 
("Chemie", 1 , "Naturlehre"),
("Physik", 2 , "Naturlehre"),
("Geometrie", 3 , "Mathematik"),
("Algebra", 4 , "Mathematik"),
("Französisch", 5 , "Sprache"),
("Deutsch", 6 , "Sprache"),
("Englisch", 7 , "Sprache"),
("Wirtschaft", 8 , "Wirtschaft"),
("Recht", 9 , "Wirtschaft");

/* Datenbank für Storys und Posts*/
drop table if exists Post;
create table if not exists Post 
(
Post_id int not null auto_increment,
Postname varchar(45),
Posttext varchar(1000),
Primary key (Post_id)
);

Insert into Post
(Postname, Posttext)
Values 
("Hallo", "Lorem"),
("Hi", "Morel"),
("Hola", "Remlo")