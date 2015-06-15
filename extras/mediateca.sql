-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2015 at 11:49 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mediateca`
--

-- --------------------------------------------------------

--
-- Table structure for table `Carrera`
--

CREATE TABLE IF NOT EXISTS `Carrera` (
  `idCarrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idCarrera`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Carrera`
--

INSERT INTO `Carrera` (`idCarrera`, `nombre`) VALUES
(1, 'Sistemas'),
(2, 'Administracion');

-- --------------------------------------------------------

--
-- Table structure for table `DiaNoHabil`
--

CREATE TABLE IF NOT EXISTS `DiaNoHabil` (
  `idDiaNoHabil` int(11) NOT NULL AUTO_INCREMENT,
  `diaNoHabil` date NOT NULL,
  PRIMARY KEY (`idDiaNoHabil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `DiaNoHabil`
--

INSERT INTO `DiaNoHabil` (`idDiaNoHabil`, `diaNoHabil`) VALUES
(1, '2015-09-15'),
(2, '2015-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `Evento`
--

CREATE TABLE IF NOT EXISTS `Evento` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `horaInicio` time NOT NULL,
  `horaFin` time NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Sala_idSala` int(11) NOT NULL,
  `Materia_idMateria` int(11) NOT NULL,
  PRIMARY KEY (`idEvento`),
  KEY `fk_Evento_Usuario1_idx` (`Usuario_idUsuario`),
  KEY `fk_Evento_Sala1_idx` (`Sala_idSala`),
  KEY `fk_Evento_Materia1_idx` (`Materia_idMateria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Evento`
--

INSERT INTO `Evento` (`idEvento`, `nombre`, `fechaInicio`, `fechaFin`, `horaInicio`, `horaFin`, `Usuario_idUsuario`, `Sala_idSala`, `Materia_idMateria`) VALUES
(1, 'Introduccion a POO', '2015-06-17', '2015-06-17', '10:00:00', '12:00:00', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Item`
--

CREATE TABLE IF NOT EXISTS `Item` (
  `idItem` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `url` varchar(300) NOT NULL,
  `descripcion` varchar(800) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `TipoItem_idTipoItem` int(11) NOT NULL,
  PRIMARY KEY (`idItem`),
  KEY `fk_Item_TipoItem1_idx` (`TipoItem_idTipoItem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Item`
--

INSERT INTO `Item` (`idItem`, `titulo`, `url`, `descripcion`, `imagen`, `TipoItem_idTipoItem`) VALUES
(1, 'CodeIgniter - Introducción', '<iframe width="560" height="315" src="https://www.youtube.com/embed/w1Cn-CiL-E8" frameborder="0" allowfullscreen></iframe>', 'Curso intruductorio para aprender a usar el framework Codeigniter para desarrollo web.', 'http://www.cetinakat.info/wp-content/uploads/2011/10/CodeIgniter_1680x10501.jpg', 1),
(2, ' LA HISTORIA DE LA MATEMATICAS', '<iframe width="560" height="315" src="https://www.youtube.com/embed/lEU1TGOV4QI" frameborder="0" allowfullscreen></iframe>', 'Las matemáticas empiezan con el conteo. Sin embargo, no es razonable sugerir que el conteo de la antigüedad era matemáticas. Se puede decir que las matemáticas empiezan solamente cuando se empezó a llevar un registro de ese conteo y, por ello, se tuvo alguna representación de los números.', 'http://tantrasurbanos.com/wp-content/uploads/2013/10/Historiamaths.jpg', 1),
(3, ' Historia prohibida de la humanidad', '<iframe width="420" height="315" src="https://www.youtube.com/embed/xW0pY5j2xvA" frameborder="0" allowfullscreen></iframe>', 'Documental muy interesante sobre todos los hallazgos de arqueología, ingeniería y geología, ocultados por la ciencia convencional por no adecuarse al paradigma científico actual.', 'http://i.ytimg.com/vi/vLKdz0oI__Q/0.jpg', 1),
(4, ' Documental - Historia Oculta de Saddam Husse', '<iframe width="560" height="315" src="https://www.youtube.com/embed/kcfso0pJpYM" frameborder="0" allowfullscreen></iframe>', 'Lideres mundiales\nDictadores del mundo\nDictadores de la historia\nDerrocamiento de Saddam Hussein.\n', 'http://i3.ytimg.com/vi/kcfso0pJpYM/hqdefault.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Materia`
--

CREATE TABLE IF NOT EXISTS `Materia` (
  `idMateria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idMateria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Materia`
--

INSERT INTO `Materia` (`idMateria`, `nombre`) VALUES
(1, 'POO'),
(2, 'Progra Web');

-- --------------------------------------------------------

--
-- Table structure for table `Rol`
--

CREATE TABLE IF NOT EXISTS `Rol` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Rol`
--

INSERT INTO `Rol` (`idRol`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Personal'),
(3, 'Profesor'),
(4, 'Alumno');

-- --------------------------------------------------------

--
-- Table structure for table `Sala`
--

CREATE TABLE IF NOT EXISTS `Sala` (
  `idSala` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idSala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `Sala`
--

INSERT INTO `Sala` (`idSala`, `nombre`) VALUES
(1, 'Sala 1'),
(2, 'Sala 2');

-- --------------------------------------------------------

--
-- Table structure for table `Status`
--

CREATE TABLE IF NOT EXISTS `Status` (
  `idStatus` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`idStatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Status`
--

INSERT INTO `Status` (`idStatus`, `nombre`) VALUES
(1, 'Activo'),
(2, 'Suspendido'),
(3, 'Baja');

-- --------------------------------------------------------

--
-- Table structure for table `TipoItem`
--

CREATE TABLE IF NOT EXISTS `TipoItem` (
  `idTipoItem` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`idTipoItem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `TipoItem`
--

INSERT INTO `TipoItem` (`idTipoItem`, `tipo`) VALUES
(1, 'Video'),
(2, 'Audio');

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `ap_paterno` varchar(45) NOT NULL,
  `ap_materno` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `rfc` varchar(45) NOT NULL,
  `pass` varchar(45) NOT NULL,
  `Carrera_idCarrera` int(11) NOT NULL,
  `Rol_idRol` int(11) NOT NULL,
  `Status_idStatus` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_Usuario_Carrera_idx` (`Carrera_idCarrera`),
  KEY `fk_Usuario_Rol1_idx` (`Rol_idRol`),
  KEY `fk_Usuario_Status1_idx` (`Status_idStatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`idUsuario`, `nombre`, `ap_paterno`, `ap_materno`, `email`, `telefono`, `rfc`, `pass`, `Carrera_idCarrera`, `Rol_idRol`, `Status_idStatus`) VALUES
(1, 'Juan', 'Vazquez', 'Cres', 'juan@mail.com', '1234567890', 'VACJ930130HVZ', 'e10adc3949ba59abbe56e057f20f883e', 1, 1, 1),
(2, 'Juanito', 'Vaz', 'Cres', 'jusnito@mandarinacorp.com', '12345612', 'ridm8611101m5', 'c4ca4238a0b923820dcc509a6f75849b', 1, 1, 1),
(3, '', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1, 4, 2),
(4, '', 'ddd', '', 'dddd', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 1, 4, 2),
(5, 'Sergio', 'Mandela', 'XD', 'juan@mail.com', 'sdasd', 'dfgdsasgdhfjf', 'b3a2a605e8ab8ee4acbd40d2ee171e34', 1, 4, 2),
(6, 'jgh', 'mn,', 'm,nj', 'hartigan93@hotmail.com', 'ss', 'HVAS654345ZSX', '202cb962ac59075b964b07152d234b70', 2, 4, 2),
(7, 'apu', 'sei', 'ase', 'juanperez@mail.com', '1234567890', 'HCDS456789SDE', '2d288379c02c2f0390fe42aba062c30a', 1, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Visita`
--

CREATE TABLE IF NOT EXISTS `Visita` (
  `idVisita` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Item_idItem` int(11) NOT NULL,
  PRIMARY KEY (`idVisita`),
  KEY `fk_Usuario_has_Item_Item1_idx` (`Item_idItem`),
  KEY `fk_Usuario_has_Item_Usuario1_idx` (`Usuario_idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Visita`
--

INSERT INTO `Visita` (`idVisita`, `Usuario_idUsuario`, `Item_idItem`) VALUES
(1, 2, 1),
(2, 1, 4),
(3, 1, 1),
(4, 2, 4);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Evento`
--
ALTER TABLE `Evento`
  ADD CONSTRAINT `fk_Evento_Materia1` FOREIGN KEY (`Materia_idMateria`) REFERENCES `Materia` (`idMateria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Evento_Sala1` FOREIGN KEY (`Sala_idSala`) REFERENCES `Sala` (`idSala`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Evento_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Item`
--
ALTER TABLE `Item`
  ADD CONSTRAINT `fk_Item_TipoItem1` FOREIGN KEY (`TipoItem_idTipoItem`) REFERENCES `TipoItem` (`idTipoItem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `fk_Usuario_Carrera` FOREIGN KEY (`Carrera_idCarrera`) REFERENCES `Carrera` (`idCarrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_Rol1` FOREIGN KEY (`Rol_idRol`) REFERENCES `Rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_Status1` FOREIGN KEY (`Status_idStatus`) REFERENCES `Status` (`idStatus`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Visita`
--
ALTER TABLE `Visita`
  ADD CONSTRAINT `fk_Usuario_has_Item_Item1` FOREIGN KEY (`Item_idItem`) REFERENCES `Item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_has_Item_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `Usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
