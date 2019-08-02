/*
SQLyog Enterprise - MySQL GUI v6.13
MySQL - 5.5.5-10.1.13-MariaDB : Database - db_bd_homoeopathic_board
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `db_bd_homoeopathic_board`;

USE `db_bd_homoeopathic_board`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `collages` */

DROP TABLE IF EXISTS `collages`;

CREATE TABLE `collages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `college_name` varchar(255) DEFAULT NULL,
  `registration_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `division_id` int(10) DEFAULT NULL,
  `district_id` int(10) DEFAULT NULL,
  `upazila_id` int(10) DEFAULT NULL,
  `address` text,
  `phone` text,
  `epin_number` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` tinyint(5) DEFAULT NULL,
  `approved_by` int(10) DEFAULT NULL,
  `added_by` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `epin_number` (`epin_number`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

/*Data for the table `collages` */

insert  into `collages`(`id`,`college_name`,`registration_number`,`email`,`division_id`,`district_id`,`upazila_id`,`address`,`phone`,`epin_number`,`password`,`status`,`approved_by`,`added_by`,`created_at`,`updated_at`) values (31,'Dhaka City College','120000','dcc@edu.bd',3,1,149,'dhaka','0179450450','180101','$2y$10$O3WYDdovzdfFeYENu/6KCueXAcCAaj7qGwoN.OH9S21oOG2vOpPSi',1,NULL,NULL,'2018-03-26 08:26:04','2018-03-26 08:26:04'),(32,'Dhaka College','470000000','alaminmia411@gmail.com',3,1,522,'dhaka','0179450450','180102','$2y$10$OQqCBW8peC9hgbEoJ1A1Vu0gPV2q/GssZV60sZBxHMOfAWBsa0JqS',1,NULL,NULL,'2018-03-26 09:53:01','2018-03-26 09:53:01'),(33,'Idel College','1540021','idel@gmail.com',3,1,501,'dhaka','01874135210','180103','$2y$10$m87reB930dQI6jpehgT9he1PX1fSwB0KVdbNeOh29ZE.y40O.5lhC',1,NULL,NULL,'2018-03-28 12:09:57','2018-03-28 12:09:57'),(34,'Dhaka College','78500','dcc44@edu.bd',3,1,497,'dhaka','01874135210','180104','$2y$10$t5pW9Oco5XVdoyfCaljlc.HFU0PzhNzFdbdS.p1R/CqOr1VeBCI8u',1,NULL,NULL,'2018-03-28 12:36:55','2018-03-28 12:36:55'),(35,'Dhaka City College','154381','fsssfsf@gmail.com',1,19,19,'fsdfhsgsb','0179450450','181901','$2y$10$Gw59kZjHg7l0O57X7MonxeTusrriN4hMOJ69EqYNPB0/5WeSG7D5u',1,NULL,NULL,'2018-03-28 11:42:11','2018-03-28 11:42:11'),(36,'Dhaka College','12503','dccdda@edu.bd',1,19,19,'ddadad','01874135210','181902','$2y$10$UFe4iRbxORQVG0NA6ufbke/aKBT.PwIJasHVuUZ1KJJjMI6LQPI7O',1,NULL,NULL,'2018-03-28 11:49:15','2018-03-28 11:49:15');

/*Table structure for table `districts` */

DROP TABLE IF EXISTS `districts`;

CREATE TABLE `districts` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `division_id` int(2) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `website` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

/*Data for the table `districts` */

insert  into `districts`(`id`,`division_id`,`name`,`bn_name`,`lat`,`lon`,`website`) values (1,3,'Dhaka','ঢাকা',23.7115253,90.4111451,'www.dhaka.gov.bd'),(2,3,'Faridpur','ফরিদপুর',23.6070822,89.8429406,'www.faridpur.gov.bd'),(3,3,'Gazipur','গাজীপুর',24.0022858,90.4264283,'www.gazipur.gov.bd'),(4,3,'Gopalganj','গোপালগঞ্জ',23.0050857,89.8266059,'www.gopalganj.gov.bd'),(5,3,'Jamalpur','জামালপুর',24.937533,89.937775,'www.jamalpur.gov.bd'),(6,3,'Kishoreganj','কিশোরগঞ্জ',24.444937,90.776575,'www.kishoreganj.gov.bd'),(7,3,'Madaripur','মাদারীপুর',23.164102,90.1896805,'www.madaripur.gov.bd'),(8,3,'Manikganj','মানিকগঞ্জ',0,0,'www.manikganj.gov.bd'),(9,3,'Munshiganj','মুন্সিগঞ্জ',0,0,'www.munshiganj.gov.bd'),(10,3,'Mymensingh','ময়মনসিংহ',0,0,'www.mymensingh.gov.bd'),(11,3,'Narayanganj','নারায়াণগঞ্জ',23.63366,90.496482,'www.narayanganj.gov.bd'),(12,3,'Narsingdi','নরসিংদী',23.932233,90.71541,'www.narsingdi.gov.bd'),(13,3,'Netrokona','নেত্রকোনা',24.870955,90.727887,'www.netrokona.gov.bd'),(14,3,'Rajbari','রাজবাড়ি',23.7574305,89.6444665,'www.rajbari.gov.bd'),(15,3,'Shariatpur','শরীয়তপুর',0,0,'www.shariatpur.gov.bd'),(16,3,'Sherpur','শেরপুর',25.0204933,90.0152966,'www.sherpur.gov.bd'),(17,3,'Tangail','টাঙ্গাইল',0,0,'www.tangail.gov.bd'),(18,5,'Bogra','বগুড়া',24.8465228,89.377755,'www.bogra.gov.bd'),(19,5,'Joypurhat','জয়পুরহাট',0,0,'www.joypurhat.gov.bd'),(20,5,'Naogaon','নওগাঁ',0,0,'www.naogaon.gov.bd'),(21,5,'Natore','নাটোর',24.420556,89.000282,'www.natore.gov.bd'),(22,5,'Nawabganj','নবাবগঞ্জ',24.5965034,88.2775122,'www.chapainawabganj.gov.bd'),(23,5,'Pabna','পাবনা',23.998524,89.233645,'www.pabna.gov.bd'),(24,5,'Rajshahi','রাজশাহী',0,0,'www.rajshahi.gov.bd'),(25,5,'Sirajgonj','সিরাজগঞ্জ',24.4533978,89.7006815,'www.sirajganj.gov.bd'),(26,6,'Dinajpur','দিনাজপুর',25.6217061,88.6354504,'www.dinajpur.gov.bd'),(27,6,'Gaibandha','গাইবান্ধা',25.328751,89.528088,'www.gaibandha.gov.bd'),(28,6,'Kurigram','কুড়িগ্রাম',25.805445,89.636174,'www.kurigram.gov.bd'),(29,6,'Lalmonirhat','লালমনিরহাট',0,0,'www.lalmonirhat.gov.bd'),(30,6,'Nilphamari','নীলফামারী',25.931794,88.856006,'www.nilphamari.gov.bd'),(31,6,'Panchagarh','পঞ্চগড়',26.3411,88.5541606,'www.panchagarh.gov.bd'),(32,6,'Rangpur','রংপুর',25.7558096,89.244462,'www.rangpur.gov.bd'),(33,6,'Thakurgaon','ঠাকুরগাঁও',26.0336945,88.4616834,'www.thakurgaon.gov.bd'),(34,1,'Barguna','বরগুনা',0,0,'www.barguna.gov.bd'),(35,1,'Barisal','বরিশাল',0,0,'www.barisal.gov.bd'),(36,1,'Bhola','ভোলা',22.685923,90.648179,'www.bhola.gov.bd'),(37,1,'Jhalokati','ঝালকাঠি',0,0,'www.jhalakathi.gov.bd'),(38,1,'Patuakhali','পটুয়াখালী',22.3596316,90.3298712,'www.patuakhali.gov.bd'),(39,1,'Pirojpur','পিরোজপুর',0,0,'www.pirojpur.gov.bd'),(40,2,'Bandarban','বান্দরবান',22.1953275,92.2183773,'www.bandarban.gov.bd'),(41,2,'Brahmanbaria','ব্রাহ্মণবাড়িয়া',23.9570904,91.1119286,'www.brahmanbaria.gov.bd'),(42,2,'Chandpur','চাঁদপুর',23.2332585,90.6712912,'www.chandpur.gov.bd'),(43,2,'Chittagong','চট্টগ্রাম',22.335109,91.834073,'www.chittagong.gov.bd'),(44,2,'Comilla','কুমিল্লা',23.4682747,91.1788135,'www.comilla.gov.bd'),(45,2,'Cox\'s Bazar','কক্স বাজার',0,0,'www.coxsbazar.gov.bd'),(46,2,'Feni','ফেনী',23.023231,91.3840844,'www.feni.gov.bd'),(47,2,'Khagrachari','খাগড়াছড়ি',23.119285,91.984663,'www.khagrachhari.gov.bd'),(48,2,'Lakshmipur','লক্ষ্মীপুর',22.942477,90.841184,'www.lakshmipur.gov.bd'),(49,2,'Noakhali','নোয়াখালী',22.869563,91.099398,'www.noakhali.gov.bd'),(50,2,'Rangamati','রাঙ্গামাটি',0,0,'www.rangamati.gov.bd'),(51,7,'Habiganj','হবিগঞ্জ',24.374945,91.41553,'www.habiganj.gov.bd'),(52,7,'Maulvibazar','মৌলভীবাজার',24.482934,91.777417,'www.moulvibazar.gov.bd'),(53,7,'Sunamganj','সুনামগঞ্জ',25.0658042,91.3950115,'www.sunamganj.gov.bd'),(54,7,'Sylhet','সিলেট',24.8897956,91.8697894,'www.sylhet.gov.bd'),(55,4,'Bagerhat','বাগেরহাট',22.651568,89.785938,'www.bagerhat.gov.bd'),(56,4,'Chuadanga','চুয়াডাঙ্গা',23.6401961,88.841841,'www.chuadanga.gov.bd'),(57,4,'Jessore','যশোর',23.16643,89.2081126,'www.jessore.gov.bd'),(58,4,'Jhenaidah','ঝিনাইদহ',23.5448176,89.1539213,'www.jhenaidah.gov.bd'),(59,4,'Khulna','খুলনা',22.815774,89.568679,'www.khulna.gov.bd'),(60,4,'Kushtia','কুষ্টিয়া',23.901258,89.120482,'www.kushtia.gov.bd'),(61,4,'Magura','মাগুরা',23.487337,89.419956,'www.magura.gov.bd'),(62,4,'Meherpur','মেহেরপুর',23.762213,88.631821,'www.meherpur.gov.bd'),(63,4,'Narail','নড়াইল',23.172534,89.512672,'www.narail.gov.bd'),(64,4,'Satkhira','সাতক্ষীরা',0,0,'www.satkhira.gov.bd');

/*Table structure for table `divisions` */

DROP TABLE IF EXISTS `divisions`;

CREATE TABLE `divisions` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `divisions` */

insert  into `divisions`(`id`,`name`,`bn_name`) values (1,'Barisal','বরিশাল'),(2,'Chittagong','চট্টগ্রাম'),(3,'Dhaka','ঢাকা'),(4,'Khulna','খুলনা'),(5,'Rajshahi','রাজশাহী'),(6,'Rangpur','রংপুর'),(7,'Sylhet','সিলেট');

/*Table structure for table `form_fillup` */

DROP TABLE IF EXISTS `form_fillup`;

CREATE TABLE `form_fillup` (
  `form_fillup_id` int(11) NOT NULL AUTO_INCREMENT,
  `registration_no` int(20) NOT NULL,
  `last_university` varchar(255) NOT NULL,
  `dhms_exam_name_session` varchar(255) NOT NULL,
  `dhms_exam_center` varchar(255) NOT NULL,
  `dhms_exam_roll` int(20) NOT NULL,
  `dhms_exam_year` int(4) NOT NULL,
  `disqualified_exam_name` varchar(255) NOT NULL,
  `disqualified_exam_center` varchar(255) NOT NULL,
  `disqualified_exam_roll` int(20) NOT NULL,
  `disqualified_exam_year` int(4) NOT NULL,
  `disqualified_punishment` varchar(255) NOT NULL,
  `language` varchar(25) NOT NULL,
  `academic_language` varchar(25) NOT NULL,
  `subject_code_1` int(10) NOT NULL,
  `subject_code_2` int(10) NOT NULL,
  `subject_code_3` int(10) NOT NULL,
  `subject_code_4` int(10) NOT NULL,
  `subject_code_5` int(10) NOT NULL,
  `subject_code_6` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`form_fillup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `form_fillup` */

