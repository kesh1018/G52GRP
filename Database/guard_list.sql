# **********************
# *** TABLE CREATION ***
# **********************

CREATE TABLE guard_list
(
ID		integer auto_increment NOT NULL,
name		varchar(255) NOT NULL,
guard_id	varchar(255) NOT NULL,
IC_No		int(25) NOT NULL,
gender		char(25) NOT NULL,
race		varchar(25) NOT NULL,
religion 	varchar(255) NOT NULL,
address		varchar(25) NOT NULL,
contact_no	int(25) NOT NULL,
date1		date NOT NULL,
check_in	time(6) NOT NULL,
date2		date NOT NULL,
check_out	time(6) NOT NULL,

PRIMARY KEY(ID)
);


# *************************
# *** DATA FOR SCENARIO ***
# *************************
INSERT INTO guard_list (name, guard_id, IC_No, gender, race, religion, address, contact_no, date1, check_in, date2, check_out) VALUES ('Subramaniam', 'AAA1234', '123456', 'M', 'Indian', 'Christian', '456, Semenyih', '0168619386', '2016-02-03', '12:00', '-', '-');

commit;

