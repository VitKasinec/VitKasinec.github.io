<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <?php
        $prvni = $_POST['prvni'];
        $druhe = $_POST['druhe'];
        $treti = $_POST['treti'];
        $ctvrte = $_POST['ctvrte'];
        $pate = $_POST['pate'];

        $prvniT = rand(0,5);
        $druheT = rand(0,5);
        $tretiT = rand(0,5);
        $ctvrteT = rand(0,5);
        $pateT = rand(0,5);

        if($prvni == $prvniT and $druhe == $druheT and $treti == $tretiT and $ctvrte == $ctvrteT and $pate == $pateT){
            echo "Vyhrál jste!";
        }
        else {
            echo "Nic jste nevyhrál";
        }
        ?>

        <br>
        Správná čísla byla: 
        <?php
        echo "\n", $prvniT, "\n", $druheT, "\n", $tretiT, "\n", $ctvrteT, "\n", $pateT;
        ?>
    </body>
</html> 