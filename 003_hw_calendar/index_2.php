<?php
include('./files/program.php');
// 秒數更新;需改用js實現(11/04記)
// header("Refresh:60");
if(isset($_GET['month'])){
    // 變數
    $row=$_SESSION['row'];
    $FC=$_SESSION['PreMDt'];
    $month=$_SESSION['month'];
    $Emonth=$_SESSION['Emonth'];
    $year=$_SESSION['year'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>☼CALENDAR</title>
    <!-- external -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- external_end -->
    <link rel="icon" href="./img/logo.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container-fliud">
<?php
 echo $_SESSION['season'];
?>
        <!-- calendar_start -->
    <div class="row bg-light vh-100 ">
        <div class="col-lg-6 col-sm-12 bg-danger myleft">
            <div class="container-fliud myleft_header">
                <div class="row">
                    <div class="col"><?=$Emonth?></div>
                    <div class="col"><?=$year?></div>
                    <div class="col"><?=date("A h:i")?></div>
                </div>
             </div>
             <div class="container-fliud myleft_PreNext">
                    <button><a class="text-bk" href="calendar.php?prev=<?=$month?>&year=<?=$year?>">PREV</a></button>
                    <button><a class="text-bk" href="calendar.php">||</a></button>
                    <button><a class="text-bk" href="calendar.php?next=<?=$month?>&year=<?=$year?>">NEXT</a></button>
            </div>           
            <div class="container-fliud myleft_Select">
            <!-- 加入選擇日期功能 -->
                <form action="calendar.php" method="post">
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
                    <input type="submit" value="⁞⁞⁞">
                </form>
            </div>
            <!-- 加入選擇日期功能end -->
            <div class="container-fluid myleft_Calendar">
                <div class='container-fluid'>
                    <div class="row">
                        <?php  
                        foreach($_SESSION['week'] as $key => $w){
                                echo "<div class='col rounded-circle bg-c3'>$w</div>";
                        }
                        ?>
                        
                    </div>
                </div>
            <div class="container-fluid">
                <?php
                    for($j=0;$j < $row; $j++){
                        echo "<div class='row'>";
                        for($i=0;$i<7;$i++){
                        $tmp=(7*$j)+$i;
                        $everydayTime=strtotime("$tmp days",$FC);
                        $everydayM=date("m",$everydayTime);
                        $everyday=date("d",$everydayTime);
                        $every=date("Y-m-d",$everydayTime);
                        if($every==date("Y-m-d")){
                        ?>
                        <a class="col text-bk" href="calendar.php?month=<?=$month?>&year=<?=$year?>&noteD=<?=$everydayTime?>">
                        <div class='today-c1'><?=$everyday?></div>
                        </a>
                        <?php               
                        }
                       elseif($everydayM==$month){
                        ?>
                        <a class="col text-bk" href="calendar.php?month=<?=$month?>&year=<?=$year?>&noteD=<?=$everydayTime?>">
                        <div class='bg-c2'><?=$everyday?></div>
                        </a>
                        <?php
                        }
    
                      else{
                      echo "<div class='col bg-c3'>";
                      echo "&nbsp&nbsp;&nbsp&nbsp;</div>";
                      }
    
                    }
                    echo "</div>";
                    }
                    ?>
            </div>
</div>
</div>

    <div class="col-lg-6 col-sm-12 bg-primary myright"  style="background-image:url('./img/bg<?=$_GET['month']?>.jpg');background-size:20%;">
        <?php echo date("Y-m-d",$_COOKIE['noteD']);?>
        <div class="containerNote">
                <!-- 長駐 -->
                <form action="calendar.php?noteD=<?=$_COOKIE['noteD']?>&month=<?=$month?>&year=<?=$year?>"
                    method="post">
                    <input type="text" name="note" id="note">
                    <input type="submit" value="OK">
                </form>
            </div>
                <!-- 長駐end -->
                <div class="containerNote">                
                <?php
if(isset($_COOKIE['note'])){
    foreach($_COOKIE['note'] as $key => $val){
        intval($key);
        echo date("Y-m-d",$key)."&nbsp;&nbsp;-&nbsp;&nbsp;".$val;
        echo "<br>";
    }
}
?>
            </div>
            <p>ONE THING A DAY KEEP THE PROBLEM AWAY</p>
            <!-- 背景圖片取自:https://lapeacefulday.com/ -->
    </div>
    </div>
</div>

        <!-- calendar_end -->
    </div>
</div>
    <!-- external -->
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
    <!-- external_end -->
</body>
</html>
<?php
}
else{
    header("location:calendar.php");
}
?>