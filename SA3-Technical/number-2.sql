CREATE DATABASE IF NOT EXISTS sa3_technical;

USE sa3_technical;

CREATE TABLE IF NOT EXISTS login_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO login_users (username, password)
VALUES ('user123', '12345')
ON DUPLICATE KEY UPDATE username = username;
