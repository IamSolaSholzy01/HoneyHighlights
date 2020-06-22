<?php
class Util{
    public function clean_input($value) {
        $bad_chars = array("{", "}", "(", ")", ";", ":", "<", ">", "/", "$");
        $value = str_ireplace($bad_chars,"",$value);
        // This part below is really overkill because the string replace above removed special characters
        $value = htmlentities($value); // Removes any html from the string and turns it into &lt; format
        $value = strip_tags($value); // Strips html and PHP tags
        return $value;
    }
    public function hash($value) {
        $result = password_hash($$value, PASSWORD_DEFAULT);
        return $result;
    }
    public function redirect($url) {
        header("Location:" . $url);
        exit;
    }
}

?>