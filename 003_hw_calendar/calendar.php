<?php
include('./files/program.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <link rel="stylesheet" href="./files/style.css">
</head>

<body>
    <?php
    // echo "<pre>";
    print_r($_SESSION);
    // echo "</pre>";
    // 變數
        $row=$_SESSION['row'][0];
        $row1=$_SESSION['row'][1];
        $row2=$_SESSION['row'][2];

        $FC=$_SESSION['PreMDt'][0];
        $FC1=$_SESSION['PreMDt'][1];
        $FC2=$_SESSION['PreMDt'][2];

    $month=$_SESSION['month'][0];
    $month1=$_SESSION['month'][1];
    $month2=$_SESSION['month'][2];

    $year=$_SESSION['year'][0];
    $year1=$_SESSION['year'][1];
    $year2=$_SESSION['year'][2];
    ?>

    <div class="container">
        <!-- 整個版面開始 -->

        <!-- 上個月日期開始 -->
        <!-- 上個月日期結束 -->

        <!-- thisMonth_START -->
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
        <!-- thisMonth-END -->
        <!-- nextMonth_start-->
        <!-- nextMonth_end -->
        <!-- 整個版面結尾 -->
    </div>

</body>

</html>