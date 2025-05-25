<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Calculator by Sathira Sri Sathsara</title>
</head>
<body>
    <form method="post">
        <div class="center cal">
            <div class="rectangle">
            <?php 
            include './app/logic.php';
            echo '<label class="output">'.$result.'</label>';
            if(isset($_POST["allClear"])){
                $result = '';
                echo '<label class="output">'.$result.'</label>';
            }
            ?>
            </div>
            <div class="top">
                <label class="firstNumber">First Number</label>
                <input type="number" name="numb01">
                <label class="secondNumber">Second Number</label>
                <input type="number" name="numb02">
            </div>
            <div class="btns">
                <input type="submit" name="addition" value="+">
                <input type="submit" name="subtraction" value="-">
                <input type="submit" name="multiplication" value="x">
                <input type="submit" name="division" value="/">
                <input type="submit" name="allClear" value="AC">
                <input type="reset" value="C">
            </div>
        </div>
    </form>
</body>
</html>
