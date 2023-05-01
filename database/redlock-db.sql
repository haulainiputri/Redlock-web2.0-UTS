CREATE DATABASE Redlock;
USE Redlock;
CREATE TABLE `users`(
    `ID` INT PRIMARY KEY AUTO_INCREMENT,
    `Nama` VARCHAR(30) NOT NULL,
    `Alamat` VARCHAR(30) NOT NULL,
    `Jabatan` VARCHAR(30) NOT NULL
);

INSERT INTO `users`(`Nama`, `Alamat`, `Jabatan`) VALUES
    ('Andi', 'Amsterdam Street, Netherlands', 'CEO'),
    ('Budi', 'Hollywood Boulevard, US', 'Manager'),
    ('Caca', 'South Bank, Singapore', 'Supervisor'),
    ('Dandi', 'Seaport Boulevard, US', 'Employee');