<?php
/*
made by Waterticket
matthew218@naver.com
*/
function mysqli_result($res,$row=0,$col=0){  //mysql 불러오기 함수
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}

$i = $_GET['d']; //월:1 화:2 수:3 목:4 금:5 week_db_read.php?d=1 식으로 입력
if($i == 0||$i == 6){ //토,일요일
   echo "오늘은 급식이 없습니다!";
   if($i == 0){ //일요일 학식 초기화
   include_once('./food_require.php');
}
}else{
$db_host = "localhost"; 
$db_user = "db_user"; 
$db_passwd = "********";
$db_name = "db_name"; 
$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
if (mysqli_connect_errno()){
echo "MySQL 연결에 실패하였습니다 : " . mysqli_connect_error();
}
$date=date("md");
   $select_query = "SELECT date, daily FROM Foods";
   $result_set = mysqli_query($conn, $select_query);
   $bob = mysqli_result($result_set,$i-1,1);
$bob = str_replace('<br />','
',$bob);
$bob = str_replace('</td>','',$bob);
echo "$bob";

mysqli_close($conn);
}
?>
