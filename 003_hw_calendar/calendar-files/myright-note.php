<!-- section_date_note_submit -->
            <div class="containerNote">
            <?php echo date("Y-m-d",$_COOKIE['noteD']);?>
                <form action="calendar.php?noteD=<?=$_COOKIE['noteD']?>&month=<?=$month?>&year=<?=$year?>"
                    method="post">
                    <input type="text" name="note" id="note">
                    <input type="submit" value="OK">
                </form>
            </div> 
<!-- section_note -->
<div class="container">
    <div class="row justify-content-center">
                <?php
if(isset($_COOKIE['note'])){
    foreach($_COOKIE['note'] as $key => $val){
        intval($key);
        ?>
       <div class="card col-3 m-1">
            <div class="card-header"><?=date("Y-m-d",$key)?></div>
            <div class="card-body"><?=$val?></div>
            <div class="card-footer"><a href="calendar.php?month=<?=$month?>&year=<?=$year?>&Ddate=<?=$key?>&Dnote=<?=$val?>">delete</a></div>
    </div>
        <?php
    }
}
?>
    </div>
</div>
            <p>ONE THING A DAY KEEP THE PROBLEM AWAY</p>

            <!-- 背景圖片取自:https://lapeacefulday.com/ -->