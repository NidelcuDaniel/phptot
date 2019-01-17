<?php

function res($k, $n) {
  if($n == 0) return 1;
  else return $k * res($k,$n-1);
}
echo res($_GET['k'], $_GET['n']);
?>
