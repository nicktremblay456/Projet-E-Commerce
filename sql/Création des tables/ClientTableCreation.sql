CREATE TABLE client (
    ID int AUTO_INCREMENT PRIMARY KEY,
    UserName  varchar(255) NOT NULL,
    Email varchar(255) NOT NULL,
    Password varchar(255) NOT NULL,
    isAdmin bool NOT NULL
);