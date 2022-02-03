This website is created as part of the Application Software Lab in S5 CSE.

Please put these files inside a folder called patientportal inside the www directory of Wamp64.
And then please open mysql console and create the database patientdb and table patients_portal using the following query:

create database patientsdb;
use patientsdb;
create table patients_record(id int AUTO_INCREMENT, fname varchar(50) not null, lname varchar(50), 
city varchar(50), age int not null, dateofconsult date not null, phone varchar(15) not null,
blood varchar(5),disease varchar(50) not null, doctor varchar(55) not null, primary key(id));

Group Members:
 SANDEEP BENNY (4JK19CS046)