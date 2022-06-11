CREATE TABLE EMP_Table(
    EMP_ID varchar(10) PRIMARY KEY,
    EMP_Firstname varchar(20),
    EMP_Lastname varchar(30),
    EMP_SSN varchar(12),
    EMP_Pass varchar(20),
    EMP_Permissions varchar(10));

INSERT INTO EMP_Table VALUES('0','Admin','','','root','3');


CREATE Table ptoRequest(
     RequestID INT AUTO_INCREMENT PRIMARY KEY,
     DateRequested varchar(15),
     EMP_ID varchar(10),
     RequestApproval varchar(3));