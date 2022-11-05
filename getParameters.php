<?php
        echo '<h1>getParameters page</h1>';
        
        $sn1 = $_GET["a"];
        $sn2 = $_GET["b"];
        a = 1;
        b = 2;
        $text = "a=" . $sn1 . " b=" . $sn2;
        $sum = $sn1 + $sn2;
        
        echo $text;
        echo "<br>";
        echo "Sum:" . $sum;
