<?php
$a =$_REQUEST['num1'];
$b =$_REQUEST['num2'];
$op =$_REQUEST['op'];
$Res = null;
    switch ($op) {
        case 'Sum (+)':
            $Res = $a + $b;
            echo "<br>";
            break;
        case 'Subtraction (-)':
            $Res = $a - $b;
            echo "<br>";
            break;
        case 'Multiply (*)':
            $Res = $a * $b;
            echo "<br>";
            break;
        case 'Division (/)':
            $Res = $a / $b;
            echo "<br>";
            break;
        default :
//            echo "Check your selected operation or Check Input values...!";
            echo "<br>";
            break;
    }
echo "The Result is : ($Res)";

//    var_dump($Res);
?>
<html>
<head>
    <title>Calculator Design by AmiRNH</title>
</head>
<body>
<form action="" method="get" enctype="multipart/form-data">
    num1: <input type="number" name="num1" value="<?php $_GET['num1'] ?>"> <br>
    num2: <input type="number" name="num2" value="<?php $_GET['num2'] ?>"> <br>
    <button value="Sum (+)" type="submit" name="op">Sum (+)</button>
    <button value="Subtraction (-)" type="submit" name="op">Subtraction (-)</button>
    <button value="Multiply (*)" type="submit" name="op">Multiply (*)</button>
    <button value="Division (/)" type="submit" name="op">Division (/)</button>
</form>
</body>
</html>
