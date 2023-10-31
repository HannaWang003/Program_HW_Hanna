<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
    }

    .containerBox {
        margin: auto;
        width: 80vw;
        background-color: azure;
        border: 1px solid gray;
    }

    .containerBoxS {
        margin: auto;
        width: 50vw;
        background-color: beige;
    }

    .every span {
        margin: 5px;
        display: inline-block;
        width: 5vw;
        height: 5vw;
        border: 1px solid black;
    }

    .today-c1 {
        background-color: antiquewhite;
    }

    .bg-c1 {
        background-color: aquamarine;
    }
    </style>
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
            <div class="containerBoxS every">
                <span class="bg-c1">SUN</span>
                <span>MON</span>
                <span>TUS</span>
                <span>WED</span>
                <span>THR</span>
                <span>FRI</span>
                <span class="bg-c1">SAT</span>
                <!-- <br> -->
            </div>
            <div class="containerBoxS every">
                <?php
for($j=0;$j < $row; $j++){
    for($i=0;$i<7;$i++){
        $tmp=(7*$j)+$i;
        $everydayTime=strtotime("$tmp days",$FC);
        $everydayM=date("m",$everydayTime);
        $everyday=date("j",$everydayTime);
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
    echo "&nbsp;</span>";
}

    }
    echo "<br>";
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