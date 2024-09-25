# Kai Ra Night-Club-Web-Developnment

This project is part of the Mobile & Web Development coursework. It is a complete web application built with PHP and MySQL, focusing on managing club events and artist data. This repository demonstrates my proficiency in SQL database management, PHP scripting, and web development practices, which are aligned with my transition into Data Analytics.

# Overview

The Club Event Promotion Web App was developed to help manage club events, including the creation of events, artist registration, and more. This project emphasizes SQL-based data handling and web development with PHP, making it a great showcase of my skills as I transition into a Data Analyst role.

# Core Components
## 1.PHP Files
-login.php:

  -Handles the login functionality for users.
  -Uses jQuery and AJAX to send user credentials to result2.php for validation.
  -Displays "Invalid Login" message if the login fails, and redirects to the welcome page upon success.

-artist.php:

  -Renders artist information dynamically by calling artistAPI.php.
  -Uses AJAX to fetch artist data in JSON format and displays it in a Bootstrap grid layout with profile       
   pictures, bios, and social media links.
   
-artistAPI.php:

  -Acts as a backend API that retrieves artist data from the artist table and returns it in JSON format.
  -Responds to GET requests and sends artist details such as name, biography, and social media profiles.
  
-event.php:

  -Displays upcoming events, linking each event to its corresponding artist.
  -Retrieves event details from the event table, including event name, date, time, category, fee, and artist ID.

-dbinfo.php:

  -Contains the database connection information:
  
```php
$host = 'localhost';
$user = 'root';
$pass = 'password';
$database = 'night_club_db';
```
## 2.SQL Files

-login_login.sql:

  -Creates the login table to store user information (username, full name, phone number, email, and password).
  -Inserts sample data with plain text passwords (which should be hashed for security).

-login_event.sql:

  -Creates the event table to store event details, including event name, date, time, fee, and associated artist.
  -Defines foreign key constraints to link each event to an artist using the artist_id.

-login_artist.sql:

  -Creates the artist table to store artist information such as name, biography, band name, social media links,      and profile images.
  -Inserts sample data for artists and their social media profiles.

# Features
## 1. Login System:

-The login.php file handles user login and authentication. The form uses AJAX to send the email and password to the server, where the data is checked against the login table.

-The login_login.sql file defines the schema for the login table, which stores user credentials. Passwords should be hashed using algorithms like bcrypt to ensure security (currently stored in plain text).

## 2. Artist Management:

The artist information is dynamically displayed using PHP and JavaScript.
-The artistAPI.php provides artist data in JSON format, which is used to render artist profiles (name, biography, social media links) in a Bootstrap grid layout.
-The login_artist.sql file defines the structure for storing artist data and includes sample artists.

## 3. Event Management:
-Upcoming events are displayed with details such as event name, date, time, fee, and associated    artist.
-The event.php file dynamically links events to their artists, and the login_event.sql file defines the table schema for storing event details.
-Events are linked to artists via foreign keys, ensuring consistency between the event and artist tables.

# Technologies Used

-Frontend: HTML, CSS (Bootstrap for layout), JavaScript (jQuery for AJAX)
-Backend: PHP (for processing and API handling)
-Database: MySQL (for storing and managing user, artist, and event data)

# Activity Diagram

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/raw/main/Photos/Activity%20Diagram.png)

# Site Map

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Site%20Map.png)

# Use Case Diagram

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Use%20Case%20Diagram.png)

# Desktop View
## Register

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Desktop/Register.png)

## Home Page View

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Desktop/Home%20Page%20View%20(%20Desktop%20).png)

## Event List ( Upcoming List )

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Desktop/Event%20List%20Upcoming%20(%20Desktop%20).png)

## Event View ( Previous List )

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Desktop/Event%20List%20Previous%20(%20Desktop%20).png)

## Artist Details

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Desktop/Artist%20Detail%20(%20Desktop%20).png)

## Admin Welcome

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Desktop/Admin%20Welcome%20(%20Desktop%20).png)

## Create Artist

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Desktop/Create%20Artist%20(%20Desktop%20).png)

## Create Event

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Desktop/Create%20Event%20(%20Desktop%20).png)

## Edit Event & Artist

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Desktop/Edit%20Event%20%26%20Artist%20(%20Desktop%20).png)

## Edit Event & Artist-2

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Desktop/Edit%20Event%20%26%20Artist-2%20(%20Desktop%20).png)

# Mobile View

## Home Page View

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Mobile%20View/Home%20Page.png)

## Event List ( Upcoming List )

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Mobile%20View/Event%20List%20Upcoming.png)

## Event View ( Previous List )

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Mobile%20View/Event%20List%20Previous.png)

## Artist Details

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Mobile%20View/Artist%20Detail.png)

## Admin Welcome

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Mobile%20View/Welcome%20Admin.png)

## Create Artist

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Mobile%20View/Create%20Artist.png)

## Create Event

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Mobile%20View/Create%20Event.png)

## Edit Event & Artist

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Mobile%20View/Edit%20Event%20%26%20Artist.png)

## Edit Event & Artist-2

![Activity Diagram](https://github.com/Khaing-Khant-Kyaw/Night-Club-Web-Developnment/blob/main/Photos/Mobile%20View/Edit%20Event%20%26%20Artist-2.png)

# Setting Up the Database
To set up the project's MySQL database, follow these steps:

## Step 1: Create the Data Base

-Open your MySQL client (e.g., phpMyAdmin or MySQL Workbench).
-Create a new database:

CREATE DATABASE night_club_db;

## Step 2: Import SQL Files

-Import the SQL files in the following order to set up the tables and insert sample data:

mysql -u username -p night_club_db < sql/login_login.sql
mysql -u username -p night_club_db < sql/login_artist.sql
mysql -u username -p night_club_db < sql/login_event.sql

## Step 3: Update Database Connection Information
Update the dbinfo.php file with your MySQL credentials:

$host = 'localhost';
$user = 'your_db_username';
$pass = 'your_db_password';
$database = 'night_club_db';

# Enhancements and Future Development

## Security Improvements:

-Password Hashing: Implement password hashing using bcrypt or similar algorithms to enhance 
 security. Plain text password storage is a major security vulnerability.
 
## Data Normalization:

-Social Media Links: Consider separating social media profiles into a separate table to reduce 
 redundancy and make the database more scalable.
 
## Performance and Validation:
-Form Validation: Add better client-side and server-side validation for user inputs, such as ensuring correct email formats and strong passwords.

## Time Field Optimization:

-Event Time: Replace the VARCHAR type used for start and end times in the event table with the TIME data type for more efficient time-based operations.

# Conclusion

This project showcases a web application for managing events and artists in a night club setting. By integrating dynamic data rendering and a structured SQL database, the application provides a foundation for future enhancements such as improved security, data normalization, and user experience improvements.

Feel free to explore the code and contribute by providing feedback or suggestions!
