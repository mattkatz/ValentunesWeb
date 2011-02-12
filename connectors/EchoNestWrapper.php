<?php
/**
 * Class to communicate with the Echo nest service
 */
 
class EchoNestWrapper {
  public $path = 'echonest_tester.php';

  public function call($songs){
    $data = json_encode($songs);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $this->path, $data); 
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    //open connection
    $params['id'] = session_id();
    $params['track_list'] = $data;
    $params_string = 'id=' . $params['id'] .'&' . $params['track_list'];

    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL,$this->url);
    curl_setopt($ch,CURLOPT_POST,count($params));
    curl_setopt($ch,CURLOPT_POSTFIELDS,$params_string);

    $resp =  curl_exec($ch);
    $resp =  json_decode($resp);
    return $resp; 

    
  }
}

?>