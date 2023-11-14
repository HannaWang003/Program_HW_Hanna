<div class="container-fliud">
    <div class="row align-items-center w-75 m-auto">
        <!-- <div class="col-12 col-sm-6 row align-items-center"> -->
        <div class="col-12 col-sm-6 myfs-vh8 mytext-c1 text-sm-start text-end"><?=$Emonth?></div>
        <!-- </div> -->
        <div class="col-12 col-sm-6 text-center d-flex flex-nowrap myLheader-col-2">
            <a class="col-4 ms-1 text-decoration-none text-light"
                href="calendar.php?prev=<?=$month?>&year=<?=$year?>"><i
                    class="fa-solid fa-gauge-high fa-flip-horizontal fa-2xl"></i></a>
            <a class="col-4 ms-1 text-decoration-none text-light" href="calendar.php"><i
                    class="fa-solid fa-gauge fa-2xl"></i></a>
            <a class="col-4 ms-1 text-decoration-none text-light"
                href="calendar.php?next=<?=$month?>&year=<?=$year?>"><i class="fa-solid fa-gauge-high fa-2xl"></i></a>
        </div>
        <div class="col-6 text-start myfs-vh3 mytext-c1"><?=$year?></div>
        <div class="col-12 col-sm-6 text-start myLheader-col-4">
            <!-- 加入選擇日期功能 -->
            <form class="d-flex flex-nowrap align-items-center" action="calendar.php" method="post">
                <input class="col-4" type="text" name="year" id="year"
                    onkeyup="value=value.replace(/^(0+)|[^\d]+/g,'')">
                <select class="col-4 ms-1" name="month" id="month">
                    <?php
                                        for($i=0;$i<12;$i++){ 
                                            if($i+1==$month){
                                                echo "<option class='col-4 ms-1 text-start' value=".($i+1)." selected>".$_SESSION['monthS'][$i]."</option>";
                                            } 
                                            else{                                         
                                            echo "<option class='col-4 ms-1 text-start' value=".($i+1).">".$_SESSION['monthS'][$i]."</option>";
                                        } 
                                        }
                                    ?>
                </select>
                <!-- <input class="submitB" type="submit" value="⁞⁞⁞"> -->
                <button type="button submit" class="btn col-4 ms-1 p-2"><i
                        class="fa-solid fa-magnifying-glass-arrow-right fa-2xl"></i></button>
            </form>
            <!-- 加入選擇日期功能end -->
        </div>
        <!-- <div class="col-12 col-lg-auto text-end text-nowrap myfs-vh4 mytext-c1"><?=date("A h:i:s")?></div> -->
    </div>
</div>