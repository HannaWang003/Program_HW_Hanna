<?php
include('./files/program.php');
?>
<?php 
// 秒數更新;需改用js實現(11/04記)
// header("Refresh:1");
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>☼CALENDAR</title>
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
                <div class="BHButton">
                    <button><a class="text-bk" href="index.php?prev=<?=$month?>&year=<?=$year?>">PREV</a></button>
                    <button><a class="text-bk" href="index.php">||</a></button>
                    <button><a class="text-bk" href="index.php?next=<?=$month?>&year=<?=$year?>">NEXT</a></button>
                 </div>
            </div>
            <div class=DateSelect>
                                <!-- 加入選擇日期功能 -->
                                <form action="index.php" method="post">
                                <input type="text" name="year" id="year" onkeyup="value=value.replace(/^(0+)|[^\d]+/g,'')">
                                <select name="month" id="month">
                                    <?php
                                        for($i=0;$i<12;$i++){ 
                                            if($i+1==$month){
                                                echo "<option value=".($i+1)." selected>".$_SESSION['monthS'][$i]."</option>";
                                            } 
                                            else{                                         
                                            echo "<option value=".($i+1).">".$_SESSION['monthS'][$i]."</option>";
                                        } 
                                        }
                                    ?>
                                </select>
                                <input class="submitB" type="submit" value="⁞⁞⁞">
                                </form>
                  <!-- 加入選擇日期功能end -->
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
            if($every==date("Y-m-d")){
                ?>
                 <a class="text-bk" href="index.php?month=$month&year=$year&noteD=<?=$everydayTime?>">
                 <span class='today-c1'><?=$everyday?></span>
                </a>
                <?php               
            }
            elseif($everydayM==$month){
                ?>
                <a class="text-bk" href="index.php?month=<?=$month?>&year=<?=$year?>&noteD=<?=$everydayTime?>">
                <span class='bg-c2'><?=$everyday?></span>
            </a>
            <?php
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
        <?php 
    if(isset($_COOKIE['noteD'])){
        // ?>
        <div class="notes bg-c2">
<!-- <form action="index.php?noteD=<?=$_COOKIE['noteD']?>" method="post"> -->
    <?php echo date("Y-m-d",$_COOKIE['noteD']);?>
    <!-- <input type="text" name="note" id="note"> -->
    <!-- <input type="submit" value="OK"> -->
<!-- </form> -->
</div>
        <?php 
    }
    else{
        echo "<div class='notes bg-c2'></div>";
    }

    // ?>
                <!-- 加入記事end -->
        <!-- 整個版面結尾 -->
    </div>
   
</body>

</html>
