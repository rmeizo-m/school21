<?php
if ($argc > 1)
{
  $string = preg_replace("/\s+/", " ", $argv[1]);
  $string = trim($string);
  echo "$string\n";
}
?>
