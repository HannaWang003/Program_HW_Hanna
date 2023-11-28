<?php
include('./calendar-files/program.php');
// 秒數更新;需改用js實現(11/04記)
header("Refresh:60");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALENDAR</title>
    <!-- external -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&family=Mansalva&family=Sniglet&display=swap"
        rel="stylesheet"> <!-- external_end -->

    <!-- external_end -->
    <link rel="icon" href="./img/logo-1.ico" type="image/x-icon" />
</head>
<?php
if(!isset($_SESSION['result'])){
    $_SESSION['result']="Hanna's calendar stystem";
    $_SESSION['your_choice']="??";
    $_SESSION['computer']="??";
}
if(!isset($_SESSION['win'])){
  $_SESSION['win']=0; 
  $_SESSION['n']=3; 
}
if($_SESSION['win']<$_SESSION['n']){
?>
<style>
* {
    font-family: 'Cabin Sketch', sans-serif;
    font-size: 1.5rem;
    text-shadow: 0px 0px 5px #333;

}

body {
    position: relative;
    background-color: #F7EBEC;
    background-size: 150px;
    color: #333;
    background-image: url(./img/bg-index.png);
    background-position: right bottom;
    background-repeat: repeat-x;
    background-attachment: fixed;

}

.mybtn {
    background-color: #F0E2E1;
}

@keyframes jumpRight {
    0% {
        transform: translate(0vw, 0vh);
    }

    12% {
        transform: translate(12vw, 5vh);
    }

    25% {
        transform: translate(25vw, 0vh);
    }

    37% {
        transform: translate(37vw, 5vh);
    }

    50% {
        transform: translate(50vw, 0px);
    }

    62% {
        transform: translate(62vw, 5vh);
    }

    75% {
        transform: translate(75vw, 0px);
    }

    87% {
        transform: translate(87vw, 5vh);
    }

    100% {
        transform: translate(100vw, 0px);
    }
}

.fog {
    height: 2.5vh;
    position: absolute;
    bottom: 0;
    left: 0;

}

.fog img {
    width: 100px;
    animation: jumpRight 5s ease-in-out infinite;
}
</style>

<body>
    <div class="container">
        <div class="row mt-2">
            <button type="button" class="col-12 col-sm m-1 py-2 btn mybtn"><a class="text-dark"
                    href="./calendar.php?your_choice=1"><i class="fa-regular fa-hand-scissors fa-xl"></i></a></button>
            <button type="button" class="col-12 col-sm m-1 py-2 btn mybtn"><a class="text-dark"
                    href="./calendar.php?your_choice=2"><i class="fa-regular fa-hand-back-fist fa-xl"></i></a></button>
            <button type="button" class="col-12 col-sm m-1 py-2 btn mybtn"><a class="text-dark"
                    href="./calendar.php?your_choice=3"><i class="fa-regular fa-hand fa-xl"></i></a></button>
        </div>
        <div class="row text-center my-1 my-sm-5">
            <div class="col-4 text-light">
                <h2>You play</h1>
                    <?=$_SESSION['your_choice'];?>
            </div>
            <h1 class="col-4">VS</h1>
            <div class="col-4 text-light">
                <h2>Opponent plays</h1>
                    <?=$_SESSION['computer'];?>
            </div>
            <div class="row m-auto flex-column my-sm-3 my-1">
                <h1 class=""><?=$_SESSION['result'];?></h1>
                <h1 class="">won&nbsp;<?=$_SESSION['win']?>/<?=$_SESSION['n']?>&nbsp;times</h1>
            </div>


        </div>
        <div class="fog">
            <img class="element-to-animate" src="./img/bg-jump-1.png" alt="">
        </div>
    </div>
    <?php
}
else{
    // 變數
    $row=$_SESSION['row'];
    $FC=$_SESSION['PreMDt'];
    $month=$_SESSION['month'];
    $Emonth=$_SESSION['Emonth'];
    $year=$_SESSION['year'];
if(isset($_GET['month'])){
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
}
?>