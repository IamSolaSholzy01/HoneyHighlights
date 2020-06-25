<?php
require_once('classes.php');
$datas = new DBControllers();
$connection = $datas->connectDB();


$post_id = $_POST['post_id'];

    $sql = "SELECT * from replies_table where post_id = '$post_id' ORDER BY created_at";
    $result = $datas->runSimpleQuery($connection, $sql);
    $data = array();
    $no_row = mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {    
        while($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
    }else {
        $data = array(
        "id" => "error",
        "content" => "No replies");
    }

    echo json_encode($data);

?>

