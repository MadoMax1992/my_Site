<?php

mail(
    "max13041@yahoo.de",
    "{$_POST['subject']}",
    "Email: {$_POST['email']}, 

    Name: {$_POST['name']},
    
    Message: {$_POST['message']}"
);
header("Location: index.php?contacted=1");
?>