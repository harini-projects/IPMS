CREATE DATABASE IF NOT EXISTS mypro;

-- Use the created database
USE mypro;

-- Create a table to store user profiles
CREATE TABLE IF NOT EXISTS user_profile (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    register_number VARCHAR(20) NOT NULL,
    gender VARCHAR(10) NOT NULL, -- Added gender field
    date_of_birth DATE NOT NULL,
    department VARCHAR(255) NOT NULL,
    year_of_study INT NOT NULL, -- Added year_of_study field
    tenth_percentage DECIMAL(5, 2) NOT NULL, -- Added percentage fields
    twelfth_percentage DECIMAL(5, 2) NOT NULL,
    ug_percentage DECIMAL(5, 2) NOT NULL,
    resume_path VARCHAR(255) NOT NULL
);
