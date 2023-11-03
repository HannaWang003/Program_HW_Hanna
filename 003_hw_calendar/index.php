<?php
include('./files/program.php');
unset($_SESSION['row']);
unset($_SESSION['PreMDt']);
unset($_SESSION['month']);
unset($_SESSION['Emonth']);
unset($_SESSION['year']);
unset($_SESSION['week']);

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
//first row
$Mfc=$_SESSION['PreMDt'];
for($i=0;$i<7;$i++){
$_SESSION['week'][]=date("D",$Mfc);
$Mfc=strtotime("+ 1 days" , $Mfc);
}
print_r($_SESSION['week']);
// $_SESSION['week']=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
header("location:calendar.php")
?>