# 🚗 Car Rental Management System

## Overview

The **Car Rental Management System** is a web-based application designed to simplify the process of renting and managing vehicles. It provides an intuitive interface for customers to browse available cars, make reservations, complete payments, and return rented vehicles. In addition, the system includes an administrative dashboard for managing vehicles, reservations, and customer feedback.

---

## Features

### Customer Features

* User authentication (Login & Logout)
* Browse and search available vehicles
* View detailed car information
* Reserve cars online
* Return rented vehicles
* View reservation history
* Submit customer feedback
* Complete rental payments

### Administrator Features

* Secure admin dashboard
* Add, update, and remove vehicle records
* Manage customer reservations
* Approve or reject booking requests
* Process vehicle returns
* View customer feedback
* Monitor vehicle availability

---

## Technologies Used

* PHP
* MySQL
* HTML5
* CSS3
* JavaScript
* Bootstrap
* XAMPP (Apache & MySQL)

---

## System Requirements

Before running the project, ensure the following software is installed:

* XAMPP
* PHP 7.x or later
* MySQL
* Modern web browser (Chrome, Edge, Firefox)

---

## Installation

1. Install and launch **XAMPP**.
2. Clone or download the project into the **htdocs** directory.
3. Start both **Apache** and **MySQL** services.
4. Create a new MySQL database.
5. Import the provided SQL file located in the **database** folder.
6. Update the database credentials in `connection.php` if needed.
7. Open your browser and visit:

```text
http://localhost:8080
```

The application is now ready to use.

---

## Database

The project uses a **MySQL** database to manage application data.

### Main Car Table

| Field        | Type              |
| ------------ | ----------------- |
| Car ID       | INT (Primary Key) |
| Make         | VARCHAR           |
| Model        | VARCHAR           |
| Year         | INT               |
| Color        | VARCHAR           |
| Rental Price | DECIMAL           |
| Availability | BOOLEAN           |
| Image        | VARCHAR           |
| Description  | TEXT              |

---

## Project Workflow

1. User logs into the system.
2. Available vehicles are displayed.
3. User searches and selects a vehicle.
4. Reservation request is submitted.
5. Administrator reviews and approves the booking.
6. User completes payment.
7. Vehicle is returned after the rental period.
8. User submits feedback.

---

## Project Structure

```
CarRental/
│
├── assets/
├── css/
├── images/
├── database/
│   └── carproject.sql
├── admin/
├── user/
├── connection.php
└── index.php
```

---

## Future Enhancements

* Online payment gateway integration
* Email confirmation for reservations
* Vehicle rating and review system
* Responsive mobile interface
* Real-time booking notifications
* Google Maps location support

---

## Conclusion

This project demonstrates a complete **Car Rental Management System** that streamlines vehicle rental operations for both customers and administrators. By integrating reservation management, vehicle availability tracking, and administrative controls into a single platform, the system provides an efficient and user-friendly solution for modern car rental services.

---

## License

This project is intended for educational purposes. You may modify and extend it for learning or academic use.

---

## Author

**Shimaa Said**
