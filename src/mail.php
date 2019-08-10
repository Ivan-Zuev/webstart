<?php
  $data = $_POST;
  echo $data['username'] . ', ваша форма отправлена!';
  

  
  echo json_encode($data,JSON_UNESCAPED_UNICODE);
?>
