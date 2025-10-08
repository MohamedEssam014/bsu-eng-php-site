BSU Engineering — PHP + Bootstrap dynamic scaffold
------------------------------------------------
This scaffold creates a dynamic website (Arabic / English) with:
- Nginx + PHP-FPM
- MySQL database with init SQL
- Admin panel (login) to manage news
- Simple i18n via query param ?lang=ar or ?lang=en

How to run:
1. docker compose up --build -d
2. Open site: http://localhost:8080 (English: /?lang=en, Arabic: /?lang=ar)
3. Admin panel: http://localhost:8080/admin/login.php
4. phpMyAdmin: http://localhost:8081 (user: bsu / secret)

DB seeds in db/init.sql create an admin user (username: admin, password: admin123) and sample news.

References used:
- Beni-Suef University website (structure inspiration).
- Bootstrap Documentation (https://getbootstrap.com/).
- PHP PDO and secure prepared statements (php.net PDO).
- Docker and Docker Compose best practices.