insert  into `form_fillup`(`form_fillup_id`,`registration_no`,`last_university`,`dhms_exam_name_session`,`dhms_exam_center`,`dhms_exam_roll`,`dhms_exam_year`,`disqualified_exam_name`,`disqualified_exam_center`,`disqualified_exam_roll`,`disqualified_exam_year`,`disqualified_punishment`,`language`,`academic_language`,`subject_code_1`,`subject_code_2`,`subject_code_3`,`subject_code_4`,`subject_code_5`,`subject_code_6`,`status`,`create_date`,`modify_date`) values (1,126511,'IIUC','Test exam name','dhaka college',12345,2001,'Exam 2','dhaka city college',54321,2002,'none','english','bangla',101,201,303,401,501,602,1,'2018-04-19 15:39:38','2018-04-19 15:39:38'),(2,133739,'NGnaj','e2','c2',111,2010,'e3','c3',222,2011,'no','Bangla','English',111,112,113,201,222,333,1,'2018-04-19 16:03:22','2018-04-19 16:03:22');

/*Table structure for table `institute_info` */

DROP TABLE IF EXISTS `institute_info`;

CREATE TABLE `institute_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ins_name` varchar(255) NOT NULL,
  `registration_no` varchar(255) NOT NULL,
  `name_of_principal` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `upazilla` varchar(255) NOT NULL,
  `epin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `institute_info` */

/*Table structure for table `student_info` */

DROP TABLE IF EXISTS `student_info`;

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institute_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_profession` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `relation_with_guardian` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `registration_no` int(20) NOT NULL,
  `year` int(4) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `parmanent_address` longtext NOT NULL,
  `present_address` longtext NOT NULL,
  `current_working_company_name_address` varchar(255) NOT NULL,
  `company_permission` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `student_info` */

