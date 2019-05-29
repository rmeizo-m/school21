<?php
session_start();
if (isset($_GET['login']) && $_GET['login'] != NULL &&
isset($_GET['passwd']) && $_GET['passwd'] != NULL &&
($_GET['submit'] && $_GET['submit'] === "OK")) {
  $_SESSION['login'] = $_GET['login'];
  $_SESSION['passwd'] = $_GET['passwd'];
}
?>
<form action="index.php" method="get">
login:  <input type="text" name="login" value=""/><br> <?php echo $_SESSION['login'];  ?> <br>
password:  <input type="text" name="passwd" value=""/> <br> <?php echo $_SESSION['passwd']; ?> <br>
  <input type="submit" name = "submit" value="OK"/>
</form>
