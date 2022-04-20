<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="styly.css">
</head>

<body>
    <h1>Kalkulačka</h1>
        <form action="index.php" method="post">
            <p>Zadej číslo 1:</p>
            <input type="text" name="number1" placeholder="Číslo 1"><br>
            <p>Zadej číslo 2:</p>
            <input type="text" name="number2" placeholder="Číslo 2"><br>
            <label for="IDs">Vyber možnost:</label>
            <select name="operations" id="operations">
                <option value="1">Sčítání</option>
                <option value="2">Odčítání</option>
                <option value="3">Násobení</option>
                <option value="4">Dělení</option>            
            </select><br>
            <input type="submit" name="submit" value="Odeslat">
        </form>
    
    <?php
    
    include "class.php";
    
    if(isset($_POST["submit"])){
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        if ((is_numeric($number1)) && (is_numeric($number2))) {
            $value = $_POST["operations"];
            if (($number2 == 0) && ($value == "4")){
                echo "<br />";
                echo "DĚLENÍ NELZE PROVÉST!! Snažíš se dělit nulou!";
            } else {
                echo "<br />";
                echo "Zadal jsi čísla: ".$number1." a ".$number2;
                $Kalkulator = new Calculator();
                echo "<br />";

                switch ($value){
                    case "1":
                        $Kalkulator->addition($number1, $number2);
                        break;
                    case "2":
                        $Kalkulator->substraction($number1, $number2);
                        break;
                    case "3":
                        $Kalkulator->multiplication($number1, $number2);
                        break;
                    case "4":
                        $Kalkulator->division($number1, $number2);
                        break;
                }
            }
        } 
        else {
            echo "<br />";
            echo "Zadané vstupy nejsou čísla!";
        }
    }
    
    ?>
</body>
</html>
