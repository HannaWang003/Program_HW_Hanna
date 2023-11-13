<!-- section_date_note_submit -->
<div class="containerNote border-warning">
    <div class="row">
        <?php
                        if($_COOKIE['noteD']!=strtotime('today')){
                            echo "<div class='myfs-vh4 col-12 text-end text-sm-start col-sm-8 text-light'>memo on&nbsp;‣&nbsp;".date("Y-m-d",$_COOKIE['noteD'])."</div>";
                        }
                        else{
                            echo "<div class='myfs-vh4 col-12 text-end text-sm-start col-sm-8 text-light'>Today&nbsp;‣&nbsp;".date('Y-m-d')."</div>";
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
    <div class="row m-auto justify-content-center">
        <?php
if(isset($_COOKIE['note'])){
    foreach($_COOKIE['note'] as $key => $val){
        intval($key);
        ?>
        <div class="toast show col-12 col-sm-3 m-1 mytext-c3 mybg-c4 border-warning">
            <div class="toast-header mybg-c4 border-0">
                <strong class="me-auto text-warning"><?=date("Y-m-d",$key)?></strong>
                <a class="mytext-c3"
                    href="calendar.php?month=<?=$month?>&year=<?=$year?>&Ddate=<?=$key?>&Dnote=<?=$val?>"><i
                        class="fa-solid fa-trash-can fa-bounce fa-xl" style="color:white"></i></a>
            </div>
            <div class="toast-body p-1 text-warning">
                <p><?=$val?></p>
                <?php
$limitDt=$key-strtotime('today');
$limitD=ceil($limitDt/60/60/24);
if($limitD<=0){
  ?>
                <p class="bg-secondary text-light">overdue X <?=$limitD?>dyas</p>
                <?php
  } 
  elseif($limitD==1){
    ?>
                <p class="bg-danger text-light">near ‣ <?=$limitD?>dyas</p>
                <?php
}
else{
  ?>
                <p class="bg-warning text-dark">time limit ‣ <?=$limitD?>dyas</p>
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