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
        $result = password_hash($value, PASSWORD_DEFAULT);
        return $result;
    }
    public function redirect($url) {
        header("Location:" . $url);
        exit;
    }
    public function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet .= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet .= "0123456789";
        $max = strlen($codeAlphabet) - 1;
        for ($i = 0; $i < $length; $i ++) {
            $token .= $codeAlphabet[$this->cryptoRandSecure(0, $max)];
        }
        return $token;
    }
    
    public function cryptoRandSecure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) {
            return $min; // not so random...
        }
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
    }
    public function clearAuthCookie() {
        if (isset($_COOKIE["member_login"])) {
            setcookie("member_login", "");
        }
        if (isset($_COOKIE["random_password"])) {
            setcookie("random_password", "");
        }
        if (isset($_COOKIE["random_selector"])) {
            setcookie("random_selector", "");
        }
    }
}

?>