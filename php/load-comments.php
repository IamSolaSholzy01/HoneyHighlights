<?php
require_once('classes.php');
$datas = new DBControllers();
$connection = $datas->connectDB();


$post_id = $_POST['post_id'];

    $sql = "SELECT * from comments_table where post_id = '$post_id' ORDER BY created_at";
    $result = $datas->runSimpleQuery($connection, $sql);
    $data = array();
    $no_row = mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {    
        while($row = mysqli_fetch_assoc($result))
        {
            $date = date_create($row["created_at"]);
            array_push($data, $dat = array(
                "body" => $row["body"],
                "created_at" => date_format($date, 'g:ia D jS M Y'),
                "name" => $row["name"],
                "comment_id" => $row["comment_id"]
            )
        );
        }
    }else {
        $data = array(
        "id" => "error",
        "content" => "No comments for this post");
    }

    echo json_encode($data);

?>

