<?php

printf("%s\n", date("Y/m/d H:i:s"));

$db = new mysqli("php-db", "root", "zaqroot", "test");

if ($db->connect_errno) {
  echo $db->connect_errno . " : " . $db->connect_error;
  exit();
}

$arr = $db->query("SELECT * FROM hoge");
while ($val = $arr->fetch_assoc()) {
  var_dump($val);
}

$db->close()

?>