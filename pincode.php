<html>
    <body>
        <form action = "" method = "GET">
            <input type = "number" name = "key">
            <button> verify</button>
        </form>
    </body>
</html>
<?php

 $verify = $_GET;
 
 $key = $verify['key'];

 if($key == "123")
 {
    header('Location: insertform.php');
  
 }else{
    header('Loaction: pincode.php');
 }

?>