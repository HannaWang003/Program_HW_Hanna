<div class="container-fliud">
    <div class="row align-items-center w-75 m-auto">
        <!-- <div class="col-12 col-sm-6 row align-items-center"> -->
        <div class="col-12 col-sm-6 myfs-vh8 text-dark text-sm-start text-end myLeft-month"><?=$Emonth?></div>
        <!-- </div> -->
        <div class="col-6 offset-6 col-sm-4 offset-sm-2 text-end d-flex flex-nowrap myLheader-col-2">
            <a class="col-4 ms-1 text-decoration-none"
                href="calendar.php?prev=<?=$month?>&year=<?=$year?>"><button type="button" class="btn px-3"><i class="fa-solid fa-clock-rotate-left fa-lg"></i></button></a>
            <a class="col-4 ms-1 text-decoration-none" href="calendar.php"><button type="button" class="btn px-3"><i class="fa-solid fa-pause fa-sm"></i></button></a>
            <a class="col-4 ms-1 text-decoration-none"
                href="calendar.php?next=<?=$month?>&year=<?=$year?>"><button type="button" class="btn px-3"><i class="fa-solid fa-clock-rotate-left fa-flip-horizontal fa-lg"></i></button></a>
        </div>
        <div class="col-6 text-start myLeft-year text-dark"><?=$year?></div>
        <div class="col-12 col-sm-6 text-end my-select">
            <!-- 加入選擇日期功能 -->
            <form action="calendar.php" method="post">
            <div class="input-group input-group-sm border border-dark rounded-2">
            <span class="input-group-text" id="basic-addon1">
  <select class="form-select" name="month" id="month">
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
  </span>
    <input type="text" class="form-control" type="text" name="year" id="year"
                    onkeyup="value=value.replace(/^(0+)|[^\d]+/g,'')" style="flex:1 !important" placeholder="year">
                    <button type="button submit" class="btn"><i class="fa-solid fa-calendar-check fa-2xl"></i></button>
</div>
                <!-- <input class="submitB" type="submit" value="⁞⁞⁞"> -->
            </form>
            <!-- 加入選擇日期功能end -->
        </div>
        <!-- <div class="col-12 col-lg-auto text-end text-nowrap myfs-vh4 mytext-c1"><?=date("A h:i:s")?></div> -->
    </div>
</div>