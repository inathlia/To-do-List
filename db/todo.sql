create database todo;
use todo;
create table chore(
	id_chore int primary key auto_increment,
    name varchar(50) not null,
    status int not null
);

insert into chore(name, status) values 
('Study for final test', 0),
('Read new book', 1),
('Clean my bedroom', 2);