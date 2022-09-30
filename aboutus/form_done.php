<link rel="stylesheet" href="style.css">
<?php

function function_alert($message) {

    echo "<script>alert('$message');</script>";
}
  
function_alert ("Antwoord verzonden!");

 
?>
<button style="color:white" onclick="location.href='./formulier.php'">Terug</button>