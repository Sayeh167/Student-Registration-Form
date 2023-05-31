# Student-Registration-Form

## Description
This is a project homework from the internet based programming lecture in 2023, the aim of the project is to provide a basic subscription system.

## Requirements
-MySQL
-XAMPP

## Preparation
- Make your MySQL database is working and you have default login credentials
- We should create a table to run the page, follow below lines
```
CREATE TABLE `students` (
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) PRIMARY KEY NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
)```

- Move .php files to your 'htdocs' according to your xampp installation
- Activate your apache server via xampp gui
- Access page via your browser by using localhost/registration.php
- Enjoy it!

