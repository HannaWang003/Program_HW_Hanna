<?php
include('./files/program.php');
$_SESSION['week']=["日","一","二","三","四","五","六"];
$_SESSION['month']=[];
$_SESSION['year']=[];
$_SESSION['PreMDt']=[];
// if(isset($_GET['month']) && isset($_GET['year'])){
//     $month=$_GET['month'];
//     $year=$_GET['year'];
// }
// 執行pre開始
// elseif(isset($_GET['pre'])){
  if(isset($_GET['pre'])){
    if($_GET['pre']-1<1){
      $month=12;
      $year=$_GET['year']-1; 
      if($month-1<1){
        $premonth=12;
        $preyear=$year-1;  
      }
      else{
      $premonth=$month-1;
      $preyear=$year;
  }   
  if($month+1>12){
    $nextmonth=1;
    $nextyear=$year+1;  
  }
  else{
  $nextmonth=$month+1;
  $nextyear=$year;
  }     
    }
    else{
    $month=$_GET['pre']-1;
    $year=$_GET['year'];
    if($month-1<1){
      $premonth=12;
      $preyear=$year-1;  
    }
    else{
    $premonth=$month-1;
    $preyear=$year;
}   
if($month+1>12){
  $nextmonth=1;
  $nextyear=$year+1;  
}
else{
$nextmonth=$month+1;
$nextyear=$year;
}    
}
}
// 執行pre結束

// 執行next開始
elseif(isset($_GET['next'])){
    if($_GET['next']+1>12){
      $month=1;
      $year=$_GET['year']+1;
      if($month-1<1){
        $premonth=12;
        $preyear=$year-1;  
      }
      else{
      $premonth=$month-1;
      $preyear=$year;
  }   
  if($month+1>12){
    $nextmonth=1;
    $nextyear=$year+1;  
  }
  else{
  $nextmonth=$month+1;
  $nextyear=$year;
  }      
    }
    else{
    $month=$_GET['next']+1;
    $year=$_GET['year'];
    if($month-1<1){
      $premonth=12;
      $preyear=$year-1;  
    }
    else{
    $premonth=$month-1;
    $preyear=$year;
}   
if($month+1>12){
  $nextmonth=1;
  $nextyear=$year+1;  
}
else{
$nextmonth=$month+1;
$nextyear=$year;
}    
}
}
// 執行next結束
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
$preMonthD=date("Y-m-d",$_SESSION[$i]);
$monthDend=date("t");
$monthDendtime=strtotime("Y-{$_SESSION['month'][0]}-$monthDend");
$_SESSION['row'][$i]=ceil(($monthD1w+$monthDend)/7);
}
echo "<pre>";
echo "</pre>";
header("location:calendar.php")
?>