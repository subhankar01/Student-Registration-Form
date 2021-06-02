 // create a database  
CREATE DATABASE student
USE student

// create a table studentdetails   
CREATE TABLE IF NOT EXISTS studentdetails 
(
  id int(11) NOT NULL AUTO_INCREMENT,
  full_name char(50) NOT NULL,
  email varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  dob NOT NULL,
  address text NOT NULL,
  mobileno bigint(20) NOT NULL,
  gender enum('m','f') NOT NULL,
  degree varchar(100) NOT NULL,
  course varchar(100) NOT NULL,
  passportphoto varchar(255) NOT NULL,
  pancardphoto varchar(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY email (email)
) 