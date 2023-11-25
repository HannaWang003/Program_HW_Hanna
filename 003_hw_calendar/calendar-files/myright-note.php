<!-- section_date_note_submit -->
<div class="containerNote">
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
            <button class="btn border-dark my-btn" type="submit" data-bs-toggle="popover" data-bs-trigger="hover"
                title="NOTED"><i class="fa-solid fa-clipboard fa-xl"></i></button>
            <button class="btn border-dark my-btn" type="reset" data-bs-toggle="popover" title="CANCLE"><i
                    class="fa-solid fa-eraser fa-xl"></i></button>
        </div>
    </form>
</div>
<!-- section_note -->
<div class="container">
    <div class="row m-auto">
  <?php
if(isset($_COOKIE['note'])){
    ?>
<ol class="list-group list-group-numbered">
    <?php
    foreach($_COOKIE['note'] as $key => $val){
        intval($key);
$limitDt=$key-strtotime('today');
$limitD=ceil($limitDt/60/60/24);
?>
  <li class="list-group-item d-flex justify-content-between align-items-start mycard mt-2">
    <div class="ms-2 me-auto">
      <div class="fw-bold">
      <?=date("Y ‣ m • d",$key)?>
      </div>
      <span class="text-secondar"><?=$val?></span>
    </div>
    <span class="badge bg-primary rounded-pill mycardDel">
    <?php
if($limitDt<0){
?>
  &nbsp;overdue ‣ <?=str_replace("-","",$limitD)?> ago
  <a href="calendar.php?month=<?=$month?>&year=<?=$year?>&Ddate=<?=$key?>&Dnote=<?=$val?>"><i class="fa-solid fa-xmark fa-2xl"></i></a>

<?php
}
else{
?>
&nbsp;overdue ‣ <?=$limitD?> day(s)
<a href="calendar.php?month=<?=$month?>&year=<?=$year?>&Ddate=<?=$key?>&Dnote=<?=$val?>"><i class="fa-solid fa-xmark fa-2xl"></i></a>
<?php
}
?>
    </span>
  </li>
  <?php
}
?>
  <ol>
<?php
}
?>

</div> 
</div>




            <!-- 背景圖片取自:https://lapeacefulday.com/ -->