<?php
  echo"
     <form action='' method='POST'
       pesan    : <textarea name='pesan'></textarea><br>
       <input type='submit' value='kirim pesan'>
     <form>
";


    if(isset($_POST['pesan']))
{
   $url="https://api.telegram.org/bot1481274208:AAF-xnhRgNYbalWE1FPJu8m1HWxHX0a8amw/sendMessage?chat_id=-487745111&parse_mode=HTML&text=pesan"
   $curlHandle=curl_init();
   curl_setopt($curlHandle, CURLOPT_URL, $url);
   curl_setopt($curlHandle, CURLOPT_HEADER, 0);
   curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
   curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
   curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
   curl_setopt($curlHandle, CURLOPT_POST, 1);
   $result = curl_exec($curlHandle);
   curl_close($curlHandle);

   echo "pesan telah terkirim";}
?>
