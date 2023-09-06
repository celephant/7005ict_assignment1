-- drop table before create
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS comments;


-- create user table
CREATE TABLE users (
    id INTEGER,
    name TEXT NOT NULL,
    email TEXT UNIQUE,
    password TEXT NOT NULL,
    PRIMARY KEY(id)
);

-- create posts table
CREATE TABLE posts (
    id INTEGER,
    user_id INTEGER,
    title TEXT NOT NULL,
    author TEXT NOT NULL,
    message TEXT NOT NULL,
    date DATETIME NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Create comments table
CREATE TABLE comments (
    id INTEGER,
    post_id INTEGER,
    author TEXT NOT NULL,
    message TEXT NOT NULL,
    date DATETIME NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (post_id) REFERENCES posts(id)
);









-- Insert initial data
INSERT INTO users (id, name, email, password) VALUES (1, 'Ze Zeng', 'ze@example.com', 'password');
INSERT INTO users (id, name, email, password) VALUES (2, 'Test Two', 'testtwo@example.com', 'testtwo');
INSERT INTO users (id, name, email, password) VALUES (3, 'Test Three', 'testthree@example.com', 'testthree');
INSERT INTO users (id, name, email, password) VALUES (4, 'Test Four', 'testfour@example.com', 'testfour');

INSERT INTO posts (id, title, author, message, date) VALUES (1, 'initial post', 'Ze Zeng', 'This is my 7005ict assingment1.', '01/01/2023');
INSERT INTO posts (id, title, author, message, date) VALUES (2, 'test title', 'Test Three', 'My name is TEST ONE.', '01/02/2023');
INSERT INTO posts (id, title, author, message, date) VALUES (3, 'this is post title', 'Test Two', 'This is my 7005ict assingment1 , post title.', '01/03/2023');
INSERT INTO posts (id, title, author, message, date) VALUES (4, 'this is link go to comments detail', 'Test Three', 'this is my second posts.', '01/04/2023');
