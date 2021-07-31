/*CREATE DATABASE meriton_suites_database; */

CREATE TABLE IF NOT EXISTS `users`  
(
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`username` varchar(50) NOT NULL,
  	`password` varchar(255) NOT NULL,
  	`email` varchar(100) NOT NULL,
    `location` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `password`, `email`,`location`) /*insertingthe values in the table users*/
VALUES
(1, 'Himanshu', '$2y$10$iUYHJknkAGLBqAFMUFfIZe1QQGKW4RoMLezC6IV53WzKYhSBcGpDu', 'hrana26@gmail.com','Thornleigh'),
(2, 'Sakti', '$2y$10$iUYHJknkAGLBqAFMUFfIZe1QQGKW4RoMLezC6IV53WzKYhSBcGpDu', 'sakti@gmail.com','Macquarie Park'),
(3, 'Gnaneshwar', '$2y$10$iUYHJknkAGLBqAFMUFfIZe1QQGKW4RoMLezC6IV53WzKYhSBcGpDu', 'gnashwer@gmail.com','Kellyville');


CREATE TABLE IF NOT EXISTS `events`  
(
	`event_id` int(11) NOT NULL AUTO_INCREMENT,
  	`event_name` varchar(50) NOT NULL,
    `event_desc` varchar(255) NOT NULL,
	`event_date` DATETIME DEFAULT CURRENT_TIMESTAMP(30) NOT NULL,
	`event_location` varchar(255) NOT NULL,
    PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `events` (`event_id`, `event_name`, `event_desc`,`event_date`,`event_location`) /*insertingthe values in the table events*/
VALUES
(1, 'Annual Meeting', 'This is the meeting for all the people in the society', '2021-05-03 11:54:44', 'Society Hall'),
(2, 'Annual Holi Festival', 'This is the hloi celebration for all the members of the society', '2021-05-03 11:54:44', 'Society Basketball Courts'),
(3, 'Annual kids holiday week', 'This is long weend avtivities organised for all the kids in the society', '2021-05-03 11:54:44', 'Society Childcare Facility'),
(4, 'Annual old age home service day', 'This is the one day service to the local old age home, completely volunteer based', '2021-05-03 11:54:44', 'Sharda Old Age Center'),
(5, 'Quarterly Inspection', 'This is the annual inspection by the city council', '2021-05-03 11:54:44', 'Society Hall'),
(6, 'Annual Meeting-2', 'This is the meeting for all the people in the society for the term June- Dec', '2021-05-03 11:54:44', 'Society Hall');


CREATE TABLE IF NOT EXISTS `expense`  
(
	`expense_id` int(11) NOT NULL AUTO_INCREMENT,
  	`expense_name` varchar(50) NOT NULL,
    `expense_amount` varchar(255) NOT NULL,
	`expense_due_date` DATETIME DEFAULT CURRENT_TIMESTAMP(30) NOT NULL,
	
    PRIMARY KEY (`expense_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `expense` (`expense_id`, `expense_name`, `expense_amount`,`expense_due_date`) /*insertingthe values in the table events*/
VALUES
(1, 'Annual Meeting-1', 100, '2021-05-03 11:54:44'),
(2, 'Annual Holi Festival', 2500, '2021-05-03 11:54:44'),
(3, 'Annual kids holiday week', 2750, '2021-05-03 11:54:44'),
(4, 'Annual old age home service day', 200, '2021-05-03 11:54:44'),
(5, 'Quarterly Inspection ', 200, '2021-05-03 11:54:44'),
(6, 'Annual Meeting-2', 100, '2021-05-03 11:54:44');


CREATE TABLE IF NOT EXISTS `visitors`  
(
	`visitor_id` int(11) NOT NULL AUTO_INCREMENT,
  	`visitor_name` varchar(50) NOT NULL,
    `visitor_destination` varchar(255) NOT NULL,
	`visitor_reason` varchar(255) NOT NULL,
	`visitor_in_date` DATETIME DEFAULT CURRENT_TIMESTAMP(30) NOT NULL,
	`visitor_out_date` DATETIME DEFAULT CURRENT_TIMESTAMP(30) NOT NULL,
	
    PRIMARY KEY (`visitor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `visitors` (`visitor_id`, `visitor_name`, `visitor_destination`,`visitor_reason`,`visitor_in_date`, `visitor_out_date`) /*insertingthe values in the table events*/
VALUES
(1, 'Salil Kumar', 'Flat 903', 'Family Meetup', '2021-05-03 11:54:44', '2021-06-03 09:54:44'),
(2, 'Sakti Subedi', 'Flat 1207', 'Family Meetup', '2021-04-06 11:54:44', '2021-06-03 09:54:44'),
(3, 'Tanishq', 'Flat 011', 'Daily Cleaning', '2021-02-27 11:54:44', '2021-06-03 09:54:44'),
(4, 'Sunil Kumar', 'Flat 918', 'Daily Cleaning', '2021-02-22 11:54:44', '2021-06-03 09:54:44'),
(5, 'Arjun', 'Quarter Master', 'Meeting', '2021-03-18 11:54:44', '2021-06-03 09:54:44');

CREATE TABLE IF NOT EXISTS `society`  
(
	`society_id` int(11) NOT NULL AUTO_INCREMENT,
  	`society_name` varchar(50) NOT NULL,
    `society_address` varchar(255) NOT NULL,
	`society_manager` varchar(255) NOT NULL,
	`society_population` int(255) NOT NULL,
	`society_facilities` varchar(255) NOT NULL,
	
    PRIMARY KEY (`society_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `society` (`society_id`, `society_name`, `society_address`,`society_manager`,`society_population`, `society_facilities`) /*insertingthe values in the table events*/
VALUES
(1, 'Alpha', '112-114 Talavera Road, Macmillan Drive, New Delhi', 'Savkirat Singh', '100', 'On-site parking, Swimming Pool, Sauna, Jacuzzi, On site manager and guard'),
(2, 'Gamma', '119-121 Talavera Road, Macmillan Drive, New Delhi', 'Tanzing Morning', '290', 'On-site parking, Swimming Pool, Sauna, Jacuzzi, On site manager and guard'),
(3, 'Zeba', '131-136 Talavera Road, Macmillan Drive, New Delhi', 'Ekta Kapoor', '37', 'On-site parking, Swimming Pool, Sauna, Jacuzzi, On site manager and guard'),
(4, 'India', '109-112 Talavera Road, Macmillan Drive, New Delhi', 'Narsingh', '150', 'On-site parking, Swimming Pool, Sauna, Jacuzzi, On site manager and guard');


CREATE TABLE IF NOT EXISTS `tennants`  
(
	`tennants_id` int(11) NOT NULL AUTO_INCREMENT,
  	`tennants_name` varchar(50) NOT NULL,
    `tennants_address` varchar(255) NOT NULL,
	`tennants_gender` varchar(255) NOT NULL,
	`tennant_purchase_date` DATETIME DEFAULT CURRENT_TIMESTAMP(30) NOT NULL,
	
    PRIMARY KEY (`tennants_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `tennants` (`tennants_id`, `tennants_name`, `tennants_address`,`tennants_gender`,`tennant_purchase_date`) /*insertingthe values in the table events*/
VALUES
(1, 'Salil Kumar', 'Flat 903', 'Male', '2021-05-03 11:54:44'),
(2, 'Sakti Subedi', 'Flat 1207', 'Female', '2021-04-06 11:54:44'),
(3, 'Tanishq', 'Flat 011', 'Male', '2021-02-27 11:54:44'),
(4, 'Sunil Kumar', 'Flat 918', 'Male', '2021-02-22 11:54:44'),
(5, 'Arjun', 'Quarter Master', 'Male', '2021-03-18 11:54:44');


CREATE TABLE IF NOT EXISTS `towers`  
(
	`towers_id` int(11) NOT NULL AUTO_INCREMENT,
  	`towers_name` varchar(50) NOT NULL,
    `towers_address` varchar(255) NOT NULL,
	`towers_population` int(255) NOT NULL,
	`towers_facilities` varchar(255) NOT NULL,
	`society_id` int(11) NOT NULL ,
	
    PRIMARY KEY (`towers_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `towers` (`towers_id`, `towers_name`, `towers_address`,`towers_population`, `towers_facilities`, `society_id`) /*insertingthe values in the table events*/
VALUES
(1, 'Petra', '112 Talavera Road, Macmillan Drive, New Delhi', '38', 'On-site parking, Swimming Pool, Sauna, Jacuzzi, On site manager and guard','1'),
(2, 'Germany', '119 Talavera Road, Macmillan Drive, New Delhi', '180', 'On-site parking, Swimming Pool, Sauna, Jacuzzi, On site manager and guard','2'),
(3, 'Nubby', '131 Talavera Road, Macmillan Drive, New Delhi', '15', 'On-site parking, Swimming Pool, Sauna, Jacuzzi, On site manager and guard','3'),
(4, 'Inphal', '109 Talavera Road, Macmillan Drive, New Delhi', '59', 'On-site parking, Swimming Pool, Sauna, Jacuzzi, On site manager and guard','4');



CREATE TABLE IF NOT EXISTS `employees`  
(
	`employees_id` int(11) NOT NULL AUTO_INCREMENT,
  	`employees_name` varchar(50) NOT NULL,
    `employees_occupation` varchar(255) NOT NULL,
	`employees_age` varchar(50) NOT NULL,
	`employees_hourly_rate` int(255) NOT NULL,
	`society_id` int(11) NOT NULL ,
	
    PRIMARY KEY (`employees_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `employees` (`employees_id`, `employees_name`, `employees_occupation`,`employees_age`, `employees_hourly_rate`, `society_id`) /*insertingthe values in the table events*/
VALUES
(1, 'Petra', 'Painter', '38', '48','1'),
(2, 'Germany', 'Electrician', '30', '50','2'),
(3, 'Nubby', 'Security Guard and Marshal', '45', '38','3'),
(4, 'Inphal', 'Plumber', '39', '45','4');

