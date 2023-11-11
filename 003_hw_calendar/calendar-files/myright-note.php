
<!-- section_date_note_submit -->
<div class="containerNote">
<div class="row">
                        <?php
                        if($_COOKIE['noteD']!=strtotime('today')){
                            echo "<div class='myfs-vh4 col-12 text-end text-sm-start col-sm-8'>memo on&nbsp;‣&nbsp;".date("Y-m-d",$_COOKIE['noteD'])."</div>";
                        }
                        else{
                            echo "<div class='myfs-vh4 col-12 text-end text-sm-start col-sm-8'>Today&nbsp;‣&nbsp;".date('Y-m-d')."</div>";
                        }
            ?>
            <div class="col-12 col-sm-4 myfs-vh3 mytext-c1 d-flex align-items-center justify-content-end"><?=date("A h:i:s")?></div>
            </div>
                <form action="calendar.php?noteD=<?=$_COOKIE['noteD']?>&month=<?=$month?>&year=<?=$year?>"
                    method="post">
                    <div class="input-group mb-3">
    <input type="text" class="form-control" name="note" id="note" placeholder="One task at a time..">
    <button class="btn btn-primary" type="submit">OK</button> 
    <button class="btn btn-danger" type="reset">Cancel</button> 
  </div>
                </form>
            </div> 
<!-- section_note -->
<div class="container">
    <div class="row w-75 m-auto justify-content-center">
                <?php
if(isset($_COOKIE['note'])){
    foreach($_COOKIE['note'] as $key => $val){
        intval($key);
        ?>
       <div class="card col-3 myw-30 m-1">
            <div class="card-header myfs-1vh"><?=date("Y-m-d",$key)?></div>
            <div class="card-body"><?=$val?></div>
            <div class="card-footer"><a href="calendar.php?month=<?=$month?>&year=<?=$year?>&Ddate=<?=$key?>&Dnote=<?=$val?>">delete</a></div>
    </div>
        <?php
    }
}
?>
    </div>
</div>




            <!-- 背景圖片取自:https://lapeacefulday.com/ -->