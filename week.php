<?php
/*
 made by Waterticket
 matthew218@naver.com
*/
$schulCode = ""; //학교 코드
$officecode = ""; //교육청 코드
$schulScCode = ""; //학교 분류 코드
$schMmealCode = ""; //급식 종류 코드
$schYmd = date("Y.m.d", mktime(0,0,0,date("m")  , date("d")+1, date("Y"))); //내일 날짜

$food_url = 'http://stu.'.$officecode.'/sts_sci_md01_001.do?schulCode='.$schulCode.'&schulCrseScCode='.$schulScCode.'&schMmealScCode='.$schMmealCode.'&schYmd='.$schYmd;
$text = file_get_contents($food_url); 
$temp = @explode('<table', $text); 
$tmp = '<table border="1" '.$temp[1];
$temp = @explode('</table>', $tmp); 

echo $temp[0];
?>
