/*
SQLyog Enterprise Trial - MySQL GUI v7.11 
MySQL - 5.5.5-10.2.12-MariaDB-log : Database - talentscope_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`talentscope_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `talentscope_db`;

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `state_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `city` */

insert  into `city`(`id`,`state_id`,`name`,`status`,`deleted_at`,`created_at`,`updated_at`) values (1,1,'Ahmedabad',1,NULL,NULL,NULL);

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `specialization_id` int(11) DEFAULT NULL,
  `pin_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_founded` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `company` */

insert  into `company`(`id`,`user_id`,`logo`,`name`,`address`,`country_id`,`state_id`,`city_id`,`specialization_id`,`pin_code`,`contact`,`email_address`,`about`,`website`,`year_founded`,`verified`,`deleted_at`,`created_at`,`updated_at`) values (4,10,'15471161775c371e91be7db.png','citrusbug',NULL,1,1,1,1,'380013','9725212073','krishna.citrusbug@gmail.com','asddasdasdasd','www.citrusbug.com','2014',0,NULL,'2019-01-10 04:59:37','2019-01-11 13:11:09');

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `country` */

insert  into `country`(`id`,`name`,`status`,`deleted_at`,`created_at`,`updated_at`) values (1,'India',1,NULL,NULL,NULL);

/*Table structure for table `employeetypes` */

DROP TABLE IF EXISTS `employeetypes`;

CREATE TABLE `employeetypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `employeetypes` */

insert  into `employeetypes`(`id`,`name`,`description`,`status`,`deleted_at`,`created_at`,`updated_at`) values (1,'Employee type - 01',NULL,1,NULL,'2019-01-07 06:29:37','2019-01-10 05:37:37'),(2,'ee',NULL,1,NULL,'2019-01-10 07:47:29','2019-01-10 07:47:29');

/*Table structure for table `job_category` */

DROP TABLE IF EXISTS `job_category`;

CREATE TABLE `job_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `job_category_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `job_category` */

insert  into `job_category`(`id`,`name`,`status`,`deleted_at`,`created_at`,`updated_at`) values (1,'cate 1',1,NULL,'2019-01-09 07:49:05','2019-01-09 07:49:05'),(2,'cate 2',1,NULL,'2019-01-09 07:50:42','2019-01-09 07:50:42'),(3,'cat 3',1,'2019-01-09 07:50:55','2019-01-09 07:50:51','2019-01-09 07:50:55');

/*Table structure for table `job_experience` */

DROP TABLE IF EXISTS `job_experience`;

CREATE TABLE `job_experience` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `job_experience_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `job_experience` */

insert  into `job_experience`(`id`,`name`,`status`,`deleted_at`,`created_at`,`updated_at`) values (1,'1-Year',1,NULL,'2019-01-09 07:57:56','2019-01-09 07:57:56'),(2,'fresher',1,NULL,'2019-01-09 07:58:09','2019-01-09 07:58:09'),(3,'2-Year',1,'2019-01-09 07:58:29','2019-01-09 07:58:19','2019-01-09 07:58:29');

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perks&benifits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_category_id` int(11) DEFAULT NULL,
  `employement_type_id` int(11) DEFAULT NULL,
  `job_experience_id` int(11) DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_limit` int(11) DEFAULT NULL,
  `placement_fee` int(11) DEFAULT NULL,
  `fixed_fee` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `jobs_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jobs` */

insert  into `jobs`(`id`,`user_id`,`title`,`description`,`perks&benifits`,`job_category_id`,`employement_type_id`,`job_experience_id`,`location`,`salary`,`upload_limit`,`placement_fee`,`fixed_fee`,`status`,`deleted_at`,`created_at`,`updated_at`) values (1,10,'dfhgdfh','vvvvvv','vvv',1,1,1,'vvvvv','40000-50000',5,NULL,50,0,NULL,'2019-01-09 08:50:20','2019-01-09 08:50:20'),(2,10,'a','a','a',1,1,1,'a','1',1,NULL,100,0,NULL,'2019-01-10 08:03:50','2019-01-10 08:16:00');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pages` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values ('krishna.citrusbug@gmail.com','$2y$10$CGYIFtcqfMWfveFul0fRaOgwi3PdlSsyy.cQ2z.21n/bkkRHWfwMm','2019-01-10 04:59:37');

/*Table structure for table `permission_role` */

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permission_role` */

