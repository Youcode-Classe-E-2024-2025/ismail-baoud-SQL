CREAT DATABASE gestion_des_packages;

USE gestion_des_packages;


CREATE TABLE packages (
    id INT AUTO_INCREMET PRIMARY KEY,
    package_name VARCHAR(25) NOT NULL,
    package_description VARCHAR(100) NOT NULL,
    created_at DATE NOT NULL,
    author_id INT,
    FOREIGN KEY (author_id) REFERENCES author(id)
);

CREATE TABLE authors (
    id INT AUTO_INCREMET PRIMARY KEY,
    name VARCHAR(25) NOT NULL,
    author_email VARCHAR(100) NOT NULL,
);

CREATE TABLE versions (
   id INT AUTO_INCREMET PRIMARY KEY,
   package_id INT,
   version VARCHAR(15) NOT NULL,
   version_date DATE NOT NULL,
   FOREIGN KEY (package_id) REFERENCES PACKAGE(id)
);

SET SQL_SAFE_UPDATES = 0;

INSERT INTO packages (package_name,package_description,updated_at,author_id) VALUES ('name','description','date update',1);

SELECT * FROM packages;

SELECT name,email FROM authors WHERE name like /* = */ 'name';

SELECT packages.package_name , versions.version FROM versions INNER/*left-right*/ JOIN packages ON  versions.package_id = packages.id;

drop database mydatabase;

drop table table_package;
/*delete foreign key column*/
SHOW CREATE TABLE authors;

ALTER TABLE authors
DROP FOREIGN KEY authors_ibfk_2;

ALTER TABLE authors
DROP COLUMN package_id;

/*rename column*/
ALTER TABLE packages
RENAME COLUMN updated_at to created_at;

/*supremer les package et les version et leur relation*/
ALTER TABLE packages
ADD CONSTRAINT packages_ibfk_2
FOREIGN KEY (author_id)
REFERENCES authors(id)
ON DELETE CASCADE
ON UPDATE CASCADE;

ALTER TABLE versions
ADD CONSTRAINT versions_ibfk_1
FOREIGN KEY (package_id)
REFERENCES packages(id)
ON DELETE CASCADE
ON UPDATE CASCADE;

/*......*/