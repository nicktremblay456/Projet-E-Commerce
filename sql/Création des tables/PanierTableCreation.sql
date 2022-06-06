create table panier (
ID int not null auto_increment,
Clientid int not null,
Itemid int not null,
Quantity int not null,
primary key(ID),
foreign key(Clientid) references client(ID),
foreign key(Itemid) references produit(ID)
);