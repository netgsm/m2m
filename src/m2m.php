<?php

namespace Netgsm\M2m;



class m2m
{   
   public function yetkilendirme(array $data):array
   {
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://m2mapi.netgsm.com.tr/api/auth',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
          'Accept: application/json'
        ),
      ));
      
      $response = curl_exec($curl);
      
      curl_close($curl);
      $response= (array) json_decode($response);
    
      return $response;
   }

   public function hatlistesi($token)
   {
      $curl = curl_init();

      curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://m2mapi.netgsm.com.tr/api/line-list',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
         'Authorization: Bearer '.$token
      ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      $response= (array) json_decode($response);
      return $response;
   }
   public function hatdetay(array $data)
   {
         if(!isset($data['imei'])){ $data['imei']=''; }
         if(!isset($data['iccid'])){ $data['iccid']=''; }
         if(!isset($data['msisdn'])){ $data['msisdn']=''; }
         if(!isset($data['tokendegeri'])){ $data['tokendegeri']=''; }
         $curl = curl_init();

         curl_setopt_array($curl, array(
         CURLOPT_URL => 'https://m2mapi.netgsm.com.tr/api/line-detail?imei='.$data['imei'].'&iccid='.$data['iccid'].'&msisdn='.$data['msisdn'],
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => '',
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => 'GET',
         CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Authorization: Bearer '.$data['tokendegeri']
         ),
         ));

         $response = curl_exec($curl);
         $response= (array) json_decode($response);
      return $response;
   }
   public function tarihbazlidata(array $data)
   {
     
         if(!isset($data['imei'])){ $data['imei']=''; }
         if(!isset($data['iccid'])){ $data['iccid']=''; }
         if(!isset($data['msisdn'])){ $data['msisdn']=''; }
         if(!isset($data['tokendegeri'])){ $data['tokendegeri']=''; }
         if(!isset($data['page'])){ $data['page']=1; }
         if(!isset($data['startDate'])){ $data['startDate']=''; }
         if(!isset($data['endDate'])){ $data['endDate']=''; }
         $curl = curl_init();

         curl_setopt_array($curl, array(
         CURLOPT_URL => 'https://m2mapi.netgsm.com.tr/api/line-info-by-date?page='.$data['page'].'&imei='.$data['imei'].'&iccid='.$data['iccid'].'&msisdn='.$data['msisdn'].'&startDate='.$data['startDate'].'&endDate='.$data['endDate'],
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => '',
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => 'GET',
         CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Authorization: Bearer '.$data['tokendegeri']
         ),
         ));

         $response = curl_exec($curl);

         curl_close($curl);
       
         $response= (array) json_decode($response);
      return $response;
   }
   public function imeigecmis(array $data)
   {
     
         
         if(!isset($data['msisdn'])){ $data['msisdn']=''; }
         if(!isset($data['tokendegeri'])){ $data['tokendegeri']=''; }
         
         $curl = curl_init();

         curl_setopt_array($curl, array(
         CURLOPT_URL => 'https://m2mapi.netgsm.com.tr/api/imei-change-history?msisdn='.$data['msisdn'],
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => '',
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 0,
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => 'GET',
         CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$data['tokendegeri']
         ),
         ));

         $response = curl_exec($curl);

         curl_close($curl);
       
         $response= (array) json_decode($response);
      return $response;
   }
}