# AngularJS example with SlimPHP OO

Simple AngularJS project with SlimPHP and PHP OO

$HTTP, $SCOPE, SELECT, NG-REPEAT, NG-MODEL, NG-CHANGE, NG-CLICK...

# Live demo: http://locations.pe.hu/

Database to test.:

CREATE TABLE IF NOT EXISTS `tb_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc_name` varchar(155) COLLATE utf8_unicode_ci NOT NULL,
  `fk_id_location` int(11) DEFAULT NULL,
  `desc_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

INSERT INTO `tb_location` (`id`, `desc_name`, `fk_id_location`, `desc_description`) VALUES
(1, 'Ireland', NULL, 'Republic of Ireland'),
(2, 'Dublin', 1, 'Dublin City'),
(3, 'Brazil', NULL, 'The best Country'),
(4, 'Salvador', 3, 'The best City'),
(5, 'Cork', 1, 'Cork City'),
(6, 'Rio de Janeiro', 3, 'Rio 40ºC');
