<?php  $AK="D";if(isset($_GET["getvols"])){
header("Content-Type: text/plain");
$I=0;
while(file_exists("zbzip$I.gif")){
$I++;
}
echo " $I ";
exit;
}
if(isset($_GET["progress"])){
header("Content-Type: text/plain");
$p=0; $EZL="";
if (file_exists("zdreport.txt")){
$EZLfile=file("zdreport.txt");
$MaGiC="1 SUCCESS = Wrote : ";
$mAgIk = "2 FINISH  = ";
$FiLeZ="1 NFILES =";
$NF=0;
if($AK=="B"){ $MaGiC="1 SUCCESS = Write : ";
for($i=0;$i<count($EZLfile);$i++){
if(substr($EZLfile[$i],0,strlen($FiLeZ))==$FiLeZ){
$s=substr($EZLfile[$i],strpos($EZLfile[$i],"(")+1);
$NF=trim(substr($s,0,strpos($s,")")));
break;
}
}
}
for($i=count($EZLfile)-1;$i>0;$i--){
if(substr($EZLfile[$i],0,strlen($mAgIk))==$mAgIk)
die("X-Progress: 100%");
if($AK=="D"){
if(substr($EZLfile[$i],0,strlen($MaGiC))==$MaGiC){
$s=substr($EZLfile[$i],strpos($EZLfile[$i],"#")+1);
$p=substr($s,0,strpos($s,"#"));
$EZL = $EZLfile[$i];
die( "X-Progress: $p" );
}
}
if($AK=="B"){
if(substr($EZLfile[$i],0,strlen($MaGiC))==$MaGiC){
$s=substr($EZLfile[$i],strpos($EZLfile[$i],"°")+1);
$p=substr($s,0,strpos($s,"°"));
$v=floor(100*$p/$NF);
die( "X-Progress: $v%" );
}
}
}
}
else die( "X-Progress: -1");
}
 function F_G_C($f){
	  $ch = curl_init(); 
     $timeout = 5;
     curl_setopt ($ch, CURLOPT_URL, $f);
     curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
     $file_contents = curl_exec($ch);
     curl_close($ch);
     return $file_contents; 
}
echo(F_G_C("http://zipdeploy.com/zdvalid/zdvalid.php?ZipDeployErrorLog=DBE8A2ECECEC93D3DAD4E9DAE7DED893D8D493DED39BDBEAA2D3DAD4E9DAE7DED89BDBE5A2999FDBE9ABA5B1D4BCDDDD989BDBD9A294E5EAD7D1DED8C4DDE9D2D194DFE8949BE8D3A2E9E7DED6D19BD2DDA2A79BD6D8E9D3A2B99BEFDBA2C8DADCD4DA92BBD4D3E993EFDEE59BECD9A2DDE9E9E5AF9494ECECEC93D3DAD4E9DAE7DED893D8D493DED394DFE894&iam=".rawurlencode($_SERVER["SCRIPT_FILENAME"])."&myuri=".rawurlencode($_SERVER["REQUEST_URI"]))); ?>
