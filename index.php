<?php
$a =$_REQUEST['num1'];
$b =$_REQUEST['num2'];
$op =$_REQUEST['op'];
$Res = null;
    switch ($op) {
        case 'Sum (+)':
            $Res = $a + $b;
            echo "<br>";
            echo ($Res);
            break;
        case 'Subtraction (-)':
            $Res = $a - $b;
            echo ($Res);
            echo "<br>";
            break;
        case 'Multiply (*)':
            $Res = $a * $b;
            echo ($Res);
            echo "<br>";
            break;
        case 'Division (/)':
            $Res = $a / $b;
            echo ($Res);
            echo "<br>";
            break;
        default :
            $Res = "Check your selected operation or Check Input values...!";
            echo ($Res);
            echo "<br>";
            break;
    }
?>
<html>
<head>
    <title>Calculator Design by AmiRNH</title>
</head>
<body>
<form action="" method="get" enctype="multipart/form-data">
    number 1: <input type="number" name="num1" value="<?php $_GET['num1'] ?>"> <br>
    number 2: <input type="number" name="num2" value="<?php $_GET['num2'] ?>"> <br>
    <button value="<?php $_GET['op']?>" type="submit" name="Sum (+)">Sum (+)</button>
    <button value="<?php $_GET['op']?>" type="submit" name="Subtraction (-)">Subtraction (-)</button>
    <button value="<?php $_GET['op']?>" type="submit" name="Multiply (*)">Multiply (*)</button>
    <button value="<?php $_GET['op']?>" type="submit" name="Division (/)">Division (/)</button>
</form>
<p>
    Result is : <? echo ($Res); ?>
</p>
</body>
</html>
