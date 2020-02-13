# Dump of table contact
# ------------------------------------------------------------

DROP TABLE IF EXISTS `borrowers`;

CREATE TABLE `borrowers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(4) DEFAULT NULL,
  `first_name` varchar(16) DEFAULT NULL,
  `last_name` varchar(16) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `borrowers` WRITE;
/*!40000 ALTER TABLE `borrowers` DISABLE KEYS */;

INSERT INTO `borrowers` (`id`, `title`, `first_name`, `last_name`, `phone`)
VALUES
	(1, NULL, 'David', 'Mordekhay', NULL),
  (2, NULL, 'Ayash', 'Sabbagh', '786-565-9540'),
  (3, NULL, 'Ronnie', 'Menashe', NULL),
  (4, NULL, 'Itai', NULL, NULL),
  (5, NULL, NULL, NULL, '34-666-11-57-60');
	
/*!40000 ALTER TABLE `borrowers` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table lenders
# ------------------------------------------------------------
DROP TABLE IF EXISTS `lenders`;

CREATE TABLE `lenders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(4) DEFAULT NULL,
  `first_name` varchar(16) NOT NULL,
  `last_name` varchar(16) DEFAULT NULL,
  `desc` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `lenders` WRITE;
/*!40000 ALTER TABLE `lenders` DISABLE KEYS */;

INSERT INTO `lenders` (`id`, `title`, `first_name`, `last_name`, `desc`)
VALUES
  (1,NULL,'Jesse','Banesco', NULL),
  (2,NULL,'Chares',NULL, NULL),
  (3,NULL,'Nick','Corevest', NULL);
  
/*!40000 ALTER TABLE `lenders` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table roles
# ------------------------------------------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `role`)
VALUES
  (1,'Commercial'),
  (2,'Manager'),
  (3,'Admin');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

UNLOCK TABLES;
# Dump of table users
# ------------------------------------------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(16) NOT NULL,
  `last_name` varchar(16) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(22) NOT NULL,
  `user_role` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ROLE` (`user_role`),
  CONSTRAINT `FK_ROLE` FOREIGN KEY (`user_role`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `user_role`)
VALUES
  (1,'Daniel',NULL,'rep@test.com','123456',2),
  (2,'Ron',NULL,'rep@test.com','123456',1),
  (3,'Karen',NULL,'rep@test.com','123456',1),
  (4,'Ricardo',NULL,'rep@test.com','123456',2);
  
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table notes
# ------------------------------------------------------------
DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `note` tinytext,
  `loan` int(11) unsigned NOT NULL,
  `representative` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_REPRESENTATIVE_ID` (`representative`),
  CONSTRAINT `FK_REPRESENTATIVE_ID` FOREIGN KEY (`representative`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;

INSERT INTO `notes` (`id`, `note`, `loan`, `representative`)
VALUES
	(1,'Read Management Notes (Please get us reinbursed for the appraisal on the previous Loan)',1, 1),
	(2,'Read Management Notes',2, 1),
  (3,'Fred with Ocean Bank working to get us Approval for Non Recourse LTV 60% with better terms. Then we can shift on that.',3, 1),
  (4,'Client getting us contract so and we will either work with Jesse from Banesco or Fred from Ocean',4, 1),
  (5,'Getting LOI to send to Jesse',5, 1),
  (6,'In underwriting',6, 1),
  (7,'Waiting on Contract',7, 1),
  (8,'Sit with Daniel to provide lenders here for submission. ',8, 1),
  (9,'Get Data Tape from Itai',9, 1),
  (10,'Check with Itai on LEO regarding the liens issues, legal, and HOA correspondance regarding liens issue',10, 1),
  (11,'Need PFS from client from Itai',11, 1),
  (12,'Getting updated LOI to sign by Borrower, need appraisal bids on both properties, checking if environmentals are needed, and conditions list of docs remaining',12, 1),
  (13,'Getting LOI to send to Jesse',13, 1),
  (14,'Note test 1',13, 2),
  (15,'Note test 2',13, 3),
  (16,'Note test 3',13, 2);

/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table status
# ------------------------------------------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;

INSERT INTO `status` (`id`, `status`)
VALUES
  (1,'Terms accepted'),
  (2,'Approval active'),
  (3,'in process');

/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table status
# ------------------------------------------------------------
DROP TABLE IF EXISTS `status_poa`;
CREATE TABLE `status_poa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `status_poa` WRITE;
/*!40000 ALTER TABLE `status_poa` DISABLE KEYS */;

INSERT INTO `status_poa` (`id`, `status`)
VALUES
  (1, 'KeyBank');
  
/*!40000 ALTER TABLE `status_poa` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table stages
# ------------------------------------------------------------
DROP TABLE IF EXISTS `stages`;
CREATE TABLE `stages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `stage` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `stages` WRITE;
/*!40000 ALTER TABLE `stages` DISABLE KEYS */;

INSERT INTO `stages` (`id`, `stage`)
VALUES
  (1,'Terms accepted'),
  (2,'Approval active'),
  (3,'To submit');
  
/*!40000 ALTER TABLE `stages` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table loans
# ------------------------------------------------------------
DROP TABLE IF EXISTS `loans`;
CREATE TABLE `loans` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `prod_name` tinytext,
  `borrower` int(11) unsigned DEFAULT NULL,
  `lender` int(11) unsigned DEFAULT NULL,
  `loan_amount` decimal(11,2) unsigned DEFAULT NULL,
  `representative` int(11) unsigned DEFAULT NULL,
  `stage` int(11) unsigned DEFAULT NULL,
  `status` int(11) unsigned NOT NULL,
  `status_poa` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_STATUS` (`status`),
  CONSTRAINT `FK_STATUS` FOREIGN KEY (`status`) REFERENCES `status` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `loans` WRITE;
/*!40000 ALTER TABLE `loans` DISABLE KEYS */;

INSERT INTO `loans` (`id`, `prod_name`, `borrower`, `lender`, `loan_amount`, `representative`, `stage`, `status`, `status_poa`)
VALUES
  (1, 'Blanket Loan', 1, 1, 1900000.00, 1, 1, 1, NULL),
  (2, 'Commercial Purchase', 1, 1, 1000000.00, NULL, NULL, 1, NULL),
  (3, '2 non-recourse loans for 60-65% LTV', 2, 1, 7000000.00, 2, NULL, 2, NULL),
  (4, '1 Non Recourse Purchase for $4M', 2, 1, 4000000.00, 2, NULL, 2, NULL),
  (5, 'Warehouse Deal', 3, 1, 750000.00, 1, NULL, 2, NULL),
  (6, 'Trailer Mobile Home Park Refi 14M', 1, 2, 14000000.00, 1, 2, 3, 1),
  (7, 'Commercial Purchase', 1, NULL, 1000000.00, NULL, NULL, 3, NULL),
  (8, '70MM Founders Phase', 5, NULL, 70000000.00, 1, 3, 3, NULL),
  (9, '$4MM 19 Property Loan', 4, 1, 4000000.00, NULL, NULL, 3, NULL),
  (10, '$1MM 15 Property Loan', 4, 1, 1000000.00, NULL, NULL, 3, NULL),
  (11, 'LOC Property Purchase', 4, 3, NULL, NULL, NULL, 3, NULL),
  (12, '2 non-recourse loans', 2, 1, NULL, 2, NULL, 3, NULL),
  (13, 'Warehouse Deal', 3, 1, NULL, 1, NULL, 3, NULL);

/*!40000 ALTER TABLE `loans` ENABLE KEYS */;
UNLOCK TABLES;
