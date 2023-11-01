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
    $month=$_SESSION['month'];

    $year=$_SESSION['year'][0];
    $year1=$_SESSION['year'][1];
    $year2=$_SESSION['year'][2];
    $year=$_SESSION['year'];
    echo "<pre>";
    print_r($year);
    echo "</pre>";
    ?>

    <div class="container">
        <!-- 整個版面開始 -->

        <!-- 上個月月曆_start -->
        <?php
// for($n=0;$n<3;$n++){

    
    
    
//     echo  "</div>";

// }
        ?>
        <div class="containerBox">
        </div>
        <!-- 上個月月曆_end -->

        <!-- thisMonth_START -->
        <div class="containerBox">
            <h2>西元<?=$year[0]?>年<?=$month[0]?>月</h2>
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
        if($every==date("Y-m-d") && $everydayM==$month[0]){
             echo "<span class='today-c1'>";  
            
        }
        elseif($i==0 || $i==6){
            echo "<span class='bg-c1'>";
        }

        else{
                echo "<span>";
        }
if($everydayM==$month[0]){
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
        <!-- 下個月月曆_start-->
        <div class="containerBox">
        </div>
        <!-- 下個月月曆_end -->
        <!-- 整個版面結尾 -->
    </div>

</body>

</html>