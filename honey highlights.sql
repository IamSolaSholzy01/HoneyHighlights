use honeyhighlights;
select * from contact_table;
create table posts(
	post_id int(11) primary key auto_increment,
    title varchar(250),
    created_at timestamp
);
Insert into posts(post_id,title) value(
	1,
    '5 TOOLS AND 5 PRODUCTS YOU SHOULD HAVE AS A MAKEUP BEGINNER'
);
create table comments(
	comment_id int(11) auto_increment,
    post_id int(11),
    body text,
    created_at timestamp 
);
Insert into comments(comment_id,post_id,body) value(
	1,
    1,
    'I really enjoyed thos post..Thanks HoneyHighlights'
);
create table replies(
	reply_id int(11),
	comment_id int(11),
    post_id int(11),
    body text,
    created_at timestamp
);