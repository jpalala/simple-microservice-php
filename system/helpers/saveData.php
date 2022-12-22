<?php

function saveData($token, $user_id) {
  $date = date('Y-m-d H:i:s');
  $query = "UPDATE users SET personal_access_token = '$token',  updated_at = '$date' WHERE id = $user_id";
}

