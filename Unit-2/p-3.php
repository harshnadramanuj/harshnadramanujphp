<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $multi = array(

                array("Lenevo","M1","50000/-"),
                array("HP","M2","55000/-"),
                array("HP","Victus","65000/-"),
                array("Asus","TUF F17","50000/-"),
                array("Lenevo","Region","88000/-"),
        );

        for($i=0;$i<5;$i++){
            for($j=0;$j<3;$j++){
                echo $multi[$i][$j]."   "; 
            }
            echo "<br>";
        }
    ?>

</body>
</html>