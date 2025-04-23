-- Create the database
CREATE DATABASE digital_id_portal;
USE digital_id_portal;

-- create roles table
CREATE TABLE roles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  role VARCHAR(50) NOT NULL
);

-- create admins table
CREATE TABLE admins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  first_name VARCHAR(100) NOT NULL,
  middle_name VARCHAR(100),
  last_name VARCHAR(100) NOT NULL,
  role_id INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (role_id) REFERENCES roles(id)
    ON DELETE RESTRICT
    ON UPDATE CASCADE
);

-- create citizens table
CREATE TABLE citizens (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  first_name VARCHAR(100) NOT NULL,
  middle_name VARCHAR(100),
  last_name VARCHAR(100) NOT NULL,
  role_id INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (role_id) REFERENCES roles(id)
    ON DELETE RESTRICT
    ON UPDATE CASCADE
);

-- create id_applications table
CREATE TABLE id_applications (
  id INT AUTO_INCREMENT PRIMARY KEY,
  citizen_id INT NOT NULL,
  date_of_birth DATE NOT NULL,
  street_address VARCHAR(255) NOT NULL,
  barangay VARCHAR(100) NOT NULL,
  city VARCHAR(100) NOT NULL,
  province VARCHAR(100) NOT NULL,
  zip_code VARCHAR(10) NOT NULL,
  region VARCHAR(100) NOT NULL,
  photo_path VARCHAR(255),
  status VARCHAR(50) DEFAULT 'pending',
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (citizen_id) REFERENCES citizens(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

-- insert 3 records into roles table
INSERT INTO roles (role) 
VALUES 
('Super Admin'), 
('Admin'), 
('Citizen');

-- insert 20 records into admins table
INSERT INTO admins (username, password, first_name, middle_name, last_name, role_id)
VALUES 
('super_admin', md5('superadmin'), 'Super', 'Doe', 'Admin', 1),
('admin', md5('nimda'), 'Admin', 'Doe', 'Nimda', 2),
('kerv', md5('kerv'), 'Kervin', 'Baidiango', 'Bailes', 2),
('matt', md5('matt'), 'Elmark', 'Dela Cruz', 'Cristobal', 2),
('cie', md5('cie'), 'Cielo', 'Lumanog', 'Ignacio', 2),
('junta', md5('junta'), 'Jonathan', '', 'Fornal', 2),
('enteng', md5('enteng'), 'John Vincent', 'Fornal', 'Gaupo', 2),
('nils', md5('nils'), 'Nilsie', 'Bechaida', 'Orlanda', 2),
('bri', md5('bri'), 'Brian', 'Pedrera', 'Almirante', 2),
('wins', md5('wins'), 'Winston Jr', 'Rojero', 'Bacsa', 2),
('marl', md5('marl'), 'Marlou', '', 'Faustion', 2),
('xander', md5('xander'), 'John Xander', '', 'Dofredo', 2),
('tanks', md5('tangks'), 'Nathaniel Andre', 'Lopez', 'Tangkoy', 2),
('ruzz', md5('ruzz'), 'Ruzzel Dean', 'Bawa', 'Parungao', 1),
('coco', md5('coco'), 'Coco', 'C', 'Choco', 1),
('sir_j', md5('sirj'), 'Sir', 'Jay', 'Abando', 1),
('ping', md5('ping'), 'Ping', '', 'Lacson', 2),
('jdoe', md5('jdoe'), 'John', '', 'Doe', 2),
('jdc', md5('jdc'), 'Juan', '', 'Dela Cruz', 1),
('n_ranger', md5('n_ranger'), 'N', '', 'Ranger', 2);

-- insert 20 records into citizens table
INSERT INTO citizens (email, password, first_name, middle_name, last_name, role_id)
VALUES 
('john.smith@example.com', MD5('password1'), 'John', NULL, 'Smith', 2), 
('jane.johnson@example.com', MD5('password2'), 'Jane', NULL, 'Johnson', 2), 
('peter.parker@example.com', MD5('password3'), 'Peter', 'Benjamin', 'Parker', 2), 
('clark.kent@example.com', MD5('password4'), 'Clark', NULL, 'Kent', 2), 
('bruce.wayne@example.com', MD5('password5'), 'Bruce', NULL, 'Wayne', 2), 
('wade.wilson@example.com', MD5('password6'), 'Wade', 'Wilson', 'Maxwell', 2), 
('mary.jane@example.com', MD5('password7'), 'Mary', 'Jane', 'Watson', 2), 
('lois.lane@example.com', MD5('password8'), 'Lois', NULL, 'Lane', 2), 
('barry.allen@example.com', MD5('password9'), 'Barry', 'Allen', 'West', 2), 
('diana.prince@example.com', MD5('password10'), 'Diana', NULL, 'Prince', 2), 
('steve.trevor@example.com', MD5('password11'), 'Steve', NULL, 'Trevor', 2), 
('tony.stark@example.com', MD5('password12'), 'Tony', 'Edward', 'Stark', 2), 
('natasha.romanoff@example.com', MD5('password13'), 'Natasha', NULL, 'Romanoff', 2), 
('stephen.strange@example.com', MD5('password14'), 'Stephen', 'Vincent', 'Strange', 2), 
('carol.danvers@example.com', MD5('password15'), 'Carol', NULL, 'Danvers', 2), 
('sam.wilson@example.com', MD5('password16'), 'Sam', 'Wilson', 'Hawkins', 2), 
('nick.fury@example.com', MD5('password17'), 'Nick', NULL, 'Fury', 2), 
('maria.hill@example.com', MD5('password18'), 'Maria', 'Elizabeth', 'Hill', 2), 
('james.rhodes@example.com', MD5('password19'), 'James', 'Rhodes', 'Burns', 2), 
('bucky.barnes@example.com', MD5('password20'), 'Bucky', NULL, 'Barnes', 2);


-- insert 20 records into id_applications table
INSERT INTO id_applications (citizen_id, date_of_birth, street_address, barangay, city, province, zip_code, region, photo_path, status)
VALUES 
(1, '1985-05-15', '123 Main St', 'Barangay 1', 'Quezon City', 'Metro Manila', '1100', 'National Capital Region', 'uploads/photo1.jpg', 'pending'),
(2, '1990-09-20', '456 Oak St', 'Barangay 2', 'Makati City', 'Metro Manila', '1200', 'National Capital Region', 'uploads/photo2.jpg', 'pending'),
(3, '1982-02-10', '789 Pine St', 'Barangay 3', 'Cebu City', 'Cebu', '6000', 'Central Visayas', 'uploads/photo3.jpg', 'pending'),
(4, '1995-07-30', '321 Maple St', 'Barangay 4', 'Davao City', 'Davao del Sur', '8000', 'Davao Region', 'uploads/photo4.jpg', 'pending'),
(5, '1992-12-01', '654 Elm St', 'Barangay 5', 'Taguig City', 'Metro Manila', '1630', 'National Capital Region', 'uploads/photo5.jpg', 'pending'),
(6, '1988-11-15', '987 Cherry St', 'Barangay 6', 'Iloilo City', 'Iloilo', '5000', 'Western Visayas', 'uploads/photo6.jpg', 'pending'),
(7, '1980-06-25', '654 Birch St', 'Barangay 7', 'Cagayan de Oro', 'Misamis Oriental', '9000', 'Northern Mindanao', 'uploads/photo7.jpg', 'pending'),
(8, '1993-08-05', '123 Walnut St', 'Barangay 8', 'Dumaguete City', 'Negros Oriental', '6200', 'Central Visayas', 'uploads/photo8.jpg', 'pending'),
(9, '1991-04-18', '234 Cedar St', 'Barangay 9', 'Manila', 'Metro Manila', '1000', 'National Capital Region', 'uploads/photo9.jpg', 'pending'),
(10, '1984-10-22', '876 Pineapple St', 'Barangay 10', 'Antipolo', 'Rizal', '1870', 'CALABARZON', 'uploads/photo10.jpg', 'pending'),
(11, '1997-03-11', '432 Mango St', 'Barangay 11', 'Baguio City', 'Benguet', '2600', 'CAR', 'uploads/photo11.jpg', 'pending'),
(12, '1983-06-12', '321 Banana St', 'Barangay 12', 'Pasig City', 'Metro Manila', '1600', 'National Capital Region', 'uploads/photo12.jpg', 'pending'),
(13, '1990-10-30', '765 Guava St', 'Barangay 13', 'Davao City', 'Davao del Sur', '8000', 'Davao Region', 'uploads/photo13.jpg', 'pending'),
(14, '1986-02-14', '876 Orange St', 'Barangay 14', 'Quezon City', 'Metro Manila', '1100', 'National Capital Region', 'uploads/photo14.jpg', 'pending'),
(15, '1992-05-09', '654 Grape St', 'Barangay 15', 'Mandaluyong', 'Metro Manila', '1550', 'National Capital Region', 'uploads/photo15.jpg', 'pending'),
(16, '1989-01-19', '321 Strawberry St', 'Barangay 16', 'Zamboanga City', 'Zamboanga del Sur', '7000', 'Zamboanga Peninsula', 'uploads/photo16.jpg', 'pending'),
(17, '1994-09-10', '543 Lemon St', 'Barangay 17', 'General Santos', 'South Cotabato', '9500', 'SOCCSKSARGEN', 'uploads/photo17.jpg', 'pending'),
(18, '1987-11-01', '876 Peach St', 'Barangay 18', 'Legazpi City', 'Albay', '4500', 'Bicol Region', 'uploads/photo18.jpg', 'pending'),
(19, '1993-05-22', '654 Coconut St', 'Barangay 19', 'Tagbilaran City', 'Bohol', '6300', 'Central Visayas', 'uploads/photo19.jpg', 'pending'),
(20, '1991-12-14', '987 Durian St', 'Barangay 20', 'Tacloban City', 'Leyte', '6500', 'Eastern Visayas', 'uploads/photo20.jpg', 'pending');