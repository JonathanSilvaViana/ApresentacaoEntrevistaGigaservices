-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `apresentacao` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `apresentacao`;

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `descricao_categoria` varchar(150) NOT NULL,
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `categorias` (`descricao_categoria`, `id`, `nome_categoria`) VALUES
('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada sapien nec lobortis congue. Maecenas pulvinar cursus lectus, non tincidunt elit',	1,	'Coleção inverno 2018'),
('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada sapien nec lobortis congue. Maecenas pulvinar cursus lectus, non tincidunt elit',	2,	'Coleção inverno 2019'),
('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada sapien nec lobortis congue. Maecenas pulvinar cursus lectus, non tincidunt elit',	3,	'Coleção verão 2019'),
('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada sapien nec lobortis congue. Maecenas pulvinar cursus lectus, non tincidunt elit',	4,	'Intercollection');

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id_produto` int(2) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(90) NOT NULL,
  `categoria_produto` varchar(90) NOT NULL,
  `descricao_produto` varchar(90) NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `produtos` (`id_produto`, `nome_produto`, `categoria_produto`, `descricao_produto`) VALUES
(1,	'Camiseta preta',	'Colecao inverno 2018',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada sapien nec lobortis'),
(2,	'Camiseta roxa',	'Colecao inverno 2018',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada sapien nec lobortis'),
(3,	'Camiseta amarela',	'Colecao verão 2019',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada sapien nec lobortis'),
(4,	'Camiseta verde',	'Colecao verão 2019',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada sapien nec lobortis'),
(5,	'Shorts Azul',	'Colecao verão 2019',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada sapien nec lobortis');

-- 2018-10-01 23:55:52