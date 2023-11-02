<?php
include('./files/program.php');
$_SESSION['week']=["日","一","二","三","四","五","六"];
$_SESSION['month']=[];
$_SESSION['year']=[];
$_SESSION['PreMDt']=[];
$_SESSION['row']=[];

  if(isset($_GET['pre'])){
    if($_GET['pre']==1){
      $_SESSION['month'][0]=12;
      $_SESSION['year'][0]=$_GET['year']-1;
      $_SESSION['month'][1]=$_SESSION['month'][0]-1;
      $_SESSION['year'][1]=$_SESSION['year'][0];
      $_SESSION['month'][2]=1;
      $_SESSION['year'][2]=$_GET['year'];
    }
    else{
      $_SESSION['month'][2]=$_GET['pre'];
      $_SESSION['year'][2]=$_GET['year'];
      $_SESSION['month'][0]=$_SESSION['month'][2]-1;
      $_SESSION['year'][0]=$_GET['year'];
      $_SESSION['month'][1]=$_SESSION['month'][0]-1;
      $_SESSION['year'][1]=$_GET['year'];
    }
  }
  elseif(isset($_GET['next'])){
    if($_GET['next']==12){
      $_SESSION['month'][0]=1;
      $_SESSION['year'][0]=$_GET['year']+1;
      $_SESSION['month'][1]=12;
      $_SESSION['year'][1]=$_GET['year'];
      $_SESSION['month'][2]=$_SESSION['month'][0]+1;
      $_SESSION['year'][2]=$_GET['year'];
    }
    else{
      $_SESSION['month'][1]=$_GET['next'];
      $_SESSION['year'][1]=$_GET['year'];
      $_SESSION['month'][0]=$_SESSION['month'][1]+1;
      $_SESSION['year'][0]=$_GET['year'];
      $_SESSION['month'][2]=$_SESSION['month'][0]+1;
      $_SESSION['year'][2]=$_GET['year'];
    }

  }
else{
    $_SESSION['month'][0]=date('m');
    $_SESSION['year'][0]=date('Y');
    if($_SESSION['month'][0]-1<1){
      $_SESSION['month'][1]=12;
      $_SESSION['year'][1]= $_SESSION['year'][0]-1;  
    }
    else{
      $_SESSION['month'][1]=$_SESSION['month'][0]-1;
      $_SESSION['year'][1]=$_SESSION['year'][0];
}   
if($_SESSION['month'][0]+1>12){
  $_SESSION['month'][2]=1;
  $_SESSION['year'][2]=$$_SESSION['year'][0]+1;  
}
else{
  $_SESSION['month'][2]=$_SESSION['month'][0]+1;
  $_SESSION['year'][2]=$_SESSION['year'][0];
}    
}
for($i=0;$i<3;$i++){
$month=$_SESSION['month'][$i];
$monthD1=date("Y-{$month}-1");
$monthD1time=strtotime($monthD1);
$monthD1w=date('w',$monthD1time);
$_SESSION['PreMDt'][$i]=strtotime("-$monthD1w days",$monthD1time);
$preMonthD=date("Y-m-d",$_SESSION['PreMDt'][$i]);
$monthDend=date("t",strtotime($monthD1));
$monthDendtime=strtotime("Y-{$month}-$monthDend");
$_SESSION['row'][$i]=ceil(($monthD1w+$monthDend)/7);
// echo $_SESSION['PreMDt'][$i]."<br>";
// echo $_SESSION['row'][$i]."<br>";
}
echo "<pre>";
echo "</pre>";
header("location:calendar.php")
?>