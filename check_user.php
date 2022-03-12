<?php

define('SITE_NAME','murad hassan');


echo '
<!DOCTYPE html>
<html>
<head>
      <title>'.SITE_NAME.'</title>
</head>
<body>
     
<form action="" method="get">
<select name="cars[]" id="cars" multiple>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
 <input type="submit" value="send"><br>
</form>
</body>
</html>
';
if($_REQUEST)
{
      foreach($_REQUEST["cars"] as $key=> $car)
     {    
        echo "$car <br>";
     }  
    }
    

