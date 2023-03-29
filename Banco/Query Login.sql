create database Users;
use Users;

create table UsersInfo(
ID_User INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
email_user varchar(30) not null,
password_user varchar(21) not null 
);

select * from UsersInfo;
insert Into UsersInfo(email_user,password_user) VALUES ('kawakir@gmail.com', '1234');
drop table UsersInfo;
