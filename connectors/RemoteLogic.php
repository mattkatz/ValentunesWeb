<?php
class RemoteLogic {
  
  public $url = '192.168.201.168:8000/api/';
  
  /**
   * Send songinfo
   * Returns transaction id
   */
  public function create($name, $interests, $note){
    $data = new stdClass();
    $data->name = $name;
    $data->interests = $interests;
    $data->note = $note;
    $data = json_encode($data);
    //set the url, number of POST vars, POST data
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$this->url . 'create');
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $data);

    $resp =  curl_exec($ch);
    if(!empty($resp)){
      $resp =  json_decode($resp);
      print_r($resp);
      return $resp->ticket; 
    }
    else {
      return NULL;
    }  
  }
  
  /**
   * Gets the playlist
   * @return 
   *   response object
   *   $resp->status = complete contains the tracks
   *   $resp->status != does not contain the tracks
   */
  public function status($ticket){
    $data = new stdClass();
    $data->ticket = $ticket;
    //set the url, number of POST vars, POST data
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$this->url . 'status');
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($data));
    $resp =  curl_exec($ch);
    if(!empty($resp)){
      $resp =  json_decode($resp);
      return $resp; 
    }
    else {
      return NULL;
    }  
  }
  
  /**
   * Send the final playlist to the backend
   */
  public function playlist($songs, $sender_phone, $recipient_phone, $note){
    $data = new stdClass();
    $data->songs = $name;
    $data->sender_phone = $interests;
    $data->recipient_phone = $recipient_phone;
    $data->note = $note;
    $data = json_encode($data);
    //set the url, number of POST vars, POST data
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$this->url . 'playlist');
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
    $resp =  curl_exec($ch);
    if(!empty($resp)){
      $resp =  json_decode($resp);
      print_r($resp);
      return $resp; 
    }
    else {
      return NULL;
    }  
  }
}

?>