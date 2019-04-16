<?php 
class CB24{
  // выполнить метод rest api
  function method($params){
    $c=curl_init('https://wpnfr.bitrix24.ru/rest/25/секретный код/crm.lead.add.json');
    
    curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($c,CURLOPT_POST,true);
 
    $response=curl_exec($c);
    $response=json_decode($response,true);

    return $response;
  }
}
$CB24  = new CB24;
$cur_deal = $CB24->method(array(
  'fields'=>array(
    "TITLE" => 'test',
    )
    )
);

echo "<pre>";
print_r($cur_deal);
echo "</pre>";
 ?>