<?php
include('./calendar-files/program.php');
// 秒數更新;需改用js實現(11/04記)
header("Refresh:60");
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
</head>
<?php
include('./calendar-files/style.php');
?>
<body>
    <div class="container-fliud">
        <!-- 整個版面開始 -->
        <div class="row m-0 vh-100">
            <div id="" class="col-12 col-sm-6 myleft">
             <?php
              include('./calendar-files/myleft-header.php');
              include('./calendar-files/myleft-calendar.php');
             ?>
            </div>
            <div class="col-12 col-sm-6 myright">
             <?php
              include('./calendar-files/myright-note.php');
             ?>            
            </div>
        </div>
    <!-- 整個版面結尾 -->
    </div>
    </body>
</html>
<?php
}
else{
    header("location:calendar.php");
}
?>