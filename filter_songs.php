<html>
<head>
<title>
  Valentun.es | Passionate hackers
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
</html>
<body>
<?php 
include_once 'processing.php';
?>
<div id="header">
  <img src="" alt="logo" />
  <p>Create a personalized valentunes gift for your beloved...</p>
</div>


<div id="content">
  <form id="song-filter" method="post" action="process_songs.php">
<?php
 $songs = valentunes_musixmatch_songs($_POST['name'], $_POST['description']);
 print valentunes_create_song_list_checkboxes($songs);
?>
  <input type="submit" name="op" value="submit" />
 </form>
</div>

<div id="footer">

</div>

</body>
</html>