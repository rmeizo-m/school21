<?php
session_start();
function rest_pw(){
  if (isset($_POST['login']) && $_POST['login'] != NULL &&
  isset($_POST['oldpw']) && $_POST['oldpw'] != NULL &&
  isset($_POST['newpw']) && $_POST['newpw'] != NULL &&
  isset($_POST['submit']) && $_POST['submit'] === "OK") {
    $tab = $_POST['login'];
    $tab = hash(sha256, $_POST['oldpw']);
    $tab = hash(sha256, $_POST['newpw']);
  }
  else {
    echo "ERROR\n";
  }
  return ($tab);
}

$path = "../private";
$file = $path."/passwd";

$tab = rest_pw();
$unser = unserialize(file_get_contents($file));
$flag = 0;

foreach ($unser as $key => $value) {
  if ($value['login'] == $tab && $value['passwd'] == $tab['oldpw']) {
    $unser["$key"]['passwd'] = $tab['newpw'];
    $flag =1;
  }
  else {
    echo "ERROE\n";
  }
}

if ($flag == 1) {
  $serialize = serialize($unser);
  file_put_contents($file, $serialize);
}
header('Location: ../index.html');
echo "OK\n";
?>
