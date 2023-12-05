<?php
 /*Написать функцию, которая вычисляет текущее время и возвращает
 его в формате с правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты.*/

 function timeNow($hour, $minute) {
     switch ($hour) {
         case 1:
             echo "$hour час ";
             break;
         case 2:
         case 3:
         case 4:
             echo "$hour часа ";
             break;
         default:
             echo "$hour часов ";
             break;
     }
     switch ($minute) {
         case 1:
             return "$minute минута";
         case 2:
         case 3:
         case 4:
             return "$minute минуты";
         default:
             return "$minute минут";
     }
 }
  $hour = date('H');
  $minute = date('i');
  echo timeNow($hour, $minute);
 ?>