<?php
class MusixMatchClient {
  public $api = '1e645c26a2c4f015c6e58032a0e11452';
  
  public function track_search($query){
    $params = array();
    $params['q'] = $query;
    $resp = $this->call('track.search', $params);
    if($resp->message->header->status_code == 200){
      return $resp->message->body->track_list;
    }
  }
  
  public function call($method, $params){
    $params['apikey'] = $this->api;
    $params['format'] = 'json';
    $parama['page_size'] = 100;
    $params['f_has_lyrics'] = 1;
    foreach($params as $key => $value){
      $querystring[] = $key . '=' . urlencode($value);
    }
    $querystring =  implode('&', $querystring);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://api.musixmatch.com/ws/1.1/' . $method . '?' . $querystring); 
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);

    $resp =  curl_exec($ch);
    $resp =  json_decode($resp);
    return $resp; 
   }
}

?>