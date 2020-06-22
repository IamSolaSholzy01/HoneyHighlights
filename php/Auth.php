<?php
include "dbaseControl.php";
class Auth {
    function getMemberByUsername($username) {
        $db_handle = new DBControllers();
        $query = "Select * from user_table where username = ?";
        $result = $db_handle->runQuery($query, 's', array($username));
        return $result;
    }
    function getMemberByEmail($email) {
        $db_handle = new DBControllers();
        $query = "SELECT * FROM user_table WHERE email = ?";
        $result = $db_handle->runQuery($query, 's', array($email));
        return $result;
    }
    function getMemberByUsernameOrEmail($username, $email) {
        $db_handle = new DBControllers();
        $query = "SELECT * FROM user_table WHERE username = ? OR email = ?";
        $result = $db_handle->runQuery($query, 'ss', array($username, $email));
        return $result;
    }
    
	function getTokenByUsername($username,$expired) {
	    $db_handle = new DBControllers();
	    $query = "Select * from token_table where username = ? and is_expired = ?";
	    $result = $db_handle->runQuery($query, 'si', array($username, $expired));
	    return $result;
    }
    function getTokenByEmail($email,$expired) {
	    $db_handle = new DBControllers();
	    $query = "Select * from token_table where email = ? and is_expired = ?";
	    $result = $db_handle->runQuery($query, 'si', array($email, $expired));
	    return $result;
    }
    
    function markAsExpired($tokenId) {
        $db_handle = new DBControllers();
        $query = "UPDATE token_table SET is_expired = ? WHERE id = ?";
        $expired = 1;
        $result = $db_handle->update($query, 'ii', array($expired, $tokenId));
        return $result;
    }
    
    function insertToken($email, $random_password_hash, $random_selector_hash, $expiry_date) {
        $db_handle = new DBControllers();
        $query = "INSERT INTO token_table (email, password_hash, selector_hash, expiry_date) VALUES (?, ?, ?,?)";
        $result = $db_handle->insert($query, 'ssss', array($email, $random_password_hash, $random_selector_hash, $expiry_date));
        return $result;
    }
    
    function update($query) {
        mysqli_query($this->conn,$query);
    }
    function insertUser($firstname, $surname, $email, $username, $hashed_password) {
        $db_handle = new DBControllers();
        $query = "INSERT INTO user_table (firstname, surname, email, username, passkey) VALUES (?, ?, ?, ?, ?)";
        $result = $db_handle->insert($query, 'sssss', array($firstname, $surname, $email, $username, $hashed_password));
        return $result;
    }
}
?>