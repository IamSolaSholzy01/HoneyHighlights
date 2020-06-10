<?php 
	// Set logged in user id: This is just a simulation of user login. We haven't implemented user log in
	// But we will assume that when a user logs in, 
	// they are assigned an id in the session variable to identify them across pages
	$user_id = 1;
	// connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbasename = "honeyhighlights";

    // Create connection
    $db = new mysqli($servername, $username, $password, $dbasename);
	// get post with id 1 from database
	$post_query_result = mysql_query($db, "SELECT * FROM posts WHERE id=1");
	$post = mysql_fetch_assoc($post_query_result);

	// Get all comments from database
	$comments_query_result = mysql_query($db, "SELECT * FROM comments WHERE post_id=" . $post['id'] . " ORDER BY created_at DESC");
	$comments = mysql_fetch_all($comments_query_result, MYSQLI_ASSOC);

	// Receives a user id and returns the username
	/*function getUsernameById($id)
	{
		global $db;
		$result = mysql_query($db, "SELECT username FROM users WHERE id=" . $id . " LIMIT 1");
		// return the username
		return mysql_fetch_assoc($result)['username'];
	}*/
	// Receives a comment id and returns the username
	function getRepliesByCommentId($id)
	{
		global $db;
		$result = mysql_query($db, "SELECT * FROM replies WHERE comment_id=$id");
		$replies = mysql_fetch_all($result, MYSQLI_ASSOC);
		return $replies;
	}
	// Receives a post id and returns the total number of comments on that post
	function getCommentsCountByPostId($post_id)
	{
		global $db;
		$result = mysql_query($db, "SELECT COUNT(*) AS total FROM comments");
		$data = mysql_fetch_assoc($result);
		return $data['total'];
    }