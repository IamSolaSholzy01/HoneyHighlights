CREATE TABLE posts_table (
    post_id integer  AUTO_INCREMENT PRIMARY KEY,
    post_title varchar(500),
    created_at timestamp,
    author varchar(250));

CREATE TABLE comments_table (
    comment_id integer AUTO_INCREMENT PRIMARY KEY,
	post_id integer,
	body text,
	created_at timestamp,
	name varchar(250),
	email varchar(250));
    
CREATE TABLE replies_table (
    reply_id integer AUTO_INCREMENT PRIMARY KEY,
    comment_id integer,
    post_id integer,
    body text,
    created_at timestamp,
    user_id integer,
    name varchar(250),
    email varchar(250));
    
CREATE TABLE reactions_table(
    post_id integer,
    likes integer,
    dislikes integer);