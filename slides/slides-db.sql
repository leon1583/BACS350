-- Slide SQL code


-- Database table

CREATE TABLE slides(id int(3) NOT NULL AUTO_INCREMENT,
                    title varchar(100) NOT NULL,
                    body text NOT NULL,
                    PRIMARY KEY (id)
                   );