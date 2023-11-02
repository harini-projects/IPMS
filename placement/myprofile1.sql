-- Create a database if it doesn't exist
CREATE DATABASE IF NOT EXISTS myprofile1;

-- Use the created database
USE myprofile1;

-- Create a table to store user profiles
CREATE TABLE user_profile (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    register_number VARCHAR(50) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    date_of_birth DATE NOT NULL,
    department VARCHAR(255) NOT NULL,
    year_of_study INT NOT NULL,
    tenth_percentage DECIMAL(5, 2) NOT NULL,
    twelfth_percentage DECIMAL(5, 2) NOT NULL,
    ug_percentage DECIMAL(5, 2) NOT NULL,
    resume_path VARCHAR(255) NOT NULL
);
