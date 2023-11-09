<div class="container-fliud">
                <div class="row align-items-center w-75 m-auto">
                    <!-- <div class="col-12 col-sm-6 row align-items-center"> -->
                        <div class="myfs-vh8 mytext-c1 col-6 text-start"><?=$Emonth?></div>
                    <!-- </div> -->
                    <div class="col-12 col-sm-6 text-end myLheader-col-2">
                        <button class="btn btn-outline-secondary"><a class="text-dark text-decoration-none" href="calendar.php?prev=<?=$month?>&year=<?=$year?>">PREV</a></button>
                        <button class="btn btn-outline-secondary"><a class="text-dark text-decoration-none" href="calendar.php">||</a></button>
                        <button class="btn btn-outline-secondary"><a class="text-dark text-decoration-none" href="calendar.php?next=<?=$month?>&year=<?=$year?>">NEXT</a></button>
                    </div>
                    <div class="col-12 text-start myfs-vh3 mytext-c1"><?=$year?></div>
                    <div class="col-8 text-start myLheader-col-4">
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
                                <!-- <input class="submitB" type="submit" value="⁞⁞⁞"> -->
                                <button type="button submit" class="btn btn-dark"><i class="fa-regular fa-circle-check fa-lg"></i></button>
                            </form>
                <!-- 加入選擇日期功能end -->
                    </div>
                    <div class="col-4 text-end myfs-vh4 mytext-c1"><?=date("A h:i")?></div>
                </div>
             </div>