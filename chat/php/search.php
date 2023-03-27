<?php
    session_start();
    include_once "config.php";

    $outgoing_id = $_SESSION['uid'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM user_info WHERE NOT user_id = {$outgoing_id} AND (first_name LIKE '%{$searchTerm}%' OR last_name LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'لايوجد عناصر متطابقه';
    }
    echo $output;
?>