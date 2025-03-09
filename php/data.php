<?php
while ($row = mysqli_fetch_assoc($sql)) {
  $query2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
    OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id}
    OR outgoing_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";

  $sql2 = mysqli_query($conn, $query2);
  $row2 = mysqli_fetch_assoc($sql2);

  if (mysqli_num_rows($sql2) > 0) {
    $result = $row2['msg'];
  } else {
    $result = "No Message Available";
  }
  //trimming the message if it has more than 28 words
  (strlen($result) > 28) ? $msg = substr($result, 0, 28) . '...' : $msg = $result;
  
  $you = '';
  if (!empty($row2['outgoing_msg_id'])) {
    ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
  }

  //check if user is online
  ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";

  $output .= ' <a href="chat.php?user_id=' . $row['unique_id'] . '">
      <div class="content">
        <img src=php/images/' . $row['img'] . ' alt="" />
        <div class="details">
          <span>' . $row['fname'] . " " . $row['lname'] . '</span>
          <p>' . $you . $msg . '</p>
        </div>
      </div>
      <div class="status-dot ' . $offline . '"><i class="fas fa-circle"></i></div>
    </a>';
}

?>