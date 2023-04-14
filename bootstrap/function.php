<?php 

echo "<meta charset=\"utf-8\">";

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $name = htmlspecialchars($name);

    $message = trim($_POST['message']);
    $message = htmlspecialchars($message); 
    
    $email = trim($_POST['email']);
    $email = htmlspecialchars($email);

}

if (empty($name)) {
    $errors[] = 'Вы не указали имя';
    if (empty($message)){
        $errors[] = 'Вы не указали сообщение';
    }
}
else if (empty($message)){
    $errors[] = 'Вы не указали сообщение';
}

if (empty($errors)){
    echo "Привет, $name";
    echo "<br>";
    if (empty($email)){
    }
    else{
        echo "Ваш email $email";
        echo "<br>";
    }
    echo "Ваше сообщение $message на рассмотрении";
}
else {
    foreach ($errors as $error){
        echo $error;
        echo "<br>";
    }
}
?>
