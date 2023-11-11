<div class='container w-75 mt-3'>
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
        

   
            echo "<div class='col p-0 m-0'><span class='myevery' style='background-color:rgb($color,$color,$color,0.5)'>".$w."</span></div>";

    }
    ?>
                </div>

                <!-- 分隔線 -->
            </div>
            <div class="container w-75">
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
                    $color=100-(6-$i)*34;
                            }
                            else{
                               $color=100-$i*34; 
                            }
                ?>
                <div class="col p-0 m-0"><a class="text-dark" href="calendar.php?month=<?=$month?>&year=<?=$year?>&noteD=<?=$everydayTime?>">
                    <!-- <span class='myevery mybg-c1 myday'><?=$everyday?></span> -->
                   <?php
echo "<span class='myevery myday' style='background-color:rgb($color,$color,$color)'>$everyday</span>"
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