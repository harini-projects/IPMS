
CREATE DATABASE achievements_db11;
USE achievements_db11;

CREATE TABLE achievements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    description TEXT NOT NULL,
    file_type VARCHAR(10) NOT NULL,
    file_path VARCHAR(255) NOT NULL
);
