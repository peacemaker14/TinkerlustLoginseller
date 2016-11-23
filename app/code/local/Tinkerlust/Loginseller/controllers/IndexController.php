<?php
class Tinkerlust_Loginseller_IndexController extends Mage_Core_Controller_Front_Action
{
   public function sellerloginActionx()
   {
     $curl = curl_init();

     curl_setopt_array($curl, array(
       CURLOPT_URL => "http://vendor.tinkerlust.com/api_login.php?login_sd=yes",
       CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
       CURLOPT_CUSTOMREQUEST => "POST",
       CURLOPT_POSTFIELDS => "username=bayu@tinkerlust.com&password=kimchil",
     ));

     $response = curl_exec($curl);
     $err = curl_error($curl);

     curl_close($curl);

     if ($err) {
       echo "cURL Error #:" . $err;
     } else {
       echo $response;
     }
   }
}
