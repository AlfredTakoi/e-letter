# 📌 E-Letter Kelurahan Baros (PHP Native)

A simple PHP-based application designed to manage employee data, user data, and incoming and outgoing mail. This application supports multiple users with different access levels and provides reporting features based on date ranges.

---

## ✨ Key Features
- 🔑 **Multiple Users**
- User login & management
- Role-based access rights

- 👨‍💼 **Employee CRUD**
- Add, modify, delete, and display employee data

- 👥 **User CRUD**
- Add, modify, delete, and display user data

- 📄 **Incoming Letter CRUD**
- Enter incoming mail, edit, delete, and print

- 📤 **Outgoing Letter CRUD**
- Enter outgoing mail, edit, delete, and print

- 📊 **Reports**
- Print incoming and outgoing mail reports based on date range

---

## 🛠️ Technologies Used
- **Native PHP** (no framework)
- **MySQL / MariaDB** (Database)
- **Bootstrap / CSS** (UI & (style)
- **JavaScript** (basic interaction)

---

## ⚙️ Installation Method
1. Clone or download this repository
```git clone https://github.com/AlfredTakoi/e-letter.git```

2. Move the project folder to the web server folder (for example, `htdocs` if using XAMPP).

3. Create a new database in MySQL, then import the `.sql` file available in the `database/` folder.

4. Adjust the database configuration in the file:
```
config/koneksi.php
```

5. Run the application through a browser:
```
http://localhost/project-name/
```

---
## 📃 License
This project was created as part of a Field Work Practice (PKL) in Baros Village.
This application is intended for learning purposes and internal needs, and can be freely developed further according to the agency's needs.
