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

CREATE TABLE `detail_product` (
  `id_detail_product` int(11) NOT NULL auto_increment,
  `name_detail` varchar(100),
  `url_img` varchar(255),
  `deskripsi_detail` varchar(100),
  `tanggl_dibuat` datetime,
  `tanggl_exp` datetime,
  `deskripsi_detail` varchar(100),
  `berat_barang` int(11),
  `id_product` varchar(100),
  PRIMARY KEY  (`id_detail_product`)
);

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'abcd1234');