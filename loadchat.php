<?php
  $db = new PDO("sqlite:/home/user/contents.db");
  $do = $db -> query("select * from chattest order by id desc limit 100;");
  foreach ($do as $row) {
    echo "#".$row["id"]." ";
    echo $row["name"];
    echo "(".$row["date"]."):";
    echo " ".$row["message"]."\n";
  }
?>