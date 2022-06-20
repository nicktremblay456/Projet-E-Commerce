Create Table commande (
ID int NOT NULL auto_increment,
OrderNumber int,
Clientid int not null,
OrderDate date not null,
primary key(ID),
foreign key(Clientid) references client(ID)
);