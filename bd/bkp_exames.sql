CREATE DATABASE  IF NOT EXISTS `exame` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `exame`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: exame
-- ------------------------------------------------------
-- Server version	5.7.14-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_exame`
--

DROP TABLE IF EXISTS `tb_exame`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_exame` (
  `id_exame` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `num_exame` bigint(12) unsigned zerofill NOT NULL,
  `data_exame` date NOT NULL,
  `fk_paciente` mediumint(9) unsigned NOT NULL,
  `fk_medico` mediumint(8) unsigned NOT NULL,
  `fk_laboratorio` mediumint(9) unsigned NOT NULL,
  `fk_tipo_exame` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id_exame`),
  KEY `fk_tb_exame_tb_paciente` (`fk_paciente`) USING BTREE,
  KEY `fk_tb_exame_tb_medico` (`fk_medico`) USING BTREE,
  KEY `fk_tb_exame_tb_laboratorio` (`fk_laboratorio`) USING BTREE,
  KEY `fk_tb_exame_tb_tipo_exame` (`fk_tipo_exame`) USING BTREE,
  CONSTRAINT `fk_tb_exame_tb_laboratorio` FOREIGN KEY (`fk_laboratorio`) REFERENCES `tb_laboratorio` (`id_laboratorio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_exame_tb_medico` FOREIGN KEY (`fk_medico`) REFERENCES `tb_medico` (`id_medico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_exame_tb_paciente` FOREIGN KEY (`fk_paciente`) REFERENCES `tb_paciente` (`id_paciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_exame_tb_tipo_exame` FOREIGN KEY (`fk_tipo_exame`) REFERENCES `tb_tipo_exame` (`id_tipo_exame`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_exame`
--

LOCK TABLES `tb_exame` WRITE;
/*!40000 ALTER TABLE `tb_exame` DISABLE KEYS */;
INSERT INTO `tb_exame` VALUES (1,434400045869,'2016-07-13',1,3,1,1),(2,004816336184,'2012-09-21',1,8,2,1),(3,004816466528,'2013-01-09',1,9,2,1),(4,565100816784,'2014-01-16',1,5,1,1),(5,565100859460,'2014-04-15',1,3,1,1),(6,565100887845,'2014-06-17',1,6,1,1),(7,004863652379,'2015-04-10',1,7,2,1),(8,434400013066,'2016-03-15',1,4,1,1),(9,434400076306,'2016-10-19',1,1,1,1),(10,434400081058,'2016-11-04',1,2,1,1),(17,434400089566,'2016-12-05',1,2,1,1);
/*!40000 ALTER TABLE `tb_exame` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_grupo_exame`
--

DROP TABLE IF EXISTS `tb_grupo_exame`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_grupo_exame` (
  `id_grupo_exame` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nome_grupo` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id_grupo_exame`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_grupo_exame`
--

LOCK TABLES `tb_grupo_exame` WRITE;
/*!40000 ALTER TABLE `tb_grupo_exame` DISABLE KEYS */;
INSERT INTO `tb_grupo_exame` VALUES (1,'Perfil Lipídico'),(2,'Hemograma com Contagem de Plaquetas'),(3,'Hormônio'),(4,'Testosterona'),(5,'Geral'),(6,'Urina Tipo 1');
/*!40000 ALTER TABLE `tb_grupo_exame` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_laboratorio`
--

DROP TABLE IF EXISTS `tb_laboratorio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_laboratorio` (
  `id_laboratorio` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `nome_lab` varchar(70) NOT NULL,
  PRIMARY KEY (`id_laboratorio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_laboratorio`
--

LOCK TABLES `tb_laboratorio` WRITE;
/*!40000 ALTER TABLE `tb_laboratorio` DISABLE KEYS */;
INSERT INTO `tb_laboratorio` VALUES (1,'Laboratório Exame - Sobradinho DF'),(2,'Laboratório Sabim - Sobradinho DF');
/*!40000 ALTER TABLE `tb_laboratorio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_medico`
--

DROP TABLE IF EXISTS `tb_medico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_medico` (
  `id_medico` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nome_med` varchar(100) NOT NULL,
  PRIMARY KEY (`id_medico`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_medico`
--

LOCK TABLES `tb_medico` WRITE;
/*!40000 ALTER TABLE `tb_medico` DISABLE KEYS */;
INSERT INTO `tb_medico` VALUES (1,'Francisco Henrique Leandro Ucho Siqueira Campos'),(2,'Rafael Lobo Fonseca'),(3,'Nidale Hamad Karaja'),(4,'Tatiana Evaristo Cardoso de Souza'),(5,'Jairo Macedo da Rocha'),(6,'Pablo Vinícius'),(7,'Alejandro Ignácio Bobenrieth Miserda'),(8,'Marcelo Jorge Carneiro de Freitas'),(9,'Adriano Tamietti Duraes');
/*!40000 ALTER TABLE `tb_medico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_nome_exame`
--

DROP TABLE IF EXISTS `tb_nome_exame`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_nome_exame` (
  `id_nome_exame` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nome_exame` varchar(90) NOT NULL,
  `medida` varchar(13) NOT NULL,
  `fk_grupo_exame` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id_nome_exame`),
  KEY `fk_tb_nome_exame_tb_grupo_exame1_idx` (`fk_grupo_exame`),
  CONSTRAINT `fk_tb_nome_exame_tb_grupo_exame1` FOREIGN KEY (`fk_grupo_exame`) REFERENCES `tb_grupo_exame` (`id_grupo_exame`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_nome_exame`
--

LOCK TABLES `tb_nome_exame` WRITE;
/*!40000 ALTER TABLE `tb_nome_exame` DISABLE KEYS */;
INSERT INTO `tb_nome_exame` VALUES (32,'Colesterol Total','mg/dL',1),(33,'Triglicerídeos','mg/dL',1),(34,'HDL - Colesterol','mg/dL',1),(35,'LDL - Colesterol','mg/dL',1),(36,'VLDL - Colesterol','mg/dL',1),(37,'Lípides Totais','mg/dL',1),(38,'Albumina','g/dL',5),(39,'Cloro','mEq/L',5),(40,'Cortisol','μg/dL',5),(41,'Fósforo','mg/dL',5),(42,'Cálcio','mg/dL',5),(43,'Cálcio Ionizado','mmol/L',5),(44,'Creatinina','mg/dL',5),(45,'Transaminase Oxalacética (Amino Transferase Aspartato)','U/L',5),(46,'Transaminase Pivúrica (Amino Transferase de Alnalina)','U/L',5),(47,'Potássio','mEq/L',5),(48,'Creatinofosfoquinase (CPK)','U/L',5),(49,'Estradiol','pg/mL',5),(50,'Ferritina','ng/mL',5),(51,'Ferro','ug/dL',5),(53,'Hemoglobina Glicada','%',5),(54,'Magnésio','mg/dL',5),(55,'Sódio','mEq/L',5),(56,'Uréia','mg/dL',5),(57,'Vitamina D - 1,25 Dihidroxi','pg/mL',5),(58,'Prolactina','ng/mL',3),(59,'Hepatite B - Anticorpo - Anti-HBs','UI/L',5),(60,'Hepatite C - Anti-HCV','',5),(61,'IGF-1 (Somatomedina C)','ng/mL',5),(62,'HBsAG - Antígeno de Superfície do Vírus da Hepatite B','',5),(63,'Glicose','mg/dL',5),(64,'Progesterona','ng/mL',5),(65,'Hemácias','10^6/μ L',2),(66,'Hemoglobina','g/dL',2),(67,'Hematócrito','%',2),(68,'Média VGM','fL',2),(69,'Média HGM','pg',2),(70,'Média CHGM','g/dL',2),(71,'Média RDW','%',2),(72,'Leucócitos','/μL',2),(73,'Neutrófilos','/μL',2),(74,'Eosinófilos','/μL',2),(75,'Basófilos','/μL',2),(76,'Lincófitos','/μL',2),(77,'Mocócritos','/μL',2),(78,'Contagem de Plaquetas','/μL',2),(79,'Volume Plaquetário Médio','fL',2),(80,'Hormônio de Crescimento - HGH basal','μg/L',3),(81,'Hormônio Luteinizante (LH)','mUl/mL',3),(82,'Hormônio Tireostimulante Ultra Sensível TSH','μUI/mL',3),(83,'T4 Livre (Tiroxina Livre)','ng/dL',3),(84,'SHBG (Globulina Transportadora de Hormônios Sexuais)','nmol/L',4),(85,'Testosterona Biodisponível','ng/dL',4),(86,'Testosterona Livre Calculada','ng/dL',4),(87,'Testosterona Total','ng/dL',4),(88,'Densidade','',6),(89,'pH','',6),(90,'Glicose','',6),(91,'Corpos Cetônicos','',6),(92,'Hemoglobina','',6),(93,'Proteína','',6),(94,'Bilirrubinas','',6),(95,'Urobilinogênio','mg/dL',6),(96,'Células Epiteliais de Descamação','/mL',6),(97,'Leucócitos','/mL',6),(98,'Hemácias','/mL',6),(99,'Bactérias','bact/µL',6),(100,'Nitrito','',6),(101,'FSH - Hormônio Folículo Estimulante','mUl/mL',3),(102,'Hormônio Luteinizante (LH)','mUl/mL',3),(103,'Ácido Úrico','mg/dL',5),(104,'Hemoglobina Glicosada','%',5),(105,'Amilase','U/L',5),(106,'Fosfatase Alcalina','U/L',5),(107,'Gama-Glutamil Transferase','U/L',5),(108,'Creatinofosfoquinase-CK Massa','ng/mL%',5),(109,'Hemossedimentação (VHS) 1ª Hora','mm',5),(110,'Ácido Fólico','ng/mL',5),(111,'Anti HIV 1/2 - Anticporpos','',5),(112,'Hepatite B - Anticorpo anti-HBs','',5),(113,'Hepatite B - HBeAg (Antígeno \"e\")','',5),(114,'Hepatite B - Anticorpo Anti-HBe','',5),(115,'Hepatite B - Anticorpo ANti-HBc Total (IgG+IgM)','',5),(116,'Hepatite B - Anticorpo anti-HBc - IgM (Anti core Igm)','',5),(117,'Sífils - Anticorpos totais específicos Anti-T.pallidum','',5),(118,'Chagas, Anticorpos IgG contra T. cruzi','',5),(119,'Núcleo - Auto-anticorpos Contra Antígenos Intracelulares (FAN)','',5),(120,'Necleolo - Auto-anticorpos Contra Antígenos Intracelulares (FAN)','',5),(121,'Citoplasma - Auto-anticorpos Contra Antígenos Intracelulares (FAN)','',5),(122,'Aparelho Mitótico - Auto-anticorpos Contra Antígenos Intracelulares (FAN)','',5),(123,'Placa Metafásica Cromossômica - Auto-anticorpos Contra Antígenos Intracelulares (FAN)','',5),(124,'Antiestreptolisina O','Ul/mL',5),(125,'Fator Reumatóide (Latex FR)','Ul/mL',5),(126,'Proteína C Reativa (PCR)','mg/dL',5),(127,'Hemoglobina Glicosilada','%',5),(128,'Parasitológico de Fezes - Protozoários','',5),(129,'Parasitológico de Fezes - Helminos','',5),(130,'T3 (Triiodotironina)','ng/dL',3),(131,'T4 Hormônio Tiroxina','mcg/dL',3),(132,'T3 Livre','pg/mL',3),(133,'Dehidroepiandrosterona','ng/mL',4),(134,'Sulfato Dehidroepiandrosterona (SDHEA)','µg/dL',4),(135,'PSA Total','ng/mL',5),(136,'Capacidade de Fixação Latente do Ferro','μg/dL',5),(137,'Capacidade Total de Fixação do Ferro','μg/dL',5),(138,'Índice de Saturação da Transferrina','%',5);
/*!40000 ALTER TABLE `tb_nome_exame` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_paciente`
--

DROP TABLE IF EXISTS `tb_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_paciente` (
  `id_paciente` mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `data_nasc` date NOT NULL,
  `idade` int(11) DEFAULT NULL,
  `sexo` char(1) NOT NULL,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_paciente`
--

LOCK TABLES `tb_paciente` WRITE;
/*!40000 ALTER TABLE `tb_paciente` DISABLE KEYS */;
INSERT INTO `tb_paciente` VALUES (1,'Jorgito da Silva Paiva','1977-06-17',39,'M');
/*!40000 ALTER TABLE `tb_paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_referencia`
--

DROP TABLE IF EXISTS `tb_referencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_referencia` (
  `id_referencia` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `referencia` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `fk_nome_exame` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id_referencia`),
  KEY `fk_tb_referencia_tb_nome_exame1_idx` (`fk_nome_exame`),
  CONSTRAINT `fk_tb_referencia_tb_nome_exame1` FOREIGN KEY (`fk_nome_exame`) REFERENCES `tb_nome_exame` (`id_nome_exame`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=190 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_referencia`
--

LOCK TABLES `tb_referencia` WRITE;
/*!40000 ALTER TABLE `tb_referencia` DISABLE KEYS */;
INSERT INTO `tb_referencia` VALUES (52,'Sem Referência','70 a 99 mg/dL',63),(53,'Sem Referência','de 98 até 107 mg/dL',39),(54,'Sem Referência','de 136 até 145 mEq/L',55),(55,'Sem Referência','de 3,5 até 5,1 mEq/L',47),(56,'Sem Referência','de 17 até 49 mg/dL',56),(57,'Sem Referência','de 0,70 até 1,20 mg/dL',44),(58,'Sem Referência','30,00 a 400,00 ng/dL',50),(59,'Desejável','Inferior a 200 mg/dL',32),(60,'Limítrofe','200 a 239 mg/dL',32),(61,'Alto','Superior a 240 mg/dL',32),(62,'Ótimo','Inferior a 150 mg/dL',33),(63,'Limítrofe','150 a 200 mg/dL',33),(64,'Alto','201 a 499 mg/dL',33),(65,'Muito Alto','Superior a 499 mg/dL',33),(66,'Desejável','Superior a 60 mg/dL',34),(67,'Baixo','Inferior a 40 mg/dL',34),(68,'Ótimo','Inferior a 100 mg/dL',35),(69,'Desejável','100 a 129 mg/dL',35),(70,'Limítrofe','130 a 159 mg/dL',35),(71,'Alto','160 a 189 mg/dL',35),(72,'Muito Alto','Superior a 190 mg/dL',35),(73,'Sem Referência','Sem Referência',36),(74,'Sem Referência','Sem Referência',37),(75,'Sem Referência','Inferior a 41 U/L',45),(76,'Sem Referência','39 a 308 U/L',48),(77,'Sem Referência','Inferior a 40 U/L',46),(78,'Sem Referência','de 4,22 até 5,05 10^6/uL',65),(79,'Sem Referência','de 12,6 até 16,6 g/dL',66),(80,'Sem Referência','de 37,8 até 48,6 %',67),(81,'Sem Referência','de 80,5 até 100,0 fL',68),(82,'Sem Referência','de 26,0 até 32,0 pg',69),(83,'Sem Referência','de 32,0 até 35,5 g/dL',70),(84,'Sem Referência','de 11,5 até 14,5 %',71),(85,'100%','de 4.000 ate 11.000 /uL',72),(86,'de 40,0 até 70,0%','de 1.600 até 7.700 /uL',73),(87,'de 1,0 até 3,0%','de 0 até 300 /uL',74),(88,'de 0,0 até 1,0%','de 0 até 100 /uL',75),(89,'de 25,0 até 35,0%','de 1.000 até 3.900 /uL',76),(90,'de 3,0 até 12,0%','de 100 até 1.300 /uL',77),(91,'Sem Referência','140.000 - 450.000 /uL',78),(92,'Sem Referência','9,2 a 12,8 fL',79),(93,'Sem Referência','0,27 a 4,20 uUl/mL',82),(94,'Sem Referência','0,93 a 1,70 ng/dL',83),(95,'Normal','inferior a 5,7%',53),(96,'Risco aumentado para Diabetes Mellitus','5,7 a 6,4 %',53),(97,'Diabetes Mellitus','igual ou superior a 6,5%',53),(98,'Sem Referência','21,80 a 111,20 pg/mL',57),(99,'Sem Referência','1.005 a 1.035',88),(100,'Sem Referência','4,5 a 7,8',89),(101,'Sem Referência','Negativo',90),(102,'Sem Referência','Negativo',91),(103,'Sem Referência','Negativo',92),(104,'Sem Referência','Negativo',93),(105,'Sem Referência','Negativo',100),(106,'Sem Referência','Negativo',94),(107,'Sem Referência','1,0 mg/dL',95),(108,'Sem Referência','Sem Referência',96),(109,'Sem Referência','Até 31.500 /mL',97),(110,'Sem Referência','Até 13.300 /mL',98),(111,'Até 500 bact/µL','Raras',99),(112,'de 501 a 3000 bact/µL','(+)',99),(113,'de 3001 a 15000 bact/µL','(++)',99),(114,'>15000 bact/µL','(+++)',99),(115,'20 a 49 anos','249 a 836 ng/dL',87),(116,'>=50 anos','193 a 740 ng/dL',87),(117,'Pré Púberes (exceto abaixo de 1 ano)','Inferior a 40 ng/dL',87),(118,'Sem Referência','de 1,6 até 2,6 mg/dL',54),(119,'Sem Referência','de 8,6 até 10,0 mg/dL',42),(120,'Sem Referência','de 2,5 até 4,5 mg/dL',41),(121,'Sem Referência','de 3,5 até 5,2 g/dL',38),(122,'Sem Referência','Não Reagente',62),(123,'Superior a 1000 UI/L','Igual ou Superior a 10 UI/L',59),(124,'Não Reagente','Não Reagente',60),(125,'Manhã 6 - 10 horas','6,2 - 18,0 μg/dL',40),(126,'Tarde 16 - 20 horas','2,7 - 10,4 μg/dL',40),(127,'Sem Referência','10,00 a 57,00 nmol/L',84),(128,'Abaixo de 17 anos','Sem valor de referência definido',86),(129,'17 a 40 anos','3,4 a 24,6 ng/dL',86),(130,'41 a 60 anos','2,67 a 18,3 ng/dL',86),(131,'Acima de 60 anos','1,86 a 19,0 ng/dL',86),(132,'Abaixo de 17 anos','Sem valor de referência definido',85),(133,'17 a 40 anos','82 a 626 ng/dL',85),(134,'41 a 60 anos','58 a 436 ng/dL',85),(135,'Acima de 60 anos','43 a 424 ng/dL',85),(136,'Sem Referência','25,80 a 60,70 pg/mL',49),(137,'Sem Referência','0,20 a 1,40 ng/mL',64),(138,'Sem Referência','1,5 a 12,4 mUI/mL',101),(139,'Sem Referência','1,7 a 8,6 mUI/mL',102),(140,'Sem Referência','2,10 a 17,70 ng/mL',58),(142,'Sem Referência','0,27 a 4,20 μUI/mL',82),(143,'Sem Referência','0.030 a 2.47 ng/mL',80),(144,'Sem Referência','109,0 a 284,0 ng/mL',61),(145,'Sem Referência','1,05 a 1,30 mmol/L',43),(146,'Sem Referência','de 15 até 7,0 mg/dL',103),(147,'Normal','inferior a 5,4%',104),(148,'Risco aumentado para Diabetes Mellitus','5,5 a 6,4 %',104),(149,' Diabetes Mellitus','igual ou superior a 6,5%',104),(150,'Sem Referência','de 25 até 125 U/L',105),(151,'Sem Referência','de 45 até 129 U/L',106),(152,'Sem Referência','de 15 até 63 U/L',107),(153,'Sem Referência','Abaixo de 5,0 ng/mL',108),(154,'Sem Referência','Inferior ou Igual a 15 mm',109),(155,'Sem Referência','2,0 a 19,7 ng/mL',110),(156,'Índice inferior a 1,00','Não reagente',111),(157,'Índice 1,00 a 5,00','Indeterminado',111),(158,'Índice superior a 5,00','Reagente',111),(159,'Sem Referência','Não reagente',113),(160,'Sem Referência','Não reagente',114),(161,'Sem Referência','Não reagente',115),(162,'Sem Referência','Não reagente',116),(163,'Sem Referência','Não reagente',117),(164,'Sem Referência','Não reagente',118),(165,'Sem Referência','Não reagente',119),(166,'Sem Referência','Não reagente',120),(167,'Sem Referência','Não reagente',121),(168,'Sem Referência','Não reagente',122),(169,'Sem Referência','Não reagente',123),(170,'Sem Referência','Inferior a 200 Ul/mL',124),(171,'Sem Referência','Inferior a 14,0 Ul/mL',125),(172,'Sem Referência','Inferior a 1,0 mg/dL',126),(173,'Normal','Inferior ou Igual a 5,4%',127),(174,'Risco aumentado para Diabetes Mellitus','5,5 a 6,4%',127),(175,'Diabetes Mellitus','Igual ou superior a 6,5%',127),(176,'Sem Referência','Negativo',128),(177,'Sem Referência','Negativo',129),(178,'Sem Referência','3,2 a 12,6 mcg/dL',131),(179,'Sem Referência','2,3 a 4,2 pg/mL',132),(180,'Crianças','0,3 a 5,4 ng/mL',133),(181,'Homens','1,4 a 12,5 ng/mL',133),(182,'Mulheres','0,8 a 10,5 ng/mL',133),(183,'Mulheres','35 a 430 µg/dL',134),(184,'Homens','80 a 560 µg/dL',134),(185,'Sem Referência','Até 4,00 ng/mL',135),(186,'Sem Referência','de 33 até 193 μg/dL',51),(187,'Sem Referência','de 125 até 345 μg/dL',136),(188,'Sem Referência','de 250 até 450 μg/dL',137),(189,'Sem Referência','de 15,0 até 50,0 %',138);
/*!40000 ALTER TABLE `tb_referencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_resultado_exame`
--

DROP TABLE IF EXISTS `tb_resultado_exame`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_resultado_exame` (
  `id_resultado_exame` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resultado` varchar(30) DEFAULT NULL,
  `fk_exame` int(10) unsigned DEFAULT NULL,
  `fk_nome_exame` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id_resultado_exame`),
  KEY `fk_tb_resultado_exame_tb_exame1_idx` (`fk_exame`),
  KEY `fk_tb_resultado_exame_tb_nome_exame1_idx` (`fk_nome_exame`),
  CONSTRAINT `fk_tb_resultado_exame_tb_exame1` FOREIGN KEY (`fk_exame`) REFERENCES `tb_exame` (`id_exame`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tb_resultado_exame_tb_nome_exame1` FOREIGN KEY (`fk_nome_exame`) REFERENCES `tb_nome_exame` (`id_nome_exame`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=418 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_resultado_exame`
--

LOCK TABLES `tb_resultado_exame` WRITE;
/*!40000 ALTER TABLE `tb_resultado_exame` DISABLE KEYS */;
INSERT INTO `tb_resultado_exame` VALUES (1,'71',1,63),(2,'101',1,39),(3,'144',1,55),(4,'4,5',1,47),(5,'27',1,56),(6,'1,18',1,44),(7,'581,10',1,50),(8,'231',1,32),(9,'193',1,33),(10,'43',1,34),(11,'156',1,35),(12,'32',1,36),(13,'800',1,37),(14,'75',1,46),(15,'204',1,48),(16,'41',1,45),(17,'5,34',1,65),(18,'16,6',1,66),(19,'48,9',1,67),(20,'91,6',1,68),(21,'31,1',1,69),(22,'33,9',1,70),(23,'13,1',1,71),(24,'100% 6.020',1,72),(25,'61,6% 3.708',1,73),(26,'1,7% 102',1,74),(27,'0,3% 18',1,75),(28,'28,9% 1.740',1,76),(29,'7,5% 452',1,77),(30,'222.000',1,78),(31,'10,7',1,79),(32,'2,35',1,82),(33,'1,49',1,83),(34,'5,3',1,53),(35,'59,04',1,57),(36,'1.014',1,88),(37,'6,0',1,89),(38,'Negativo',1,90),(39,'Negativo',1,91),(40,'Positivo (+) ( ) ( )',1,92),(41,'Negativo',1,93),(42,'Negativo',1,100),(43,'Negativo',1,94),(44,'0,2',1,95),(45,'7.300',1,96),(46,'15.500',1,97),(47,'23.000',1,98),(48,'Inferior a 500',1,99),(49,'65',9,63),(50,'193',9,32),(51,'164',9,33),(52,'38',9,34),(53,'125',9,35),(54,'30',9,36),(55,'686',9,37),(56,'5,18',9,65),(57,'16,6',9,66),(58,'48,30',9,67),(59,'93,2 ',9,68),(60,'32,0',9,69),(61,'34,4',9,70),(62,'13,00',9,71),(63,'100% 5.960',9,72),(64,'57,7% 3.439',9,73),(65,'2,0% 119',9,74),(66,'0,2% 12',9,75),(67,'30,9% 1.842',9,76),(68,'9,2% 548',9,77),(69,'235.000',9,78),(70,'10,8',9,79),(71,'478,6',9,87),(72,'2,80',9,82),(73,'75',10,63),(74,'2,4',10,54),(75,'142',10,55),(76,'9,7',10,42),(77,'4,7',10,47),(78,'3,8',10,41),(79,'37',10,56),(80,'1,10',10,44),(81,'209',10,32),(82,'158',10,33),(83,'43',10,34),(84,'155',10,35),(85,'11',10,36),(86,'715',10,37),(87,'55',10,46),(88,'30',10,45),(89,'5,2',10,38),(90,'5,25',10,65),(91,'17,1',10,66),(92,'48,40',10,67),(93,'92,2',10,68),(94,'32,6',10,69),(95,'35,3',10,70),(96,'13,4',10,71),(97,'100% 5.920',10,72),(98,'62,0% 3.670',10,73),(99,'1,5% 89',10,74),(100,'0,3% 18',10,75),(101,'25,7% 1.521',10,76),(102,'10,5% 622',10,77),(103,'206.000',10,78),(104,'10,7',10,79),(105,'Não Reagente',10,62),(106,'Superior a 1000',10,59),(107,'Não Reagente',10,60),(108,'14,4',10,40),(109,'594,0',10,87),(110,'13,52',10,84),(111,'18,79',10,86),(112,'440,24',10,85),(113,'31,29',10,49),(114,'0,36',10,64),(115,'3,0',10,101),(116,'4,0',10,102),(117,'16,12',10,58),(118,'1,49',10,82),(119,'1,32',10,83),(120,'Inferior a 0,05',10,80),(121,'203,0',10,61),(122,'5,2',10,53),(123,'1,11',10,43),(124,'83',8,63),(125,'136',8,55),(126,'10,0',8,42),(127,'4,6',8,47),(128,'211',8,32),(129,'176',8,33),(130,'42',8,34),(131,'137',8,35),(132,'32',8,36),(133,'738',8,37),(134,'18,2',8,40),(135,'447,8',8,87),(136,'12,99',8,84),(137,'13,91',8,86),(138,'325,94',8,85),(139,'39,3',8,58),(140,'3,5',8,101),(141,'4,8',8,81),(142,'1,83',8,82),(143,'1,26',8,83),(144,'189,0',8,61),(145,'72',4,63),(146,'146',4,55),(147,'4,2',4,47),(148,'38',4,56),(149,'4,0',4,103),(150,'1,10',4,44),(151,'206',4,32),(152,'153',4,33),(153,'46',4,34),(154,'137',4,35),(155,'23',4,36),(156,'704',4,37),(157,'93',4,46),(158,'272',4,48),(159,'50',4,45),(160,'5,04',4,65),(161,'16,0',4,66),(162,'46,7',4,67),(163,'92,7',4,68),(164,'31,7',4,69),(165,'34,3',4,70),(166,'13,6',4,71),(167,'100% 5.210',4,72),(168,'49,8% 2.595',4,73),(169,'2,7% 141',4,74),(170,'0,6% 31',4,75),(171,'36,7% 1.912',4,76),(172,'10,2% 531',4,77),(173,'225.000',4,78),(174,'10,5',4,79),(175,'2,66',4,82),(176,'1,16',4,83),(177,'5,0',4,104),(178,'1.019',4,88),(179,'6,5',4,89),(180,'Negativo',4,90),(181,'Negativo',4,91),(182,'Negativo',4,92),(183,'Negativo',4,93),(184,'Negativo',4,100),(185,'Negativo',4,94),(186,'0,2',4,95),(187,'2.000',4,96),(188,'2.000',4,97),(189,'1.000',4,98),(190,'Inferior a 500',4,99),(191,'80',5,63),(192,'148',5,55),(193,'9,1',5,42),(194,'4,2',5,47),(195,'28',5,56),(196,'6,6',5,103),(197,'1,20',5,44),(198,'109',5,51),(199,'285',5,50),(200,'198',5,32),(201,'207',5,33),(202,'34',5,34),(203,'136',5,35),(204,'28',5,36),(205,'740',5,37),(206,'73',5,105),(207,'36',5,46),(208,'139',5,48),(209,'65',5,106),(210,'27',5,45),(211,'30',5,107),(212,'0,7',5,108),(213,'5,24',5,65),(214,'16,6',5,66),(215,'48,8',5,67),(216,'93,1',5,68),(217,'31,7',5,69),(218,'34,0',5,70),(219,'12,7',5,71),(220,'100% 4.850',5,72),(221,'60,1% 2.915',5,73),(222,'2,1% 102',5,74),(223,'0,4% 19',5,75),(224,'28,9% 1.402',5,76),(225,'8,5% 412',5,77),(226,'220.000',5,78),(227,'10,5',5,79),(228,'7 ',5,109),(229,'7,8',5,110),(230,'0,084',5,111),(231,'0,57 - Não Reagente',5,62),(232,'Superior a 1000',5,59),(233,'Não Reagente',5,60),(234,'Não Reagente',5,113),(235,'Não Reagente',5,114),(236,'Não Reagente',5,115),(237,'Não Reagente',5,116),(238,'Não Reagente',5,60),(239,'Não Reagente',5,117),(240,'Não Reagente',5,118),(241,'Não Reagente',5,119),(242,'Não Reagente',5,120),(243,'Não Reagente',5,121),(244,'Não Reagente',5,122),(245,'Não Reagente',5,123),(246,'40',5,124),(247,'Inferior a 9,3',5,125),(248,'Inferior a 0,4',5,126),(249,'2,28',5,82),(250,'1,29',5,83),(251,'5,1',5,127),(252,'1.022',5,88),(253,'6,5',5,89),(254,'Negativo',5,90),(255,'Positivo (+)()()()',5,91),(256,'Negativo',5,92),(257,'Negativo',5,93),(258,'Negativo',5,100),(259,'Negativo',5,94),(260,'0,2',5,95),(261,'Inferior a 3.000',5,96),(262,'Inferior a 3.000',5,97),(263,'Inferior a 3.000',5,98),(264,'Inferior a 500',5,99),(265,'Negativo',5,128),(266,'Negativo',5,129),(267,'84',6,63),(268,'2,2',6,54),(269,'143',6,55),(270,'9,4',6,42),(271,'4,7',6,47),(272,'31',6,56),(273,'1,20',6,44),(274,'73',6,46),(275,'68',6,106),(276,'35',6,45),(277,'55',6,107),(278,'5,23',6,65),(279,'16,4',6,66),(280,'47,9',6,67),(281,'91,6',6,68),(282,'31,4',6,69),(283,'34,2',6,70),(284,'12,5',6,71),(285,'100% 5.870',6,72),(286,'62,9% 3.692',6,73),(287,'0% 0',6,74),(288,'0,3% 18',6,75),(289,'26,7% 1.567',6,76),(290,'10,1% 593',6,77),(291,'228.000',6,78),(292,'10,0',6,79),(293,'524',6,87),(294,'11,4',6,84),(295,'17,15',6,86),(296,'401,81',6,85),(297,'20,61',6,58),(298,'2,00',6,82),(299,'95',6,130),(300,'1,26',6,83),(301,'1,99',7,82),(302,'8,7',7,131),(303,'1,15',7,83),(304,'84',7,130),(305,'2,7',7,132),(306,'2,70',7,81),(307,'2,9',7,101),(308,'31,8',7,49),(309,'273,2',7,87),(310,'83,29',7,86),(311,'195,0',7,85),(312,'12,2',7,84),(313,'3,8',7,133),(314,'19,0',7,58),(315,'87,9',7,134),(316,'5,19',2,65),(317,'16,6',2,66),(318,'47,5',2,67),(319,'91,5',2,68),(320,'32,0',2,69),(321,'35,0',2,70),(322,'12,8',2,71),(323,'100% 6.300',2,72),(324,'57% 3.591',2,73),(325,'2% 126',2,74),(326,'1% 63',2,75),(327,'31% 1.953',2,76),(328,'9% 567',2,77),(329,'204.000',2,78),(330,'10,0',2,79),(331,'506,6',2,50),(332,'80',2,63),(333,'193',2,32),(334,'156',2,33),(335,'40',2,34),(336,'122',2,35),(337,'31',2,36),(338,'8,1',2,103),(339,'5,23',3,65),(340,'16,1',3,66),(341,'47,5',3,67),(342,'90,8',3,68),(343,'30,8',3,69),(344,'33,9',3,70),(345,'12,6',3,71),(346,'100% 6.700',3,72),(347,'58% 3.886',3,73),(348,'2% 134',3,74),(349,'0% 0',3,75),(350,'30% 2.010',3,76),(351,'10% 670',3,77),(352,'212.000',3,78),(353,'11,0',3,79),(354,'395,5',3,50),(355,'73',3,63),(356,'203',3,32),(357,'129',3,33),(358,'40',3,34),(359,'137',3,35),(360,'26',3,36),(361,'1,30',3,44),(362,'4,3',3,81),(363,'1,9',3,101),(364,'359,6',3,87),(365,'114,12',3,86),(366,'28,59',3,58),(367,'1.019',3,88),(368,'6,5',3,89),(369,'Negativo',3,93),(370,'Normal',3,90),(371,'Negativo',3,91),(372,'Negativo',3,94),(373,'Negativo',3,92),(374,'Negativo',3,100),(375,'Normal',3,95),(376,'6,2',3,97),(377,'1,9',3,98),(378,'7,1',3,99),(379,'1',3,96),(380,'1,90',3,135),(381,NULL,17,65),(382,NULL,17,66),(383,NULL,17,67),(384,NULL,17,68),(385,NULL,17,69),(386,NULL,17,70),(387,NULL,17,71),(388,NULL,17,72),(389,NULL,17,73),(390,NULL,17,74),(391,NULL,17,75),(392,NULL,17,76),(393,NULL,17,77),(394,NULL,17,78),(395,NULL,17,79),(396,NULL,17,58),(397,NULL,17,38),(398,NULL,17,40),(399,NULL,17,45),(400,NULL,17,46),(401,NULL,17,50),(402,NULL,17,51),(403,NULL,17,106),(404,NULL,17,107),(405,NULL,17,88),(406,NULL,17,89),(407,NULL,17,90),(408,NULL,17,91),(409,NULL,17,92),(410,NULL,17,93),(411,NULL,17,94),(412,NULL,17,95),(413,NULL,17,96),(414,NULL,17,97),(415,NULL,17,98),(416,NULL,17,99),(417,NULL,17,100);
/*!40000 ALTER TABLE `tb_resultado_exame` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tipo_exame`
--

DROP TABLE IF EXISTS `tb_tipo_exame`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_tipo_exame` (
  `id_tipo_exame` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_exame` varchar(30) NOT NULL,
  PRIMARY KEY (`id_tipo_exame`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='		';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tipo_exame`
--

LOCK TABLES `tb_tipo_exame` WRITE;
/*!40000 ALTER TABLE `tb_tipo_exame` DISABLE KEYS */;
INSERT INTO `tb_tipo_exame` VALUES (1,'Análises Clínicas');
/*!40000 ALTER TABLE `tb_tipo_exame` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-08 20:55:45
