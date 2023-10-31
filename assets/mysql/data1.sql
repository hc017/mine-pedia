Create database DBMS_Project;

Use DBMS_Project;

Create table Player_Details ( player_id int primary key, user_name varchar(100), password varchar(10));

Create table Player_Stats ( player_id int, health int, level int, hunger int, foreign key (player_id) references player_details(player_id), Unique key SuperKey_Player_Level (player_id, level));

Create table World ( world_id int primary key, name varchar(100), seed int, creating_date date, size int);

Create table PlaysIn ( world_id int, foreign key (world_id) references world (world_id), player_id int, foreign key (player_id) references player_details (player_id));

Create table Biome_Details (biome_id int,  vegetation varchar(100), primary key (biome_id, vegetation));

Create table Biome_Stats ( biome_id int primary key, name varchar(100), terrain varchar(100), climate varchar(100)); 

Create table portal ( portal_id int primary key, location varchar(100), world_id int, foreign key (world_id) references world (world_id),  player_id int, foreign key (player_id) references player_details (player_id));
   
Create table NetherWorld ( world_id int, foreign key (world_id) references world (world_id), coordinates_x int, coordinates_y int, coordinates_z int);

Create table Mob (  mob_id int primary key, name varchar(100), health int,  world_id int, foreign key (world_id) references world (world_id));

Create table Hostile_Mob ( mob_id int, foreign key (mob_id) references mob (mob_id), behavior varchar(100), health int, spawn_conditions varchar(100));

Create table Non_hostile_Mob ( mob_id int, foreign key (mob_id) references mob (mob_id));

Create table Trader  ( mob_id int, foreign key (mob_id) references mob (mob_id), trade_offers varchar(255));

Create table Villager  ( mob_id int, foreign key (mob_id) references mob (mob_id), trade_offers varchar(255), profession varchar(100));

Create table Animal ( mob_id int, foreign key (mob_id) references mob (mob_id), size varchar(50), sound varchar(100), diet varchar(100), color varchar(100));

Create table Tamed_Animal ( mob_id int, foreign key (mob_id) references mob (mob_id), owner varchar(100));

Create table Non_tamed_Animal ( mob_id int, foreign key (mob_id) references mob (mob_id), behavior varchar(100));

Create table Inventory ( inventory_id int primary key, armour varchar(100),  player_id int, foreign key (player_id) references player_details (player_id));

Create table Item ( item_id int primary key, name varchar(100),quantity int, stack_size int, durability int,  inventory_id int, foreign key (inventory_id) references inventory (inventory_id), world_id int, foreign key (world_id) references world (world_id));

Create table Craftable ( item_id int, foreign key (item_id) references item (item_id));

Create table Non_craftable ( item_id int, foreign key (item_id) references item (item_id), rarity varchar(100));

Create table drops ( item_id int, foreign key (item_id) references item (item_id),  mob_id int, foreign key (mob_id) references mob (mob_id));

Create table Enchantment_table ( location_x int, location_z int, item_id int, foreign key (item_id) references item (item_id));

Create table Block_Details (  world_id int, foreign key (world_id) references world (world_id), type varchar(255));

Create table Block_Stats (  world_id int, foreign key (world_id) references world (world_id), name varchar(100));

Create table Block_Cans (  world_id int, foreign key (world_id) references world (world_id), name varchar(100), texture varchar(100), hardness int);

Create table Block_Dans (  world_id int, foreign key (world_id) references world (world_id), blast_resistance int);

Create table Vehicle ( world_id int, foreign key (world_id) references world (world_id), durability varchar(100), storage varchar(100), collision varchar(100), speed varchar(100));

Create table Boat ( world_id int, foreign key (world_id) references world (world_id),  color varchar(100), material varchar(100)); 

Create table Mine_cart ( world_id int, foreign key (world_id) references world (world_id), content varchar(100), rails varchar(100));

INSERT INTO World (world_id, Name, Seed, creating_date, Size)
VALUES
    (111, 'Default', -123, '2019-03-22', 30000),
    (222, 'Superflat', -345, '2022-02-10', 15000),
    (333, 'Amplified', -567, '2020-10-08', 20000),
    (444, 'Large Biomes', -789, '2020-12-12', 25000),
    (555, 'Single Biomes', -901, '2023-01-30', 22000);


INSERT INTO Player_Details (player_id, User_name, password)
VALUES
    (1, 'Energizer_Bunny', 'Kfx@19kp'),
    (2, 'Superior_Days', 'B6shi@jb'),
    (3, 'Oggy_cockroaches', 'Khgcn77!'),
    (4, 'Lord_Theus', 'Luyv54&m'),
    (5, 'TheDemonHunter', 'F#ecvbn3'),
    (6, 'Vaishnavi_b', 'Cyg@4hra'),
    (7, 'Mokshada_S', 'Dtubg#1D'),
    (8, 'Harshal_C', 'Ddd#hj#9'),
    (9, 'Shravani_T', 'Lkimi@56');

