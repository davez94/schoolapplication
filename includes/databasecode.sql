
CREATE TABLE tbl_company (
    id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    company_name varchar (256) not null,
    company_course varchar (256) not null,
    date_for_course varchar (256) not null,
    company_attendees int(11) not null,
    company_email varchar (256) not null,
    company_phone varchar (256) not null

)

CREATE TABLE tbl_participant (
    participant_id int(11) not null,
    participant_name varchar (256) not null,
    participant_course varchar (256) not null,
    participant_company varchar (256) not null,
    participant_email varchar (256) not null,
    participant_phone varchar (256) not null

)
