<?php
include('./files/program.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php

    // 變數
    $row=$_SESSION['row'];
    $FC=$_SESSION['PreMDt'];
    $month=$_SESSION['month'];
    $Emonth=$_SESSION['Emonth'];
    $year=$_SESSION['year'];
    ?>

    <div class="container">
        <!-- 整個版面開始 -->
<div class="containerBox">
        <?php      
echo "<h2>".$Emonth."&nbsp;&nbsp;".$year."</h2>";
echo "<div class='containerBoxS'>";
echo "<div class='every everyW'>";
    foreach($_SESSION['week'] as $key => $w){
        if($key==0 || $key==6){
            echo "<span class='bg-c1'>".$w."</span>";
        }
        else{
            echo "<span>".$w."</span>";
        }
    }
    ?>
    </div>
    </div>
    <div class="containerBoxS">
        <?php
    for($j=0;$j < $row; $j++){
        echo "<div class='every everyD'>";
        for($i=0;$i<7;$i++){
            $tmp=(7*$j)+$i;
            $everydayTime=strtotime("$tmp days",$FC);
            $everydayM=date("m",$everydayTime);
            $everyday=date("d",$everydayTime);
            $every=date("Y-m-d",$everydayTime);
            if($every==date("Y-m-d") && $everydayM==$month){
                 echo "<span class='today-c1'>";  
                
            }
            elseif($i==0 || $i==6){
                echo "<span class='bg-c1'>";
            }
    
            else{
                    echo "<span>";
            }
    if($everydayM==$month){
        echo $everyday;
        echo "</span>";
    }
    else{
        echo "&nbsp&nbsp;&nbsp&nbsp;</span>";
    }
    
        }
        echo "</div>";
    }
    ?>
    </div>
    </div>
    <!-- 整個版面結尾 -->
    </div>

</body>

</html>