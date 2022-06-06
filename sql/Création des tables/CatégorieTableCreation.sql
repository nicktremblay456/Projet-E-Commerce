CREATE TABLE categorie (
    ID int NOT NULL AUTO_INCREMENT Primary key,
    Categorie varchar(255) NOT NULL

    foreign key(ID) references produit(ID);
);