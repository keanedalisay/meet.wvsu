<?php

$conn = mysqli_connect('localhost', 'root', '', 'meet.wvsu');

$gbl_msgs_sql = mysqli_query($conn, 'SELECT * FROM gbl_msgs');
$gbl_msgs = mysqli_fetch_all($gbl_msgs_sql, MYSQLI_ASSOC);

$crnt_user_wid = htmlspecialchars($_SESSION['user_wid']);

foreach ($gbl_msgs as $gbl_msg) {
  $msg = $gbl_msg['Msg'];
  $msg_wid = $gbl_msg['WVSU_ID'];

  $user_sql = mysqli_query($conn, "SELECT Name, WVSU_ID FROM users WHERE WVSU_ID = '$msg_wid'");
  $user = mysqli_fetch_assoc($user_sql);

  $msg_cls = $crnt_user_wid === $user['WVSU_ID'] ? 'msg--user' : 'msg--others';
  $user_name = $user['Name'];

  echo "
    <li class='msg $msg_cls'>
      <cite class='msg-athr'>$user_name</cite>
      <blockquote class='msg-ctnt'>
        $msg
      </blockquote>
    </li>
  ";

  mysqli_free_result($user_sql);
}

mysqli_free_result($gbl_msgs_sql);
mysqli_close($conn);
?>