insert  into `permission_role`(`permission_id`,`role_id`) values (1,1),(1,2),(2,1),(2,2),(3,1),(3,2),(4,1),(4,2),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(13,2),(13,3),(14,1),(14,2),(14,3),(15,1),(15,2),(15,3),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1);

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`parent_id`,`name`,`label`,`deleted_at`,`created_at`,`updated_at`) values (1,0,'access.users','Can Access Users',NULL,'2019-01-02 23:50:33','2019-01-02 23:50:33'),(2,1,'access.user.create','Can Create User',NULL,'2019-01-02 23:50:33','2019-01-02 23:50:33'),(3,1,'access.user.edit','Can Edit User',NULL,'2019-01-02 23:50:33','2019-01-02 23:50:33'),(4,1,'access.user.delete','Can Delete User',NULL,'2019-01-02 23:50:33','2019-01-02 23:50:33'),(5,0,'access.roles','Can Access Roles',NULL,'2019-01-02 23:50:33','2019-01-02 23:50:33'),(6,5,'access.role.create','Can Create Role',NULL,'2019-01-02 23:50:33','2019-01-02 23:50:33'),(7,5,'access.role.edit','Can Edit Role',NULL,'2019-01-02 23:50:33','2019-01-02 23:50:33'),(8,5,'access.role.delete','Can Delete Role',NULL,'2019-01-02 23:50:33','2019-01-02 23:50:33'),(9,0,'access.permissions','Can Access Permission',NULL,'2019-01-02 23:50:33','2019-01-02 23:50:33'),(10,9,'access.permission.create','Can Create Permission',NULL,'2019-01-02 23:50:33','2019-01-02 23:50:33'),(11,9,'access.permission.edit','Can Edit Permission',NULL,'2019-01-02 23:50:33','2019-01-02 23:50:33'),(12,9,'access.permission.delete','Can Delete Permission',NULL,'2019-01-02 23:50:33','2019-01-02 23:50:33'),(13,0,'access.settings','Can Access Settings',NULL,NULL,NULL),(14,13,'access.setting.edit','Can Edit Settings',NULL,NULL,NULL),(15,13,'access.setting.delete','Can Delete Settings',NULL,NULL,NULL),(16,0,'access.skills','Can Access Skills',NULL,'2019-01-04 03:03:11','2019-01-04 03:03:11'),(17,16,'access.skills.create','Can Create Skills',NULL,'2019-01-04 03:03:34','2019-01-04 03:03:34'),(18,16,'access.skills.edit','Can Edit Skills',NULL,'2019-01-04 03:03:55','2019-01-04 03:03:55'),(19,16,'access.skills.delete','Can Delete Skills',NULL,'2019-01-04 03:04:15','2019-01-04 03:04:15'),(20,0,'access.specializations','Can Access Industry Specializations',NULL,'2019-01-04 03:05:20','2019-01-04 03:05:20'),(21,20,'access.specializations.create','Can Create Industry Specializations',NULL,'2019-01-04 03:06:01','2019-01-04 03:06:01'),(22,20,'access.specializations.edit','Can Edit Industry Specializations',NULL,'2019-01-04 03:06:29','2019-01-04 03:06:29'),(23,20,'access.specializations.delete','Can Delete Industry Specializations',NULL,'2019-01-04 03:06:52','2019-01-04 03:06:52'),(24,0,'access.pages','Can Access Pages',NULL,'2019-01-04 03:07:47','2019-01-04 03:07:47'),(25,24,'access.pages.edit','Can Edit Pages',NULL,'2019-01-04 03:08:26','2019-01-04 03:08:26'),(26,24,'access.pages.create','Can Create Pages',NULL,'2019-01-04 03:08:44','2019-01-04 03:08:44'),(27,24,'access.pages.delete','Can Delete Pages',NULL,'2019-01-04 03:12:17','2019-01-04 03:12:17'),(28,0,'access.employeetypes','Can Access Employee Type',NULL,'2019-01-04 03:13:01','2019-01-04 03:13:01'),(29,28,'access.employeetypes.create','Can Create Employee Type',NULL,'2019-01-04 03:13:27','2019-01-04 03:13:27'),(30,28,'access.employeetypes.edit','Can Edit Employee Type',NULL,'2019-01-04 03:13:45','2019-01-04 03:13:45'),(31,28,'access.employeetypes.delete','Can Delete Employee Type',NULL,'2019-01-04 03:14:08','2019-01-04 03:14:08'),(32,0,'access.jobcategory','can Job category',NULL,'2019-01-09 07:16:37','2019-01-09 07:16:37'),(33,32,'access.jobcategory.create','Can Create JobCategory',NULL,'2019-01-09 07:17:44','2019-01-09 07:17:44'),(34,32,'access.jobcategory.edit','Can Edit JobCategory',NULL,'2019-01-09 07:18:47','2019-01-09 07:19:09'),(35,32,'access.jobcategory.delete','Can Delete JobCategory',NULL,'2019-01-09 07:20:09','2019-01-09 07:20:09'),(36,0,'access.jobexperience','Can Job Experience',NULL,'2019-01-09 07:22:18','2019-01-09 07:32:20'),(37,36,'access.jobexperience.create','Can Create Job Experience',NULL,'2019-01-09 07:23:28','2019-01-09 07:23:28'),(38,36,'access.jobexperience.edit','Can Edit Job Expericence',NULL,'2019-01-09 07:24:33','2019-01-09 07:24:33'),(39,36,'access.jobexperience.delete','Can Delete Job Experience',NULL,'2019-01-09 07:25:49','2019-01-09 07:25:49'),(40,0,'access.job','Can Access Job',NULL,'2019-01-10 06:01:06','2019-01-10 06:01:06'),(41,40,'access.job.create','Can Job Create',NULL,'2019-01-10 06:02:08','2019-01-10 06:02:08'),(42,40,'access.job.edit','Can Job Edit',NULL,'2019-01-10 06:02:33','2019-01-10 06:02:33'),(43,40,'access.job.delete','Can Job Delete',NULL,'2019-01-10 06:03:08','2019-01-10 06:03:08');

