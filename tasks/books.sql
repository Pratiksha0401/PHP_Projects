CREATE TABLE publishers( 
		publisher_id INT NOT NULL AUTO_INCREMENT, 
		name VARCHAR(255) NOT NULL, 
		PRIMARY KEY(publisher_id) );

CREATE TABLE books(
  book_id        INT NOT NULL AUTO_INCREMENT, 
  title          VARCHAR(50) NOT NULL, 
  total_pages    INT NULL, 
  rating         DECIMAL(4, 2) NULL, 
  isbn           VARCHAR(13) NULL, 
  published_date DATE NULL, 
  publisher_id   INT NULL, 
  PRIMARY KEY(book_id), 
    FOREIGN KEY(publisher_id) 
    REFERENCES publishers(publisher_id)
);

CREATE TABLE authors( 
  author_id   INT NOT NULL AUTO_INCREMENT,
  first_name  VARCHAR(100) NOT NULL, 
  middle_name VARCHAR(50) NULL, 
  last_name   VARCHAR(100) NULL,
  PRIMARY KEY(author_id)
);

CREATE TABLE book_authors (
  book_id   INT NOT NULL, 
  author_id INT NOT NULL, 
  PRIMARY KEY(book_id, author_id),  
    FOREIGN KEY(book_id) 
    REFERENCES books(book_id) ON DELETE CASCADE, 
    FOREIGN KEY(author_id) 
    REFERENCES authors(author_id) ON DELETE CASCADE
);

CREATE TABLE genres (
  genre_id  INT NOT NULL,
  genre     VARCHAR(255) NOT NULL, 
  parent_id INT NULL, 
    FOREIGN KEY(parent_id) REFERENCES genres(genre_id),
    PRIMARY KEY(genre_id)
);

CREATE TABLE book_genres(
  book_id   INT NOT NULL, 
  genre_id INT NOT NULL, 
    FOREIGN KEY(book_id) 
    REFERENCES books(book_id) ON DELETE CASCADE,  
    FOREIGN KEY(genre_id) 
    REFERENCES genres(genre_id) ON DELETE CASCADE,
     PRIMARY KEY(book_id, genre_id), 
);


IINSERT INTO `authors` 
(`author_id`, `first_name`, `middle_name`, `last_name`) 
VALUES (NULL, 'Ram', 'Shiv', 'Pawar');


INSERT INTO `publishers` (`publisher_id`, `name`) 
VALUES (NULL, 'Target');


INSERT INTO `books` 
(`book_id`, `title`, `total_pages`, `rating`, `isbn`, `published_date`, `publisher_id`) 
VALUES 
(NULL, 'You Can Win', '520', '4.3', 'BN1234', '2021-12-08', '1');


INSERT INTO `book_authors` (`book_id`, `author_id`) 
VALUES ('1', '1');

INSERT INTO `genres` (`genre_id`, `genre`, `parent_id`) 
VALUES ('1', 'Motivational', '1');

INSERT INTO `book_genres` (`book_id`, `genre_id`) 
VALUES ('1', '1');

INSERT INTO `book_authors` (`book_id`, `author_id`) 
VALUES ('1', '2');

USE Books;
SELECT b.book_id, b.title, b.total_pages, b.rating, b.isbn, b.published_date,
   a.first_name AS authors, g.genre AS genres, p.name AS publishers
FROM books b
LEFT JOIN authors a
ON b.book_id = a.author_id
LEFT JOIN genres g
ON b.book_id = g.genre_id
LEFT JOIN publishers p
ON b.publisher_id = p.publisher_id


SELECT b.book_id, b.title, b.total_pages, b.rating, b.isbn, b.published_date,
a.first_name AS author_name, g.genre AS genres, p.name AS publishers
FROM books As b
LEFT JOIN book_authors As ba
ON b.book_id = ba.book_id
LEFT JOIN authors As a
ON ba.author_id = a.author_id
LEFT JOIN book_genres As bg
ON b.book_id = bg.book_id
LEFT JOIN genres AS g
ON bg.genre_id = g.genre_id
LEFT JOIN publishers p
ON b.publisher_id = p.publisher_id
ORDER BY b.book_id

