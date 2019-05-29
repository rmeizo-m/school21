<?php
$read = fopen("php://stdin", "r");
while ($read && !feof($read)){
  echo "Введите номер: ";
  $line = fgets(STDIN);
  $line = trim($line);
  if (is_numeric($line)) {
    if ($line % 2 == 0) {
      echo "The number $line is even\n";
    }
    else {
      echo "The number $line is odd\n";
    }
  }
  else {
    if (feof(STDIN))
    {
      fclose($read);
      echo "^D\n";
      exit();
    }
    else {
      echo "'$line' is not a number\n";
    }
  }
}
?>
