-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: umatest3
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

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
-- Table structure for table `bitacora_cursos`
--

DROP TABLE IF EXISTS `bitacora_cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora_cursos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `accion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nuevo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `viejo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora_cursos`
--

LOCK TABLES `bitacora_cursos` WRITE;
/*!40000 ALTER TABLE `bitacora_cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `bitacora_cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacora_examenes`
--

DROP TABLE IF EXISTS `bitacora_examenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora_examenes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `accion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nuevo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `viejo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora_examenes`
--

LOCK TABLES `bitacora_examenes` WRITE;
/*!40000 ALTER TABLE `bitacora_examenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `bitacora_examenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bitacora_tareas`
--

DROP TABLE IF EXISTS `bitacora_tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bitacora_tareas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `accion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nuevo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `viejo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bitacora_tareas`
--

LOCK TABLES `bitacora_tareas` WRITE;
/*!40000 ALTER TABLE `bitacora_tareas` DISABLE KEYS */;
/*!40000 ALTER TABLE `bitacora_tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'Ingenieria de Sistemas','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Ingenieria Informatica','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Ingenieria Industrial','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'Ingenieria Civil','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_foro` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comentarios_id_foro_foreign` (`id_foro`),
  KEY `comentarios_id_user_foreign` (`id_user`),
  CONSTRAINT `comentarios_id_foro_foreign` FOREIGN KEY (`id_foro`) REFERENCES `foros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comentarios_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso_dictas`
--

DROP TABLE IF EXISTS `curso_dictas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso_dictas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `grupo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `curso_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `curso_dictas_curso_id_foreign` (`curso_id`),
  KEY `curso_dictas_user_id_foreign` (`user_id`),
  CONSTRAINT `curso_dictas_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `curso_dictas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso_dictas`
--

LOCK TABLES `curso_dictas` WRITE;
/*!40000 ALTER TABLE `curso_dictas` DISABLE KEYS */;
INSERT INTO `curso_dictas` VALUES (1,'1','0000-00-00 00:00:00','0000-00-00 00:00:00',1,2),(2,'1','0000-00-00 00:00:00','0000-00-00 00:00:00',2,2);
/*!40000 ALTER TABLE `curso_dictas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso_inscritos`
--

DROP TABLE IF EXISTS `curso_inscritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso_inscritos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `curso_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `curso_inscritos_curso_id_foreign` (`curso_id`),
  KEY `curso_inscritos_user_id_foreign` (`user_id`),
  CONSTRAINT `curso_inscritos_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `curso_inscritos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso_inscritos`
--

LOCK TABLES `curso_inscritos` WRITE;
/*!40000 ALTER TABLE `curso_inscritos` DISABLE KEYS */;
INSERT INTO `curso_inscritos` VALUES (1,'2016-07-21','0000-00-00 00:00:00','0000-00-00 00:00:00',1,7),(2,'2016-07-21','0000-00-00 00:00:00','0000-00-00 00:00:00',2,3);
/*!40000 ALTER TABLE `curso_inscritos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` int(11) NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_categoria` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `cursos_id_categoria_foreign` (`id_categoria`),
  CONSTRAINT `cursos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'Taller de Ingenieria de Software',10,'TIS',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Inteligencia Artificial',30,'artificial',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `desarrollos`
--

DROP TABLE IF EXISTS `desarrollos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `desarrollos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `respuesta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pregunta_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `desarrollos_pregunta_id_foreign` (`pregunta_id`),
  CONSTRAINT `desarrollos_pregunta_id_foreign` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `desarrollos`
--

LOCK TABLES `desarrollos` WRITE;
/*!40000 ALTER TABLE `desarrollos` DISABLE KEYS */;
INSERT INTO `desarrollos` VALUES (1,'Una sentencia que permite decidir si se ejecuta o no un bloque de codigo','0000-00-00 00:00:00','0000-00-00 00:00:00',3);
/*!40000 ALTER TABLE `desarrollos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entregados`
--

DROP TABLE IF EXISTS `entregados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entregados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_tarea` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `puntaje` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_user` int(10) unsigned NOT NULL,
  `id_enviado` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `entregados_id_user_foreign` (`id_user`),
  KEY `entregados_id_enviado_foreign` (`id_enviado`),
  CONSTRAINT `entregados_id_enviado_foreign` FOREIGN KEY (`id_enviado`) REFERENCES `enviados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `entregados_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entregados`
--

LOCK TABLES `entregados` WRITE;
/*!40000 ALTER TABLE `entregados` DISABLE KEYS */;
/*!40000 ALTER TABLE `entregados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enviados`
--

DROP TABLE IF EXISTS `enviados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enviados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_limite` date NOT NULL,
  `id_tarea` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `enviados_id_tarea_foreign` (`id_tarea`),
  CONSTRAINT `enviados_id_tarea_foreign` FOREIGN KEY (`id_tarea`) REFERENCES `tareas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enviados`
--

LOCK TABLES `enviados` WRITE;
/*!40000 ALTER TABLE `enviados` DISABLE KEYS */;
/*!40000 ALTER TABLE `enviados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examens`
--

DROP TABLE IF EXISTS `examens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_examen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado_examen` tinyint(1) NOT NULL,
  `fecha_examen` date NOT NULL,
  `puntaje_totalm` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_cursos` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `examens_id_cursos_foreign` (`id_cursos`),
  CONSTRAINT `examens_id_cursos_foreign` FOREIGN KEY (`id_cursos`) REFERENCES `cursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examens`
--

LOCK TABLES `examens` WRITE;
/*!40000 ALTER TABLE `examens` DISABLE KEYS */;
INSERT INTO `examens` VALUES (1,'primera practica',1,'2016-07-21',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',1);
/*!40000 ALTER TABLE `examens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `falsoverdaderos`
--

DROP TABLE IF EXISTS `falsoverdaderos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `falsoverdaderos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `respuesta` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pregunta_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `falsoverdaderos_pregunta_id_foreign` (`pregunta_id`),
  CONSTRAINT `falsoverdaderos_pregunta_id_foreign` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `falsoverdaderos`
--

LOCK TABLES `falsoverdaderos` WRITE;
/*!40000 ALTER TABLE `falsoverdaderos` DISABLE KEYS */;
INSERT INTO `falsoverdaderos` VALUES (1,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',4);
/*!40000 ALTER TABLE `falsoverdaderos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `foros`
--

DROP TABLE IF EXISTS `foros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `foros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_curso` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foros_id_curso_foreign` (`id_curso`),
  KEY `foros_id_user_foreign` (`id_user`),
  CONSTRAINT `foros_id_curso_foreign` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `foros_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `foros`
--

LOCK TABLES `foros` WRITE;
/*!40000 ALTER TABLE `foros` DISABLE KEYS */;
/*!40000 ALTER TABLE `foros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historial_preguntas`
--

DROP TABLE IF EXISTS `historial_preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historial_preguntas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pregunta` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nota_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `historial_preguntas_nota_id_foreign` (`nota_id`),
  CONSTRAINT `historial_preguntas_nota_id_foreign` FOREIGN KEY (`nota_id`) REFERENCES `notas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historial_preguntas`
--

LOCK TABLES `historial_preguntas` WRITE;
/*!40000 ALTER TABLE `historial_preguntas` DISABLE KEYS */;
/*!40000 ALTER TABLE `historial_preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_05_30_013430_create_posts_table',1),('2016_06_09_191246_create_permisos_table',1),('2016_06_09_191310_create_roles_table',1),('2016_06_13_012044_create_cursos_table',1),('2016_06_13_030945_create_curso_dictas_table',1),('2016_06_13_031003_create_curso_inscritos_table',1),('2016_07_03_214413_create_examens_table',1),('2016_07_03_214437_create_notas_table',1),('2016_07_03_214457_create_tareas_table',1),('2016_07_03_214521_create_entregados_table',1),('2016_07_03_214607_create_tipo_preguntas_table',1),('2016_07_03_214640_create_multiples_table',1),('2016_07_03_214701_create_desarrollos_table',1),('2016_07_03_214808_create_simples_table',1),('2016_07_03_214909_create_falsoverdaderos_table',1),('2016_07_09_205716_create_historial_preguntas_table',1),('2016_07_11_125247_create_notificacions_table',1),('2016_07_17_112529_create_foros_table',1),('2016_07_17_112654_create_comentarios_table',1),('2016_07_18_162615_create_backups_table',1),('2016_07_19_231533_create_bitacora_cursos_table',1),('2016_07_19_231546_create_bitacora_examenes_table',1),('2016_07_21_034541_create_bitacora_tareas_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `multiples`
--

DROP TABLE IF EXISTS `multiples`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `multiples` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `respuesta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correcta` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pregunta_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `multiples_pregunta_id_foreign` (`pregunta_id`),
  CONSTRAINT `multiples_pregunta_id_foreign` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `multiples`
--

LOCK TABLES `multiples` WRITE;
/*!40000 ALTER TABLE `multiples` DISABLE KEYS */;
INSERT INTO `multiples` VALUES (1,'mas cerca del lenguaje maquina',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1),(2,'mas cerca de los lenguajes de alto nivel',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',1),(3,'no es un lenguaje',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',1);
/*!40000 ALTER TABLE `multiples` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numero_preguntas` int(11) NOT NULL,
  `duracion` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `puntaje_examen` int(11) NOT NULL,
  `numero_respuestas_correctas` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(10) unsigned NOT NULL,
  `examen_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `notas_user_id_foreign` (`user_id`),
  KEY `notas_examen_id_foreign` (`examen_id`),
  CONSTRAINT `notas_examen_id_foreign` FOREIGN KEY (`examen_id`) REFERENCES `examens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `notas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notificacions`
--

DROP TABLE IF EXISTS `notificacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notificacions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visto` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificacions`
--

LOCK TABLES `notificacions` WRITE;
/*!40000 ALTER TABLE `notificacions` DISABLE KEYS */;
/*!40000 ALTER TABLE `notificacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permiso_role`
--

DROP TABLE IF EXISTS `permiso_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permiso_role` (
  `permiso_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permiso_id`,`role_id`),
  KEY `permiso_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permiso_role_permiso_id_foreign` FOREIGN KEY (`permiso_id`) REFERENCES `permisos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permiso_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permiso_role`
--

LOCK TABLES `permiso_role` WRITE;
/*!40000 ALTER TABLE `permiso_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `permiso_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permisos`
--

DROP TABLE IF EXISTS `permisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permisos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_permiso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permisos_nombre_permiso_unique` (`nombre_permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permisos`
--

LOCK TABLES `permisos` WRITE;
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_pregunta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `puntaje_pregunta` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tipo_pregunta_id` int(10) unsigned NOT NULL,
  `examen_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `preguntas_tipo_pregunta_id_foreign` (`tipo_pregunta_id`),
  KEY `preguntas_examen_id_foreign` (`examen_id`),
  CONSTRAINT `preguntas_examen_id_foreign` FOREIGN KEY (`examen_id`) REFERENCES `examens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `preguntas_tipo_pregunta_id_foreign` FOREIGN KEY (`tipo_pregunta_id`) REFERENCES `tipo_preguntas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` VALUES (1,'el lenguaje ensamblador se situa:',5,'0000-00-00 00:00:00','0000-00-00 00:00:00',3,1),(2,'un algoritmo es un conjunto de ',5,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,1),(3,' que es un bucle o ciclo ?  ',5,'0000-00-00 00:00:00','0000-00-00 00:00:00',2,1),(4,' int, char, float son algunos tipos de datos?  ',5,'0000-00-00 00:00:00','0000-00-00 00:00:00',4,1);
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,1),(2,2),(3,3),(4,3),(5,3),(6,3),(7,3);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_nombre_rol_unique` (`nombre_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'administrador','2016-07-21 15:04:32','2016-07-21 15:04:32'),(2,'docente','2016-07-21 15:04:32','2016-07-21 15:04:32'),(3,'estudiante','2016-07-21 15:04:32','2016-07-21 15:04:32');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `simples`
--

DROP TABLE IF EXISTS `simples`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `simples` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `respuesta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pregunta_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `simples_pregunta_id_foreign` (`pregunta_id`),
  CONSTRAINT `simples_pregunta_id_foreign` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `simples`
--

LOCK TABLES `simples` WRITE;
/*!40000 ALTER TABLE `simples` DISABLE KEYS */;
INSERT INTO `simples` VALUES (1,'instrucciones','0000-00-00 00:00:00','0000-00-00 00:00:00',2);
/*!40000 ALTER TABLE `simples` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tareas`
--

DROP TABLE IF EXISTS `tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tareas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_tarea` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `archivo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path_archivo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `puntaje_total` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_cursos` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tareas_id_cursos_foreign` (`id_cursos`),
  CONSTRAINT `tareas_id_cursos_foreign` FOREIGN KEY (`id_cursos`) REFERENCES `cursos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tareas`
--

LOCK TABLES `tareas` WRITE;
/*!40000 ALTER TABLE `tareas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tareas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_preguntas`
--

DROP TABLE IF EXISTS `tipo_preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_preguntas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_preguntas`
--

LOCK TABLES `tipo_preguntas` WRITE;
/*!40000 ALTER TABLE `tipo_preguntas` DISABLE KEYS */;
INSERT INTO `tipo_preguntas` VALUES (1,'simple','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'desarrollo','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'multiple','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'F/V','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `tipo_preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `genero` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin','c:/sucre #1111 ',60000000,'m','admin@umss.edu','$2y$10$ZSHkDVGFnHONGsCKKbZx.ey8KEDtRyFlnumcRByU/2mjd2oB5nF76',NULL,'2016-07-21 15:04:32','2016-07-21 15:04:32'),(2,'patricia','rodriguez','c:/lanza #39 ',70000000,'f','akirebilbao@gmail.com','$2y$10$BCrs.gttTn8F52e6/2gWQeKJ1T8.IW3Yz3LCWp722Mx2bL0FSojAW','2LVNs7RqbKOPkBoQMV4ff5l2xyuVicLQkVrE0lPyWe4onmYYycsh2EdUAbDU','2016-07-21 15:04:33','2016-07-21 15:10:42'),(3,'victor','rojas','c:/heroinas #46 ',79705950,'m','vinchuca@gmail.com','$2y$10$ehnDfdoz.nAH2KLz2IwdmuolQyKZQiaTJPQFVE5kufFaNI4ssfdOS',NULL,'2016-07-21 15:04:33','2016-07-21 15:04:33'),(4,'helber','iporre','c:/guerrilleros #222 ',72290479,'m','helber@gmail.com','$2y$10$Kur8nW3HM7uRprnFlWE1ceHlLGWN0Aw/cWWuiHUklhRahjB25mVMq',NULL,'2016-07-21 15:04:33','2016-07-21 15:04:33'),(5,'leider','ticlla','c:/aniceto arze #333 ',73767252,'m','leider@gmail.com','$2y$10$u4klQxgJNExuDGdedAEOCObjKjP0G.SYv382aDwRwfMUbD4h83qWm',NULL,'2016-07-21 15:04:33','2016-07-21 15:04:33'),(6,'santiago','mamani','c:/primero de mayo #444 ',67568124,'m','santiago@gmail.com','$2y$10$LudE7Z9TjVCN.KCbJuKmAOAXi1y4yi8ayYKgZ8H2pTrhJzfijUjU.',NULL,'2016-07-21 15:04:33','2016-07-21 15:04:33'),(7,'jhosmar','parra','c:/blasco nunez #555 ',79775947,'m','jhosmar@gmail.com','$2y$10$2FUUMpKXP/7azE9p.PTaeuffm0PH3QP70JJe.9yOpCIXQsXkHGNqm',NULL,'2016-07-21 15:04:33','2016-07-21 15:04:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-21 11:12:45
