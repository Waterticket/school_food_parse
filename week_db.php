<?php
/*
made by Waterticket
matthew218@naver.com
*/
$db_host = "localhost"; 
$db_user = "db_user"; 
$db_passwd = "********";
$db_name = "db_name"; 

$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
if (mysqli_connect_errno()){
echo "MySQL 연결에 실패하였습니다 : " . mysqli_connect_error();
}

$schulCode = ""; //학교 코드
$officecode = ""; //교육청 코드
$schulScCode = ""; //학교 분류 코드
$schMmealCode = ""; //급식 종류 코드
$schYmd = date("Y.m.d", mktime(0,0,0,date("m")  , date("d")+1, date("Y"))); //내일 날짜
$food_url = 'http://stu.'.$officecode.'/sts_sci_md01_001.do?schulCode='.$schulCode.'&schulCrseScCode='.$schulScCode.'&schMmealScCode='.$schMmealCode.'&schYmd='.$schYmd;
$text = file_get_contents($food_url); 

$temp = @explode('<td class="textC">', $text); 
$tmp = @explode('</td>', $temp[12]); 

mysqli_query($conn,"INSERT INTO Foods (date, daily, updates) 
VALUES ('1','$temp[8]',$date)"); 
mysqli_query($conn,"INSERT INTO Foods (date, daily, updates) 
VALUES ('2','$temp[9]',$date)"); 
mysqli_query($conn,"INSERT INTO Foods (date, daily, updates) 
VALUES ('3','$temp[10]',$date)"); 
mysqli_query($conn,"INSERT INTO Foods (date, daily, updates) 
VALUES ('4','$temp[11]',$date)"); 
mysqli_query($conn,"INSERT INTO Foods (date, daily, updates) 
VALUES ('5','$tmp[0]',$date)"); 

mysqli_close($conn);
?>
