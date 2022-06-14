Create Table commande (
ID int NOT NULL auto_increment,
Clientid int not null,
Itemid int not null,
Quantity int not null,
OrderDate date not null,
primary key(ID),
foreign key(Clientid) references panier(Clientid),
foreign key(Itemid) references panier(Itemid),
foreign key(Quantity) references panier(Quantity)
);

