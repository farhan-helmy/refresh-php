-- Drop database if it exists
DROP DATABASE IF EXISTS iphonebooking;

-- Create the database
CREATE DATABASE iphonebooking;

-- Switch to the newly created database
USE iphonebooking;

-- Create the "users" table
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255),
  password VARCHAR(255),
  address VARCHAR(255),
  is_admin BOOLEAN
);

-- Create the "bookings" table
CREATE TABLE bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  date VARCHAR(255)
);