insert  into `student_info`(`id`,`institute_id`,`student_name`,`father_name`,`father_profession`,`mother_name`,`guardian_name`,`relation_with_guardian`,`gender`,`registration_no`,`year`,`date_of_birth`,`nationality`,`religion`,`parmanent_address`,`present_address`,`current_working_company_name_address`,`company_permission`,`mobile`,`status`,`create_date`,`modify_date`) values (1,32,'a','b','c','d','e','f','M',1,2222,'aaaa','g','I','h','i','j','k','1111111',1,'2018-04-04 18:14:42','2018-04-04 18:14:42'),(2,32,'Md. Hossni Mubarak','Abdul Gofran','Retired','H Akter','Abdul Gofran','Father','M',126511,2018,'23 Sep 1985','Bangladeshi','I','Section 11, Pallabi, Mirpur, Dhaka 1216','Do','Uparrrow Consulting','Yes','0168205537',1,'2018-04-18 16:48:58','2018-04-18 16:48:58'),(3,0,'Sakib Al Hasan','Father Name1','Business','Momotaj','Mubarak','','',133739,0,'','Bangladeshi','I','Parmanent Addr 1','','','','',1,'2018-04-19 16:03:21','2018-04-19 16:03:21');

/*Table structure for table `teacher_info` */

DROP TABLE IF EXISTS `teacher_info`;

CREATE TABLE `teacher_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `institude_id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `teacher_info` */

/*Table structure for table `upazilas` */

DROP TABLE IF EXISTS `upazilas`;

