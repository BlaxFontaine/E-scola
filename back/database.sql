DROP DATABASE e_scola;
CREATE DATABASE IF NOT EXISTS e_scola;
USE e_scola;

CREATE TABLE IF NOT EXISTS mascot (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    state VARCHAR(255),
    phrase VARCHAR(255)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS classes (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS attendances (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    status BOOLEAN
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    password VARCHAR(255),
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    role VARCHAR(255),
    classes_id INT NOT NULL,
    attendances_id INT NOT NULL,
    teachers_id INT,
    UNIQUE(email),
    CONSTRAINT `fk_user_class`
        FOREIGN KEY (classes_id) REFERENCES classes (id)
        ON DELETE CASCADE
        ON UPDATE RESTRICT,
    CONSTRAINT `fk_user_attendance`
        FOREIGN KEY (attendances_id) REFERENCES attendances (id)
        ON DELETE CASCADE
        ON UPDATE RESTRICT
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS pupils_parents (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    pupils_id INT,
    parents_id INT
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS assignments (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    start_date DATETIME,
    end_date DATETIME,
    grade VARCHAR(255)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS lessons (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    start_date DATETIME,
    end_date DATETIME
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS activities (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    assignments_id INT,
    lessons_id INT NOT NULL,
    classes_id INT NOT NULL,
    CONSTRAINT `fk_activity_lesson`
        FOREIGN KEY (lessons_id) REFERENCES lessons (id)
        ON DELETE CASCADE
        ON UPDATE RESTRICT,
    CONSTRAINT `fk_activity_class`
        FOREIGN KEY (classes_id) REFERENCES classes (id)
        ON DELETE CASCADE
        ON UPDATE RESTRICT
) ENGINE = InnoDB;
