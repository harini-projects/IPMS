-- Create the jobsapplied_db database
CREATE DATABASE jobsapplied_db;

-- Use the newly created database
USE jobsapplied_db;

-- Create the applied_jobs table
CREATE TABLE applied_jobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    job_title VARCHAR(255) NOT NULL,
    company_name VARCHAR(255) NOT NULL,
    application_date DATE NOT NULL
);

-- Replace 'user_id' with the appropriate user ID mechanism for your system (e.g., user authentication)
