<?php
include_once "connectors/RemoteLogic.php";

$remote = new RemoteLogic();

$resp = $remote->status($_SESSION['ticket']);

if($resp->status == 'completed'){
  $tracks = $resp->songs;
  $form .= '<form id="filter-list">';
    foreach($songs as $song){
      $form .= '<input type="checkbox" value="song-list" value="' . $song->track_id '">' . $song->song_name . '</input>';
    }
  $form .= '<input type="checkbox" value="phone">Send to phone!</input>';
  $form .= '<input type="submit" name="op" value="submit"/>';
  $form .= '</form>';
}
else {
  return '';
}
  
?>