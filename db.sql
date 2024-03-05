-- CREATE DATABASE blog_Liepins;
-- USE DATABASE blog_Liepins;
/*CREATE TABLE posts (
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
title VARCHAR(255) NOT NULL
);

INSERT INTO posts (title) VALUES
("My First Blog Post"),("My Second Blog Post");

-- SELECT * FROM posts WHERE id = 1;
CREATE TABLE categories (
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
NAME VARCHAR(255) NOT NULL,
DESCRIPTION TEXT,
);

INSERT INTO categories (NAME) VALUES
("sport"),("music"),("food");

CREATE TABLE posts (
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
title VARCHAR(255) NOT NULL,
category_id INT NOT NULL,
FOREIGN KEY (category_id) REFERENCES categories(id)
);

INSERT INTO posts (title,category_id) VALUES
("My First Blog Post",1),("My Second Blog Post",2);

CREATE TABLE posts (
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
title VARCHAR(255) NOT NULL
);

INSERT INTO posts (title) VALUES
("My First Blog Post"),("My Second Blog Post");

CREATE TABLE posts (
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
title VARCHAR(255) NOT NULL
);

INSERT INTO posts (title) VALUES
("My First Blog Post"),("My Second Blog Post");

 -- ALTER TABLE posts ADD COLUMN category_id INT NOT NULL REFERENCES categories(id);

 -- ALTER TABLE posts ADD FOREIGN KEY (category_id) REFERENCES categories(id);
  -- ALTER TABLE posts DROP COLUMN category_id;
 -- ALTER TABLE posts ADD COLUMN category_id INT;
--  ALTER TABLE posts ADD FOREIGN KEY (category_id) REFERENCES categories(id);

UPDATE posts SET category_id = 1 WHERE id = 1;
UPDATE posts SET category_id = 3 WHERE id = 2;
*/