INSERT INTO Player_Stats (player_id, Health, Level, Hunger)
VALUES
    (1, 10, 1, 16),
    (2, 18, 7, 10),
    (3, 8, 11, 18),
    (4, 20, 19, 20),
    (5, 10, 1, 18),
    (6, 16, 5, 14),
    (7, 10, 9, 14),
    (8, 16, 8, 10),
    (9, 11, 3, 12);


INSERT INTO PlaysIn (Player_ID, World_ID)
VALUES (1,333),
               (2,444),
               (3,555),
               (4,222),
               (5,222),
               (6,111),
               (7,111),
               (8,111),
               (9,111);

INSERT INTO Netherworld (World_ID, coordinates_X, coordinates_Y, coordinates_Z)
VALUES (111, -170, +34, +456),
               (222, -523, -94, +673),
               (333, +422, +533, -112),
               (444, +711, +721, +86),
               (555, +812, +899, +563);

INSERT INTO Biome_Details (biome_id, vegetation)
VALUES
    (1, 'Grass'),
    (1, 'Trees'),
    (1, 'Flowers'),
    (2, 'Dead Bushes'),
    (3, 'Seaweed'),
    (3, 'Kelp'),
    (4, 'Sparse Trees'),
    (5, 'Spruce Trees'),
    (6, 'Tall Trees');

     
INSERT INTO Biome_Stats (biome_id, Name, Terrain, Climate)
VALUES
    (1, 'Forest', 'Trees and Hills', 'Temperate'),
    (2, 'Desert', 'Sand Dunes', 'Arid'),
    (3, 'Ocean', 'Vast Water', 'Marine'),
    (4, 'Mountain', 'Rocky', 'Cold'),
    (5, 'Taiga', 'Cold and Snowy', 'Cold'),
    (6, 'Savanna', 'Grasslands', 'Warm');


INSERT INTO Portal (portal_iD, location, world_iD, player_iD)
VALUES (1, 'Overworld', 222, 4),
               (2, 'Nether', 111, 6),
               (3, 'End', 444, 1),
               (4, 'Jungle biome', 111, 9),
               (5, 'Desert biome', 333, 2);

INSERT INTO Mob (mob_id, name, health, world_id)
VALUES
    (1, 'Allay', 20, 333),
    (2, 'Zombie', 20, 333),
    (3, 'Cat', 10, 444),
    (4, 'Creeper', 20, 222),
    (5, 'Salmon', 3, 111),
    (6, 'Skeleton', 20, 444),
    (7, 'Villager', 20, 222),
    (8, 'Trader', 20, 222),
    (9, 'Fox', 10, 333),
    (10, 'Cow', 10, 555),
    (11, 'Pig', 10, 555),
    (12, 'Bee', 10, 555),
    (13, 'Panda', 20, 111),
    (14, 'Turtle', 30, 111),
    (15, 'Wolf', 8, 111),
    (16, 'Villager', 20, 111),
    (17, 'Villager', 20, 111),
    (18, 'Villager', 20, 333),
    (19, 'Villager', 20, 222),
    (20, 'Ender Dragon', 200, 444),
    (21, 'Pillager', 24, 111);

INSERT INTO Hostile_Mob (mob_iD, behavior, health, spawn_conditions)
VALUES (2, 'Hostile', 2.5, 'Light level: 0'),
               (4, 'Hostile', 3.0, 'Light level: 0'),
               (6, 'Hostile', 1.0, 'Light level: 0'),
               (20, 'Hostile', 10.0, 'The End'),
               (21, 'Hostile', 4.0, 'Pillager Outpost');

INSERT INTO Non_hostile_Mob (mob_id)
VALUES (1),
               (3),
               (5),
               (7),
               (8),
               (9),
               (10),
               (11),
               (12),
               (13),
               (14),
               (15),
               (16),
               (17),
               (18),
               (19);


INSERT INTO Villager (mob_id, trade_offers, Profession)
VALUES (7, 'Wheat for emeralds', 'Farmer'),
               (16, 'Diamond Pickaxe for Emeralds', 'Blacksmith'),
               (17, 'Enchanted Book for Emeralds', 'Librarian'),
               (18, 'Fish for Emeralds', 'Fisherman'),
               (19, 'Arrows for Emeralds', 'Fletcher');


INSERT INTO Animal (mob_id, size, sound, diet, color)
VALUES (1, 'Small', 'kee-kee', NULL, 'Blue'),
               (3, 'Small', 'Meow', 'Fish', 'Orange'),
               (9, 'Medium', 'Barks', 'Sweet Berries', 'Orange'),
               (10, 'Large', 'moo', 'Wheat', 'Black & White'),
               (11, 'Large', 'squeals', 'Carrot', 'Pink'),
               (12, 'Small', 'Buzz', 'Flower', 'Black & Yellow'),
               (13, 'Large', 'Purrs', 'Bamboo', 'Black & white'),
               (14, 'Medium', 'No sound', 'Sea grass', 'Green'),
               (15, 'Medium', 'Hoowwoo', 'Rotten flesh', 'White');