/*Table structure for table `role_user` */

DROP TABLE IF EXISTS `role_user`;

CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_user` */

insert  into `role_user`(`role_id`,`user_id`) values (1,1),(2,10);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`label`,`deleted_at`,`created_at`,`updated_at`) values (1,'SU','Super Admin',NULL,'2019-01-02 23:50:34','2019-01-02 23:50:34'),(2,'EMP','Employer',NULL,'2019-01-03 04:43:19','2019-01-04 04:27:41'),(3,'AG','Agent',NULL,'2019-01-08 02:29:36','2019-01-08 02:29:36');

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `settings` */

insert  into `settings`(`id`,`created_at`,`updated_at`,`deleted_at`,`name`,`value`) values (1,NULL,NULL,NULL,'Company_Name','HR PORTAL');

/*Table structure for table `skills` */

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `skills_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `skills` */

insert  into `skills`(`id`,`name`,`description`,`status`,`deleted_at`,`created_at`,`updated_at`) values (1,'PHP',NULL,1,NULL,'2019-01-04 04:04:31','2019-01-10 05:45:33'),(2,'MySQL',NULL,1,NULL,'2019-01-10 05:33:38','2019-01-10 05:45:24'),(3,'Angular JS',NULL,1,NULL,'2019-01-10 05:34:23','2019-01-10 05:42:28'),(4,'Js',NULL,1,NULL,'2019-01-10 05:34:42','2019-01-10 05:40:33'),(5,'a',NULL,1,NULL,'2019-01-10 05:45:50','2019-01-10 05:49:45'),(6,'az',NULL,1,NULL,'2019-01-10 05:46:01','2019-01-10 05:47:04');

/*Table structure for table `skills_job` */

DROP TABLE IF EXISTS `skills_job`;

CREATE TABLE `skills_job` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `skills_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `skills_job` */

/*Table structure for table `specializations` */

DROP TABLE IF EXISTS `specializations`;

CREATE TABLE `specializations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `specializations` */

insert  into `specializations`(`id`,`name`,`description`,`status`,`deleted_at`,`created_at`,`updated_at`) values (1,'Specialization10',NULL,0,'2019-01-10 05:40:20','2019-01-07 04:46:15','2019-01-10 05:40:20'),(2,'Specialization 2-',NULL,0,'2019-01-10 05:36:47','2019-01-10 05:36:42','2019-01-10 05:36:47'),(3,'sss',NULL,0,'2019-01-10 05:37:24','2019-01-10 05:37:22','2019-01-10 05:37:24');

/*Table structure for table `state` */

DROP TABLE IF EXISTS `state`;

CREATE TABLE `state` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `state` */

insert  into `state`(`id`,`country_id`,`name`,`status`,`deleted_at`,`created_at`,`updated_at`) values (1,1,'Gujarat',1,NULL,NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`profile_image`,`gender`,`contact`,`email`,`password`,`deleted_at`,`remember_token`,`created_at`,`updated_at`,`status`) values (1,'Admin@admin','15471805485c381a042eba7.jpg','male','9016415246','admin.citrusbug@gmail.com','$2y$10$YbU5M3skXxSL/lWLUfPgCeskT/fL8G1BQ1wwR3GGVf6MzK3nQPSyi',NULL,'5srWisQEnDYEzFBAyByL5pFmCHMjW0kodwPhHG8sftWe8zk1eeXEpMrTLQSU','2019-01-02 23:50:34','2019-01-11 04:22:28',1),(10,'Krishna','15472124095c389679705d2.png','female',NULL,'pavan.citrusbug@gmail.com','$2y$10$YbU5M3skXxSL/lWLUfPgCeskT/fL8G1BQ1wwR3GGVf6MzK3nQPSyi',NULL,'b133T5FdDNKjQUxfxFD1d89VoZ1tgrCt3myC85EHCxP25megb5nJdqEuO5MT','2019-01-10 04:59:37','2019-01-11 13:13:29',1);

/*Table structure for table `users_job` */

DROP TABLE IF EXISTS `users_job`;

CREATE TABLE `users_job` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users_job` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
