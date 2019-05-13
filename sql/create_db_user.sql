
CREATE DATABASE IF NOT EXISTS landon_app_prod;

SET GLOBAL validate_password_policy=LOW;
SET GLOBAL validate_password_length = 3;
SET GLOBAL validate_password_number_count = 0;


GRANT ALL PRIVILEGES ON *.* TO 'user'@'10.2.40.181' IDENTIFIED BY 'Secret';
FLUSH PRIVILEGES;

