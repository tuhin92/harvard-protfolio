-- Switch to harvard database
USE harvard;

-- Create the crud_operations table
CREATE TABLE IF NOT EXISTS crud_operations (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(20),
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert sample data
INSERT INTO crud_operations (name, email, phone, address) VALUES 
('Ali Emam Al Mamun', 'mamun15-4861@diu.edu.bd', '+880 1234567890', 'Dhaka, Bangladesh'),
('Tuhin Al Mamun', 'tuhinalmamun71m@gmail.com', '+880 9876543210', 'Chittagong, Bangladesh');d_operations' table in harvard database
USE harvard;

-- Create a table named 'crud_operations'
CREATE TABLE crud_operations (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(20),
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insert some sample data into the 'crud_operations' table
INSERT INTO crud_operations (name, email, phone, address) VALUES 
('Ali Emam Al Mamun', 'mamun15-4861@diu.edu.bd', '+880 1234567890', 'Dhaka, Bangladesh'),
('Tuhin Al Mamun', 'tuhinalmamun71m@gmail.com', '+880 9876543210', 'Chittagong, Bangladesh');
