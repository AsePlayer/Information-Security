# **Secure Jokes Database App**

The Secure Jokes Database App is a secure, web-based application designed for creating, managing, and searching a personalized jokes database. It demonstrates advanced web development practices, focusing on secure coding techniques and addressing common vulnerabilities like SQL injection and cross-site scripting (XSS).

---

## **Key Features**

### **Core Functionalities**
- **User Authentication**:  
  Secure registration and login system using hashed passwords and session-based authentication.
- **Joke Management**:  
  Users can add jokes and punchlines, which are stored in a database and linked to their account.
- **Search Functionality**:  
  Intuitive keyword-based search for retrieving jokes from the database.

### **Security Enhancements**
- **SQL Injection Prevention**:  
  Utilizes prepared statements to protect against SQL injection attacks.
- **Password Security**:  
  Enforces password complexity and securely hashes user passwords before storage.
- **XSS Mitigation**:  
  Sanitizes user inputs to eliminate cross-site scripting vulnerabilities.

---

## **Setup Instructions**

### **Prerequisites**
- PHP (version 7.x or newer)
- MySQL database
- A local or remote web server (e.g., XAMPP, WAMP, or MAMP)

### **Installation Steps**
1. Clone the repository from GitHub.
2. Import the provided SQL file to set up the database structure.
3. Configure database credentials in the application’s connection file.
4. Deploy the application on your web server and access it via your browser.

---

## **Project Highlights**

### **1. Secure Coding Practices**
- Implements prepared statements to prevent unauthorized database access.
- Uses input sanitization to block malicious scripts and secure application inputs.
- Stores passwords securely by hashing them with modern cryptographic algorithms.

### **2. Security Demonstrations**
- Initial testing revealed vulnerabilities, including SQL injection and XSS.
- Comprehensive fixes were implemented to adhere to security best practices.

### **3. User-Centric Features**
- Ensures a personalized experience by linking jokes to individual accounts.
- Provides an easy-to-use interface for joke management and retrieval.

---

## **How to Use**
1. **Register**:  
   Sign up using the secure registration form with enforced password rules.
2. **Login**:  
   Access your account with a secure session-managed login process.
3. **Add Jokes**:  
   Submit jokes and punchlines to the database.
4. **Search Jokes**:  
   Use the search functionality to find jokes by entering relevant keywords.

---

## **Video Demonstrations**

### Part 1 - Application Walkthrough
Follow a tutorial to setup a web and database server, write HTML and PHP pages to store a list of jokes and their answers.  Search the database for your favorite jokes.
<video src='https://user-images.githubusercontent.com/52973701/198209888-bbccfb4a-56b3-484b-9f22-1d5c362294d1.mp4'/>

### Part 2 – User’s Table
Extend the Jokes application to add a second table to the database, join the two tables with a foreign key, create a registration and login page, authenticate new users, and associate each joke with a user.
<video src='https://user-images.githubusercontent.com/52973701/198209928-ce173e4d-4de3-4783-b886-5c104e64c131.mp4'/>

### Part 3 – Vulnerability Demonstrations
Conduct hacking tests to demonstrate that the application is vulnerable to SQL injection, weak passwords, cross-site scripting, and other problems. 
<video src='https://user-images.githubusercontent.com/52973701/198209959-9a8bbebd-3bf1-44a2-ace9-c9beb3f534b9.mp4'/>


### Part 4 - Security Upgrades
Fix each of these problems with best-practice coding techniques.
<video src='https://user-images.githubusercontent.com/52973701/198209998-5a80e271-a6fe-4d1d-b3e9-f4bbf5cc0835.mp4'/>

---

## **Skills Demonstrated**
- Secure web application development with PHP and MySQL.
- Proficiency in identifying and resolving vulnerabilities like SQL injection and XSS.
- Strong understanding of database management and relational design.
- Expertise in implementing user authentication and password security.

