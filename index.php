<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    <script src=""></script>
    
    <form action="index.php" method="post">
        <input type="text" name="number1"><br>
        <input type="text" name="number2"><br>
        <input type="submit" name="submit" value="Odeslat">
        
    </form>
    
    <?php
    
    include "class.php";
    
    if(isset($_POST["submit"])){
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $Kalkulator = new Calculator();
        $Kalkulator->addition($number1, $number2);
        echo "<br />";
        $Kalkulator->substraction($number1, $number2);
        echo "<br />";
        $Kalkulator->multiplication($number1, $number2);
        echo "<br />";
        $Kalkulator->division($number1, $number2);     
    }
    
    //    $Martin = new Person("Martin","Mrazek");
    //    $Martin->sayHello();
    //    echo "<br />";
    //    $Martin->currentTime();
    //    echo "<br />";
    //    echo $Martin;
    
    ?>
</body>
</html>
