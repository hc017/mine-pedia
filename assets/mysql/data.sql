create database proj1;
use proj1;
CREATE TABLE worlds (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    seed VARCHAR(255),
    creation_date DATE,
    size VARCHAR(50)
);
INSERT INTO worlds (name, seed, creation_date, size) VALUES ('My Minecraft World 1', '123456789', '2022-01-01', 'Large');
INSERT INTO worlds (name, seed, creation_date, size) VALUES ('My Minecraft World 2', '987654321', '2022-02-15', 'Medium');
INSERT INTO worlds (name, seed, creation_date, size) VALUES ('Adventure World', '555555555', '2022-03-10', 'Small');
INSERT INTO worlds (name, seed, creation_date, size) VALUES ('Exploration Realm', '999999999', '2022-04-05', 'Extra Large');
INSERT INTO worlds (name, seed, creation_date, size) VALUES ('Survival Island', '777777777', '2022-05-20', 'Tiny');

CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    health INT,
    level INT,
    hunger VARCHAR(10),
    top_players TEXT,
    tamed_animals TEXT
);
INSERT INTO players (name, health, level, hunger, top_players, tamed_animals) VALUES 
('Steve', 100, 30, '80%', '[{"name": "Player 1", "level": 50}, {"name": "Player 2", "level": 45}]', '[{"animal": "Dog", "name": "Max"}, {"animal": "Cat", "name": "Whiskers"}]'),
('Alex', 90, 35, '75%', '[{"name": "Player 1", "level": 55}, {"name": "Player 2", "level": 40}]', '[{"animal": "Dog", "name": "Rocky"}, {"animal": "Cat", "name": "Luna"}]'),
('Emily', 95, 38, '85%', '[{"name": "Player 1", "level": 48}, {"name": "Player 2", "level": 42}]', '[{"animal": "Dog", "name": "Sparky"}, {"animal": "Cat", "name": "Whiskers Jr."}]'),
('Olivia', 92, 33, '78%', '[{"name": "Player 1", "level": 52}, {"name": "Player 2", "level": 47}]', '[{"animal": "Dog", "name": "Rex"}, {"animal": "Cat", "name": "Bella"}]');

CREATE TABLE portals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    x_coordinate INT,
    z_coordinate INT
);
INSERT INTO portals (name, x_coordinate, z_coordinate) VALUES 
('Portal 1', 100, 200),
('Portal 2', 300, 400),
('Portal 3', 150, 250),
('Portal 4', 350, 450);

CREATE TABLE mobs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    health INT NOT NULL
);
INSERT INTO mobs (name, health) VALUES ('Zombie', 50);
INSERT INTO mobs (name, health) VALUES ('Skeleton', 60);
INSERT INTO mobs (name, health) VALUES ('Cow', 70);
INSERT INTO mobs (name, health) VALUES ('Chicken', 80);

CREATE TABLE trades (
    id INT AUTO_INCREMENT PRIMARY KEY,
    items TEXT
);
INSERT INTO trades (items) VALUES
('Diamond Sword, Iron Pickaxe, 32 Gold Ingots'),
('Ender Pearls, Enchanted Book, 5 Emeralds'),
('Redstone, 64 Cobblestone, 3 Diamonds'),
('Enchanted Bow, Blaze Powder, 10 Nether Quartz');

CREATE TABLE animals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(255),
    name VARCHAR(255),
    health INT
);
INSERT INTO animals (type, name, health) VALUES
('Dog', 'Buddy', 100),
('Cat', 'Whiskers', 90),
('Horse', 'Thunder', 95),
('Rabbit', 'Fluffy', 85),
('Parrot', 'Squawk', 88);







