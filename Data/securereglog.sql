CREATE DATABASE securelogin;



CREATE TABLE members(
    user_id INT NOT NULL PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password CHAR(128) NOT NULL
) ;


CREATE TABLE login_attempts (
    user_id INT(11) NOT NULL,
    time VARCHAR(30) NOT NULL
) ;
CREATE USER 'sec_user'@'localhost' IDENTIFIED BY 'eKcGZr59zAa2BEWU'; GRANT SELECT, INSERT, UPDATE ON secure_login.* TO 'sec_user'@'localhost';

CREATE USER 'sec_user'@'localhost' IDENTIFIED BY 'eKcGZr59zAa2BEWU';
GRANT SELECT, INSERT, UPDATE ON 'secure_login.*' TO 'sec_user'@'localhost';

CREATE USER 'sec_user'@'localhost' IDENTIFIED BY 'eKcGZr59zAa2BEWU'; GRANT SELECT, INSERT, UPDATE ON secure_login.* TO 'sec_user'@'localhost';

INSERT INTO members VALUES(1, 'test_user', 'test@example.com',
'$2y$10$IrzYJi10j3Jy/K6jzSLQtOLif1wEZqTRQoK3DcS3jdnFEhL4fWM4G');