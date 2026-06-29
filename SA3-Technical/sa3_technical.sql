CREATE DATABASE IF NOT EXISTS sa3_technical;

USE sa3_technical;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    middle_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    birthday VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    contact_number VARCHAR(20) NOT NULL,
    reset_token VARCHAR(255) DEFAULT NULL,
    reset_token_expires_at DATETIME DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO users (
    first_name,
    middle_name,
    last_name,
    username,
    password,
    birthday,
    email,
    contact_number
)
VALUES (
    'Sample',
    'User',
    'Account',
    'user123',
    '12345',
    'January 30 1993',
    'user123@example.com',
    '09325454562'
)
ON DUPLICATE KEY UPDATE username = username;
