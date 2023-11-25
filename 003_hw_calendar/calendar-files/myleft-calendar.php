<div class='container w-75 my-3'>
                <div class='row'>
                    <?php  
$num=count($_SESSION['week']);
    foreach($_SESSION['week'] as $key => $w){
        if($key>3){
$color=($num-1-$key)*34;
        }
        else{
           $color=$key*34; 
        }
        

   
            echo "<div class='col p-0 m-0 text-dark'><span class='myevery' style='background-color:#4FC4CF;color:rgb(240,226,225)'>".$w."</span></div>";

    }
    ?>
                </div>

                <!-- 分隔線 -->
            </div>
            <div class="container w-75 mycalendar">
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
                <div class="col p-0 m-0"><a class="text-dark" href="calendar.php?month=<?=$month?>&year=<?=$year?>&noteD=<?=$everydayTime?>">
                    <span class='myevery mytoday-c1'><?=$everyday?></span>
                </a>
                </div>
                <?php               
            }
            elseif(isset($_COOKIE['dateN']) && in_array($everydayTime,$_COOKIE['dateN'])){
                ?>
                <div class="col p-0 m-0"><a class="" href="calendar.php?month=<?=$month?>&year=<?=$year?>&noteD=<?=$everydayTime?>">
                    <span class='myevery mynotedD'><?=$everyday?></span>
                </a>
                </div>
                <?php                
            }
            elseif($everydayM==$month){
                if($i>3){
                    $color1=79-$everydayM*15+(6-$i)*20;
                    $color2=196-$everydayM*15+(6-$i)*10;
                    $color3=207-$everydayM*15+(6-$i)*20;
                            }
                            else{
                                $color1=79-$everydayM*15+$i*20;
                                $color2=196-$everydayM*15+$i*10;
                                $color3=207-$everydayM*15+$i*20;
                            }
                            $color4=75+$everydayM*15;
                            $color5=75+$everydayM*15;
                            $color6=75+$everydayM*15;
                            $color7=($everydayM*3.5)."px";

                ?>
                <div class="col p-0 m-0"><a class="text-dark" href="calendar.php?month=<?=$month?>&year=<?=$year?>&noteD=<?=$everydayTime?>">
                    <!-- <span class='myevery mybg-c1 myday'><?=$everyday?></span> -->
                   <?php
echo "<span class='myevery myday' style='color:rgb($color4,$color5,$color6);box-shadow:inset -$color7 -$color7 $color7 rgb($color1,$color2,$color3)'>$everyday</span>"
                   ?>
                    

                </a>
                </div>
                <?php
            }
    
            else{
                    echo "<div class='col p-0 m-0'><a><span class='myevery mybg-c3'>";
                    echo "&nbsp&nbsp;&nbsp&nbsp;</span></a></div>";
            }
    
        }
        echo "</div>";
    }
    ?>
            </div>