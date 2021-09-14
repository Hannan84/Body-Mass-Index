<?php
include "bmi_formula.php";

$errors = [];
$result = "";

if (isset($_POST['submit'])){
    $weight = $_POST['weight'];
    $feet = $_POST['feet'];
    $inch = $_POST['inch'];

    if (empty($weight)){
        $errors[0] = "Weight Is Required*";
    }
    elseif(empty($feet)){
        $errors[0] = "Feet Is Required*";
    }
    elseif (empty($inch)){
        $errors[0] = "Inch Is Required*";
    }
    else{
        $result = BMI ($weight,$feet,$inch);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BMI Page</title>
        <link rel="stylesheet" href="./bmi.css">
    </head>
    <body>
        <div class="area">
                <h1>Body Mass Index (BMI) Calculator</h1>
            <div class="form">
                <form action="bmi_page.php" method="post">
                    <?php
                    if(count($errors) > 0){
                        echo  "<div class='error'>" .$errors[0]."</div>";
                    }
                    ?>
                    <div class="form-input weight">
                        <label for="weight">Weight:</label>
                        <input
                            type="number"
                            name="weight"
                            id="weight"
                            value="<?php echo $weight; ?>"
                            placeholder="kg"
                        /> (kg)
                    </div>
                    <div class="form-input">
                        <label for="height">Height:</label>
                        <input
                            type="number"
                            name="feet"
                            id="height"
                            placeholder="feet"
                            value="<?php echo $feet; ?>"
                        /> (feet)
                        <input
                            type="number"
                            name="inch"
                            id="height"
                            placeholder="inch"
                            value="<?php echo $inch; ?>"
                        /> (inch)
                    </div>
                    <button type="submit" name = "submit">Calculate</button>
                    <div class="form-result">
                        <h4>Your BMI:</h4>
                        <table>
                                <td>
                                    <?php
                                        echo "<div class='result'>". $result ."</div>";
                                    ?>
                                </td>

                        </table>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>