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
  
  <form method="POST" action="list_filter.php">
    
    
    <div>Recipients name: </div><input type="text" name="name"/>
    <div>Interests: </div><textarea name="interests" rows="5" cols="50"></textarea>    
    <div>Describe your partner in delicate terms:</div><textarea name="description" rows="5" cols="50"></textarea>
    <div>To which phone number to send the personalized gift: </div><input type="tel" name="tel" value=""/>
    </br>
    <input type="submit" name="op" value="submit" />
  </form>

</div>

<div id="footer">

</div>

</body>

