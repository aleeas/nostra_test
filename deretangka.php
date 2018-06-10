<?php
if(isset($_POST['submit']))
{
    $value1=$_POST['value1'];
    $value2=$_POST['value2'];
    $c = 0;
    $d = 0;
    for($i=$value1;$i<=$value2;$i++) 
    {
      $a = ($i%3==0 && $i%4==0);
      $b = ($i%3==0 || $i%4==0);
      
      if ($a)
      {
      $c = $i;
      echo "yeay!"."<br>";       
      }
      
      if ($b)
      {
      $d = $i;
      if($d == $c){
        continue;
      }
      echo $d."<br>";
      } 	
    }
}

?>
