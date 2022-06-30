<?php

$phone=$_GET['phone'];
$topic=$_GET['topic'];
$message=$_GET['uname'];
function texterapi($topic, $phone, $message){
Echo"<fieldset style="."'"."visibility:hidden;padding:0%;margin:0px;height:0px;width:0px;"."'".">"."<embed src ="."'"."https://netbulksms.com/index.php?"."option=com_spc&comm=spc_api&username=dormcomn1&password=dormcomn1&sender=$topic&recipient=$phone&message=$message&
    "."'".">";
    Echo"</fieldset>";

}
?>