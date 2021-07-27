<!-- Snack 2
1 Passare come parametri GET name, mail e age
2 Verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
3 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php

    $name = $_GET['name'];

    $mail = $_GET['mail'];
    
    $age = (int)$_GET['age'];

    var_dump($name);
    var_dump($mail);
    var_dump($age);

    $verificationName = false;
    $verificationMail = false;
    $verificationAge = false;

    if(strlen($name) > 3){
        $verificationName = true;
    };

    if(strpos($mail, '@')){
        $verificationMail = true;
    };

    if(is_int($age)){
        $verificationAge = true;
    };

    var_dump($verificationName);
    var_dump($verificationMail);
    var_dump($verificationAge);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>

</p>
    
</body>
</html>