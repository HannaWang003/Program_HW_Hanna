<?php
include('./files/program.php');
unset($_SESSION['row']);
unset($_SESSION['PreMDt']);
unset($_SESSION['month']);
unset($_SESSION['Emonth']);
unset($_SESSION['year']);
unset($_SESSION['week']);
unset($_SESSION['monthS']);
// if($_GET['month'] && $_GET['year']){
//   $_SESSION['month']=$_GET['month'];
//   $_SESSION['year']=$_GET['year'];
// }
// 存入12個月
for($i=1;$i<=12;$i++){
  $monthS=strtotime("2023-$i-1");
  $_SESSION['monthS'][]=date('F',$monthS);
}
// 開始設定月曆
if(isset($_POST['year']) && !empty($_POST['year'])){
  $_SESSION['month']=$_POST['month'];
  $_SESSION['year']=$_POST['year'];
}
elseif(isset($_POST['month'])){
  $_SESSION['month']=$_POST['month'];
  $_SESSION['year']=date("Y");
}
elseif(isset($_GET['month']) && isset($_GET['year']) && isset($_GET['noteD'])){
  $_SESSION['month']=$_GET['month'];
  $_SESSION['year']=$_GET['year'];
}
  elseif(isset($_GET['prev'])){
    if($_GET['prev']==1){
      $_SESSION['month']=12;
      $_SESSION['year']=$_GET['year']-1;
    }
    else{
      $_SESSION['month']=$_GET['prev']-1;
      $_SESSION['year']=$_GET['year'];
    }
  }
  elseif(isset($_GET['next'])){
    if($_GET['next']==12){
      $_SESSION['month']=1;
      $_SESSION['year']=$_GET['year']+1;
    }
    else{
      $_SESSION['month']=$_GET['next']+1;
      $_SESSION['year']=$_GET['year'];
    }

  }
else{
    $_SESSION['month']=date('m');
    $_SESSION['year']=date('Y');  
}
//note
if(isset($_GET['noteD'])){
setcookie("noteD",$_GET['noteD'],time()+60*60*24*365);
}
else{
  setcookie("noteD",strtotime('today'),time()+60*60*24*365);
}
if(isset($_POST['note']) && !empty($_POST['note'])){
  // 用以產生記事內容
setcookie("dateN[".$_GET['noteD']."]",$_GET['noteD'],time()+60*60*24*365);
setcookie("note[".$_GET['noteD']."]",$_POST['note'],time()+60*60*24*365);
}
// $_SESSION['week']=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
$month=$_SESSION['month'];
$year=$_SESSION['year'];
$monthD1=date("{$year}-{$month}-1");
$monthD1time=strtotime($monthD1);
$monthD1w=date('w',$monthD1time);
$_SESSION['PreMDt']=strtotime("-$monthD1w days",$monthD1time);
$preMonthD=date("Y-m-d",$_SESSION['PreMDt']);
$monthDend=date("t",strtotime($monthD1));
$monthDendtime=strtotime("{$year}-{$month}-$monthDend");
$_SESSION['row']=ceil(($monthD1w+$monthDend)/7);
$_SESSION['Emonth']=date("M",$monthD1time);
//first row
$Mfc=$_SESSION['PreMDt'];
for($i=0;$i<7;$i++){
$_SESSION['week'][]=date("D",$Mfc);
$Mfc=strtotime("+ 1 days" , $Mfc);
}

header("location:index.php?month=$month");
?>