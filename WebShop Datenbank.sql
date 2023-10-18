-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server Version:               10.6.5-MariaDB - mariadb.org binary distribution
-- Server Betriebssystem:        Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Exportiere Struktur von Tabelle webshop.hersteller
DROP TABLE IF EXISTS `hersteller`;
CREATE TABLE IF NOT EXISTS `hersteller` (
  `Hersteller_ID` int(11) NOT NULL,
  `Hersteller_Name` varchar(30) DEFAULT NULL,
  `Web` varchar(100) DEFAULT NULL,
  `eMail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Hersteller_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle webshop.hersteller: ~11 rows (ungefähr)
DELETE FROM `hersteller`;
/*!40000 ALTER TABLE `hersteller` DISABLE KEYS */;
INSERT INTO `hersteller` (`Hersteller_ID`, `Hersteller_Name`, `Web`, `eMail`) VALUES
	(1, 'Vin & Sprit', 'www.vsgroup.com', 'info@vsgcomms.com'),
	(2, 'Russian Standard', 'www.russianstandard.com', 'info@roust.com'),
	(3, 'Diageo', 'www.diageo.com', 'Diageo@linkgroup.co.uk'),
	(4, 'Synergy Brands', 'www.synergy-brands.com', 'info@synergy-brands.com'),
	(5, 'Bacardi', 'www.bacardi.com', 'info-deutschland@bacardi.com'),
	(6, 'Polmos', 'www.polmos.bielsko.pl', 'sekretariat@polmos.bielsko.pl'),
	(7, 'Brown-Forman-Konzern', 'www.brown-forman.de', 'Brown-Forman@b-f.com'),
	(8, 'Beam Suntory', 'www.beamsuntory.com', 'info.de@beamsuntory.com'),
	(9, 'Chivas Brothers Ltd.', 'www.chivas.com', 'chivasgeneralenquiries@pernod-ricard.com'),
	(10, 'William Grant & Sons', 'www.williamgrant.com', 'contact@wgrant.com'),
	(11, 'SKYY Spirits LLC', 'www.skyyvodka.com', 'skyy@custhelp.com');
/*!40000 ALTER TABLE `hersteller` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle webshop.kategorie
DROP TABLE IF EXISTS `kategorie`;
CREATE TABLE IF NOT EXISTS `kategorie` (
  `Kategorie_ID` int(11) NOT NULL,
  `Beschreibung` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Kategorie_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle webshop.kategorie: ~2 rows (ungefähr)
DELETE FROM `kategorie`;
/*!40000 ALTER TABLE `kategorie` DISABLE KEYS */;
INSERT INTO `kategorie` (`Kategorie_ID`, `Beschreibung`) VALUES
	(1, 'Vodka'),
	(2, 'Whiskey'),
	(3, 'Gin');
/*!40000 ALTER TABLE `kategorie` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle webshop.kunde
DROP TABLE IF EXISTS `kunde`;
CREATE TABLE IF NOT EXISTS `kunde` (
  `Kunde_ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `Vorname` varchar(30) DEFAULT NULL,
  `Nachname` varchar(30) DEFAULT NULL,
  `Strasse` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `PLZ` varchar(30) DEFAULT NULL,
  `Ort` varchar(30) DEFAULT NULL,
  `Kontonummer` varchar(50) DEFAULT NULL,
  `BLZ` varchar(50) DEFAULT NULL,
  `Institut` varchar(30) DEFAULT NULL,
  `Passwort` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Kunde_ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle webshop.kunde: ~1 rows (ungefähr)
DELETE FROM `kunde`;
/*!40000 ALTER TABLE `kunde` DISABLE KEYS */;
INSERT INTO `kunde` (`Kunde_ID`, `username`, `Vorname`, `Nachname`, `Strasse`, `PLZ`, `Ort`, `Kontonummer`, `BLZ`, `Institut`, `Passwort`) VALUES
	(22, 'wladmazk', 'wladlen', 'mazkewitsch', 'test', '13234', 'test', '123', '123', 'test', '$2y$10$IQEcPlyZCNurZQxHYRuWZ.elHAS2f0s3wy6ivikTiYwUpKG785Jdy');
/*!40000 ALTER TABLE `kunde` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle webshop.produkt
DROP TABLE IF EXISTS `produkt`;
CREATE TABLE IF NOT EXISTS `produkt` (
  `Produkt_ID` int(11) NOT NULL,
  `Produktname` varchar(30) DEFAULT NULL,
  `Beschreibung` varchar(40) DEFAULT NULL,
  `Preis` decimal(5,2) DEFAULT NULL,
  `H_ID` int(11) DEFAULT NULL,
  `PK_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Produkt_ID`),
  KEY `H_ID` (`H_ID`),
  KEY `PK_ID` (`PK_ID`),
  CONSTRAINT `produkt_ibfk_1` FOREIGN KEY (`H_ID`) REFERENCES `hersteller` (`Hersteller_ID`),
  CONSTRAINT `produkt_ibfk_2` FOREIGN KEY (`PK_ID`) REFERENCES `kategorie` (`Kategorie_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle webshop.produkt: ~13 rows (ungefähr)
DELETE FROM `produkt`;
/*!40000 ALTER TABLE `produkt` DISABLE KEYS */;
INSERT INTO `produkt` (`Produkt_ID`, `Produktname`, `Beschreibung`, `Preis`, `H_ID`, `PK_ID`) VALUES
	(1, 'Absolut Vodka', '40% vol, 0.7L', 12.99, 1, 1),
	(2, 'Russian Standard', '40% vol, 0.7L', 9.99, 2, 1),
	(3, 'Smirnoff Vodka', '37.5% vol, 0.7L', 9.80, 3, 1),
	(4, 'Beluga Vodka', '40% vol, 1L', 25.99, 4, 1),
	(5, 'Grey Goose', '40% vol, 0.7L', 32.89, 5, 1),
	(6, 'Belvedere', '40% vol, 0.7L', 29.99, 6, 1),
	(7, 'Sky Vodka', '40% vol, 1L', 18.70, 11, 1),
	(8, 'Jack Daniel´s', '40% vol, 0.7L', 16.99, 7, 2),
	(9, 'Jim Beam Bourbon', '40% vol, 0.7L', 13.99, 8, 2),
	(10, 'Chivas Regal 12', '40% vol, 0.7L', 22.99, 9, 2),
	(11, 'Bombay Sapphire', '40% vol, 0.7L', 17.99, 5, 3),
	(12, 'Hendrick´s Gin', '44% vol, 1L', 43.90, 10, 3),
	(13, 'Gordon´s', '37.5% vol, 0.7L', 13.99, 3, 3),
	(14, 'Tanqueray', '47.3% vol, 1L', 21.60, 3, 3);
/*!40000 ALTER TABLE `produkt` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle webshop.rechnung
DROP TABLE IF EXISTS `rechnung`;
CREATE TABLE IF NOT EXISTS `rechnung` (
  `Rechnung_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Datum` date DEFAULT NULL,
  `Uhrzeit` time DEFAULT NULL,
  `K_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Rechnung_ID`),
  KEY `FK_rechnung_kunde` (`K_ID`),
  CONSTRAINT `FK_rechnung_kunde` FOREIGN KEY (`K_ID`) REFERENCES `kunde` (`Kunde_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle webshop.rechnung: ~1 rows (ungefähr)
DELETE FROM `rechnung`;
/*!40000 ALTER TABLE `rechnung` DISABLE KEYS */;
INSERT INTO `rechnung` (`Rechnung_ID`, `Datum`, `Uhrzeit`, `K_ID`) VALUES
	(118, '2022-03-25', '13:34:07', 22);
/*!40000 ALTER TABLE `rechnung` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle webshop.warenkorb
DROP TABLE IF EXISTS `warenkorb`;
CREATE TABLE IF NOT EXISTS `warenkorb` (
  `Warenkorb_ID` int(11) NOT NULL AUTO_INCREMENT,
  `K_ID` int(11) DEFAULT NULL,
  `P_ID` int(11) DEFAULT NULL,
  `Anzahl` int(11) DEFAULT NULL,
  `Gesamtpreis` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Warenkorb_ID`),
  UNIQUE KEY `K_ID_P_ID` (`K_ID`,`P_ID`),
  KEY `warenkorb_ibfk_1` (`P_ID`),
  CONSTRAINT `warenkorb_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `produkt` (`Produkt_ID`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle webshop.warenkorb: ~1 rows (ungefähr)
DELETE FROM `warenkorb`;
/*!40000 ALTER TABLE `warenkorb` DISABLE KEYS */;
INSERT INTO `warenkorb` (`Warenkorb_ID`, `K_ID`, `P_ID`, `Anzahl`, `Gesamtpreis`) VALUES
	(110, 22, 4, 1, NULL);
/*!40000 ALTER TABLE `warenkorb` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