INSERT INTO Tamed_Animal (mob_id, owner)
VALUES (1, 'Energizer_Bunny'),
               (3, 'Superior_Days'),
               (15, 'Harshal_C');

INSERT INTO Non_tamed_Animal (Mob_id, behavior)
VALUES (9, 'Passive'),
               (12, 'Neutral'),
               (13, 'Passive'),
               (14, 'Passive');


INSERT INTO Inventory (inventory_id, armour, player_id)
VALUES (1, NULL, 5),
               (2, 'Gold', 3),
               (3, 'Diamond', 2),
               (4, 'Leather', 1),
               (5, 'Iron', 4),
               (6, NULL, 9),
           (7, 'Leather', 8),
           (8, 'Diamond', 7),
           (9, 'Iron', 6);

INSERT INTO Item (item_id, name, quantity, stack_size, durability, inventory_id, world_id)
VALUES (1, 'Iron Ingot', 15, 64, 250, 3, 111),
               (2, 'Diamond Sword', 1,1, 1561, 1, 222),
               (3, 'Wooden Plank', 43, 64, NULL, 4, 333),
               (4, 'Stone Pickaxe', 1, 1, 131, 5, 444),
               (5, 'Bread',4, 64, NULL, 6, 555),
               (6, 'Golden Apple',1, 1, NULL, 7, 111),
               (7, 'Redstone Dust', 42, 64, NULL, 9, 222),
               (8, 'Bow',1, 1, 384, 1, 333),
               (9, 'Fishing Rod',1, 1, 64, 4, 444),
               (10, 'Emerald',20, 64, NULL, 7, 555),
               (11, 'Rotten flesh',18, 64, NULL, 9, 333),
               (12, 'Gun powder',20, 64, NULL, 1, 222),
               (13, 'Bone',4, 64, NULL, 4, 333);


INSERT INTO Craftable (item_id)
VALUES (1),
               (4),
               (5),
               (6),
               (8),
               (9),
               (2);

INSERT INTO Non_craftable (item_id, rarity)
VALUES (3, 'Common'),
               (7, 'Relatively rare'),
               (11, 'Common'),
               (12, 'Relatively rare'),
               (13, 'Relatively rare');

INSERT INTO drops (item_id, mob_id)
VALUES (3, 2),
               (12, 4),
               (13, 6),
              (11, 8),
              (9, 10);

INSERT INTO Enchantment_table (location_x, location_z, item_id)
VALUES (30, 1234, 11),
               (350, 545, 12),
               (545, 324, 13),
               (423, 543, 9),
               (543, 5435, 8);

INSERT INTO Block_Details (world_id, Type)
VALUES
    (111, 'Oak'),
    (111, 'Spruce'),
    (111, 'Birch'),
    (111, 'Jungle'),
    (111, 'Acacia'),
    (111, 'Dark oak'),
    (222, 'Redstone Repeater'),
    (222, 'Redstone Comparator'),
    (222, 'Stone button'),
    (333, 'Metal or Mineral'),
    (444, 'Natural'),
    (444, 'Landscape'),
    (555, 'Building materials');


INSERT INTO Block_Stats (world_id, Name)
VALUES
    (111, 'Wood'),
    (222, 'Stone'),
    (333, 'Iron'),
    (444, 'Environmental'),
    (555, 'Decorative');

INSERT INTO Block_Cans (world_id, Name, Texture, Hardness)
VALUES
    (111, 'Wood', 'Log’s bark', 2.0),
    (222, 'Stone', 'Gray', 1.5),
    (333, 'Iron', 'Metallic', 3.0),
    (444, 'Environmental', 'Grass and stone', NULL),
    (555, 'Decorative', 'Smooth and Uniform', 2.0);

INSERT INTO Block_Dans (world_id, Blast_Resistance)
VALUES
    (111, 2),
    (222, 6),
    (333, 3),
    (444, NULL),
    (555, 6);


INSERT INTO Vehicle (world_id, durability, storage, collision, speed)
VALUES
    (111, 'Low', 'Limited', 'Yes', 'Slow'),
    (222, 'Medium', 'Moderate', 'Yes', 'Moderate'),
    (333, 'High', 'Extensive', 'No', 'Fast'),
    (444, 'Low', 'Limited', 'Yes', 'Slow'),
    (555, 'Medium', 'Moderate', 'Yes', 'Moderate');



INSERT INTO Boat (world_id, color, material)
VALUES (111, 'Green', 'Oak Wood'),
               (222, 'Red', 'Birch Wood'),
               (333, 'Yellow', 'Spruce Wood'),
               (333, 'Red', 'Jungle Wood'),
               (222, 'Brown', 'Acacia Wood');

INSERT INTO Mine_cart (world_id, content, rails)
VALUES (111, 'Empty', 'No'),
               (222, 'Chest', 'Yes'),
               (333, 'Chest', 'Yes'),
               (444, 'Empty', 'Yes'),
               (555, 'Chest', 'Yes');
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES
('hc', '123'),
('st', '123'),
('ms', '123'),
('vb', '123');