CREATE DATABASE Base;
CREATE USER 'queso'@'%' IDENTIFIED BY 'cheese';
GRANT ALL PRIVILEGES ON Base.* TO 'queso'@'%';
FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY 'macbacon';
