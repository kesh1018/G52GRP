# **********************
# *** TABLE CREATION ***
# **********************

CREATE TABLE visitor_list
(
ID		integer auto_increment NOT NULL,
name		varchar(255) NOT NULL,
IC_No		int(25) NOT NULL,
address	varchar(25) NOT NULL,
gender	char(25) NOT NULL,
race		varchar(25) NOT NULL,
category	varchar(15) NOT NULL,
date		date NOT NULL,
check_in	time(6) NOT NULL,
check_out	time(6) NOT NULL,

PRIMARY KEY(ID)
);


# *************************
# *** DATA FOR SCENARIO ***
# *************************
INSERT INTO visitor_list (name, IC_No, address, gender, race, category, date, check_in, check_out) VALUES ('Eunice', '950113135622', 'Pangkor Hall', 'F', 'Chinese', 'Emergency', '2/3/2016', '12:00', '14:00');

commit;

