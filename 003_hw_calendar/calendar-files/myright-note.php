        <!-- 加入記事 -->

            <div class="containerNote">
            <?php echo date("Y-m-d",$_COOKIE['noteD']);?>
                <form action="calendar.php?noteD=<?=$_COOKIE['noteD']?>&month=<?=$month?>&year=<?=$year?>"
                    method="post">
                    <input type="text" name="note" id="note">
                    <input type="submit" value="OK">
                </form>
            </div>         
                <?php
if(isset($_COOKIE['note'])){
    foreach($_COOKIE['note'] as $key => $val){
        intval($key);
        echo date("Y-m-d",$key)."&nbsp;&nbsp;-&nbsp;&nbsp;".$val;
        echo "<br>";
    }
}
?>
            <p>ONE THING A DAY KEEP THE PROBLEM AWAY</p>

            <!-- 背景圖片取自:https://lapeacefulday.com/ -->