<?php
include('./files/program.php');
$_SESSION['week']=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];

  if(isset($_GET['prev'])){
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
$month=$_SESSION['month'];
$monthD1=date("Y-{$month}-1");
$monthD1time=strtotime($monthD1);
$monthD1w=date('w',$monthD1time);
$_SESSION['PreMDt']=strtotime("-$monthD1w days",$monthD1time);
$preMonthD=date("Y-m-d",$_SESSION['PreMDt']);
$monthDend=date("t",strtotime($monthD1));
$monthDendtime=strtotime("Y-{$month}-$monthDend");
$_SESSION['row']=ceil(($monthD1w+$monthDend)/7);
$_SESSION['Emonth']=date("F",$monthD1time);
header("location:calendar.php")
?>