<div class='container-fliud mt-3'>
                <div class='every'>
                    <?php  
    foreach($_SESSION['week'] as $key => $w){
        if($key==0 || $key==6){
            echo "<span class='mybg-c3'>".$w."</span>";
        }
        else{
            echo "<span class='mybg-c3'>".$w."</span>";
        }
    }
    ?>
                </div>
            </div>
            <div class="container-fliud">
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
                <a class="text-dark" href="calendar.php?month=<?=$month?>&year=<?=$year?>&noteD=<?=$everydayTime?>">
                    <span class='mytoday-c1'><?=$everyday?></span>
                </a>
                <?php               
            }
            elseif($everydayM==$month){
                ?>
                <a class="text-dark" href="calendar.php?month=<?=$month?>&year=<?=$year?>&noteD=<?=$everydayTime?>">
                    <span class='mybg-c1 myday'><?=$everyday?></span>
                </a>
                <?php
            }
    
            else{
                    echo "<a><span class='mybg-c3'>";
                    echo "&nbsp&nbsp;&nbsp&nbsp;</span></a>";
            }
    
        }
        echo "</div>";
    }
    ?>
            </div>