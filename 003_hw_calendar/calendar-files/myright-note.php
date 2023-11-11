
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
            <div class="col-12 col-sm-4 myfs-vh3 d-flex align-items-center justify-content-end"><?=date("A h:i:s")?></div>
            </div>
                <form action="calendar.php?noteD=<?=$_COOKIE['noteD']?>&month=<?=$month?>&year=<?=$year?>"
                    method="post">
                    <div class="input-group mb-3">
    <input type="text" class="form-control" name="note" id="note" placeholder="One task at a time..">
    <button class="btn border-dark myhover-1" type="submit">OK</button> 
    <button class="btn border-dark myhover-1" type="reset">Cancel</button> 
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
          <div class="toast show col-3 myw-30 m-1 mytext-c3 mybg-c4">
    <div class="toast-header mybg-c4">
      <strong class="me-auto"><?=date("Y-m-d",$key)?></strong>
      <a class="mytext-c3" href="calendar.php?month=<?=$month?>&year=<?=$year?>&Ddate=<?=$key?>&Dnote=<?=$val?>"><button type="button" class="btn-close" data-bs-dismiss="toast"></button></a>
    </div>
    <div class="toast-body">
      <p><?=$val?></p>
    </div>
  </div>
        <?php
    }
}
?>
    </div>
</div>




            <!-- 背景圖片取自:https://lapeacefulday.com/ -->