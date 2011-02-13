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

<div id="header">
  <img src="" alt="logo" />
  <p>Create a personalized valentunes gift for your beloved...</p>
</div>


<div id="content">
  <h1>Valentunes</h1>
  <form method="POST" action="process_request.php">    
    <div>Recipients name: </div><input type="text" name="name"/>
    <div>Interests: </div><textarea name="interests" rows="5" cols="50"></textarea>    
    <div>Describe your partner in delicate terms:</div><textarea name="description" rows="5" cols="50"></textarea>
    <div>To which phone number to send the personalized gift: </div><input type="tel" name="recipient_phone" value=""/>
    <div>Enter a personalized note:</div><textarea name="note" rows="5" cols="50"></textarea>
    <div>Your name: </div><input type="text" name="sender_name"/>
    <div>Your Phone: </div><input type="tel" name="sender_phone" value=""/>
    </br>
    <input type="submit" name="op" value="submit" />
  </form>
</div>

<div id="footer">

</div>

</body>

