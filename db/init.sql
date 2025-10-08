CREATE DATABASE IF NOT EXISTS bsu_eng CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE bsu_eng;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  role VARCHAR(20) NOT NULL DEFAULT 'admin',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE news (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title_en VARCHAR(255),
  title_ar VARCHAR(255),
  body_en TEXT,
  body_ar TEXT,
  published_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE departments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name_en VARCHAR(255),
  name_ar VARCHAR(255),
  description_en TEXT,
  description_ar TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE staff (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name_en VARCHAR(255),
  name_ar VARCHAR(255),
  title VARCHAR(255),
  bio_en TEXT,
  bio_ar TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO users (username, password_hash, role) VALUES
('admin', '$2y$10$uV4f7y8L8nQw0YwDq1o3be7xkzjYxQZkY0G1y2Z3a4b5c6d7e8f9', 'admin');

INSERT INTO news (title_en, title_ar, body_en, body_ar) VALUES
('Welcome to BSU Engineering', 'مرحبًا بكم في كلية الهندسة', 'This is a sample news item.','هذا منشور إخباري تجريبي.');

INSERT INTO departments (name_en, name_ar, description_en, description_ar) VALUES
('Communications', 'قسم الاتصالات', 'Communications department description','وصف قسم الاتصالات');

INSERT INTO staff (name_en, name_ar, title, bio_en, bio_ar) VALUES
('Dr. Ahmed', 'د. أحمد', 'Professor', 'Research bio EN', 'سيرة ذاتية بالعربية');