CREATE TABLE `upazilas` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `district_id` int(2) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `bn_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=528 DEFAULT CHARSET=utf8;

/*Data for the table `upazilas` */

insert  into `upazilas`(`id`,`district_id`,`name`,`bn_name`) values (1,34,'Amtali Upazila','আমতলী'),(2,34,'Bamna Upazila','বামনা'),(3,34,'Barguna Sadar Upazila','বরগুনা সদর'),(4,34,'Betagi Upazila','বেতাগি'),(5,34,'Patharghata Upazila','পাথরঘাটা'),(6,34,'Taltali Upazila','তালতলী'),(7,35,'Muladi Upazila','মুলাদি'),(8,35,'Babuganj Upazila','বাবুগঞ্জ'),(9,35,'Agailjhara Upazila','আগাইলঝরা'),(10,35,'Barisal Sadar Upazila','বরিশাল সদর'),(11,35,'Bakerganj Upazila','বাকেরগঞ্জ'),(12,35,'Banaripara Upazila','বানাড়িপারা'),(13,35,'Gaurnadi Upazila','গৌরনদী'),(14,35,'Hizla Upazila','হিজলা'),(15,35,'Mehendiganj Upazila','মেহেদিগঞ্জ '),(16,35,'Wazirpur Upazila','ওয়াজিরপুর'),(17,36,'Bhola Sadar Upazila','ভোলা সদর'),(18,36,'Burhanuddin Upazila','বুরহানউদ্দিন'),(19,36,'Char Fasson Upazila','চর ফ্যাশন'),(20,36,'Daulatkhan Upazila','দৌলতখান'),(21,36,'Lalmohan Upazila','লালমোহন'),(22,36,'Manpura Upazila','মনপুরা'),(23,36,'Tazumuddin Upazila','তাজুমুদ্দিন'),(24,37,'Jhalokati Sadar Upazila','ঝালকাঠি সদর'),(25,37,'Kathalia Upazila','কাঁঠালিয়া'),(26,37,'Nalchity Upazila','নালচিতি'),(27,37,'Rajapur Upazila','রাজাপুর'),(28,38,'Bauphal Upazila','বাউফল'),(29,38,'Dashmina Upazila','দশমিনা'),(30,38,'Galachipa Upazila','গলাচিপা'),(31,38,'Kalapara Upazila','কালাপারা'),(32,38,'Mirzaganj Upazila','মির্জাগঞ্জ '),(33,38,'Patuakhali Sadar Upazila','পটুয়াখালী সদর'),(34,38,'Dumki Upazila','ডুমকি'),(35,38,'Rangabali Upazila','রাঙ্গাবালি'),(36,39,'Bhandaria','ভ্যান্ডারিয়া'),(37,39,'Kaukhali','কাউখালি'),(38,39,'Mathbaria','মাঠবাড়িয়া'),(39,39,'Nazirpur','নাজিরপুর'),(40,39,'Nesarabad','নেসারাবাদ'),(41,39,'Pirojpur Sadar','পিরোজপুর সদর'),(42,39,'Zianagar','জিয়ানগর'),(43,40,'Bandarban Sadar','বান্দরবন সদর'),(44,40,'Thanchi','থানচি'),(45,40,'Lama','লামা'),(46,40,'Naikhongchhari','নাইখংছড়ি '),(47,40,'Ali kadam','আলী কদম'),(48,40,'Rowangchhari','রউয়াংছড়ি '),(49,40,'Ruma','রুমা'),(50,41,'Brahmanbaria Sadar Upazila','ব্রাহ্মণবাড়িয়া সদর'),(51,41,'Ashuganj Upazila','আশুগঞ্জ'),(52,41,'Nasirnagar Upazila','নাসির নগর'),(53,41,'Nabinagar Upazila','নবীনগর'),(54,41,'Sarail Upazila','সরাইল'),(55,41,'Shahbazpur Town','শাহবাজপুর টাউন'),(56,41,'Kasba Upazila','কসবা'),(57,41,'Akhaura Upazila','আখাউরা'),(58,41,'Bancharampur Upazila','বাঞ্ছারামপুর'),(59,41,'Bijoynagar Upazila','বিজয় নগর'),(60,42,'Chandpur Sadar','চাঁদপুর সদর'),(61,42,'Faridganj','ফরিদগঞ্জ'),(62,42,'Haimchar','হাইমচর'),(63,42,'Haziganj','হাজীগঞ্জ'),(64,42,'Kachua','কচুয়া'),(65,42,'Matlab Uttar','মতলব উত্তর'),(66,42,'Matlab Dakkhin','মতলব দক্ষিণ'),(67,42,'Shahrasti','শাহরাস্তি'),(68,43,'Anwara Upazila','আনোয়ারা'),(69,43,'Banshkhali Upazila','বাশখালি'),(70,43,'Boalkhali Upazila','বোয়ালখালি'),(71,43,'Chandanaish Upazila','চন্দনাইশ'),(72,43,'Fatikchhari Upazila','ফটিকছড়ি'),(73,43,'Hathazari Upazila','হাঠহাজারী'),(74,43,'Lohagara Upazila','লোহাগারা'),(75,43,'Mirsharai Upazila','মিরসরাই'),(76,43,'Patiya Upazila','পটিয়া'),(77,43,'Rangunia Upazila','রাঙ্গুনিয়া'),(78,43,'Raozan Upazila','রাউজান'),(79,43,'Sandwip Upazila','সন্দ্বীপ'),(80,43,'Satkania Upazila','সাতকানিয়া'),(81,43,'Sitakunda Upazila','সীতাকুণ্ড'),(82,44,'Barura Upazila','বড়ুরা'),(83,44,'Brahmanpara Upazila','ব্রাহ্মণপাড়া'),(84,44,'Burichong Upazila','বুড়িচং'),(85,44,'Chandina Upazila','চান্দিনা'),(86,44,'Chauddagram Upazila','চৌদ্দগ্রাম'),(87,44,'Daudkandi Upazila','দাউদকান্দি'),(88,44,'Debidwar Upazila','দেবীদ্বার'),(89,44,'Homna Upazila','হোমনা'),(90,44,'Comilla Sadar Upazila','কুমিল্লা সদর'),(91,44,'Laksam Upazila','লাকসাম'),(92,44,'Monohorgonj Upazila','মনোহরগঞ্জ'),(93,44,'Meghna Upazila','মেঘনা'),(94,44,'Muradnagar Upazila','মুরাদনগর'),(95,44,'Nangalkot Upazila','নাঙ্গালকোট'),(96,44,'Comilla Sadar South Upazila','কুমিল্লা সদর দক্ষিণ'),(97,44,'Titas Upazila','তিতাস'),(98,45,'Chakaria Upazila','চকরিয়া'),(99,45,'Chakaria Upazila','চকরিয়া'),(100,45,'Cox\'s Bazar Sadar Upazila','কক্স বাজার সদর'),(101,45,'Kutubdia Upazila','কুতুবদিয়া'),(102,45,'Maheshkhali Upazila','মহেশখালী'),(103,45,'Ramu Upazila','রামু'),(104,45,'Teknaf Upazila','টেকনাফ'),(105,45,'Ukhia Upazila','উখিয়া'),(106,45,'Pekua Upazila','পেকুয়া'),(107,46,'Feni Sadar','ফেনী সদর'),(108,46,'Chagalnaiya','ছাগল নাইয়া'),(109,46,'Daganbhyan','দাগানভিয়া'),(110,46,'Parshuram','পরশুরাম'),(111,46,'Fhulgazi','ফুলগাজি'),(112,46,'Sonagazi','সোনাগাজি'),(113,47,'Dighinala Upazila','দিঘিনালা '),(114,47,'Khagrachhari Upazila','খাগড়াছড়ি'),(115,47,'Lakshmichhari Upazila','লক্ষ্মীছড়ি'),(116,47,'Mahalchhari Upazila','মহলছড়ি'),(117,47,'Manikchhari Upazila','মানিকছড়ি'),(118,47,'Matiranga Upazila','মাটিরাঙ্গা'),(119,47,'Panchhari Upazila','পানছড়ি'),(120,47,'Ramgarh Upazila','রামগড়'),(121,48,'Lakshmipur Sadar Upazila','লক্ষ্মীপুর সদর'),(122,48,'Raipur Upazila','রায়পুর'),(123,48,'Ramganj Upazila','রামগঞ্জ'),(124,48,'Ramgati Upazila','রামগতি'),(125,48,'Komol Nagar Upazila','কমল নগর'),(126,49,'Noakhali Sadar Upazila','নোয়াখালী সদর'),(127,49,'Begumganj Upazila','বেগমগঞ্জ'),(128,49,'Chatkhil Upazila','চাটখিল'),(129,49,'Companyganj Upazila','কোম্পানীগঞ্জ'),(130,49,'Shenbag Upazila','শেনবাগ'),(131,49,'Hatia Upazila','হাতিয়া'),(132,49,'Kobirhat Upazila','কবিরহাট '),(133,49,'Sonaimuri Upazila','সোনাইমুরি'),(134,49,'Suborno Char Upazila','সুবর্ণ চর '),(135,50,'Rangamati Sadar Upazila','রাঙ্গামাটি সদর'),(136,50,'Belaichhari Upazila','বেলাইছড়ি'),(137,50,'Bagaichhari Upazila','বাঘাইছড়ি'),(138,50,'Barkal Upazila','বরকল'),(139,50,'Juraichhari Upazila','জুরাইছড়ি'),(140,50,'Rajasthali Upazila','রাজাস্থলি'),(141,50,'Kaptai Upazila','কাপ্তাই'),(142,50,'Langadu Upazila','লাঙ্গাডু'),(143,50,'Nannerchar Upazila','নান্নেরচর '),(144,50,'Kaukhali Upazila','কাউখালি'),(145,1,'Dhamrai Upazila','ধামরাই'),(146,1,'Dohar Upazila','দোহার'),(147,1,'Keraniganj Upazila','কেরানীগঞ্জ'),(148,1,'Nawabganj Upazila','নবাবগঞ্জ'),(149,1,'Savar Upazila','সাভার'),(150,2,'Faridpur Sadar Upazila','ফরিদপুর সদর'),(151,2,'Boalmari Upazila','বোয়ালমারী'),(152,2,'Alfadanga Upazila','আলফাডাঙ্গা'),(153,2,'Madhukhali Upazila','মধুখালি'),(154,2,'Bhanga Upazila','ভাঙ্গা'),(155,2,'Nagarkanda Upazila','নগরকান্ড'),(156,2,'Charbhadrasan Upazila','চরভদ্রাসন '),(157,2,'Sadarpur Upazila','সদরপুর'),(158,2,'Shaltha Upazila','শালথা'),(159,3,'Gazipur Sadar-Joydebpur','গাজীপুর সদর'),(160,3,'Kaliakior','কালিয়াকৈর'),(161,3,'Kapasia','কাপাসিয়া'),(162,3,'Sripur','শ্রীপুর'),(163,3,'Kaliganj','কালীগঞ্জ'),(164,3,'Tongi','টঙ্গি'),(165,4,'Gopalganj Sadar Upazila','গোপালগঞ্জ সদর'),(166,4,'Kashiani Upazila','কাশিয়ানি'),(167,4,'Kotalipara Upazila','কোটালিপাড়া'),(168,4,'Muksudpur Upazila','মুকসুদপুর'),(169,4,'Tungipara Upazila','টুঙ্গিপাড়া'),(170,5,'Dewanganj Upazila','দেওয়ানগঞ্জ'),(171,5,'Baksiganj Upazila','বকসিগঞ্জ'),(172,5,'Islampur Upazila','ইসলামপুর'),(173,5,'Jamalpur Sadar Upazila','জামালপুর সদর'),(174,5,'Madarganj Upazila','মাদারগঞ্জ'),(175,5,'Melandaha Upazila','মেলানদাহা'),(176,5,'Sarishabari Upazila','সরিষাবাড়ি '),(177,5,'Narundi Police I.C','নারুন্দি'),(178,6,'Astagram Upazila','অষ্টগ্রাম'),(179,6,'Bajitpur Upazila','বাজিতপুর'),(180,6,'Bhairab Upazila','ভৈরব'),(181,6,'Hossainpur Upazila','হোসেনপুর '),(182,6,'Itna Upazila','ইটনা'),(183,6,'Karimganj Upazila','করিমগঞ্জ'),(184,6,'Katiadi Upazila','কতিয়াদি'),(185,6,'Kishoreganj Sadar Upazila','কিশোরগঞ্জ সদর'),(186,6,'Kuliarchar Upazila','কুলিয়ারচর'),(187,6,'Mithamain Upazila','মিঠামাইন'),(188,6,'Nikli Upazila','নিকলি'),(189,6,'Pakundia Upazila','পাকুন্ডা'),(190,6,'Tarail Upazila','তাড়াইল'),(191,7,'Madaripur Sadar','মাদারীপুর সদর'),(192,7,'Kalkini','কালকিনি'),(193,7,'Rajoir','রাজইর'),(194,7,'Shibchar','শিবচর'),(195,8,'Manikganj Sadar Upazila','মানিকগঞ্জ সদর'),(196,8,'Singair Upazila','সিঙ্গাইর'),(197,8,'Shibalaya Upazila','শিবালয়'),(198,8,'Saturia Upazila','সাঠুরিয়া'),(199,8,'Harirampur Upazila','হরিরামপুর'),(200,8,'Ghior Upazila','ঘিওর'),(201,8,'Daulatpur Upazila','দৌলতপুর'),(202,9,'Lohajang Upazila','লোহাজং'),(203,9,'Sreenagar Upazila','শ্রীনগর'),(204,9,'Munshiganj Sadar Upazila','মুন্সিগঞ্জ সদর'),(205,9,'Sirajdikhan Upazila','সিরাজদিখান'),(206,9,'Tongibari Upazila','টঙ্গিবাড়ি'),(207,9,'Gazaria Upazila','গজারিয়া'),(208,10,'Bhaluka','ভালুকা'),(209,10,'Trishal','ত্রিশাল'),(210,10,'Haluaghat','হালুয়াঘাট'),(211,10,'Muktagachha','মুক্তাগাছা'),(212,10,'Dhobaura','ধবারুয়া'),(213,10,'Fulbaria','ফুলবাড়িয়া'),(214,10,'Gaffargaon','গফরগাঁও'),(215,10,'Gauripur','গৌরিপুর'),(216,10,'Ishwarganj','ঈশ্বরগঞ্জ'),(217,10,'Mymensingh Sadar','ময়মনসিং সদর'),(218,10,'Nandail','নন্দাইল'),(219,10,'Phulpur','ফুলপুর'),(220,11,'Araihazar Upazila','আড়াইহাজার'),(221,11,'Sonargaon Upazila','সোনারগাঁও'),(222,11,'Bandar','বান্দার'),(223,11,'Naryanganj Sadar Upazila','নারায়ানগঞ্জ সদর'),(224,11,'Rupganj Upazila','রূপগঞ্জ'),(225,11,'Siddirgonj Upazila','সিদ্ধিরগঞ্জ'),(226,12,'Belabo Upazila','বেলাবো'),(227,12,'Monohardi Upazila','মনোহরদি'),(228,12,'Narsingdi Sadar Upazila','নরসিংদী সদর'),(229,12,'Palash Upazila','পলাশ'),(230,12,'Raipura Upazila, Narsingdi','রায়পুর'),(231,12,'Shibpur Upazila','শিবপুর'),(232,13,'Kendua Upazilla','কেন্দুয়া'),(233,13,'Atpara Upazilla','আটপাড়া'),(234,13,'Barhatta Upazilla','বরহাট্টা'),(235,13,'Durgapur Upazilla','দুর্গাপুর'),(236,13,'Kalmakanda Upazilla','কলমাকান্দা'),(237,13,'Madan Upazilla','মদন'),(238,13,'Mohanganj Upazilla','মোহনগঞ্জ'),(239,13,'Netrakona-S Upazilla','নেত্রকোনা সদর'),(240,13,'Purbadhala Upazilla','পূর্বধলা'),(241,13,'Khaliajuri Upazilla','খালিয়াজুরি'),(242,14,'Baliakandi Upazila','বালিয়াকান্দি'),(243,14,'Goalandaghat Upazila','গোয়ালন্দ ঘাট'),(244,14,'Pangsha Upazila','পাংশা'),(245,14,'Kalukhali Upazila','কালুখালি'),(246,14,'Rajbari Sadar Upazila','রাজবাড়ি সদর'),(247,15,'Shariatpur Sadar -Palong','শরীয়তপুর সদর '),(248,15,'Damudya Upazila','দামুদিয়া'),(249,15,'Naria Upazila','নড়িয়া'),(250,15,'Jajira Upazila','জাজিরা'),(251,15,'Bhedarganj Upazila','ভেদারগঞ্জ'),(252,15,'Gosairhat Upazila','গোসাইর হাট '),(253,16,'Jhenaigati Upazila','ঝিনাইগাতি'),(254,16,'Nakla Upazila','নাকলা'),(255,16,'Nalitabari Upazila','নালিতাবাড়ি'),(256,16,'Sherpur Sadar Upazila','শেরপুর সদর'),(257,16,'Sreebardi Upazila','শ্রীবরদি'),(258,17,'Tangail Sadar Upazila','টাঙ্গাইল সদর'),(259,17,'Sakhipur Upazila','সখিপুর'),(260,17,'Basail Upazila','বসাইল'),(261,17,'Madhupur Upazila','মধুপুর'),(262,17,'Ghatail Upazila','ঘাটাইল'),(263,17,'Kalihati Upazila','কালিহাতি'),(264,17,'Nagarpur Upazila','নগরপুর'),(265,17,'Mirzapur Upazila','মির্জাপুর'),(266,17,'Gopalpur Upazila','গোপালপুর'),(267,17,'Delduar Upazila','দেলদুয়ার'),(268,17,'Bhuapur Upazila','ভুয়াপুর'),(269,17,'Dhanbari Upazila','ধানবাড়ি'),(270,55,'Bagerhat Sadar Upazila','বাগেরহাট সদর'),(271,55,'Chitalmari Upazila','চিতলমাড়ি'),(272,55,'Fakirhat Upazila','ফকিরহাট'),(273,55,'Kachua Upazila','কচুয়া'),(274,55,'Mollahat Upazila','মোল্লাহাট '),(275,55,'Mongla Upazila','মংলা'),(276,55,'Morrelganj Upazila','মরেলগঞ্জ'),(277,55,'Rampal Upazila','রামপাল'),(278,55,'Sarankhola Upazila','স্মরণখোলা'),(279,56,'Damurhuda Upazila','দামুরহুদা'),(280,56,'Chuadanga-S Upazila','চুয়াডাঙ্গা সদর'),(281,56,'Jibannagar Upazila','জীবন নগর '),(282,56,'Alamdanga Upazila','আলমডাঙ্গা'),(283,57,'Abhaynagar Upazila','অভয়নগর'),(284,57,'Keshabpur Upazila','কেশবপুর'),(285,57,'Bagherpara Upazila','বাঘের পাড়া '),(286,57,'Jessore Sadar Upazila','যশোর সদর'),(287,57,'Chaugachha Upazila','চৌগাছা'),(288,57,'Manirampur Upazila','মনিরামপুর '),(289,57,'Jhikargachha Upazila','ঝিকরগাছা'),(290,57,'Sharsha Upazila','সারশা'),(291,58,'Jhenaidah Sadar Upazila','ঝিনাইদহ সদর'),(292,58,'Maheshpur Upazila','মহেশপুর'),(293,58,'Kaliganj Upazila','কালীগঞ্জ'),(294,58,'Kotchandpur Upazila','কোট চাঁদপুর '),(295,58,'Shailkupa Upazila','শৈলকুপা'),(296,58,'Harinakunda Upazila','হাড়িনাকুন্দা'),(297,59,'Terokhada Upazila','তেরোখাদা'),(298,59,'Batiaghata Upazila','বাটিয়াঘাটা '),(299,59,'Dacope Upazila','ডাকপে'),(300,59,'Dumuria Upazila','ডুমুরিয়া'),(301,59,'Dighalia Upazila','দিঘলিয়া'),(302,59,'Koyra Upazila','কয়ড়া'),(303,59,'Paikgachha Upazila','পাইকগাছা'),(304,59,'Phultala Upazila','ফুলতলা'),(305,59,'Rupsa Upazila','রূপসা'),(306,60,'Kushtia Sadar','কুষ্টিয়া সদর'),(307,60,'Kumarkhali','কুমারখালি'),(308,60,'Daulatpur','দৌলতপুর'),(309,60,'Mirpur','মিরপুর'),(310,60,'Bheramara','ভেরামারা'),(311,60,'Khoksa','খোকসা'),(312,61,'Magura Sadar Upazila','মাগুরা সদর'),(313,61,'Mohammadpur Upazila','মোহাম্মাদপুর'),(314,61,'Shalikha Upazila','শালিখা'),(315,61,'Sreepur Upazila','শ্রীপুর'),(316,62,'angni Upazila','আংনি'),(317,62,'Mujib Nagar Upazila','মুজিব নগর'),(318,62,'Meherpur-S Upazila','মেহেরপুর সদর'),(319,63,'Narail-S Upazilla','নড়াইল সদর'),(320,63,'Lohagara Upazilla','লোহাগাড়া'),(321,63,'Kalia Upazilla','কালিয়া'),(322,64,'Satkhira Sadar Upazila','সাতক্ষীরা সদর'),(323,64,'Assasuni Upazila','আসসাশুনি '),(324,64,'Debhata Upazila','দেভাটা'),(325,64,'Tala Upazila','তালা'),(326,64,'Kalaroa Upazila','কলরোয়া'),(327,64,'Kaliganj Upazila','কালীগঞ্জ'),(328,64,'Shyamnagar Upazila','শ্যামনগর'),(329,18,'Adamdighi','আদমদিঘী'),(330,18,'Bogra Sadar','বগুড়া সদর'),(331,18,'Sherpur','শেরপুর'),(332,18,'Dhunat','ধুনট'),(333,18,'Dhupchanchia','দুপচাচিয়া'),(334,18,'Gabtali','গাবতলি'),(335,18,'Kahaloo','কাহালু'),(336,18,'Nandigram','নন্দিগ্রাম'),(337,18,'Sahajanpur','শাহজাহানপুর'),(338,18,'Sariakandi','সারিয়াকান্দি'),(339,18,'Shibganj','শিবগঞ্জ'),(340,18,'Sonatala','সোনাতলা'),(341,19,'Joypurhat S','জয়পুরহাট সদর'),(342,19,'Akkelpur','আক্কেলপুর'),(343,19,'Kalai','কালাই'),(344,19,'Khetlal','খেতলাল'),(345,19,'Panchbibi','পাঁচবিবি'),(346,20,'Naogaon Sadar Upazila','নওগাঁ সদর'),(347,20,'Mohadevpur Upazila','মহাদেবপুর'),(348,20,'Manda Upazila','মান্দা'),(349,20,'Niamatpur Upazila','নিয়ামতপুর'),(350,20,'Atrai Upazila','আত্রাই'),(351,20,'Raninagar Upazila','রাণীনগর'),(352,20,'Patnitala Upazila','পত্নীতলা'),(353,20,'Dhamoirhat Upazila','ধামইরহাট '),(354,20,'Sapahar Upazila','সাপাহার'),(355,20,'Porsha Upazila','পোরশা'),(356,20,'Badalgachhi Upazila','বদলগাছি'),(357,21,'Natore Sadar Upazila','নাটোর সদর'),(358,21,'Baraigram Upazila','বড়াইগ্রাম'),(359,21,'Bagatipara Upazila','বাগাতিপাড়া'),(360,21,'Lalpur Upazila','লালপুর'),(361,21,'Natore Sadar Upazila','নাটোর সদর'),(362,21,'Baraigram Upazila','বড়াই গ্রাম'),(363,22,'Bholahat Upazila','ভোলাহাট'),(364,22,'Gomastapur Upazila','গোমস্তাপুর'),(365,22,'Nachole Upazila','নাচোল'),(366,22,'Nawabganj Sadar Upazila','নবাবগঞ্জ সদর'),(367,22,'Shibganj Upazila','শিবগঞ্জ'),(368,23,'Atgharia Upazila','আটঘরিয়া'),(369,23,'Bera Upazila','বেড়া'),(370,23,'Bhangura Upazila','ভাঙ্গুরা'),(371,23,'Chatmohar Upazila','চাটমোহর'),(372,23,'Faridpur Upazila','ফরিদপুর'),(373,23,'Ishwardi Upazila','ঈশ্বরদী'),(374,23,'Pabna Sadar Upazila','পাবনা সদর'),(375,23,'Santhia Upazila','সাথিয়া'),(376,23,'Sujanagar Upazila','সুজানগর'),(377,24,'Bagha','বাঘা'),(378,24,'Bagmara','বাগমারা'),(379,24,'Charghat','চারঘাট'),(380,24,'Durgapur','দুর্গাপুর'),(381,24,'Godagari','গোদাগারি'),(382,24,'Mohanpur','মোহনপুর'),(383,24,'Paba','পবা'),(384,24,'Puthia','পুঠিয়া'),(385,24,'Tanore','তানোর'),(386,25,'Sirajganj Sadar Upazila','সিরাজগঞ্জ সদর'),(387,25,'Belkuchi Upazila','বেলকুচি'),(388,25,'Chauhali Upazila','চৌহালি'),(389,25,'Kamarkhanda Upazila','কামারখান্দা'),(390,25,'Kazipur Upazila','কাজীপুর'),(391,25,'Raiganj Upazila','রায়গঞ্জ'),(392,25,'Shahjadpur Upazila','শাহজাদপুর'),(393,25,'Tarash Upazila','তারাশ'),(394,25,'Ullahpara Upazila','উল্লাপাড়া'),(395,26,'Birampur Upazila','বিরামপুর'),(396,26,'Birganj','বীরগঞ্জ'),(397,26,'Biral Upazila','বিড়াল'),(398,26,'Bochaganj Upazila','বোচাগঞ্জ'),(399,26,'Chirirbandar Upazila','চিরিরবন্দর'),(400,26,'Phulbari Upazila','ফুলবাড়ি'),(401,26,'Ghoraghat Upazila','ঘোড়াঘাট'),(402,26,'Hakimpur Upazila','হাকিমপুর'),(403,26,'Kaharole Upazila','কাহারোল'),(404,26,'Khansama Upazila','খানসামা'),(405,26,'Dinajpur Sadar Upazila','দিনাজপুর সদর'),(406,26,'Nawabganj','নবাবগঞ্জ'),(407,26,'Parbatipur Upazila','পার্বতীপুর'),(408,27,'Fulchhari','ফুলছড়ি'),(409,27,'Gaibandha sadar','গাইবান্ধা সদর'),(410,27,'Gobindaganj','গোবিন্দগঞ্জ'),(411,27,'Palashbari','পলাশবাড়ী'),(412,27,'Sadullapur','সাদুল্যাপুর'),(413,27,'Saghata','সাঘাটা'),(414,27,'Sundarganj','সুন্দরগঞ্জ'),(415,28,'Kurigram Sadar','কুড়িগ্রাম সদর'),(416,28,'Nageshwari','নাগেশ্বরী'),(417,28,'Bhurungamari','ভুরুঙ্গামারি'),(418,28,'Phulbari','ফুলবাড়ি'),(419,28,'Rajarhat','রাজারহাট'),(420,28,'Ulipur','উলিপুর'),(421,28,'Chilmari','চিলমারি'),(422,28,'Rowmari','রউমারি'),(423,28,'Char Rajibpur','চর রাজিবপুর'),(424,29,'Lalmanirhat Sadar','লালমনিরহাট সদর'),(425,29,'Aditmari','আদিতমারি'),(426,29,'Kaliganj','কালীগঞ্জ'),(427,29,'Hatibandha','হাতিবান্ধা'),(428,29,'Patgram','পাটগ্রাম'),(429,30,'Nilphamari Sadar','নীলফামারী সদর'),(430,30,'Saidpur','সৈয়দপুর'),(431,30,'Jaldhaka','জলঢাকা'),(432,30,'Kishoreganj','কিশোরগঞ্জ'),(433,30,'Domar','ডোমার'),(434,30,'Dimla','ডিমলা'),(435,31,'Panchagarh Sadar','পঞ্চগড় সদর'),(436,31,'Debiganj','দেবীগঞ্জ'),(437,31,'Boda','বোদা'),(438,31,'Atwari','আটোয়ারি'),(439,31,'Tetulia','তেতুলিয়া'),(440,32,'Badarganj','বদরগঞ্জ'),(441,32,'Mithapukur','মিঠাপুকুর'),(442,32,'Gangachara','গঙ্গাচরা'),(443,32,'Kaunia','কাউনিয়া'),(444,32,'Rangpur Sadar','রংপুর সদর'),(445,32,'Pirgachha','পীরগাছা'),(446,32,'Pirganj','পীরগঞ্জ'),(447,32,'Taraganj','তারাগঞ্জ'),(448,33,'Thakurgaon Sadar Upazila','ঠাকুরগাঁও সদর'),(449,33,'Pirganj Upazila','পীরগঞ্জ'),(450,33,'Baliadangi Upazila','বালিয়াডাঙ্গি'),(451,33,'Haripur Upazila','হরিপুর'),(452,33,'Ranisankail Upazila','রাণীসংকইল'),(453,51,'Ajmiriganj','আজমিরিগঞ্জ'),(454,51,'Baniachang','বানিয়াচং'),(455,51,'Bahubal','বাহুবল'),(456,51,'Chunarughat','চুনারুঘাট'),(457,51,'Habiganj Sadar','হবিগঞ্জ সদর'),(458,51,'Lakhai','লাক্ষাই'),(459,51,'Madhabpur','মাধবপুর'),(460,51,'Nabiganj','নবীগঞ্জ'),(461,51,'Shaistagonj Upazila','শায়েস্তাগঞ্জ'),(462,52,'Moulvibazar Sadar','মৌলভীবাজার'),(463,52,'Barlekha','বড়লেখা'),(464,52,'Juri','জুড়ি'),(465,52,'Kamalganj','কামালগঞ্জ'),(466,52,'Kulaura','কুলাউরা'),(467,52,'Rajnagar','রাজনগর'),(468,52,'Sreemangal','শ্রীমঙ্গল'),(469,53,'Bishwamvarpur','বিসশম্ভারপুর'),(470,53,'Chhatak','ছাতক'),(471,53,'Derai','দেড়াই'),(472,53,'Dharampasha','ধরমপাশা'),(473,53,'Dowarabazar','দোয়ারাবাজার'),(474,53,'Jagannathpur','জগন্নাথপুর'),(475,53,'Jamalganj','জামালগঞ্জ'),(476,53,'Sulla','সুল্লা'),(477,53,'Sunamganj Sadar','সুনামগঞ্জ সদর'),(478,53,'Shanthiganj','শান্তিগঞ্জ'),(479,53,'Tahirpur','তাহিরপুর'),(480,54,'Sylhet Sadar','সিলেট সদর'),(481,54,'Beanibazar','বেয়ানিবাজার'),(482,54,'Bishwanath','বিশ্বনাথ'),(483,54,'Dakshin Surma Upazila','দক্ষিণ সুরমা'),(484,54,'Balaganj','বালাগঞ্জ'),(485,54,'Companiganj','কোম্পানিগঞ্জ'),(486,54,'Fenchuganj','ফেঞ্চুগঞ্জ'),(487,54,'Golapganj','গোলাপগঞ্জ'),(488,54,'Gowainghat','গোয়াইনঘাট'),(489,54,'Jaintiapur','জয়ন্তপুর'),(490,54,'Kanaighat','কানাইঘাট'),(491,54,'Zakiganj','জাকিগঞ্জ'),(492,54,'Nobigonj','নবীগঞ্জ'),(493,1,'Mohammadpur','মোহাম্মাদপুর'),(495,1,'suthrapur','সূত্রাপুর'),(496,1,'ROMANA','রমনা'),(497,1,'NEWMARKET','নিউ মার্কেট'),(498,1,'Uttara','উত্তরা'),(499,1,'Uttar Khan','উত্তর খান'),(500,1,'Turag','তুরাগ'),(501,1,'Motijheel','মতিঝিল'),(502,1,'Mohammadpur','মোহাম্মদপুর'),(503,1,'Kafrul ','কাফরুল'),(504,1,'Tejgaon','তেজগাও'),(505,1,'Shyampur','শ্যামপুর'),(506,1,'Sher-e-Bangla Nagor','শেরে বাংলা নগদ'),(507,1,'Sabujbagh','সবুজবাগ'),(508,1,'Paltan','পল্টন'),(509,1,'Pallabi ','পল্লব'),(510,1,'Lalbagh','লালবাগ'),(511,1,'Khilgaon','খিলগাঁও'),(512,1,'Khilkhet','খিলক্ষেত'),(513,1,'Kamrangir Char','কামরাঙ্গীর চড়'),(514,1,'Kalabagan','কলাবাগান'),(515,1,'Kadamtali ','কদমতলী'),(516,1,'Jatrabari ','যাত্রাবাড়ী'),(517,1,'Hazaribagh','হাজারিবাগ'),(518,1,'Gulshan','গুলশান'),(519,1,'Gendaria','গেন্ডারিয়া'),(520,1,'Kotwali','কোতোয়ালী'),(521,1,'Demra ','ডেমরা'),(522,1,'Dhanmondi','ধানমন্ডি'),(523,1,'Darus Salam','দারুজ সালাম'),(524,1,'Dakshinkhan','দক্ষিনখান'),(525,1,'Chowkbazar','চকবাজার'),(526,1,'Cantonment ','ক্যান্টনমেন্ট'),(527,1,'Bangsal','বংশাল');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `modify_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
