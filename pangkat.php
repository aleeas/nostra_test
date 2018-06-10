<?php
function pangkat($a, $b)
{
  $bil = $a;
  for($i=0;$i<($b-1);$i++)
  {
  $bil = $bil * $a;
  }
  return $bil;
}
echo "Hasil 2 pangkat 20 adalah <br>";
echo pangkat(2,20);
echo "<br>==============================<br>";
$temp = pangkat(2,20);
$arr1 = str_split($temp);
echo "Hasil string split 2 pangkat 20 <br>";
echo implode(",",$arr1)."<br>==============================<br>";
echo "Hasil penjumlahan string split 2 pangkat 20 <br>";
echo array_sum($arr1);
?>