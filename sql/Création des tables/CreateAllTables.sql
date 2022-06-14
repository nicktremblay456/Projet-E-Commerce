CREATE TABLE client (
    ID int AUTO_INCREMENT PRIMARY KEY,
    UserName  varchar(255) NOT NULL,
    Email varchar(255) NOT NULL,
    Password varchar(255) NOT NULL,
    isAdmin bool NOT NULL
);
CREATE TABLE categorie (
    ID int NOT NULL AUTO_INCREMENT Primary key,
    Categorie varchar(100) NOT NULL,
    INDEX(Categorie)
);
insert into categorie (Categorie)
Values
("Animaux"),
("Informatique"),
("Jeux Video"),
("Maison"),
("Musique"),
("Sante"),
("Sports"),
("Vetements");
CREATE TABLE produit (
    ID int AUTO_INCREMENT PRIMARY KEY,
    Name varchar(255) NOT NULL,
    Description varchar(255) NOT NULL,
    Price float NOT NULL,
    CurrentStock int NOT NULL,
    Category int NOT NULL,
    Path varchar(255) NOT NULL
);
create table panier (
ID int not null auto_increment,
Clientid int not null,
Itemid int not null,
Quantity int not null,
INDEX(Clientid),
INDEX(Itemid),
INDEX(Quantity),
primary key(ID),
foreign key(Clientid) references client(ID),
foreign key(Itemid) references produit(ID)
);
Create Table commande (
ID int NOT NULL,
OrderNumber int,
Clientid int not null,
OrderDate date not null,
primary key(ID),
foreign key(Clientid) references panier(Clientid)
);



