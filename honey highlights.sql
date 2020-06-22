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

CREATE TABLE `token_table` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `selector_hash` varchar(255) NOT NULL,
  `is_expired` int(11) NOT NULL DEFAULT '0',
  `expiry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `token_table`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `token_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;
