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
    date TEXT NOT NULL,
    PRIMARY KEY(id)
);

