# Database scripts to create new user in MYSQL.

CREATE USER 'coach_z_web'@'localhost' IDENTIFIED BY 'M0n@rch$';

GRANT ALL PRIVILEGES ON * . * TO 'coach_z_web'@'localhost';

FLUSH PRIVILEGES;