<?php
 /*С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.*/
 $number = 0;
 while ($number <= 100) {
      if($number % 3 == 0)
          echo "$number <br>";
     $number++;
 }
 ?>