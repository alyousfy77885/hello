<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['user_id']}
                OR outgoing_msg_id = {$row['user_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id desc";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
 $sql3 = "SELECT count(msg) as m FROM messages WHERE ( outgoing_msg_id={$row['user_id']} and incoming_msg_id={$outgoing_id} ) and t=0";
               $query3= mysqli_query($conn, $sql3);
        $row3 = mysqli_fetch_assoc($query3);
        
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
         (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="لايوجد رسائل";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "انت: " : $you ="";
        }else{
            $you = "";
        }
        ($row['status'] == "Offline now") ? $offline = "غير متصل" : $offline = "";
        ($outgoing_id == $row['user_id']) ? $hid_me = "hide" : $hid_me = "";
  ($row['status'] == "Offline now") ? $on= '<i  style="background:red;text-align:center;padding:5px;border-radius:40px;color:white;float:right;margin-left:10px"></i>':$on= '<i  style="background:green;text-align:center;padding:5px;border-radius:40px;color:white;float:right;margin-left:10px"></i>';
              $output .= '<a href="chat.php?user_id='. $row['user_id'] .'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['first_name']. " " . $row['last_name'] .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                   <div class="status-dot '. $offline .'"><i  style="background:black;text-align:center;padding:10px;border-radius:40px;color:white">'. $row3['m'].' </i>'.$on.'</div>
                </a>';
    }
?>