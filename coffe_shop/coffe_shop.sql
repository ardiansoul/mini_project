INSERT INTO TABLE product_tb (
	name, category_id, cashier_id
	) VALUES ('Ice Choco', '1', '1');


ALTER TABLE product_tb
ADD FOREIGN KEY (category_id) REFERENCES category_tb(id);

INSERT INTO product_tb ('category_name') VALUES ('Chocolate');



CREATE DATABASE coffe_shop;
CREATE TABLE cashier_tb {
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	cashier VARCHAR(20) NOT NULL,
}

CREATE TABLE category_tb {
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	category VARCHAR(20) NOT NULL
}

CREATE TABLE product_tb {
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR (20) NOT NULL,
	category_id INT(6) FOREIGN KEY REFERENCES category_tb(id),
	cashier_id INT(6) FOREIGN KEY REFERENCES cashier_tb(id)
}



USE
    coffe_shop;
CREATE TABLE product_tb (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(20) NOT NULL,
    category_id INT(6) UNSIGNED NOT NULL,
    CONSTRAINT 'fk_category'
    FOREIGN KEY (category_id) REFERENCES category_tb (category_id) 
    ON DELETE CASCADE 
    ON UPDATE RESTRICT,
    cashier_id INT(6) UNSIGNED NOT NULL,
    CONSTRAINT 'fk_cashier'
    FOREIGN KEY(cashier_id) REFERENCES cashier_tb (cashier_id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
) ENGINE = INNODB;