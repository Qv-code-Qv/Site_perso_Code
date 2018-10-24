drop database if exists test;

create database if not exists test;
use test;

create table if not exists utilisateur (

  id int not null auto_increment,
  pseudo varchar(255) null,
  message varchar(255) null,
  primary key (id)

);
