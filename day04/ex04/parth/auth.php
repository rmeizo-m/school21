<?php
function auth($login, $passwd){
  $path = "../private";
  $file = $path."/passwd";
  $user = file_get_contents($file);
  $user = unserialize($user);

  foreach ($user as $key => $value) {
    if ($value['login'] == $login){
      if ($value['passwd'] == hash(sha256, $passwd)){
        return true;
      }
      return true;
    }
    else {
      return false;
    }
  }
}
?>
