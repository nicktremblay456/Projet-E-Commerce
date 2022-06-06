CREATE TABLE produit (
    ID int AUTO_INCREMENT PRIMARY KEY,
    Name varchar(255) NOT NULL,
    Category int NOT NULL,
    Description varchar(255) NOT NULL,
    Price float NOT NULL,
    CurrentStock int NOT NULL,
    Path varchar(255) NOT NULL,

    foreign key(Categorie) references categorie(ID)
);

