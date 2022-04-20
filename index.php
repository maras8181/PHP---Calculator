<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styly.css">
</head>

<body>
    <script src=""></script>
    <div class="naStred">
        <h1>Kalkulačka</h1>
        <form action="index.php" method="post">
           <p>Zadej číslo 1:</p>
            <input type="text" name="number1" placeholder="Cislo 1"><br>
            <p>Zadej číslo 2:</p>
            <input type="text" name="number2" placeholder="Cislo 2"><br>
            <input type="submit" name="submit" value="Odeslat">

        </form>
    </div>
    
    <?php
    
    include "class.php";
    
    if(isset($_POST["submit"])){
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        echo "Zadal jsi cisla: ".$number1." a ".$number2;
        $Kalkulator = new Calculator();
        echo "<br />";
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
