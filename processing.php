<?php

include_once 'connectors/MusixMatchClient.php';

/**
 * @param $name
 *  name of the person
 * @param $description
 *  Comma separated list of characteristics
 */
function valentunes_musixmatch_songs($name, $description){
  $description = explode(',', $description);
  $client = new MusixMatchClient();
  $songs = array();
  foreach($description as $term){
      $songs = array_merge($songs, $client->track_search($term));
  }
 // print_r($songs);
  return $songs;
}

function valentunes_create_song_list_checkboxes($songs){
  $checkboxes = '';
  foreach($songs as $song){
    $checkboxes .= '<input type="checkbox" name="songs" value="' . $song->track->track_id .'" >' . $song->track->track_name . ' | ' . $song->track->artist_name . '</input><br />';
  }
  return $checkboxes;
}


?>