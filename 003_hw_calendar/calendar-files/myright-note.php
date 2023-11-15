<!-- section_date_note_submit -->
<div class="containerNote border-light">
    <div class="row">
        <?php
                        if($_COOKIE['noteD']!=strtotime('today')){
                            echo "<div class='myfs-vh4 col-12 text-end text-sm-start col-sm-8 text-light'>memo on&nbsp;‣&nbsp;".date("Y ‣ m•d",$_COOKIE['noteD'])."</div>";
                        }
                        else{
                            echo "<div class='myfs-vh4 col-12 text-end text-sm-start col-sm-8 text-light'>Today&nbsp;‣&nbsp;".date('Y ‣ m•d')."</div>";
                        }
            ?>
        <div class="col-12 col-sm-4 myfs-vh3 d-flex align-items-center justify-content-end text-light">
            <?=date("A h:i:s")?></div>
    </div>
    <form action="calendar.php?noteD=<?=$_COOKIE['noteD']?>&month=<?=$month?>&year=<?=$year?>" method="post">
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="note" id="note" placeholder="One task at a time..">
            <button class="btn border-dark mybg-c5" type="submit" data-bs-toggle="popover" data-bs-trigger="hover"
                title="NOTED"><i class="fa-solid fa-clipboard fa-xl" style="color:rgb(255,204,203)"></i></button>
            <button class="btn border-dark mybg-c5" type="reset" data-bs-toggle="popover" title="CANCLE"><i
                    class="fa-solid fa-eraser fa-xl" style="color:rgb(255,204,203)"></i></button>
        </div>
    </form>
</div>
<!-- section_note -->
<div class="container">
    <div class="row m-auto">
        <?php
if(isset($_COOKIE['note'])){
    foreach($_COOKIE['note'] as $key => $val){
        intval($key);
$limitDt=$key-strtotime('today');
$limitD=ceil($limitDt/60/60/24);
if($limitD<0){
        ?>
        <div class="toast show col-12 col-sm-3 m-1 myw-A mytext-c3 mybg-c4 border-secondary">
            <?php
    }
    elseif($limitD==0){
        ?>
            <div class="toast show col-12 col-sm-3 m-1 myw-A mytext-c3 mybg-c4 border-danger">
                <?php
    }
    elseif($limitD==1){
        ?>
                <div class="toast show col-12 col-sm-3 m-1 myw-A mytext-c3 mybg-c4 border-warning">
                    <?php
    }
    else{
        ?>
                    <div class="toast show col-12 col-sm-3 m-1 myw-A mytext-c3 mybg-c4 border-primary">
                        <?php
    }
    ?>
                        <div class="toast-header mybg-c4 border-0">
                            <strong class="me-auto text-light"><?=date("Y ‣ m • d",$key)?></strong>
                            <a class="mytext-c3"
                                href="calendar.php?month=<?=$month?>&year=<?=$year?>&Ddate=<?=$key?>&Dnote=<?=$val?>"><i
                                    class="fa-solid fa-trash-can fa-bounce fa-xl" style="color:white"></i></a>
                        </div>
                        <div class="toast-body p-1 text-light">
                            <p><?=$val?></p>
                            <?php
if($limitD<0){
  ?>
                            <p class="bg-secondary text-light p-2"><i
                                    class="fa-regular fa-calendar-xmark fa-xl"></i>&nbsp;overdue X ‣ <?=$limitD?>dyas
                            </p>
                            <?php
  } 
  elseif($limitD==0){
    ?>
                            <p class="bg-danger text-light p-2"><i
                                    class="fa-regular fa-calendar-check fa-xl"></i>&nbsp;Done&nbsp;&nbsp;? ‣‣
                                <?=$limitD?>dyas</p>
                            <?php
  }
  elseif($limitD==1){
    ?>
                            <p class="bg-warning text-dark p-2"><i
                                    class="fa-regular fa-calendar-minus fa-xl"></i>&nbsp;Deadline ‣ <?=$limitD?>dyas</p>
                            <?php
}
else{
  ?>
                            <p class="bg-primary text-dark p-2"><i
                                    class="fa-regular fa-calendar-plus fa-xl"></i>&nbsp;time limit ‣ <?=$limitD?>dyas
                            </p>
                            <?php
}
?>
                        </div>
                    </div>
                    <?php
    }
}
?>
                </div>
            </div>




            <!-- 背景圖片取自:https://lapeacefulday.com/ -->