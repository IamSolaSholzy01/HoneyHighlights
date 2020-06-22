
<?php
class DBControllers {
    private $servername = "localhost"; 
    private $db_username = "root";
    private $db_password = "";
    private $db_name = "honeyhighlights";
    private $conn;
    
    function __construct() {
        $this->conn = $this->connectDB();
    }
    
	function connectDB() {
        $conn = mysqli_connect($this->servername,$this->db_username,$this->db_password,$this->db_name);
        if (mysqli_connect_errno()){
            throw new Exception("MySQL connection error: " . mysqli_connect_error());
        }
		return $conn;
    }

    function runSimpleQuery($conn, $query){
        $queryResult = mysqli_query($conn, $query);
        if ($queryResult===null) {
            throw new Exception("Nothing in the query");
        }
        return $queryResult;
    }
     
    
    function runQuery($query, $param_type, $param_value_array) {
        
        $sql = $this->conn->prepare($query);
        $this->bindQueryParams($sql, $param_type, $param_value_array);
        $sql->execute();
        $result = $sql->get_result();
        if ($result===null) {
            throw new Exception("Nothing in the query");
        }
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $resultset[] = $row;
            }
        }
        
        if(!empty($resultset)) {
            return $resultset;
        }
    }
    
    function bindQueryParams($sql, $param_type, $param_value_array) {
        $param_value_reference[] = & $param_type;
        for($i=0; $i<count($param_value_array); $i++) {
            $param_value_reference[] = & $param_value_array[$i];
        }
        call_user_func_array(array(
            $sql,
            'bind_param'
        ), $param_value_reference);
    }
    
    function insert($query, $param_type, $param_value_array) {
        $sql = $this->conn->prepare($query);
        $this->bindQueryParams($sql, $param_type, $param_value_array);
        $sql->execute();
    }
    
    function update($conn, $query, $param_type, $param_value_array) {
        $sql = $this->conn->prepare($query);
        $this->bindQueryParams($sql, $param_type, $param_value_array);
        $sql->execute();
    }
    function queryEmail (){
        $query = "SELECT * FROM user_table WHERE email = ?";
        return $query;
    }
}
?>