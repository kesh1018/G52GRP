# **********************
# *** TABLE CREATION ***
# **********************

CREATE TABLE visitor_list
(
ID		integer auto_increment NOT NULL,
name		varchar(255) NOT NULL,
IC_No		int(25) NOT NULL,
dob		date NOT NULL,
gender		char(25) NOT NULL,
address		varchar(25) NOT NULL,
race		varchar(25) NOT NULL,
religion 	varchar(255) NOT NULL,
contact_no	int(25) NOT NULL,
registration_no varchar(255) NOT NULL,
category	varchar(15) NOT NULL,
date		date NOT NULL,
check_in	time(6) NOT NULL,
check_out	time(6) NOT NULL,
remarks   	varchar (1000) NOT NULL,
blacklist  	varchar (255),

PRIMARY KEY(ID)
);


# *************************
# *** DATA FOR SCENARIO ***
# *************************
INSERT INTO visitor_list (name, IC_No, dob, address, gender, race, religion, contact_no, registration_no, category, date, check_in, check_out, remarks, blacklist) VALUES ('Eunice', '950113130000', '1995-01-13', 'Pangkor Hall', 'F', 'Chinese', 'Christian', '0109744556', 'AAA1234', 'Emergency', '2016-02-03', '12:00', '14:00', 'Visit relatives', '-');
INSERT INTO visitor_list (name, IC_No, dob, address, gender, race, religion, contact_no, registration_no, category, date, check_in, check_out, remarks, blacklist) VALUES ('Daniel', '123', '1995-01-13', 'Shah Alam', 'M', 'Chinese', 'Christian', '0109744556', 'AAA1234', 'Emergency', '2016-02-03', '12:00', '14:00', 'Visit relatives', '-');
INSERT INTO visitor_list (name, IC_No, dob, address, gender, race, religion, contact_no, registration_no, category, date, check_in, check_out, remarks, blacklist) VALUES ('Kesh', '456', '1995-01-13', 'Petaling Jaya', 'M', 'Indian', 'Christian', '0109744556', 'AAA1234', 'Visitor', '2016-02-03', '10:00', '14:00', 'Visit relatives', '-');
INSERT INTO visitor_list (name, IC_No, dob, address, gender, race, religion, contact_no, registration_no, category, date, check_in, check_out, remarks, blacklist) VALUES ('Michelle', '7889', '1995-01-13', 'Klang', 'F', 'Chinese', 'Christian', '0109744556', 'AAA1234', 'Tuition', '2016-02-03', '16:00', '20:00', 'Visit relatives', '-');
INSERT INTO visitor_list (name, IC_No, dob, address, gender, race, religion, contact_no, registration_no, category, date, check_in, check_out, remarks, blacklist) VALUES ('DJ', '2132', '1995-01-13', 'Putrajaya', 'M', 'Malay', 'Christian', '0109744556', 'AAA1234', 'Delivery', '2016-02-04', '10:00', '10:30', 'Visit relatives', '-');
INSERT INTO visitor_list (name, IC_No, dob, address, gender, race, religion, contact_no, registration_no, category, date, check_in, check_out, remarks, blacklist) VALUES ('Jia Yong', '46564', '1995-01-13', 'Seremban', 'M', 'Chinese', 'Christian', '0109744556', 'AAA1234', 'Visitor', '2016-02-04', '12:00', '15:00', 'Visit relatives', '-');
INSERT INTO visitor_list (name, IC_No, dob, address, gender, race, religion, contact_no, registration_no, category, date, check_in, check_out, remarks, blacklist) VALUES ('Crystal', '5345', '1995-01-13', 'Sabah', 'F', 'Chinese', 'Christian', '0109744556', 'AAA1234', 'Emergency', '2016-02-04', '08:00', '11:00', 'Visit relatives', '-');
INSERT INTO visitor_list (name, IC_No, dob, address, gender, race, religion, contact_no, registration_no, category, date, check_in, check_out, remarks, blacklist) VALUES ('Adriana', '654645', '1995-01-13', 'Hartamas', 'F', 'Malay', 'Christian', '0109744556', 'AAA1234', 'Emergency', '2016-02-05', '17:00', '18:00', 'Visit relatives', '-');
INSERT INTO visitor_list (name, IC_No, dob, address, gender, race, religion, contact_no, registration_no, category, date, check_in, check_out, remarks, blacklist) VALUES ('Sunny', '73829', '1995-01-13', 'Selangor', 'F', 'Chinese', 'Christian', '0109744556', 'AAA1234', 'Delivery', '2016-02-06', '21:00', '21:30', 'Visit relatives', '-');

commit;

