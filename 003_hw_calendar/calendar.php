<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // 變數
        $row=$_GET['r'];
        $row1=$_GET['r1'];
        $row2=$_GET['r2'];

        $FC=$_GET['FC'];
        $FC1=$_GET['FC1'];
        $FC2=$_GET['FC2'];

    $month=$_GET['month'];
    $month1=$_GET['month1'];
    $month2=$_GET['month2'];

    $year=$_GET['year'];
    $year1=$_GET['year1'];
    $year2=$_GET['year2'];
    ?>
    
    <div class="container">
        <!-- 整個版面開始 -->
        <!-- 上個月 -->
        <!-- 上個月日期開始 -->

        <!-- 上個月日期結束 -->

        <!-- thisMonth -->
        <div class="containerBox">
            <h2>西元<?=$year?>年<?=$month?>月</h2>
            <div class="containerBoxS">
                <div class="every">
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
    echo "<div class='every'>";
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
        <!-- nextMonth_start-->
        <!-- nextMonth_end -->
        <!-- 整個版面結尾 -->
    </div>

</body>

</html>