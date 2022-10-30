<?php

if(isset($_POST["data"]) && !empty($_POST["data"])) {
  $handle = fopen("data.txt", "a+");
  fwrite($handel, $_POST["data"] . "\n");
  fclose($handle);
}

echo file_get_contents("data.txt");

?>