<!--A. 用星號疊出星星塔-->
<?php
//蝴蝶結
    for($i=1;$i<=4;$i++){
        echo "&nbsp;&nbsp;";
        for($j=1;$j<$i;$j++){
            echo "* &nbsp;"; 
        }
        for($k=4;$k>$i;$k--){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            }
        for($j=1;$j<$i;$j++){
            echo "* &nbsp;"; 
        }
        echo "<br>";    
    }
    for($i=1;$i<=3;$i++){
        echo "&nbsp;&nbsp;";
        for($j=3;$j>$i;$j--){
            echo "* &nbsp;";
        }
        for($k=0;$k<$i;$k++){
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            }
        for($j=3;$j>$i;$j--){
            echo "* &nbsp;"; 
        }
        echo "<br>";
         
    }
    
///聖誕樹
    for($i=1;$i<=7;$i++){
        for($j=7;$j>$i;$j--){
            echo "&nbsp;&nbsp;";
        }
        for($j=0;$j<$i;$j++){
            echo "* &nbsp;";
        }
       echo "<br>";
    }
    for($i=1;$i<=3;$i++){
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +++++<br>";
    }
    
    
?>