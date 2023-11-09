<?php
include('./calendar-files/program.php');
// 秒數更新;需改用js實現(11/04記)
// header("Refresh:60");
    // 變數
    $row=$_SESSION['row'];
    $FC=$_SESSION['PreMDt'];
    $month=$_SESSION['month'];
    $Emonth=$_SESSION['Emonth'];
    $year=$_SESSION['year'];
if(isset($_GET['month'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>☼CALENDAR</title>
    <!-- external -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- external_end -->
    <link rel="icon" href="./img/logo.ico" type="image/x-icon" />
    <!-- <link rel="stylesheet" href="./calendar-css/style.css"> -->
</head>
<?php
include('./calendar-files/style.php');
?>
<body>
    <div class="container-fliud">
        <!-- 整個版面開始 -->

        <div class="row">
            <div class="col myleft">
            <?php
             echo $_SESSION['season'];
             include('./calendar-files/myleft-header.php');
             include('./calendar-files/myleft-calendar.php');
             ?>
        </div>
        <!-- 加入記事 -->
        <!-- 長駐 -->
        <div class="col notes" style="background-image:url('./img/bg<?=$_GET['month']?>.jpg');background-size:20%;">
            <div class="containerNote">
                <!-- 長駐 -->
                <form action="calendar.php?noteD=<?=$_COOKIE['noteD']?>&month=<?=$month?>&year=<?=$year?>"
                    method="post">
                    <input type="text" name="note" id="note">
                    <input type="submit" value="OK">
                </form>
            </div>
                <!-- 長駐end -->              
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
    <!-- 加入記事end -->
    <!-- 整個版面結尾 -->
    </div>
    </div>

</body>

</html>
<?php
}
else{
    header("location:calendar.php");
}
?>