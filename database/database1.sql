-- drop table before create
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS posts;


-- create user table
CREATE TABLE users (
    id INTEGER,
    name TEXT NOT NULL,
    email TEXT UNIQUE,
    password TEXT NOT NULL,
    PRIMARY KEY(id)
);

-- Create posts table
CREATE TABLE posts (
    id INTEGER,
    title TEXT NOT NULL,
    author TEXT NOT NULL,
    message TEXT NOT NULL,
    date NUMERIC NOT NULL,
    PRIMARY KEY(id)
);


-- insert initial data
INSERT INTO users (id, name, email, password) VALUES (1, 'Ze Zeng', 'ze@example.com', 'password');
INSERT INTO users (id, name, email, password) VALUES (2, 'TEST ONE', 'testone@example.com', 'testone');

INSERT INTO posts (id, title, author, message, date) VALUES (1, 'initial post', 'Ze Zeng', 'This is my 7005ict assingment1.', '31-1-2000');
INSERT INTO posts (id, title, author, message, date) VALUES (2, 'test title', 'TEST ONE', 'My name is TEST ONE.', '12-12-1960');
