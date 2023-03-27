<?php 
    session_start();
    if(isset($_SESSION['uid'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['uid'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM messages LEFT JOIN user_info ON user_info.user_id = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){

$sql3 = "update  messages set t=1 WHERE outgoing_msg_id={$incoming_id} and incoming_msg_id={$outgoing_id}";
               $query3= mysqli_query($conn, $sql3);

            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_msg_id'] == $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming" >
                                <img src="php/images/'.$row['img'].'" alt="" style="">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">لايوجد رسائل متبادله.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }

?>