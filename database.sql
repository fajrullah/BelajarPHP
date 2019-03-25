// create database db_crud;
use db_crud;
CREATE TABLE `product` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `type` varchar(25),
  `deskripsi` varchar(100),
  `harga` varchar(15),
  PRIMARY KEY  (`id`)
);


