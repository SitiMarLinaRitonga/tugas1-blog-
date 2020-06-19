CREATE TABLE tb_category (
	category_id INT(11) NOT NULL AUTO_INCREMENT,
	category_name VARCHAR(100) NOT NULL,
	category_text VARCHAR(100) NOT NULL,
	PRIMARY KEY (category_id)
);

CREATE TABLE tb_post (
	post_id INT(11) NOT NULL AUTO_INCREMENT,
	post_date DATE,
	post_slug VARCHAR(25) NOT NULL,
	post_title VARCHAR(100) NOT NULL,
	post_txt TEXT,
	category_id INT(11) NOT NULL,
	PRIMARY KEY (post_id),
	FOREIGN KEY (category_id) REFERENCES tb_category (category_id)
);

CREATE TABLE tb_photo (
	photo_id INT(11) NOT NULL AUTO_INCREMENT,
	photo_date DATE,
	photo_title VARCHAR(100) NOT NULL,
	photo_text TEXT,
	photo_upload LONGBLOB NOT NULL,
	post_id INT(11) NOT NULL,
	PRIMARY KEY (photo_id),
	FOREIGN KEY (post_id) REFERENCES tb_post (post_id)
);

CREATE TABLE tb_album (
	album_id INT(11) NOT NULL AUTO_INCREMENT,
	album_name VARCHAR(100) NOT NULL,
	album_text TEXT,
	photo_id INT(11) NOT NULL,
	PRIMARY KEY (album_id),
	FOREIGN KEY (photo_id) REFERENCES tb_photo (photo_id)
);


CREATE TABLE tb_users (
	user_id INT(11) NOT NULL AUTO_INCREMENT,
	user_name VARCHAR(100) NOT NULL,
	user_password VARCHAR(256) NOT NULL,
	user_email VARCHAR(100) NOT NULL,
	user_nama_lengkap VARCHAR(100) NOT NULL,
	user_role CHAR(2) DEFAULT '2',
	PRIMARY KEY(user_id),
	UNIQUE KEY(user_name, user_email)
);

CREATE TABLE tb_user(
  user_id int(11) AUTO_INCREMENT,
  user_name varchar(100) NOT NULL,
  user_pass varchar(256) NOT NULL,
  user_level TINYINT(1) DEFAULT'0',
  PRIMARY KEY (user_id),
  UNIQUE KEY (user_name)
);

INSERT INTO tb_user values ("", "lina", "lina", 1);



