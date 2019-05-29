<?php
function ft_split($str)
 {
   $Nevstr = explode(' ', $str);
   $Nevstr = array_filter($Nevstr);
   sort($Nevstr);
   return $Nevstr;
 }
