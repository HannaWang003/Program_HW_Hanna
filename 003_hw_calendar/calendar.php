<?php
include('./files/program.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YearlyCalendar</title>
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
            <div class="BoxHeader">
                <div class="Emonth text-c1"><?=$Emonth?></div>
                <div class="year text-c1"><?=$year?></div>
                <div class="time text-c1"><?=date("A h:i:s")?></div>
            </div>
            <div class=BHButton>
                    <button><a class="text-bk" href="index.php?prev=<?=$month?>&year=<?=$year?>">PREV</a></button>
                    <button><a class="text-bk" href="index.php">||</a></button>
                    <button><a class="text-bk" href="index.php?next=<?=$month?>&year=<?=$year?>">NEXT</a></button>
                </div>
            <div class='containerBoxS'>
                <div class='every everyW'>
                    <?php  
    foreach($_SESSION['week'] as $key => $w){
        if($key==0 || $key==6){
            echo "<span class='bg-c3'>".$w."</span>";
        }
        else{
            echo "<span class='bg-c3'>".$w."</span>";
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
                 echo "<a class='text-bk' href='calendar.php?noteD=$everydayTime'>$everyday</a>";  
                 echo "</span>";
                
            }
            elseif($everydayM==$month){
                echo "<a class='text-bk' href='calendar.php?noteD=$everydayTime'><span class='bg-c2'>";
                echo $everyday;
                echo "</span></a>";
            }
    
            else{
                    echo "<span class='bg-c3'>";
                    echo "&nbsp&nbsp;&nbsp&nbsp;</span>";
            }
    
        }
        echo "</div>";
    }
    ?>
            </div>
        </div>
        <!-- 加入記事 -->
        <div class="notes bg-c2">

        </div>
                <!-- 加入記事end -->
        <!-- 整個版面結尾 -->
    </div>
    
 <!-- 秒數變動用 -->
 <?php header('refresh: 1;url="calendar.php"') ?>
</body>

</html>