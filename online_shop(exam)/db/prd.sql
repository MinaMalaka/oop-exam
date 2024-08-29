
CREATE TABLE product (
    `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    `image` VARCHAR(255) ,
    `price` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
   
    PRIMARY KEY(id));

INSERT INTO product (`image`, `price`, `name`,`description`) 
VALUES 
('images/one.jpg','2000 EGY','samsung 10','this is first mobile'),
('images/two.jpg','2000 EGY','samsung 20','this is second mobile'),
('images/three.jpg','2000 EGY','samsung 30','this is third mobile');