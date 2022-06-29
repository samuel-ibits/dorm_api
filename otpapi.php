<?php



function generate(){
    $vercode=rand(1, 9).rand(1, 9).rand(1, 9).rand(1, 9);

session_start();
$_SESSION['vercode']=$vercode;

$topic='dorm';
$message='DORM :'.$vercode;

echo"<fieldset style="."'"."visibility:hidden;padding:0%;margin:0px;height:0px;width:0px;"."'".">"."<embed src ="."'"."https://netbulksms.com/index.php?"."option=com_spc&comm=spc_api&username=dormcomn1&password=dormcomn1&sender=$topic&recipient=$phone&message=$message&
"."'".">";
Echo"</fieldset>";


return $vercode;
}