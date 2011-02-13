<html>
<head>
<title>
  Valentun.es | Passionate hackers
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/polling.js"></script>
<script src="js/processing.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
</html>
<body>
<?php 
include_once 'connectors/RemoteLogic.php';
// just keep it 
$_SESSION['valentunes']['POST'] = $_POST;

// send info to backend
$remote = new RemoteLogic();
$ticket = $remote->create($_POST['name'], $_POST['interests'], $_POST['description']);
$_SESSION['ticket']; // store session


print '<script type="text/javascript">var job_id = ' . $ticket . '</script>';
?>


<div id="header">
  <img src="" alt="logo" />
  <p>Create a personalized valentunes gift for your beloved...</p>
</div>


<div id="content">
 <img src="imgs/alove.gif" />
</div>

</body>
</html>