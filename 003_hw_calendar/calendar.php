<?php
include('./files/program.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yearly Calendar</title>
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
                <div class=BHButton>
                    <button><a href="index.php?prev=<?=$month?>&year=<?=$year?>">PREV</a></button>
                    <button><a href="index.php">||</a></button>
                    <button><a href="index.php?next=<?=$month?>&year=<?=$year?>">NEXT</a></button>
                </div>
                <h2><?=$Emonth?><?=$year?></h2>
                <div class="time"><?=date("A h:i:s")?></div>
            </div>
            <div class='containerBoxS'>
                <div class='every everyW'>
                    <?php  
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
        echo "<a href='calendar.php?noteD=".$everydayTime."'>".$everyday."</a>";
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
        <?php 
    if(isset($_GET['noteD'])){
        $_SESSION['noteD'][$_GET['noteD']]=$_GET['noteD'];
        ?>
        <div class="note">
<form action="index.php?" method="post">
    <?php echo date("Y-m-d",$_GET['noteD']);?>
    <input type="text" name="note" id="note">
    <input type="submit" value="OK">
</form>
    </div>
        <?php
    }
    else{
        echo "<div class='note'></div>";
    }

    $url="calendar.php?noteD=".$_SESSION['noteD'][$_GET['noteD']];
    if(isset($_SESSION['noteD'])){
      header("refresh: 1;url=$url");  
    }
    else{
        header("refresh: 1;url=calendar.php");
    }
    echo "<pre>";
    print_r($_SESSION['noteD']) ;
    echo "</pre>";
    ?>
        <!-- 整個版面結尾 -->
    </div>
</body>

</html>