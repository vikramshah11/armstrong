<?php
     $num = 407;
     $value = $num;
     $sum = 0;
     //while($value !=0)
     for( ; $value!= 0; )
      {
          $rem = $value%10;
          $sum = ($sum + ($rem*$rem*$rem));
          $value = $value/10;
          
      }
      echo $sum. "<br/>";
      if ($num == $sum)
      
          echo $num. " It is an <b>Armstrong Number</b>";
      
      else
          echo $num. " It is not an <b>Armstrong Number</b>";
      ?>
