created by SETT ROGERS IROMBA 14325053/T.24

#Secondary School Students Registration System
a system that accept students information including full name, class and gender 

## Description
This is a lightweight, secure, and responsive web-based Student Registration System designed for secondary schools. It partition workloads effectively between the client-side interface and the server-side architecture to deliver a seamless real-time application experience.

## Academic Context
* **Institution:** Mzumbe University
* **Faculty:** Faculty of Science and Technology (FST)
* **Department:** Computing Science Studies
* **Course Code & Title:** CSS 221: Introduction to Web Programming
* **Instructor:** Mr. Kadefue

## System Core Features
* **Strict XHTML Compliance:** Built entirely using the XHTML 1.0 Strict validation roadmap ensuring well-formed tags.
* **Separation of Concerns:** The structural layer (XHTML), presentation layer (CSS), and behavioral layer (JavaScript) are completely isolated.
* **Asynchronous Interaction (AJAX):** Utilizes the jQuery framework to intercept form submission, halting traditional full-page flickering for instantaneous data processing.
* **Robust Server-side Security:** Powered by PHP PDO Prepared Statements to isolate SQL structures from raw input, eliminating the threat of SQL Injection (SQLi) attacks.
* **Data Sanitization:** Implements complete XSS prevention using HTML character escaping.

## Technologies Used
* **Front-End:** XHTML 1.0 Strict, CSS3 (Box Model implementation), JavaScript/jQuery 3.6.0 (via CDN).
* **Back-End:** PHP 8.x, Relational Database Management System (MySQL Engine via PDO API).

## How to Run the System Locally
1. Download and install the **XAMPP local stack** environment.
2. Clone this repository or copy the code files into your local directory: `C:/xampp/htdocs/student_registration/`.
3. Open your browser and navigate to `http://localhost/phpmyadmin/`. Create a database named `mzumbe_sims` and run the SQL schema included in the setup.

---
### Official Submission to the Instructor
Dear Mr. @kadefue, 

This is my official project submission for the CSS 221: Introduction to Web Programming assignment coursework. The system represents a High School Student Registration System developed strictly under XHTML, CSS Box Model, JavaScript/jQuery AJAX, and secure PHP PDO Prepared Statements as guided in your lectures. 

Kindly review the source files and documentation. Thank you!
4. Open the XAMPP Control Panel and boot up both the **Apache HTTP Server** and **MySQL Database** processes.
5. Launch your browser and navigate to the application pathway: `http://localhost/student_registration/`.
