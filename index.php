<?php
  $db = new PDO("sqlite:/home/user/contents.db");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $statement = $db -> prepare("insert into chat (name, message) values (:name, :message)");
    $name = "名無し";

    $statement -> bindValue(":name", $name, SQLITE3_TEXT);
    $statement -> bindValue(":message", $_POST["message"], SQLITE3_TEXT);
    $statement -> execute();

    header("Location: /");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>index.php</title>
</head>
<body>
  <table id="chat">
  </table>
  <form method="post" action="">
    Message <input type="text" name="message" autocomplete="off">
    <button name="send" type="submit">Submit</button>
  </form>
  <script type="text/javascript">
    function loadchat() {
      $.ajax("loadchat.php", {
        type: "get",
        dataType: "html"
      }).done(function(data) {
        $("#chat")[0].innerHTML = data;
      });
    }

    loadchat();
    setInterval("loadchat()", 2000);
  </script>
</body>
</html>