<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calulator</title>
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <br>
        <button name="submit" value="submit" type="submit" >calculate</button>
    </form>
    <p>The answer is: </p>
    <?php
        if (isset($_GET['submit'])){
            $firstValue = $_GET['num1'];
            $secondValue = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "None":
                    echo "please choose an operator";
                break;
                case "Add":
                    echo $firstValue + $secondValue;
                break;
                case "Subtract":
                    echo $firstValue - $secondValue;
                break;
                case "Multiply":
                    echo $firstValue * $secondValue;
                break;
                case "Divide":
                    echo $firstValue / $secondValue;
                break;
            }
        }
    ?>
</body>
</html>