CREATE TABLE commande_details (
ID int,
OrderNumber int not null,
Itemid int not null,
Quantity int not null,
primary key (ID),
foreign key(OrderNumber) references commande(OrderNumber),
foreign key(Itemid) references produit(ID)
);
