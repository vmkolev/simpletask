use dbtest

CREATE TABLE `Person` (
  id int not null auto_increment,
  username varchar(20) NOT NULL,
  password varchar(20) NOT NULL,
  primary key (id)
);

INSERT INTO `Person` (username, password) VALUES
("Velislav","password"),
("Ivan","password"),
("Boyan","password");
