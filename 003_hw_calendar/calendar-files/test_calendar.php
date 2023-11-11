<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- The slideshow/carousel -->
  <div class="carousel-inner" style="transition: transform 0.5s ease-in-out;">
    <div class="carousel-item active">
    <div class='container w-75 mt-3'>
                <div class='row'>
                    <?php  
    foreach($_SESSION['week'] as $key => $w){
        if($key==0 || $key==6){
            echo "<div class='col p-0 m-0'><span class='myevery mybg-c3'>".$w."</span></div>";
        }
        else{
            echo "<div class='col p-0 m-0'><span class='myevery mybg-c3'>".$w."</span></div>";
        }
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
                ?>
                <div class="col p-0 m-0"><a class="text-dark" href="calendar.php?month=<?=$month?>&year=<?=$year?>&noteD=<?=$everydayTime?>">
                    <span class='myevery mybg-c1 myday'><?=$everyday?></span>
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
    </div>
  </div>
        <a class="carousel-control-prev" href="calendar.php?prev=<?=$month?>&year=<?=$year?>" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="calendar.php?next=<?=$month?>&year=<?=$year?>" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
