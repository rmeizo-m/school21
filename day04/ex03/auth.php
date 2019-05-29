<?php
function auth($login, $passwd){
  $path = "../private";
  $file = $path."/passwd";

  $unser = unserialize(file_get_contents($file));
  $enigma = hash("sha512", $passwd);
  foreach ($unser as $key => $value) {
    if ($value['login'] == $login) {
      if ($value['passwd'] == $enigma) {
        $_SESSION['loggued_on_user'];
        return (TRUE);
      }
      else {
        $loggued_on_user = "";
        return (FALSE);
      }
    }
  }
  return (FALSE);
}
?>
