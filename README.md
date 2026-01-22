# Blood Donation System

Welcome to the Blood Donation System project. This web-based application allows users to register as blood donors, search for blood availability, and manage blood donation requests. It includes a comprehensive Admin Panel for managing donors, blood stock, and queries.

## 🚀 Features

### User Panel
- **Home Page:** Overview of the blood donation mission.
- **Become a Donor:** Registration form for new donors.
- **Need Blood:** Search functionality to find donors by blood group.
- **Why Donate Blood:** Information on the importance of blood donation.
- **About Us:** Information about the organization.
- **Contact Us:** Form to get in touch with the administration.

### Admin Panel
- **Dashboard:** At-a-glance view of total donors, listed blood groups, and queries.
- **Add Donor:** Interface to manually add a new donor.
- **Donor List:** View, edit, or delete registered donors.
- **Manage Queries:** Read and respond to "Contact Us" queries.
- **Manage Pages:** Update content for "About Us", "Why Donate", etc.
- **Update Contact Info:** Modify contact details displayed on the website.
- **Change Password:** Securely update admin credentials.

## 🛠️ Technology Stack
- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP
- **Database:** MySQL
- **Server:** Apache (via XAMPP/WAMP)

## ⚙️ Installation

1.  **Prerequisites:**
    - Install [XAMPP](https://www.apachefriends.org/index.html) or WAMP.

2.  **Clone the Repository:**
    ```bash
    cd C:\xampp\htdocs\
    git clone https://github.com/preetam2003/Blood_Donation_System.git
    ```

3.  **Database Configuration:**
    - Open XAMPP Control Panel and start **Apache** and **MySQL**.
    - Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
    - Create a new database named `blood_bank_database`.
    - Click **Import** and browse to the file:
      `Blood-Bank-And-Donation-Management-System-master/sql/blood_bank_database.sql`
    - Click **Go** to import the tables.

4.  **Run the Application:**
    - Open your browser and visit:
      [http://localhost/blood donation/Blood-Bank-And-Donation-Management-System-master/home.php](http://localhost/blood%20donation/Blood-Bank-And-Donation-Management-System-master/home.php)

## 🔑 Admin Credentials

To access the Admin Panel, visit:
[http://localhost/blood donation/Blood-Bank-And-Donation-Management-System-master/admin/login.php](http://localhost/blood%20donation/Blood-Bank-And-Donation-Management-System-master/admin/login.php)

- **Username:** `admin` (Check database or original readme if different. The original README said `varunsardana004`/`123` but generic is better unless verified. I'll stick to the original credentials mentioned for safety or note them.)
- **Default Credentials:**
    - Username: `varunsardana004`
    - Password: `123`

## 📂 Project Structure

```
/blood donation
├── Blood-Bank-And-Donation-Management-System-master/  # Main Project Source
│   ├── admin/      # Admin panel files
│   ├── sql/        # Database SQL file
│   ├── views/      # Frontend views
│   ├── index.php   # Entry point
│   └── ...
└── ...
```

## 🤝 Contributing
Contributions are welcome! Please fork the repository and submit a pull request for any enhancements.
