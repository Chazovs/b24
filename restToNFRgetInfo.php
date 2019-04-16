
 <? /** * Write data to log file. * * @param mixed $data * @param string $title * * @return bool */ 
    $queryUrl = 'https://wpnfr.bitrix24.ru/rest/25/секретный код/crm.deal.get';
    $queryData = http_build_query(array("id" => "110" ));
    $curl = curl_init();
      curl_setopt_array($curl, array( CURLOPT_SSL_VERIFYPEER => 0, CURLOPT_POST => 1, CURLOPT_HEADER => 0, CURLOPT_RETURNTRANSFER => 1, CURLOPT_URL => $queryUrl, CURLOPT_POSTFIELDS => $queryData, ));
      
       $result = curl_exec($curl);
       curl_close($curl);
    $result = json_decode($result);
    print $result->result->TITLE;
    ?>