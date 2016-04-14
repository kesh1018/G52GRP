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
address		varchar(100) NOT NULL,
race		varchar(25) NOT NULL,
religion 	varchar(255) NOT NULL,
contact_no	int(25) NOT NULL,
vehicle_type	varchar(25) NOT NULL,
registration_no varchar(255) NOT NULL,
date		date NOT NULL,
category	varchar(15) NOT NULL,
entrypass_num	varchar(25) NOT NULL, 
check_in	time(6) NOT NULL,
check_out	time(6) NOT NULL,
remarks   	varchar (1000) NOT NULL,
blacklist  	varchar (255) NOT NULL,

PRIMARY KEY(ID)
);


# *************************
# *** DATA FOR SCENARIO ***
# *************************
INSERT INTO visitor_list (name, IC_No, dob, gender, address, race, religion, contact_no, vehicle_type, registration_no, date, category, entrypass_num, check_in, check_out, remarks, blacklist) VALUES ('Eunice', '950113130000', '1995-01-13', 'Female', 'Pangkor Hall', 'Cina', 'Kristian', '0109744556', 'Car', 'AAA1234', '2016-02-03', 'Emergency', 'ZZZ987', '12:00', '14:00', 'Visit relatives', '-');
INSERT INTO visitor_list (name, IC_No, dob, gender, address, race, religion, contact_no, vehicle_type, registration_no, date, category, entrypass_num, check_in, check_out, remarks, blacklist) VALUES ('Daniel', '123', '1995-01-13', 'Male', 'Shah Alam', 'Cina', 'Kristian', '0109744556', 'Car', 'AAA1234', '2016-02-03', 'Emergency', 'ZZZ987', '12:00', '14:00', 'Visit relatives', '-');
INSERT INTO visitor_list (name, IC_No, dob, gender, address, race, religion, contact_no, vehicle_type, registration_no, date, category, entrypass_num, check_in, check_out, remarks, blacklist) VALUES ('Kesh', '456', '1995-01-13', 'Male', 'Petaling Jaya', 'India', 'Kristian', '0109744556', 'Car', 'AAA1234', '2016-02-03', 'Visitor', 'ZZZ987', '10:00', '14:00', 'Visit relatives', '-');
INSERT INTO visitor_list (name, IC_No, dob, gender, address, race, religion, contact_no, vehicle_type, registration_no, date, category, entrypass_num, check_in, check_out, remarks, blacklist) VALUES ('Sunny', '73829', '1995-01-13', 'Female', 'Selangor', 'Cina', 'Kristian', '0109744556', 'Car', 'AAA1234', '2016-02-06', 'Delivery', 'ZZZ987', '21:00', '21:30', 'Visit relatives', '-');

commit;

