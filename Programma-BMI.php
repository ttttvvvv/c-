<?php 
// opdracht
//Lager dan 18,5: Ondergewicht

//Tussen 18,5 en 25: Gezond gewicht

//Tussen 25 en 30: Overgewicht

//Hoger dan 30: Obesitas
$_KG = 72;
$_M = 1.80;
$BMI = ($_KG / ($_M * $_M));
echo "Jouw BMI = $BMI" . "<br>";

if ($BMI < 18.5) {
    echo "Dit betekent ondergewicht, wat meer eten dus! :)"
 ; }

elseif ($BMI >= 18.5 && $BMI < 25) {
    echo "Jij hebt een Gezond Gewicht, je eet goed ga zo door en denk aan de groentes!"
; } 

elseif ($BMI >= 25 && $BMI < 30) {
    echo "Dit betekent overgewicht, wat minder eten dus"
; }
elseif ($BMI >= 30) {
    echo "Dit betekent obesitas, nog wat minder eten dus"
; }



?>