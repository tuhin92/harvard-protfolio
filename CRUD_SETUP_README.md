# CRUD Operations Setup Instructions

## Database Setup

1. **Open phpMyAdmin** or your MySQL client
2. **Run the SQL script** from `crud_operations_table.sql` to create the table
3. **Or manually execute these commands:**

```sql
USE harvard;

CREATE TABLE crud_operations (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(20),
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO crud_operations (name, email, phone, address) VALUES 
('Ali Emam Al Mamun', 'mamun15-4861@diu.edu.bd', '+880 1234567890', 'Dhaka, Bangladesh'),
('Tuhin Al Mamun', 'tuhinalmamun71m@gmail.com', '+880 9876543210', 'Chittagong, Bangladesh');
```

## Features Included

- ✅ **Create** - Add new student records
- ✅ **Read** - Display all student records in cards
- ✅ **Update** - Edit existing student information
- ✅ **Delete** - Remove student records with confirmation
- ✅ **Responsive Design** - Works on all devices
- ✅ **Form Validation** - Client and server-side validation
- ✅ **Success/Error Messages** - User feedback for all operations
- ✅ **Modern UI** - Consistent with your portfolio design

## Files Created

1. `crud_operations.php` - Main CRUD application
2. `crud_operations_table.sql` - Database setup script
3. Uses existing `db_connect.php` for database connection

## Access

- Visit: `http://localhost/Harvard_protfolio/crud_operations.php`
- Or click from your portfolio page: `http://localhost/Harvard_protfolio/portfolio.php`
