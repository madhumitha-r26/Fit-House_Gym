# 🏋️ Fit House - Gym Website

## 📌 Project Overview

**Fit House** is a web-based Gym Management System developed using **PHP, MySQL, HTML, CSS, JavaScript, and Bootstrap**. The application allows users to explore gym services, register for memberships, choose their preferred workout session (Morning/Evening), and access personalized workout schedules after logging in.

The system also provides an **Admin Dashboard** that enables administrators to manage registered members, view registration statistics, edit member information, and delete records. The platform streamlines gym membership management while providing an intuitive user experience.

---

## 🚀 Features

### 👤 User Features

* User registration with personal details
* Secure login authentication
* Batch selection (Morning / Evening)
* Personalized workout schedules based on selected batch
* Forgot password functionality
* View gym services and membership information
* Downloadable gym brochure
* Responsive and user-friendly interface

### 🏋️ Workout Schedule Management

Registered users can access customized workout schedules based on their selected session:

#### Morning Batch

* Squats
* Aerobics & Zumba
* Weight Lifting
* Yoga
* Boxing
* Treadmill
* Gymnastics
* Push-ups & Pull-ups

#### Evening Batch

* Similar workouts scheduled during evening hours

### 🔐 Admin Features

* Admin login access
* View all registered members
* Monitor total registrations
* Edit member details
* Delete member records
* Manage membership information efficiently

---

## 🛠️ Technologies Used

### Frontend

* HTML5
* CSS3
* Bootstrap 5
* JavaScript
* Font Awesome
* Bootstrap Icons

### Backend

* PHP

### Database

* MySQL

### Development Environment

* XAMPP / WAMP Server
* phpMyAdmin

---

## 📂 Modules

### 1. Home Page

Displays:

* Gym overview
* Membership plans
* Registration options
* Navigation to login and workout information

### 2. User Registration

Allows users to:

* Create an account
* Select preferred workout session
* Store details in MySQL database

### 3. User Login

Users can:

* Authenticate using registered credentials
* Access personalized workout schedules

### 4. Workout Management

Displays workout schedules based on:

* Morning Batch
* Evening Batch

### 5. Forgot Password

Provides password recovery support for registered users.

### 6. Admin Dashboard

Administrators can:

* View registered members
* Edit member information
* Delete user records
* Track total registrations

---

## 🗄️ Database Structure

### Database Name

```sql
fithouse
```

### Users Table

| Field    | Type    |
| -------- | ------- |
| id       | INT     |
| username | VARCHAR |
| email    | VARCHAR |
| phone    | VARCHAR |
| gender   | VARCHAR |
| pwd      | VARCHAR |
| sess     | VARCHAR |

---

## 📂 Project Structure

```text
Fit-House/
│
├── imgs/
│   ├── logo.png
│   ├── bgimage.jpg
│   └── other project images
│
├── admin.php
├── count.php
├── delete_user.php
├── edit_user.php
├── forgot password.php
├── index.html
├── login_submit.php
├── register_submit.php
├── workout.html
│
├── script.js
├── style.css
│
├── fit house - gym brochure.pdf
│
└── README.md
```

---

## ▶️ Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
```

### 2. Move Project to Server Directory

For XAMPP:

```text
xampp/htdocs/Fit-House
```

### 3. Create Database

Open **phpMyAdmin** and create a database:

```sql
CREATE DATABASE fithouse;
```

### 4. Import Database

Import the SQL file containing the users table and project data.

### 5. Configure Database Connection

Update the database configuration in PHP files if required:

```php
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "fithouse";
```

### 6. Start Services

Start:

* Apache Server
* MySQL Server

### 7. Run the Application

Open your browser and navigate to:

```text
http://localhost/Fit-House
```

---

## 🔄 Application Workflow

### User Workflow

1. Visit the Fit House website.
2. Register for a gym membership.
3. Choose a preferred workout session.
4. Login using registered credentials.
5. Access personalized workout schedules.
6. Use password recovery if required.

### Admin Workflow

1. Login using admin credentials.
2. Access the admin dashboard.
3. View registered users.
4. Monitor total registrations.
5. Edit member details.
6. Delete inactive or unwanted records.

---

## 📊 Key Functionalities

* User Registration System
* Login Authentication
* Admin Dashboard
* Workout Schedule Management
* CRUD Operations (Create, Read, Update, Delete)
* Registration Analytics
* Password Recovery
* Database Integration with MySQL
* Responsive UI Design

---

## 🎯 Learning Outcomes

Through this project, the following concepts were implemented:

* PHP Server-Side Programming
* MySQL Database Management
* Form Handling and Validation
* CRUD Operations
* User Authentication
* Admin Panel Development
* Frontend Design with Bootstrap
* Database Connectivity using PHP and MySQL

---

## 🔮 Future Enhancements

* Password Hashing and Secure Authentication
* PHP Session Management
* Online Membership Payments
* Trainer Management Module
* Attendance Tracking System
* Diet and Workout Plan Recommendations
* Email Notifications
* Mobile Application Integration
* Role-Based Access Control (RBAC)

---

## 📜 License

This project is licensed under the MIT License.

---

## 👨‍💻 Author

**Madhu**

Developed a full-stack **Gym Management System** using **PHP and MySQL** to simplify gym membership registration, workout scheduling, and administrative member management through a centralized web platform.
