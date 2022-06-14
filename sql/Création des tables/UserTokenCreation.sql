CREATE TABLE user_tokens
(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    selector VARCHAR(255) NOT NULL,
    hashed_validator VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
    expiry DATETIME NOT NULL,
    CONSTRAINT fk_user_id FOREIGN KEY (user_id) REFERENCES client(ID) ON DELETE CASCADE
);