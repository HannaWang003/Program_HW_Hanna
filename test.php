<?php
session_start();
$choice=[0,'剪刀','石頭','布'];
if(isset($_GET['your_choice']) && $_SESSION['win']<3){
    $computer_choice=rand(1,3);
if($_GET['your_choice']==$computer_choice){
    $_SESSION['your_choice']=$choice[$_GET['your_choice']];
    $_SESSION['computer']=$choice[$computer_choice];
    $_SESSION['result']="平手";
}
elseif(($_GET['your_choice']==1 && $computer_choice==3) || ($_GET['your_choice']==2 && $computer_choice==1) || ($_GET['your_choice']==3 && $computer_choice==2)){
    $_SESSION['win']++;
    $_SESSION['your_choice']=$choice[$_GET['your_choice']];
    $_SESSION['computer']=$choice[$computer_choice];
    $_SESSION['result']="猜贏";
}
else{
    $_SESSION['your_choice']=$choice[$_GET['your_choice']];
    $_SESSION['computer']=$choice[$computer_choice];
    $_SESSION['result']="猜輸";
}
}
    header("location:test-index.php");


?>