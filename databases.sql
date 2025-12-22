CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    biography VARCHAR(300),
    role VARCHAR(20) DEFAULT 'user' CHECK (role IN ('user', 'admin', 'author')),
    phone_number VARCHAR(30)
);

CREATE TABLE livre (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(30) NOT NULL,
    author_name VARCHAR(30) NOT NULL,
    date_of_distrubution DATE NOT NULL,
    author_id INT NOT NULL,
    CONSTRAINT fk_author_id FOREIGN KEY (author_id) REFERENCES user(id)
);

CREATE TABLE emprunt (
    id_user INT NOT NULL,
    id_livre INT NOT NULL,
    PRIMARY KEY (id_user, id_livre),
    CONSTRAINT fk_emprunt_user FOREIGN KEY (id_user) REFERENCES user(id), 
    CONSTRAINT fk_emprunt_livre FOREIGN KEY (id_livre) REFERENCES livre(id) 
);
