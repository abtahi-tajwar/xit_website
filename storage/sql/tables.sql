CREATE TABLE Projects (
	id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    date DATE,
    description TEXT,
    image VARCHAR(255),
    contributors VARCHAR(1000)
)
CREATE TABLE Posts (
	id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    date DATE,
    description TEXT,
    image VARCHAR(255),
    authors VARCHAR(1000)
)
CREATE TABLE Members (
	id INT(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255),
    designation VARCHAR(100),
    contributions TEXT,
    current INT(1) DEFAULT 1,
    facebook VARCHAR(1000)
)
CREATE TABLE project_faq (
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
    project_id INT(10) NOT NULL,
    question VARCHAR(255) NOT NULL,
    answer VARCHAR(255) NOT NULL,
    date DATE
)
CREATE TABLE project_description(
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    project_id VARCHAR(255) NOT NULL,
    description TEXT
)
CREATE TABLE project_video(
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    project_id VARCHAR(255) NOT NULL,
    video_link VARCHAR(255) NOT NULL
)
CREATE TABLE project_image(
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    project_id VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL
)
CREATE TABLE project_slideshow(
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    project_id VARCHAR(255) NOT NULL,
    images VARCHAR(255) NOT NULL
)