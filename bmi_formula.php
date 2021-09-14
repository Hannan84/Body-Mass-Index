<?php
session_start();

function BMI ($weight,$feet,$inch)
{
    $feet_to_inch = ($feet * 12) + $inch;
    $bmi = round(703 * (($weight * 2.20462) / ($feet_to_inch * $feet_to_inch)), 1);
    if ($bmi < 18.5) {
        return "$bmi = Under Weight";
        header('Location: bmi_page.php');
    } elseif ($bmi >= 18.5 && $bmi < 25) {
        return "$bmi = Normal Weight";
        header('Location: bmi_page.php');
    } elseif ($bmi >= 25 && $bmi < 30) {
        return "$bmi = Over Weight";
        header('Location: bmi_page.php');
    } elseif ($bmi > 30) {
        return "$bmi = Obese";
        header('Location: bmi_page.php');
    }
}

